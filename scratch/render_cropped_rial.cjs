const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_render_crop_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9260',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9260/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  const listRes = await fetch('http://127.0.0.1:9260/json/list');
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
  await send('Emulation.setDefaultBackgroundColorOverride', {
    color: { r: 0, g: 0, b: 0, a: 0 } // Full transparency
  });

  const pagePath = path.join(__dirname, 'render_rial_page.html');

  await send('Emulation.setDeviceMetricsOverride', {
    width: 1200,
    height: 1200,
    deviceScaleFactor: 1,
    mobile: false
  });

  await send('Page.navigate', { url: 'file:///' + pagePath.replace(/\\/g, '/') });
  await sleep(1500);

  // In render_rial_page.html, width=1200, height=1200.
  // The building starts at (122.3 / 300) * 1200 = 489.2px.
  // Let's give 10px breathing room at top: Y = 475px.
  // Height down to 1200: 1200 - 475 = 725px.
  // Bounding clip: x: 0, y: 475, width: 1200, height: 725.
  const croppedShot = await send('Page.captureScreenshot', {
    format: 'webp',
    quality: 95,
    fromSurface: true,
    clip: {
      x: 0,
      y: 475,
      width: 1200,
      height: 725,
      scale: 1
    }
  });

  const outWebp = path.join(__dirname, '../public/images/rial.webp');
  fs.writeFileSync(outWebp, Buffer.from(croppedShot.data, 'base64'));
  console.log('Saved tightly-cropped rial.webp! File size:', fs.statSync(outWebp).size);

  ws.close();
  chrome.kill();
}

run().catch(console.error);
