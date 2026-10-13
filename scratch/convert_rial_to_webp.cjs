const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_rial_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9255',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9255/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  if (!wsUrl) {
    chrome.kill();
    return;
  }

  const listRes = await fetch('http://127.0.0.1:9255/json/list');
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

  // Let's create a test HTML file to load rial.svg with a transparent background & dark background to inspect
  const testHtml = `
  <!DOCTYPE html>
  <html>
  <head>
    <style>
      body { margin: 0; background: #222; display: flex; align-items: center; justify-content: center; height: 100vh; }
      .box { background: rgba(255,255,255,0.1); border: 2px dashed #ff0055; }
      img { display: block; width: 600px; height: auto; }
    </style>
  </head>
  <body>
    <div class="box">
      <img id="rial" src="http://127.0.0.1:8000/images/rial.svg" />
    </div>
  </body>
  </html>
  `;
  fs.writeFileSync(path.join(__dirname, 'test_rial.html'), testHtml);

  await send('Page.navigate', { url: 'file:///' + path.join(__dirname, 'test_rial.html').replace(/\\/g, '/') });
  await sleep(2000);

  // Take screenshot
  const shot = await send('Page.captureScreenshot', { format: 'png' });
  fs.writeFileSync(path.join(__dirname, 'inspect_rial_shot.png'), Buffer.from(shot.data, 'base64'));
  console.log('Saved screenshot of rial.svg to inspect_rial_shot.png');

  // Also let's inspect the natural dimensions of the image inside SVG
  const info = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const img = document.getElementById('rial');
        return {
          naturalWidth: img.naturalWidth,
          naturalHeight: img.naturalHeight,
          clientWidth: img.clientWidth,
          clientHeight: img.clientHeight
        };
      })()
    `,
    returnByValue: true
  });
  console.log('Image info:', info.result.value);

  // Now let's render rial.svg to high-res canvas (e.g. 1200x1200 or its viewBox 300x300 * 4 = 1200x1200) and export as webp!
  const webpData = await send('Runtime.evaluate', {
    expression: `
      new Promise((resolve, reject) => {
        const img = new Image();
        img.crossOrigin = 'anonymous';
        img.onload = () => {
          // Render at high resolution 1200x1200 (viewBox is 300x300)
          const c = document.createElement('canvas');
          c.width = 1200;
          c.height = 1200;
          const ctx = c.getContext('2d');
          ctx.drawImage(img, 0, 0, 1200, 1200);
          resolve(c.toDataURL('image/webp', 0.95));
        };
        img.onerror = (e) => reject('Load error: ' + e);
        img.src = 'http://127.0.0.1:8000/images/rial.svg';
      })
    `,
    awaitPromise: true,
    returnByValue: true
  });

  if (webpData && webpData.result && webpData.result.value) {
    const base64Data = webpData.result.value.replace(/^data:image\/webp;base64,/, '');
    const outPath = path.join(__dirname, '../public/images/rial.webp');
    fs.writeFileSync(outPath, Buffer.from(base64Data, 'base64'));
    console.log('Successfully generated public/images/rial.webp! Size:', fs.statSync(outPath).size);
  } else {
    console.log('Failed to generate webp:', webpData);
  }

  ws.close();
  chrome.kill();
}

run().catch(console.error);
