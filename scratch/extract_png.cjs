const fs = require('fs');
const path = require('path');

const svgPath = path.join(__dirname, '../public/images/rial.svg');
const svg = fs.readFileSync(svgPath, 'utf8');

const m = svg.match(/xlink:href="data:image\/png;base64,([^"]+)"/);
if (m) {
  const buf = Buffer.from(m[1], 'base64');
  const outPng = path.join(__dirname, 'rial_extracted.png');
  fs.writeFileSync(outPng, buf);
  console.log('Saved extracted png, size:', buf.length, 'bytes');
} else {
  console.log('No base64 png matched!');
}
