# SMK Telkom Style Transformation Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Transform the homepage and global styling of SMKN 1 Probolinggo adopting the modern, institutional-corporate design architecture of SMK Telkom Sidoarjo while preserving authentic school identity, 80% container width, and high performance.

**Architecture:** Update the typography stack to Plus Jakarta Sans in `app.blade.php`, implement the component tokens (dual-color headings, arch portal masking, big metric strip, dashed partner cards, interactive 5-major tabs) in `wireframe.css`, reconstruct `index.blade.php` sections, compile minified assets via esbuild, and run full HTTP 200 verification.

**Tech Stack:** Laravel 11 Blade, Vanilla CSS with custom tokens, JavaScript (Vanilla ES6), esbuild minifier, PHP Artisan.

## Global Constraints
- Target container width: `width: 80% !important; max-width: 1400px; margin-left: auto; margin-right: auto;`
- Font: `Plus Jakarta Sans` via Google Fonts
- Primary Colors: `#082046` (Navy Deep), `#2563EB` (Royal/Electric Blue), `#FFFFFF` (Card Base), `#F8FAFC` (Section Alternate)
- No AI slop: no multi-color gradient fills, no emojis, clean border radius `10px`–`12px` on cards and `9999px` on pill CTA buttons.
- All internal routes (`berita.index`, `berita.show`, `jurusan.*`, `smexamall.index`, `bkk`, `ppdb`) must remain functional.

---

### Task 1: Update Typography to Plus Jakarta Sans

**Files:**
- Modify: `resources/views/layouts/app.blade.php:20-40`

**Interfaces:**
- Consumes: Google Fonts API (`https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap`)
- Produces: Global CSS variable `--font-base: 'Plus Jakarta Sans', -apple-system, sans-serif;`

- [ ] **Step 1: Check existing font references in `app.blade.php`**
Verify the font links in `resources/views/layouts/app.blade.php`.

- [ ] **Step 2: Add Plus Jakarta Sans preconnect and stylesheet link**
In `resources/views/layouts/app.blade.php`, ensure `Plus Jakarta Sans` is loaded in the `<head>`:
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
```
And update CSS font variable:
```css
--font-base: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
--font-heading: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
```

- [ ] **Step 3: Clear view cache and verify rendering**
Run: `php artisan view:clear`
Expected: `Compiled views cleared successfully.`

- [ ] **Step 4: Commit**
```bash
git add resources/views/layouts/app.blade.php
git commit -m "style: load Plus Jakarta Sans typography stack"
```

---

### Task 2: Implement SMK Telkom Architecture Styles in `wireframe.css`

**Files:**
- Modify: `public/css/wireframe.css`

**Interfaces:**
- Produces: CSS classes `.telkom-hero-wrapper`, `.hero-arch-mask`, `.metric-strip-container`, `.metric-item`, `.dual-heading`, `.why-card-grid`, `.why-card`, `.why-card.featured`, `.partner-dashed-card`, `.major-tabs-nav`, `.major-tab-pill`, `.major-content-card`.

- [ ] **Step 1: Add dual-color heading and arch portal tokens**
In `public/css/wireframe.css`:
```css
/* Dual Color Headings */
.dual-heading {
  font-family: var(--font-heading);
  font-weight: 800;
  color: #082046;
  line-height: 1.2;
  letter-spacing: -0.02em;
}
.dual-heading .text-accent {
  color: #2563EB;
}

/* Arch Portal Visual Mask */
.hero-arch-mask {
  position: relative;
  display: inline-block;
  border-radius: 9999px 9999px 24px 24px;
  background: #082046;
  padding: 12px 12px 0 12px;
  overflow: hidden;
}

/* Big Metric Strip */
.metric-strip-container {
  width: 80% !important;
  max-width: 1400px;
  margin: -40px auto 60px auto;
  position: relative;
  z-index: 10;
  background: #082046;
  border-radius: 14px;
  padding: 24px 40px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  box-shadow: 0 12px 32px rgba(8, 32, 70, 0.18);
}
.metric-item {
  text-align: center;
  color: #FFFFFF;
}
.metric-item .metric-num {
  font-size: 2.5rem;
  font-weight: 800;
  line-height: 1;
  color: #FFFFFF;
  margin-bottom: 6px;
}
.metric-item .metric-label {
  font-size: 0.875rem;
  font-weight: 600;
  color: #93C5FD;
  letter-spacing: 0.02em;
}
```

- [ ] **Step 2: Add 6-card "Mengapa Memilih" and Dashed Partner styling**
```css
/* 6 Cards Why Choose Us Grid */
.why-card-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: 36px;
}
.why-card {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 12px;
  padding: 28px 24px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  display: flex;
  flex-direction: column;
}
.why-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 24px rgba(8, 32, 70, 0.08);
  border-color: #93C5FD;
}
.why-card.featured {
  background: #082046;
  color: #FFFFFF;
  border-color: #082046;
}
.why-card.featured .why-card-title {
  color: #FFFFFF;
}
.why-card.featured .why-card-desc {
  color: #CBD5E1;
}

/* Dashed Partner Card */
.partner-dashed-card {
  background: #FFFFFF;
  border: 1px dashed #CBD5E1;
  border-radius: 12px;
  padding: 20px 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 84px;
  transition: border-color 0.2s ease, transform 0.2s ease;
}
.partner-dashed-card:hover {
  border-color: #2563EB;
  transform: translateY(-2px);
}
```

- [ ] **Step 3: Build minified CSS**
Run: `node scratch/build_min_css.cjs`
Expected: `[ESBUILD SUCCESS] wireframe: ... bytes`

- [ ] **Step 4: Commit**
```bash
git add public/css/wireframe.css public/css/wireframe.min.css
git commit -m "style: add Telkom-inspired UI tokens, metric strip, and card grids"
```

---

### Task 3: Rebuild Hero Section & Big Metric Strip in `index.blade.php`

**Files:**
- Modify: `resources/views/index.blade.php:12-160`

**Interfaces:**
- Produces: Modern hero layout matching SMK Telkom reference with tag pill, dual-color headline, arch-portal student composition, and 3-stat metric strip.

- [ ] **Step 1: Write Hero Section & Metric Strip HTML**
In `resources/views/index.blade.php`:
```html
<section class="telkom-hero-section">
  <div class="container hero-container text-center">
    <div class="hero-top-badge">
      <span class="badge-pill">Selamat Datang di Portal Resmi SMKN 1 Probolinggo</span>
    </div>
    <h1 class="hero-main-title">
      Sekolah Tangguh, Berkarakter,<br>
      <span class="text-accent">& Berwawasan Vokasi Digital</span>
    </h1>
    <div class="hero-model-wrapper">
      <div class="hero-arch-frame">
        <img src="{{ asset('images/foto_guru_dan_staf.webp') }}" alt="Siswa Berprestasi SMKN 1 Probolinggo" class="hero-student-img" width="780" height="420" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- Big Metric Strip -->
<div class="metric-strip-container reveal-item">
  <div class="metric-item">
    <div class="metric-num">5</div>
    <div class="metric-label">Konsentrasi Keahlian</div>
  </div>
  <div class="metric-item" style="border-left: 1px solid rgba(255,255,255,0.15); border-right: 1px solid rgba(255,255,255,0.15);">
    <div class="metric-num">1.800+</div>
    <div class="metric-label">Siswa Aktif</div>
  </div>
  <div class="metric-item">
    <div class="metric-num">98%</div>
    <div class="metric-label">Serapan Kerja BKK Mandiri</div>
  </div>
</div>
```

- [ ] **Step 2: Clear view cache & verify route**
Run: `php artisan view:clear; node scratch/test_routes.cjs`
Expected: `/ -> HTTP 200`

- [ ] **Step 3: Commit**
```bash
git add resources/views/index.blade.php
git commit -m "feat: implement Telkom-inspired hero section and metric strip"
```

---

### Task 4: Rebuild Sambutan Kepala Sekolah & 6 Kartu Keunggulan

**Files:**
- Modify: `resources/views/index.blade.php:165-350`

**Interfaces:**
- Produces: 2-column Kepala Sekolah greeting with photo frame + "Mengapa Memilih SMKN 1 Probolinggo" 6-card grid.

- [ ] **Step 1: Implement Sambutan Kepala Sekolah Section**
```html
<section class="section-sambutan">
  <div class="container sambutan-container">
    <div class="sambutan-photo-col">
      <div class="sambutan-arch-box">
        <img src="{{ asset('images/kepala_sekolah.webp') }}" alt="Kepala Sekolah SMKN 1 Probolinggo" class="sambutan-img" width="320" height="400" loading="lazy">
      </div>
    </div>
    <div class="sambutan-text-col">
      <span class="sambutan-tag">Sambutan Pimpinan</span>
      <h2 class="sambutan-title">Kepala Sekolah<br><span class="text-accent">SMKN 1 Probolinggo</span></h2>
      <p class="sambutan-desc">
        Selamat datang di portal resmi SMKN 1 Probolinggo. Sebagai institusi vokasi unggulan rujukan Jawa Timur, kami berkomitmen mencetak generasi unggul yang tidak hanya kompeten secara teknis di era kecerdasan digital, tetapi juga berintegritas tinggi dan siap kerja, melanjutkan studi, maupun berwirausaha mandiri (BMW).
      </p>
      <div class="sambutan-author">
        <strong>Dwi Anggraeni, S.Pd., M.Pd.</strong>
        <span>Kepala SMKN 1 Probolinggo</span>
      </div>
    </div>
  </div>
</section>
```

- [ ] **Step 2: Implement "Mengapa Memilih SMKN 1 Probolinggo" Section**
Add the 6 feature cards:
1. Sekolah Digital & Vokasi Modern
2. Teaching Factory BLUD SMEXAMALL (Featured Card)
3. Akreditasi A - Unggul BAN-S/M
4. Sertifikasi Resmi LSP-P1 BNSP
5. Kelas Industri Axioo & Alfamart
6. Bursa Kerja Khusus (BKK) Terintegrasi
With CTA header button *"Daftar PPDB 2026 &rarr;"*.

- [ ] **Step 3: Clear view cache & verify route**
Run: `php artisan view:clear; node scratch/test_routes.cjs`
Expected: `/ -> HTTP 200`

- [ ] **Step 4: Commit**
```bash
git add resources/views/index.blade.php
git commit -m "feat: add two-column principal greeting and 6-feature card grid"
```

---

### Task 5: Implement Interactive 5-Major Tabs & Dashed Partner Section

**Files:**
- Modify: `resources/views/index.blade.php:355-650`

**Interfaces:**
- Produces: Tab switcher for 5 majors (RPL, BD, MPLB, AKL, LPB) displaying lab photo, key competencies, job prospects, and CTA button; dashed partner logo grid.

- [ ] **Step 1: Write 5-Major Interactive Tabs Component & Vanilla JS Switcher**
Create interactive tab buttons:
```html
<div class="major-tabs-nav">
  <button type="button" class="major-tab-pill active" onclick="selectMajor('rpl')">RPL</button>
  <button type="button" class="major-tab-pill" onclick="selectMajor('bd')">Bisnis Digital</button>
  <button type="button" class="major-tab-pill" onclick="selectMajor('mplb')">Manajemen Perkantoran</button>
  <button type="button" class="major-tab-pill" onclick="selectMajor('akl')">Akuntansi</button>
  <button type="button" class="major-tab-pill" onclick="selectMajor('lpb')">Layanan Perbankan</button>
</div>
```
With responsive 2-column content panel (Left: Lab Image, Right: Competencies, Career Prospects, and CTA Button).
Add clean vanilla JS switcher logic in `@push('scripts')`.

- [ ] **Step 2: Implement Dashed Partner Card Grid**
Create the partner logos (Axioo, Alfamart, Bank Jatim, Jagoan Hosting, AGMARI, Indomarco) with `.partner-dashed-card`.

- [ ] **Step 3: Clear view cache & verify route**
Run: `php artisan view:clear; node scratch/test_routes.cjs`
Expected: `/ -> HTTP 200`

- [ ] **Step 4: Commit**
```bash
git add resources/views/index.blade.php public/css/wireframe.css
git commit -m "feat: add interactive 5-major department tabs and dashed partner cards"
```

---

### Task 6: Final Asset Compilation & Visual Route Verification

**Files:**
- Test & Verify: All 13 HTTP routes

- [ ] **Step 1: Run esbuild CSS build**
Run: `node scratch/build_min_css.cjs`
Expected: All CSS files minified with 0 errors.

- [ ] **Step 2: Clear view cache and run test suite**
Run: `php artisan view:clear; node scratch/test_routes.cjs`
Expected: All 13 routes respond with HTTP 200 OK.

- [ ] **Step 3: Capture full-page screenshot of the updated homepage**
Run headless Chrome to capture `updated_home.png` and verify visual aesthetics.

- [ ] **Step 4: Final Git Commit**
```bash
git commit --allow-empty -m "chore: complete SMK Telkom style transformation and verify all routes"
```
