const fs = require('fs');
const content = fs.readFileSync('public/css/wireframe.css', 'utf8');

const regex = /@media[^{]+\{[\s\S]*?(?=\n@media|\n\/\*|$)/g;
let m;
while ((m = regex.exec(content)) !== null) {
  if (m[0].includes('hero') || m[0].includes('telkom-hero')) {
    console.log('--- FOUND MEDIA BLOCK ---');
    console.log(m[0].slice(0, 400));
  }
}
