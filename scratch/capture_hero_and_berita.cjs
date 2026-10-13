const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_hero_berita_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--disable-dev-shm-usage',
    '--remote-debugging-port=9250',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9250/json/version');
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

  const listRes = await fetch('http://127.0.0.1:9250/json/list');
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
  await sleep(2500);

  // Trigger animations & reveal items
  await send('Runtime.evaluate', {
    expression: `
      document.querySelectorAll('.reveal-item').forEach(el => {
        el.classList.add('is-revealed');
        el.style.opacity = '1';
        el.style.transform = 'none';
      });
      document.querySelectorAll('img[loading="lazy"]').forEach(img => {
        img.setAttribute('loading', 'eager');
      });
    `
  });
  await sleep(1000);

  // 1. Capture Hero Section (View 1 Screen Viewport)
  const heroShot = await send('Page.captureScreenshot', {
    format: 'png',
    clip: {
      x: 0,
      y: 0,
      width: 1440,
      height: 900,
      scale: 1
    }
  });
  fs.writeFileSync(path.join(__dirname, 'hero_sec_telkom.png'), Buffer.from(heroShot.data, 'base64'));
  console.log('Saved hero_sec_telkom.png (First screen 1440x900)');

  // Helper to get rect of element
  async function getRect(selector) {
    const res = await send('Runtime.evaluate', {
      expression: `
        (() => {
          const el = document.querySelector('${selector}');
          if (!el) return null;
          const rect = el.getBoundingClientRect();
          return {
            x: Math.round(rect.left),
            y: Math.round(rect.top + window.pageYOffset),
            width: Math.round(rect.width),
            height: Math.round(rect.height)
          };
        })()
      `,
      returnByValue: true
    });
    return res && res.result ? res.result.value : (res ? res.value : null);
  }

  // Get layout metrics to allow capturing beyond viewport
  const metrics = await send('Page.getLayoutMetrics');
  const fullHeight = Math.ceil(metrics.contentSize.height);

  await send('Emulation.setDeviceMetricsOverride', {
    width: 1440,
    height: fullHeight,
    deviceScaleFactor: 1,
    mobile: false
  });
  await sleep(1000);

  // 2. Capture Berita Section
  const beritaRect = await getRect('.section-berita-telkom');
  console.log('Berita Rect:', beritaRect);
  if (beritaRect) {
    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: {
        x: 0,
        y: Math.max(0, beritaRect.y - 10),
        width: 1440,
        height: beritaRect.height + 20,
        scale: 1
      },
      captureBeyondViewport: true
    });
    fs.writeFileSync(path.join(__dirname, 'berita_sec_telkom.png'), Buffer.from(shot.data, 'base64'));
    console.log('Saved berita_sec_telkom.png');
  }

  ws.close();
  chrome.kill();
  console.log('Done!');
}

run().catch(console.error);
