const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_zindex');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9266',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9266/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  const listRes = await fetch('http://127.0.0.1:9266/json/list');
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

  const zindex = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const nav = document.querySelector('.navbar');
        const hero = document.querySelector('.telkom-hero-section');
        const heroTitle = document.querySelector('.hero-main-title');
        const mega = document.querySelector('.mega-menu-container');
        
        return {
          navZ: window.getComputedStyle(nav).zIndex,
          heroZ: window.getComputedStyle(hero).zIndex,
          heroTitleZ: window.getComputedStyle(heroTitle).zIndex,
          megaZ: window.getComputedStyle(mega).zIndex,
          navPosition: window.getComputedStyle(nav).position,
          heroPosition: window.getComputedStyle(hero).position
        };
      })()
    `,
    returnByValue: true
  });

  console.log('Z-Index Info:', zindex.result.value);

  ws.close();
  chrome.kill();
}

run().catch(console.error);
