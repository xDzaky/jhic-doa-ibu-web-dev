const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_navbar_all_profile');

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

  if (!wsUrl) {
    chrome.kill();
    return;
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
  await send('DOM.enable');
  await send('Runtime.enable');

  await send('Emulation.setDeviceMetricsOverride', {
    width: 1440,
    height: 900,
    deviceScaleFactor: 1,
    mobile: false
  });

  await send('Page.navigate', { url: 'http://127.0.0.1:8000' });
  await sleep(2500);

  // 1. Capture Floating Pill Navbar (Top 180px)
  const navShot = await send('Page.captureScreenshot', {
    format: 'png',
    clip: {
      x: 0,
      y: 0,
      width: 1440,
      height: 180,
      scale: 1
    }
  });
  fs.writeFileSync(path.join(__dirname, 'navbar_telkom.png'), Buffer.from(navShot.data, 'base64'));
  console.log('Saved navbar_telkom.png');

  // 2. Capture Mega Menu: PPDB 2026 (index 2)
  await send('Runtime.evaluate', {
    expression: `
      (() => {
        const items = document.querySelectorAll('.nav-dropdown.has-mega-menu');
        items.forEach(i => i.classList.remove('is-open'));
        if (items[2]) items[2].classList.add('is-open');
      })()
    `
  });
  await sleep(500);

  const megaShotPPDB = await send('Page.captureScreenshot', {
    format: 'png',
    clip: {
      x: 0,
      y: 0,
      width: 1440,
      height: 520,
      scale: 1
    }
  });
  fs.writeFileSync(path.join(__dirname, 'navbar_mega_ppdb.png'), Buffer.from(megaShotPPDB.data, 'base64'));
  console.log('Saved navbar_mega_ppdb.png');

  // 3. Capture Mega Menu: SMEXAMALL (index 3)
  await send('Runtime.evaluate', {
    expression: `
      (() => {
        const items = document.querySelectorAll('.nav-dropdown.has-mega-menu');
        items.forEach(i => i.classList.remove('is-open'));
        if (items[3]) items[3].classList.add('is-open');
      })()
    `
  });
  await sleep(500);

  const megaShotSMEXA = await send('Page.captureScreenshot', {
    format: 'png',
    clip: {
      x: 0,
      y: 0,
      width: 1440,
      height: 520,
      scale: 1
    }
  });
  fs.writeFileSync(path.join(__dirname, 'navbar_mega_smexamall.png'), Buffer.from(megaShotSMEXA.data, 'base64'));
  console.log('Saved navbar_mega_smexamall.png');

  ws.close();
  chrome.kill();
  console.log('Done capturing all mega menus!');
}

run().catch(console.error);
