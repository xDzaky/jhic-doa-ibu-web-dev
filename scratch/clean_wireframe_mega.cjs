const fs = require('fs');
const path = require('path');

const filePath = path.join(__dirname, '../public/css/wireframe.css');
const content = fs.readFileSync(filePath, 'utf8');

// Find the section between `.nav-dropdown.has-mega-menu {` and `/* ==========================================================================\n   SMK TELKOM ARCHITECTURE`
const startMarker = '.nav-dropdown.has-mega-menu {';
const endMarker = '/* ==========================================================================\n   SMK TELKOM ARCHITECTURE';
const endMarkerCRLF = '/* ==========================================================================\r\n   SMK TELKOM ARCHITECTURE';

let startIdx = content.indexOf(startMarker);
let endIdx = content.indexOf(endMarker);
if (endIdx === -1) {
  endIdx = content.indexOf(endMarkerCRLF);
}

if (startIdx !== -1 && endIdx !== -1) {
  const newContent = content.slice(0, startIdx) + 
    '/* (Navbar & Mega Menus are cleanly handled in navbar-clean.css) */\n\n' + 
    content.slice(endIdx);
  fs.writeFileSync(filePath, newContent, 'utf8');
  console.log('Successfully cleaned wireframe.css! Length reduced by', content.length - newContent.length, 'bytes');
} else {
  console.log('Markers not found:', { startIdx, endIdx });
}
