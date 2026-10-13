const fs = require('fs');
const path = require('path');

function searchDir(dir) {
  const files = fs.readdirSync(dir);
  for (const f of files) {
    const full = path.join(dir, f);
    if (fs.statSync(full).isDirectory()) {
      if (f !== 'node_modules' && f !== '.git' && f !== 'storage') searchDir(full);
    } else if (f.endsWith('.css') || f.endsWith('.blade.php')) {
      const content = fs.readFileSync(full, 'utf8');
      if (content.includes('hero-stage-wrapper') || content.includes('hero-dashed-arc-circle')) {
        console.log('Found hero classes in:', full);
      }
      if (content.includes('kepala_sekolah') || content.includes('mohammad-rizal')) {
        console.log('Found photo in:', full);
      }
    }
  }
}

searchDir(path.join(__dirname, '../resources'));
searchDir(path.join(__dirname, '../public/css'));
