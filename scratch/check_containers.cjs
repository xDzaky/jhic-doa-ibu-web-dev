const fs = require('fs');
const path = require('path');

function walk(dir) {
  fs.readdirSync(dir).forEach(file => {
    const fullPath = path.join(dir, file);
    if (fs.statSync(fullPath).isDirectory()) {
      walk(fullPath);
    } else if (file.endsWith('.blade.php')) {
      const content = fs.readFileSync(fullPath, 'utf8');
      const lines = content.split('\n');
      lines.forEach((l, i) => {
        if (/class=["'][^"']*container[^"']*["']/i.test(l) && /style=/i.test(l)) {
          console.log(`${fullPath}:${i+1}: ${l.trim()}`);
        }
      });
    }
  });
}
walk('resources/views');
