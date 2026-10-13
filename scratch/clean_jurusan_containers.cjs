const fs = require('fs');

['rpl.blade.php', 'bd.blade.php', 'mp.blade.php', 'lp.blade.php', 'ak.blade.php'].forEach(f => {
  const file = 'resources/views/jurusan/' + f;
  let content = fs.readFileSync(file, 'utf8');
  content = content.replace(/\s*style=["']max-width:\s*1140px;["']/g, '');
  fs.writeFileSync(file, content, 'utf8');
  console.log('Cleaned container in ' + file);
});
