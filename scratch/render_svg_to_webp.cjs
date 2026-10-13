const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_render_svg_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9257',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9257/json/version');
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

  const listRes = await fetch('http://127.0.0.1:9257/json/list');
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
    color: { r: 0, g: 0, b: 0, a: 0 } // Full transparency!
  });

  // Read the raw SVG
  const svgContent = fs.readFileSync(path.join(__dirname, '../public/images/rial.svg'), 'utf8');

  // Create an HTML page with transparent background and high-resolution SVG
  // viewBox of rial.svg is 0 0 300 300 (or 299.999988).
  // Let's render it at 1200x1200 for crystal-clear high DPI quality!
  const html = `
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      html, body {
        width: 1200px;
        height: 1200px;
        background: transparent !important;
        overflow: hidden;
      }
      svg {
        width: 1200px;
        height: 1200px;
        display: block;
      }
    </style>
  </head>
  <body>
    ${svgContent}
  </body>
  </html>
  `;

  const pagePath = path.join(__dirname, 'render_rial_page.html');
  fs.writeFileSync(pagePath, html);

  await send('Emulation.setDeviceMetricsOverride', {
    width: 1200,
    height: 1200,
    deviceScaleFactor: 1,
    mobile: false
  });

  await send('Page.navigate', { url: 'file:///' + pagePath.replace(/\\/g, '/') });
  await sleep(1500);

  // Capture screenshot directly as WebP with transparency
  const shot = await send('Page.captureScreenshot', {
    format: 'webp',
    quality: 95,
    fromSurface: true,
    clip: {
      x: 0,
      y: 0,
      width: 1200,
      height: 1200,
      scale: 1
    }
  });

  const outWebp = path.join(__dirname, '../public/images/rial.webp');
  const buffer = Buffer.from(shot.data, 'base64');
  fs.writeFileSync(outWebp, buffer);
  console.log('Saved high-res transparent rial.webp! File size:', buffer.length, 'bytes');

  // Also save a PNG copy in scratch for inspection
  const outPng = path.join(__dirname, 'rial_preview.png');
  const shotPng = await send('Page.captureScreenshot', {
    format: 'png',
    fromSurface: true,
    clip: {
      x: 0,
      y: 0,
      width: 1200,
      height: 1200,
      scale: 1
    }
  });
  fs.writeFileSync(outPng, Buffer.from(shotPng.data, 'base64'));
  console.log('Saved preview to scratch/rial_preview.png');

  ws.close();
  chrome.kill();
}

run().catch(console.error);
