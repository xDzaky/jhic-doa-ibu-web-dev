const fs = require('fs');
const path = require('path');

// Let's inspect the PNG chunks of rial_img_2.png
const buf = fs.readFileSync(path.join(__dirname, 'rial_img_2.png'));
console.log('PNG signature:', buf.slice(0, 8));
// IHDR is at byte 12
const width = buf.readUInt32BE(16);
const height = buf.readUInt32BE(20);
const bitDepth = buf.readUInt8(24);
const colorType = buf.readUInt8(25); // 6 is RGBA, 2 is RGB, 0 is grayscale, 4 is grayscale+alpha
console.log(`Dimensions: ${width}x${height}`);
console.log(`Bit depth: ${bitDepth}, Color type: ${colorType} (0=gray, 2=rgb, 3=palette, 4=gray+alpha, 6=rgba)`);
