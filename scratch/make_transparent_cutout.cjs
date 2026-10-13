const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_transparent_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9252',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9252/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  if (!wsUrl) {
    console.error('Cannot connect to Chrome');
    chrome.kill();
    return;
  }

  const listRes = await fetch('http://127.0.0.1:9252/json/list');
  const targets = await listRes.json();
  const pageTarget = targets.find(t => t.type === 'page');

  const ws = new WebSocket(pageTarget.webSocketDebuggerUrl);
  let msgId = 1;
  const pending = new Map();

  ws.onmessage = (event) => {
    const data = JSON.parse(event.data);
    if (data.id && pending.has(data.id)) {
      const { resolve, reject } = pending.get(data.id);
      pending.delete(data.id);
      if (data.error) reject(data.error);
      else resolve(data.result);
    }
  };

  function send(method, params = {}) {
    return new Promise((resolve, reject) => {
      const id = msgId++;
      pending.set(id, { resolve, reject });
      ws.send(JSON.stringify({ id, method, params }));
    });
  }

  await new Promise(resolve => { ws.onopen = resolve; });

  await send('Page.enable');
  await send('Runtime.enable');

  // Navigate to server so asset loading is same-origin
  await send('Page.navigate', { url: 'http://127.0.0.1:8000' });
  await sleep(1500);

  // Run image processing via Canvas
  const result = await send('Runtime.evaluate', {
    expression: `
      new Promise((resolve, reject) => {
        const img = new Image();
        img.crossOrigin = 'anonymous';
        img.onload = () => {
          const w = img.naturalWidth;
          const h = img.naturalHeight;

          // 1. Draw to offscreen canvas
          const c1 = document.createElement('canvas');
          c1.width = w;
          c1.height = h;
          const ctx1 = c1.getContext('2d');
          ctx1.drawImage(img, 0, 0);

          const imgData = ctx1.getImageData(0, 0, w, h);
          const data = imgData.data;

          // Find bounding box where pixels are NOT white (e.g. brightness < 248)
          let minY = h, maxY = 0, minX = w, maxX = 0;
          for (let y = 0; y < h; y++) {
            for (let x = 0; x < w; x++) {
              const idx = (y * w + x) * 4;
              const r = data[idx];
              const g = data[idx + 1];
              const b = data[idx + 2];
              // If not near pure white
              if (r < 248 || g < 248 || b < 248) {
                if (y < minY) minY = y;
                if (y > maxY) maxY = y;
                if (x < minX) minX = x;
                if (x > maxX) maxX = x;
              }
            }
          }

          // Flood fill or key white pixels connected to outside edges to transparent
          // Let's do a BFS flood fill from (0,0) and border pixels
          const visited = new Uint8Array(w * h);
          const queue = [];

          function isNearWhite(idx) {
            const r = data[idx];
            const g = data[idx + 1];
            const b = data[idx + 2];
            return r >= 240 && g >= 240 && b >= 240;
          }

          // Enqueue all top/left/right border pixels that are near white
          for (let x = 0; x < w; x++) {
            const topIdx = (0 * w + x) * 4;
            if (isNearWhite(topIdx)) {
              queue.push(x, 0);
              visited[0 * w + x] = 1;
            }
          }
          for (let y = 0; y < h; y++) {
            const leftIdx = (y * w + 0) * 4;
            if (isNearWhite(leftIdx) && !visited[y * w + 0]) {
              queue.push(0, y);
              visited[y * w + 0] = 1;
            }
            const rightIdx = (y * w + (w - 1)) * 4;
            if (isNearWhite(rightIdx) && !visited[y * w + (w - 1)]) {
              queue.push(w - 1, y);
              visited[y * w + (w - 1)] = 1;
            }
          }

          let head = 0;
          while (head < queue.length) {
            const cx = queue[head++];
            const cy = queue[head++];

            const pIdx = (cy * w + cx) * 4;
            // Make transparent
            data[pIdx + 3] = 0;

            // Check 4 neighbors
            const neighbors = [
              [cx + 1, cy],
              [cx - 1, cy],
              [cx, cy + 1],
              [cx, cy - 1]
            ];

            for (const [nx, ny] of neighbors) {
              if (nx >= 0 && nx < w && ny >= 0 && ny < h) {
                const nPos = ny * w + nx;
                if (!visited[nPos]) {
                  const nIdx = nPos * 4;
                  if (isNearWhite(nIdx)) {
                    visited[nPos] = 1;
                    queue.push(nx, ny);
                  }
                }
              }
            }
          }

          ctx1.putImageData(imgData, 0, 0);

          // Now crop tightly to the subject (from minY to maxY with small margin)
          const cropTop = Math.max(0, minY - 10);
          const cropHeight = Math.min(h - cropTop, (maxY - cropTop) + 10);
          const cropLeft = Math.max(0, minX - 10);
          const cropWidth = Math.min(w - cropLeft, (maxX - cropLeft) + 20);

          const c2 = document.createElement('canvas');
          c2.width = cropWidth;
          c2.height = cropHeight;
          const ctx2 = c2.getContext('2d');
          ctx2.drawImage(c1, cropLeft, cropTop, cropWidth, cropHeight, 0, 0, cropWidth, cropHeight);

          resolve({
            dataUrl: c2.toDataURL('image/png'),
            minY, maxY, minX, maxX, cropWidth, cropHeight
          });
        };
        img.onerror = reject;
        img.src = '/images/hero sec.webp';
      });
    `,
    awaitPromise: true,
    returnByValue: true
  });

  if (result && result.result && result.result.value) {
    const val = result.result.value;
    console.log('Processed bounding box:', val);
    const base64Data = val.dataUrl.replace(/^data:image\/png;base64,/, '');
    const outPath = path.join(__dirname, '../public/images/hero_sec_cutout.png');
    fs.writeFileSync(outPath, Buffer.from(base64Data, 'base64'));
    console.log('Saved transparent cutout to public/images/hero_sec_cutout.png!');
  } else {
    console.error('Failed to process image:', result);
  }

  ws.close();
  chrome.kill();
}

run().catch(console.error);
