const fs = require('fs');
const path = require('path');

const viewsDir = path.resolve('resources/views');
const findings = [];

function auditFile(filePath) {
  const relPath = path.relative(viewsDir, filePath);
  const content = fs.readFileSync(filePath, 'utf8');
  const lines = content.split('\n');

  lines.forEach((line, idx) => {
    const lineNum = idx + 1;

    // 1. Check for broken or dead anchor links
    if (/<a\s+[^>]*href=["']#["'][^>]*>/i.test(line) && !/role=["']button["']/i.test(line) && !/onclick=/i.test(line)) {
      findings.push({ file: relPath, line: lineNum, issue: 'Dead anchor href="#" without handler', snippet: line.trim() });
    }

    // 2. Check for missing alt attributes on images
    if (/<img\s+[^>]*>/i.test(line) && !/alt=["'][^"']*["']/i.test(line)) {
      findings.push({ file: relPath, line: lineNum, issue: 'Missing alt attribute on <img>', snippet: line.trim() });
    }

    // 3. Check for low contrast gray text like #999 or #aaa on light backgrounds
    if (/#(999|aaa|bbb|888)[^0-9a-fA-F]/i.test(line) && !/border/i.test(line)) {
      findings.push({ file: relPath, line: lineNum, issue: 'Potential low-contrast text color', snippet: line.trim() });
    }

    // 4. Check for any remaining gradient in style attributes
    if (/style=["'][^"']*gradient/i.test(line)) {
      findings.push({ file: relPath, line: lineNum, issue: 'Inline gradient found in style', snippet: line.trim() });
    }

    // 5. Check for cursor pointer on interactive elements like buttons/labels
    if (/<button\s+[^>]*style=["'][^"']*cursor:\s*default/i.test(line)) {
      findings.push({ file: relPath, line: lineNum, issue: 'Button with cursor:default', snippet: line.trim() });
    }
  });
}

function walk(dir) {
  fs.readdirSync(dir).forEach(f => {
    const p = path.join(dir, f);
    if (fs.statSync(p).isDirectory()) walk(p);
    else if (f.endsWith('.blade.php')) auditFile(p);
  });
}

walk(viewsDir);
console.log(`Total findings: ${findings.length}`);
findings.slice(0, 30).forEach(f => console.log(`[${f.file}:${f.line}] ${f.issue} -> ${f.snippet.substring(0, 80)}`));
