const fs = require('fs');
const path = require('path');

const svgPath = path.join(__dirname, '../public/images/rial.svg');
const svg = fs.readFileSync(svgPath, 'utf8');

const regex = /xlink:href="data:image\/png;base64,([^"]+)"/g;
let match;
let count = 0;
while ((match = regex.exec(svg)) !== null) {
  count++;
  const buf = Buffer.from(match[1], 'base64');
  const outPng = path.join(__dirname, `rial_img_${count}.png`);
  fs.writeFileSync(outPng, buf);
  console.log(`Image ${count}: length = ${buf.length} bytes`);
}
