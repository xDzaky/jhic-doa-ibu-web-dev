const https = require('https');

async function checkUrl(url) {
  try {
    const res = await fetch(url);
    const html = await res.text();
    console.log('Fetched:', url, 'Length:', html.length);
    const fonts = html.match(/fonts\.googleapis\.com[^\"]+|fonts\.cdnfonts\.com[^\"]+|family=[^&\"']+/g);
    console.log('Fonts found:', fonts);
    const fontFaces = html.match(/@font-face\s*\{[^}]+\}/g);
    console.log('Font faces in HTML:', fontFaces);
    const fontFamilies = html.match(/font-family:[^;\"']+/g);
    console.log('font-family matches:', fontFamilies ? fontFamilies.slice(0, 10) : null);
    
    // Check main CSS links
    const cssMatches = [...html.matchAll(/href=["']([^"']+\.css[^"']*)["']/g)].map(m => m[1]);
    console.log('CSS files:', cssMatches.slice(0, 5));
    for (const cssUrl of cssMatches.slice(0, 5)) {
      const fullCss = cssUrl.startsWith('http') ? cssUrl : new URL(cssUrl, url).href;
      try {
        const cssRes = await fetch(fullCss);
        const cssText = await cssRes.text();
        const cssFonts = cssText.match(/font-family:[^;\}]+/g);
        console.log('CSS Fonts in', fullCss.split('/').pop(), ':', cssFonts ? [...new Set(cssFonts)].slice(0, 8) : null);
      } catch (err) {}
    }
  } catch (e) {
    console.error('Error fetching', url, e.message);
  }
}

async function main() {
  await checkUrl('https://smktelkom-sda.sch.id');
  await checkUrl('https://www.smktelkom-sda.sch.id');
}

main();
