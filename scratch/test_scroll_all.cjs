const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_test_scroll_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--disable-dev-shm-usage',
    '--remote-debugging-port=9246',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9246/json/version');
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

  const listRes = await fetch('http://127.0.0.1:9246/json/list');
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

  // Force all reveal items
  await send('Runtime.evaluate', {
    expression: `
      document.querySelectorAll('.reveal-item').forEach(el => {
        el.classList.add('is-revealed');
        el.style.opacity = '1';
        el.style.transform = 'none';
      });
    `
  });

  // 1. Capture Sambutan Kepala Sekolah
  await send('Runtime.evaluate', {
    expression: `
      const el = document.getElementById('sambutan');
      if (el) {
        const rect = el.getBoundingClientRect();
        const curScroll = document.documentElement.scrollTop || document.body.scrollTop;
        window.scrollTo(0, curScroll + rect.top - 70);
      }
    `
  });
  await sleep(1000);
  const shot1 = await send('Page.captureScreenshot', { format: 'png' });
  fs.writeFileSync(path.join(__dirname, 'shot_sambutan_exact.png'), Buffer.from(shot1.data, 'base64'));
  console.log('Saved shot_sambutan_exact.png');

  // 2. Capture Mengapa Memilih & Mitra Marquee
  await send('Runtime.evaluate', {
    expression: `
      const el = document.getElementById('keunggulan');
      if (el) {
        const rect = el.getBoundingClientRect();
        const curScroll = document.documentElement.scrollTop || document.body.scrollTop;
        window.scrollTo(0, curScroll + rect.top + 280);
      }
    `
  });
  await sleep(1000);
  const shot2 = await send('Page.captureScreenshot', { format: 'png' });
  fs.writeFileSync(path.join(__dirname, 'shot_mitra_marquee_exact.png'), Buffer.from(shot2.data, 'base64'));
  console.log('Saved shot_mitra_marquee_exact.png');

  // 3. Capture Program Keahlian
  await send('Runtime.evaluate', {
    expression: `
      const el = document.getElementById('jurusan');
      if (el) {
        const rect = el.getBoundingClientRect();
        const curScroll = document.documentElement.scrollTop || document.body.scrollTop;
        window.scrollTo(0, curScroll + rect.top - 50);
      }
    `
  });
  await sleep(1000);
  const shot3 = await send('Page.captureScreenshot', { format: 'png' });
  fs.writeFileSync(path.join(__dirname, 'shot_jurusan_exact.png'), Buffer.from(shot3.data, 'base64'));
  console.log('Saved shot_jurusan_exact.png');

  ws.close();
  chrome.kill();
  console.log('Done capturing all screenshots!');
}

run().catch(err => {
  console.error(err);
  process.exit(1);
});
