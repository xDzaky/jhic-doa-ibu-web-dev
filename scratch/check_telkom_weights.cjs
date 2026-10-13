async function run() {
  const res = await fetch('https://smktelkom-sda.sch.id');
  const html = await res.text();
  const allJs = [...html.matchAll(/(?:src|href)="([^"]+\.js)"/g)].map(m => m[1]);
  for (const jsUrl of allJs) {
    const full = new URL(jsUrl, 'https://smktelkom-sda.sch.id').href;
    const jsRes = await fetch(full);
    const jsText = await jsRes.text();
    let pos = 0;
    while ((pos = jsText.indexOf('SMK Telkom Sidoarjo', pos)) !== -1) {
      console.log('Match in', jsUrl, 'at pos', pos);
      console.log(jsText.substring(Math.max(0, pos - 150), Math.min(jsText.length, pos + 250)));
      pos += 25;
    }
  }
}

run();
