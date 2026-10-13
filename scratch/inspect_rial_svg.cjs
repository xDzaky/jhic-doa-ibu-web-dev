const fs = require('fs');
const path = require('path');

const svgPath = path.join(__dirname, '../public/images/rial.svg');
const svg = fs.readFileSync(svgPath, 'utf8');

const cleanSvg = svg.replace(/xlink:href="data:[^"]+"/gi, 'xlink:href="data:..."');
console.log(cleanSvg);
