const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const userDataDir = path.join(__dirname, 'chrome_test_canvas');

  const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    '--no-sandbox',
    '--remote-debugging-port=9256',
    `--user-data-dir=${userDataDir}`,
    'about:blank'
  ]);

  let wsUrl = null;
  for (let i = 0; i < 20; i++) {
    await sleep(500);
    try {
      const res = await fetch('http://127.0.0.1:9256/json/version');
      if (res.ok) {
        const json = await res.json();
        wsUrl = json.webSocketDebuggerUrl;
        break;
      }
    } catch (e) {}
  }

  const listRes = await fetch('http://127.0.0.1:9256/json/list');
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

  // Load the test_rial.html
  await send('Page.navigate', { url: 'file:///' + path.join(__dirname, 'test_rial.html').replace(/\\/g, '/') });
  await sleep(1500);

  const res = await send('Runtime.evaluate', {
    expression: `
      (() => {
        const img = document.getElementById('rial');
        const c = document.createElement('canvas');
        c.width = 600;
        c.height = 600;
        const ctx = c.getContext('2d');
        ctx.drawImage(img, 0, 0, 600, 600);
        try {
          const pngUrl = c.toDataURL('image/png');
          const webpUrl = c.toDataURL('image/webp', 0.95);
          return {
            pngLength: pngUrl.length,
            webpLength: webpUrl.length,
            pngPrefix: pngUrl.slice(0, 30),
            webpPrefix: webpUrl.slice(0, 30)
          };
        } catch (err) {
          return { error: err.toString() };
        }
      })()
    `,
    returnByValue: true
  });

  console.log('Canvas export test:', res.result.value);

  ws.close();
  chrome.kill();
}

run().catch(console.error);
