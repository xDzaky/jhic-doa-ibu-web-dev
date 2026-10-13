const fs = require('fs');
const path = require('path');

// We have rial_preview.png (1200x1200). Let's inspect with Chrome or canvas what the bounding box of non-transparent pixels is!
const { spawn } = require('child_process');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_crop_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9258',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9258/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  const listRes = await fetch('http://127.0.0.1:9258/json/list');
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

  const html = `
  <!DOCTYPE html>
  <html>
  <body>
    <img id="img" src="http://127.0.0.1:8000/images/rial.webp">
  </body>
  </html>
  `;
  const p = path.join(__dirname, 'test_crop.html');
  fs.writeFileSync(p, html);

  await send('Page.navigate', { url: 'file:///' + p.replace(/\\/g, '/') });
  await sleep(1500);

  const bbox = await send('Runtime.evaluate', {
    expression: `
      new Promise((resolve) => {
        const img = document.getElementById('img');
        const c = document.createElement('canvas');
        c.width = img.naturalWidth;
        c.height = img.naturalHeight;
        const ctx = c.getContext('2d');
        ctx.drawImage(img, 0, 0);
        const data = ctx.getImageData(0, 0, c.width, c.height).data;
        let minX = c.width, minY = c.height, maxX = 0, maxY = 0;
        for (let y = 0; y < c.height; y++) {
          for (let x = 0; x < c.width; x++) {
            const alpha = data[(y * c.width + x) * 4 + 3];
            if (alpha > 10) {
              if (x < minX) minX = x;
              if (x > maxX) maxX = x;
              if (y < minY) minY = y;
              if (y > maxY) maxY = y;
            }
          }
        }
        resolve({ minX, minY, maxX, maxY, width: c.width, height: c.height, contentWidth: maxX - minX, contentHeight: maxY - minY });
      })
    `,
    awaitPromise: true,
    returnByValue: true
  });

  console.log('Bounding box of content in rial.webp:', bbox.result.value);

  ws.close();
  chrome.kill();
}

run().catch(console.error);
