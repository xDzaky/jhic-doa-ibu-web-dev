const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_mega_all_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9267',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9267/json/version');
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

  const listRes = await fetch('http://127.0.0.1:9267/json/list');
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

  await send('Emulation.setDeviceMetricsOverride', {
    width: 1440,
    height: 900,
    deviceScaleFactor: 1,
    mobile: false
  });

  await send('Page.navigate', { url: 'http://127.0.0.1:8000?v=' + Date.now() });
  await sleep(1500);

  const menus = ['tentang', 'program', 'ppdb', 'smexamall'];

  for (let idx = 0; idx < menus.length; idx++) {
    const name = menus[idx];
    
    // Open this specific dropdown
    await send('Runtime.evaluate', {
      expression: `
        (() => {
          const dropdowns = document.querySelectorAll('.nav-dropdown');
          dropdowns.forEach((d, i) => {
            if (i === ${idx}) {
              d.classList.add('is-open');
            } else {
              d.classList.remove('is-open');
            }
          });
        })()
      `
    });
    await sleep(300);

    const shot = await send('Page.captureScreenshot', {
      format: 'png',
      clip: {
        x: 120,
        y: 0,
        width: 1200,
        height: 600,
        scale: 1
      }
    });

    const outPath = path.join(__dirname, `mega_shot_${name}.png`);
    fs.writeFileSync(outPath, Buffer.from(shot.data, 'base64'));
    console.log(`Saved screenshot for ${name} to scratch/mega_shot_${name}.png`);
  }

  ws.close();
  chrome.kill();
}

run().catch(console.error);
