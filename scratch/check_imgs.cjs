const fs = require('fs');
const content = fs.readFileSync('resources/views/index.blade.php', 'utf8');

const imgMatches = content.match(/<img[^>]+>/g);
if (imgMatches) {
  imgMatches.slice(0, 10).forEach((img, i) => {
    console.log(`IMG ${i}:`, img);
  });
}
