const fs = require('fs');
const path = require('path');

function cleanFile(filePath) {
  let content = fs.readFileSync(filePath, 'utf8');

  // 1. Root radius tokens
  content = content.replace(/--radius-pill:\s*(9999px|999px|8px);/g, '--radius-pill: 8px;');
  content = content.replace(/--radius-lg:\s*(12px|8px);/g, '--radius-lg: 8px;');
  content = content.replace(/--radius-md:\s*(8px|6px);/g, '--radius-md: 6px;');
  content = content.replace(/--radius-sm:\s*(6px|4px);/g, '--radius-sm: 4px;');

  // 2. Container width: exactly 80%, max-width: 1400px
  content = content.replace(/\.container\s*\{\s*width:\s*(88%|85%|80%|92%|94%);\s*max-width:\s*\d+px;\s*margin:\s*0 auto;\s*\}/g,
    '.container {\n    width: 80%;\n    max-width: 1400px;\n    margin: 0 auto;\n}');
  content = content.replace(/\.ecom-container\s*\{\s*width:\s*(88%|85%|80%|92%|94%);\s*max-width:\s*\d+px;\s*margin:\s*0 auto;\s*\}/g,
    '.ecom-container {\n  width: 80%;\n  max-width: 1400px;\n  margin: 0 auto;\n}');

  // 3. Align hero-container and jurusan-figma-container to 80% width
  content = content.replace(/\.hero-bg-panorama \.hero-container\s*\{[^}]+\}/g,
    `.hero-bg-panorama .hero-container {
    position: relative;
    z-index: 2;
    flex: 1;
    display: flex;
    align-items: center;
    padding-top: 48px;
    padding-bottom: 36px;
    width: 80%;
    max-width: 1400px;
    margin: 0 auto;
    padding-left: 0;
    padding-right: 0;
}`);

  content = content.replace(/\.jurusan-figma-container\s*\{[^}]+\}/g,
    `.jurusan-figma-container {
    width: 80%;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0;
}`);

  fs.writeFileSync(filePath, content, 'utf8');
  console.log(`Cleaned and set 80% container for: ${filePath}`);
}

['public/css/wireframe.css', 'public/css/bkk.css', 'public/css/ppdb.css', 'public/css/smexamall.css'].forEach(f => {
  cleanFile(path.resolve(f));
});
