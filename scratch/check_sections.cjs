const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch({ headless: 'new' });
    const page = await browser.newPage();
    await page.setViewport({ width: 1440, height: 900 });
    await page.goto('http://127.0.0.1:8000', { waitUntil: 'networkidle2' });
    
    // Screenshot sambutan
    const sambutan = await page.$('.section-sambutan');
    if (sambutan) await sambutan.screenshot({ path: 'scratch/shot_sambutan_current.png' });
    
    // Screenshot program keahlian
    const program = await page.$('.section-program-keahlian');
    if (program) await program.screenshot({ path: 'scratch/shot_program_current.png' });
    
    // Screenshot why & dudi
    const why = await page.$('.section-why-us');
    if (why) await why.screenshot({ path: 'scratch/shot_why_current.png' });
    const dudi = await page.$('.section-mitra-marquee');
    if (dudi) await dudi.screenshot({ path: 'scratch/shot_dudi_current.png' });
    
    await browser.close();
    console.log('Screenshots captured successfully!');
})();
