const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_test_mega_profile2');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9265',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9265/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  const listRes = await fetch('http://127.0.0.1:9265/json/list');
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

  await send('Page.navigate', { url: 'http://127.0.0.1:8000' });
  await sleep(1500);

  const evalRes = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const dropdown = document.querySelector('.nav-dropdown.has-mega-menu');
        dropdown.classList.add('is-open');
        const container = dropdown.querySelector('.mega-menu-container');
        const left = dropdown.querySelector('.mega-pane-left');
        const right = dropdown.querySelector('.mega-pane-right');
        const promo = dropdown.querySelector('.mega-promo-card');
        const cols = dropdown.querySelector('.mega-links-columns');
        
        function getBox(el) {
          if (!el) return null;
          const r = el.getBoundingClientRect();
          const s = window.getComputedStyle(el);
          return {
            x: r.x, y: r.y, width: r.width, height: r.height,
            display: s.display,
            flex: s.flex,
            widthCss: s.width,
            maxWidth: s.maxWidth,
            minWidth: s.minWidth,
            overflow: s.overflow,
            background: s.backgroundColor,
            position: s.position
          };
        }
        
        return {
          container: getBox(container),
          left: getBox(left),
          right: getBox(right),
          cols: getBox(cols),
          promo: getBox(promo)
        };
      })()
    `,
    returnByValue: true
  });

  console.log('Detailed Layout:', JSON.stringify(evalRes.result.value, null, 2));

  ws.close();
  chrome.kill();
}

run().catch(console.error);
