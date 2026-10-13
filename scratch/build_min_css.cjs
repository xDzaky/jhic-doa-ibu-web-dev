const fs = require('fs');
const path = require('path');
const esbuild = require(path.join(process.cwd(), 'node_modules', 'esbuild'));

const files = ['wireframe', 'bkk', 'ppdb', 'smexamall'];

files.forEach(name => {
  const inputPath = path.join(process.cwd(), 'public', 'css', name + '.css');
  const outputPath = path.join(process.cwd(), 'public', 'css', name + '.min.css');
  
  if (fs.existsSync(inputPath)) {
    const rawCss = fs.readFileSync(inputPath, 'utf8');
    const result = esbuild.transformSync(rawCss, {
      loader: 'css',
      minify: true,
      legalComments: 'none'
    });
    
    fs.writeFileSync(outputPath, result.code, 'utf8');
    console.log(`[ESBUILD SUCCESS] ${name}: ${rawCss.length} bytes -> ${result.code.length} bytes`);
  } else {
    console.warn(`File not found: ${inputPath}`);
  }
});
