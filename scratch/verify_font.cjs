const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_font_verify_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--disable-dev-shm-usage',
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
    console.error('Cannot connect to Chrome');
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

  await new Promise(r => ws.onopen = r);
  await send('Page.enable');
  await send('DOM.enable');
  await send('Runtime.enable');

  await send('Emulation.setDeviceMetricsOverride', {
    width: 1440,
    height: 900,
    deviceScaleFactor: 1,
    mobile: false
  });

  console.log('Navigating to http://127.0.0.1:8000 ...');
  await send('Page.navigate', { url: 'http://127.0.0.1:8000' });
  await sleep(3000);

  // Evaluasi font yang sedang aktif pada elemen judul sambutan
  const fontEval = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const el = document.querySelector('.sambutan-title');
        const computed = window.getComputedStyle(el);
        return {
          fontFamily: computed.fontFamily,
          fontWeight: computed.fontWeight,
          fontSize: computed.fontSize
        };
      })()
    `,
    returnByValue: true
  });
  console.log('Computed Font on .sambutan-title:', fontEval.result ? fontEval.result.value : fontEval.value);

  // Ambil bounding rect dari .sambutan-title
  const rectRes = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const el = document.querySelector('.sambutan-title');
        if (!el) return null;
        const r = el.getBoundingClientRect();
        return {
          x: Math.round(r.left),
          y: Math.round(r.top + window.pageYOffset),
          width: Math.round(r.width),
          height: Math.round(r.height)
        };
      })()
    `,
    returnByValue: true
  });
  const rect = rectRes.result ? rectRes.result.value : rectRes.value;
  console.log('Title Rect:', rect);

  if (rect) {
    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: {
        x: Math.max(0, rect.x - 10),
        y: Math.max(0, rect.y - 10),
        width: rect.width + 30,
        height: rect.height + 20,
        scale: 1
      },
      captureBeyondViewport: true
    });
    fs.writeFileSync(path.join(__dirname, 'verify_plus_jakarta_sans.png'), Buffer.from(shot.data, 'base64'));
    console.log('Saved verify_plus_jakarta_sans.png');
  }

  // Also capture whole sambutan
  const sambutanRes = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const el = document.querySelector('.section-sambutan');
        if (!el) return null;
        const r = el.getBoundingClientRect();
        return {
          x: 0,
          y: Math.round(r.top + window.pageYOffset - 10),
          width: 1440,
          height: Math.round(r.height + 20)
        };
      })()
    `,
    returnByValue: true
  });
  const sambutanRect = sambutanRes.result ? sambutanRes.result.value : sambutanRes.value;
  if (sambutanRect) {
    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: sambutanRect,
      captureBeyondViewport: true
    });
    fs.writeFileSync(path.join(__dirname, 'verify_sambutan_font.png'), Buffer.from(shot.data, 'base64'));
    console.log('Saved verify_sambutan_font.png');
  }

  ws.close();
  chrome.kill();
}

run().catch(err => {
  console.error(err);
  process.exit(1);
});
