const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_clip_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--disable-dev-shm-usage',
    '--remote-debugging-port=9248',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9248/json/version');
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

  const listRes = await fetch('http://127.0.0.1:9248/json/list');
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

  // 1. Sambutan Kepala Sekolah
  const sambutanRect = await getRect('.section-sambutan');
  console.log('Sambutan Rect:', sambutanRect);
  if (sambutanRect) {
    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: {
        x: 0,
        y: Math.max(0, sambutanRect.y - 20),
        width: 1440,
        height: sambutanRect.height + 40,
        scale: 1
      },
      captureBeyondViewport: true
    });
    fs.writeFileSync(path.join(__dirname, 'clip_sambutan.png'), Buffer.from(shot.data, 'base64'));
    console.log('Saved clip_sambutan.png');
  }

  // 2. Mengapa Memilih + Mitra Marquee
  const whyRect = await getRect('.section-why-us');
  const dudiRect = await getRect('.section-mitra-marquee');
  console.log('Why Rect:', whyRect, 'DUDI Rect:', dudiRect);
  if (whyRect && dudiRect) {
    const startY = whyRect.y;
    const totalH = (dudiRect.y + dudiRect.height) - whyRect.y;
    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: {
        x: 0,
        y: startY,
        width: 1440,
        height: totalH,
        scale: 1
      },
      captureBeyondViewport: true
    });
    fs.writeFileSync(path.join(__dirname, 'clip_why_and_mitra.png'), Buffer.from(shot.data, 'base64'));
    console.log('Saved clip_why_and_mitra.png');
  }

  // 3. Program Keahlian
  const programRect = await getRect('.section-program-keahlian');
  console.log('Program Keahlian Rect:', programRect);
  if (programRect) {
    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: {
        x: 0,
        y: programRect.y,
        width: 1440,
        height: programRect.height,
        scale: 1
      },
      captureBeyondViewport: true
    });
    fs.writeFileSync(path.join(__dirname, 'clip_program_keahlian.png'), Buffer.from(shot.data, 'base64'));
    console.log('Saved clip_program_keahlian.png');
  }

  ws.close();
  chrome.kill();
  console.log('All clipped captures completed!');
}

run().catch(err => {
  console.error(err);
  process.exit(1);
});
