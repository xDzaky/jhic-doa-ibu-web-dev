const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_test_mega_profile');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9264',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9264/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  const listRes = await fetch('http://127.0.0.1:9264/json/list');
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

  await send('Page.navigate', { url: 'http://127.0.0.1:8000' });
  await sleep(1500);

  // Open the "Tentang Sekolah" mega menu
  const evalRes = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const dropdown = document.querySelector('.nav-dropdown.has-mega-menu');
        dropdown.classList.add('is-open');
        const container = dropdown.querySelector('.mega-menu-container');
        const left = dropdown.querySelector('.mega-pane-left');
        const right = dropdown.querySelector('.mega-pane-right');
        const leftRect = left ? left.getBoundingClientRect() : null;
        const rightRect = right ? right.getBoundingClientRect() : null;
        const containerRect = container ? container.getBoundingClientRect() : null;
        const cols = dropdown.querySelector('.mega-links-columns');
        const colsRect = cols ? cols.getBoundingClientRect() : null;
        
        return {
          containerRect,
          leftRect,
          rightRect,
          colsRect,
          containerDisplay: window.getComputedStyle(container).display,
          leftDisplay: window.getComputedStyle(left).display,
          rightDisplay: window.getComputedStyle(right).display,
          rightPosition: window.getComputedStyle(right).position,
          leftPosition: window.getComputedStyle(left).position
        };
      })()
    `,
    returnByValue: true
  });

  console.log('Layout info:', evalRes.result.value);

  // Take screenshot
  const shot = await send('Page.captureScreenshot', {
    format: 'png',
    clip: {
      x: 100,
      y: 0,
      width: 1240,
      height: 600,
      scale: 1
    }
  });

  fs.writeFileSync(path.join(__dirname, 'test_mega_shot.png'), Buffer.from(shot.data, 'base64'));
  console.log('Saved screenshot to test_mega_shot.png');

  ws.close();
  chrome.kill();
}

run().catch(console.error);
