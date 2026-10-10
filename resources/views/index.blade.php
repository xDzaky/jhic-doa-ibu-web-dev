@extends('layouts.app')

@section('title', 'Website Resmi SMKN 1 Probolinggo - Sekolah Pusat Keunggulan & BLUD')

@section('content')
  <!-- 1. Hero Section (Modern Campus Panorama) -->
  <section class="hero-section hero-bg-panorama">
    <img src="{{ asset('images/hero_bg.webp') }}" alt="Pendidikan Vokasi SMKN 1 Probolinggo" class="hero-bg-panorama-img" width="1200" height="675" fetchpriority="high" loading="eager" decoding="async">
    <div class="container hero-container">
      <div class="hero-content-col">
        <!-- Circular Emblem Badge (Figma Mobile Design) -->
        <div class="hero-mobile-emblem">
          <div class="hero-emblem-circle">
            <img src="{{ asset('images/logo_emblem.webp') }}" alt="Emblem SMKN 1 Probolinggo" width="70" height="70" class="hero-emblem-img">
          </div>
        </div>

        <h1 class="hero-display-title">
          <span class="title-desktop">Pendidikan Vokasi Berkualitas untuk Generasi Industri &amp; Digital</span>
          <span class="title-mobile">
            SELAMAT DATANG DI WEBSITE RESMI<br>
            <strong class="title-mobile-school">SMKN 1 PROBOLINGGO</strong>
          </span>
        </h1>
        <p class="hero-lead">
          Selamat datang di portal resmi SMK Negeri 1 Probolinggo. Sekolah Pusat Keunggulan terakreditasi A Unggul dengan 5 konsentrasi keahlian modern berstandar industri, kemitraan DUDI nasional, serta Teaching Factory SMEXAMALL.
        </p>

        <!-- Action Buttons -->
        <div class="hero-cta-group">
          <a href="{{ route('ppdb') }}" class="btn btn-navy-primary btn-lg">
            Pendaftaran PPDB 2026
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-left: 6px; display: inline-block; vertical-align: middle;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="{{ route('smexamall.index') }}" class="btn btn-outline-navy btn-lg">Katalog Produk SMEXAMALL</a>
        </div>
      </div>
    </div>

    <!-- Stats Bar (Matching Figma — Istok Web Font, Dark Navy Fullwidth) -->
    <div class="stats-bar-figma">
      <div class="stats-bar-inner">
        <div class="stats-bar-item reveal-item" data-delay="0">
          <span class="stats-bar-num count-ticker" data-target="80" data-suffix="+">80+</span>
          <span class="stats-bar-label">Guru &amp; Staf Profesional</span>
        </div>
        <div class="stats-bar-divider"></div>
        <div class="stats-bar-item reveal-item" data-delay="100">
          <span class="stats-bar-num count-ticker" data-target="1500" data-suffix="+">1500+</span>
          <span class="stats-bar-label">Siswa Aktif</span>
        </div>
        <div class="stats-bar-divider"></div>
        <div class="stats-bar-item reveal-item" data-delay="200">
          <span class="stats-bar-num count-ticker" data-target="99" data-suffix="%">99%</span>
          <span class="stats-bar-label">Lulusan Terserap di Dunia<br>Kerja / Perguruan Tinggi</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Sambutan Kepala Sekolah (Matching Figma) -->
  <section class="section-sambutan-figma" id="sambutan">
    <div class="container">
      <div class="sambutan-figma-grid">
        <!-- Kolom Kiri: Foto Kepala Sekolah dengan Frame Grafis (Figma) -->
        <div class="sambutan-figma-visual reveal-item" data-delay="0">
          <img src="{{ asset('images/frame_kepala_sekolah.webp') }}" alt="Edi Hananto Eko, M.PD - Kepala SMKN 1 Probolinggo" loading="lazy" class="sambutan-frame-img" width="480" height="520">
        </div>

        <!-- Kolom Kanan: Teks Sambutan (Inter + Figtree) -->
        <div class="sambutan-figma-text reveal-item" data-delay="100">
          <div class="sambutan-title-block">
            <span class="sambutan-sub">Sambutan</span>
            <h2 class="sambutan-main">Kepala Sekolah</h2>
          </div>

          <div class="sambutan-content-figtree">
            <p>
              Assalamualaikum Warahmatullahi Wabarakatuh,<br>
              Selamat datang di website resmi SMKN 1 Probolinggo.
            </p>
            <p>
              Website ini kami hadirkan sebagai sarana media informasi dan pembelajaran bagi warga sekolah dan masyarakat luas. Kami berkomitmen meningkatkan kualitas pendidikan secara menyeluruh, mengembangkan ilmu pengetahuan, karakter, dan nilai agama siswa.
            </p>
            <p>
              Semoga website ini menjadi sumber informasi yang bermanfaat serta sarana komunikasi yang efektif.<br>
              Terima kasih atas kunjungan Anda.
            </p>
            <div class="sambutan-author-figtree">
              <div class="author-name">-Edi Hananto Eko, M.PD</div>
              <div class="author-title">Kepala Sekolah</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Dewan Pendidik & Tenaga Kependidikan Fullwidth Banner (Matching Figma) -->
  <section class="section-guru-fullwidth" id="dewan-guru">
    <div class="guru-photo-card reveal-item" data-delay="50">
      <img src="{{ asset('images/foto_guru_dan_staf.webp') }}" alt="Dewan Guru dan Tenaga Kependidikan SMKN 1 Probolinggo" loading="lazy" width="800" height="480">
    </div>
  </section>

  <!-- 4. Program Keahlian Unggulan — Figma Redesign -->
  <section class="section-jurusan-figma" id="jurusan">
    <div class="jurusan-figma-container">

      <!-- Section Header: "5 Konsentrasi Keahlian" -->
      <div class="jurusan-figma-header reveal-item">
        <div class="jurusan-header-bar"></div>
        <div class="jurusan-big-number">5</div>
        <div class="jurusan-header-text">
          <span>Konsentrasi</span>
          <span>Keahlian</span>
        </div>
      </div>

      <!-- 1. RPL — Image Left, Text Right (Green) -->
      <div class="jf-row jf-img-left reveal-item" data-delay="0">
        <div class="jf-img-col">
          <a href="{{ route('jurusan.rpl') }}" style="display: block; cursor: pointer;">
            <img src="{{ asset('images/jurusan/hero_rpl.png') }}" alt="Rekayasa Perangkat Lunak" class="jf-img" loading="lazy" width="400" height="250" style="transition: transform 0.3s ease;">
          </a>
        </div>
        <div class="jf-text-col">
          <div class="jf-label">
            <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" width="32" height="32">
            <span>Jurusan SMKN 1 Probolinggo</span>
          </div>
          <h3 class="jf-heading">Rekayasa<br><span style="color:#15803d">Perangkat</span> Lunak</h3>
          <p class="jf-desc">Jurusan yang fokus pada pengembangan perangkat lunak, mulai dari desain, pemrograman, pengujian, hingga pemeliharaan aplikasi. Siswa dibekali ilmu menyeluruh tentang software engineering.</p>
          <div class="jf-features-block">
            <img src="{{ asset('images/jurusan/thumb_rpl.webp') }}" alt="Thumbnail RPL" class="jf-thumb" loading="lazy" width="80" height="80">
            <ul class="jf-features" style="--check:#15803d">
              <li>Belajar coding &amp; UI/UX design</li>
              <li>Proyek nyata &amp; magang industri</li>
              <li>Lulus siap kerja, wirausaha, atau kuliah</li>
            </ul>
          </div>
          <a href="{{ route('jurusan.rpl') }}" class="jf-btn" style="background:#15803d">Info Selengkapnya</a>
        </div>
      </div>

      <!-- 2. Bisnis Digital — Text Left, Image Right (Blue) -->
      <div class="jf-row jf-img-right reveal-item" data-delay="80">
        <div class="jf-img-col">
          <a href="{{ route('jurusan.bd') }}" style="display: block; cursor: pointer;">
            <img src="{{ asset('images/jurusan/hero_bd.png') }}" alt="Bisnis Digital" class="jf-img" loading="lazy" width="400" height="250" style="transition: transform 0.3s ease;">
          </a>
        </div>
        <div class="jf-text-col">
          <div class="jf-label">
            <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" width="32" height="32">
            <span>Jurusan SMKN 1 Probolinggo</span>
          </div>
          <h3 class="jf-heading">Bisnis <span style="color:#1d4ed8">Digital</span></h3>
          <p class="jf-desc">Jurusan Bisnis Digital membekali siswa dengan keterampilan berbisnis menggunakan teknologi dan internet. Siswa belajar cara memasarkan produk secara online, membuat konten digital, dan menjalankan toko online.</p>
          <div class="jf-features-block">
            <img src="{{ asset('images/jurusan/thumb_bd.webp') }}" alt="Thumbnail BD" class="jf-thumb" loading="lazy" width="80" height="80">
            <ul class="jf-features" style="--check:#1d4ed8">
              <li>Digital marketing &amp; media sosial</li>
              <li>Desain konten &amp; e-commerce</li>
              <li>Kewirausahaan digital &amp; marketplace</li>
            </ul>
          </div>
          <a href="{{ route('jurusan.bd') }}" class="jf-btn" style="background:#1d4ed8">Info Selengkapnya</a>
        </div>
      </div>

      <!-- 3. Manajemen Perkantoran — Image Left, Text Right (Pink) -->
      <div class="jf-row jf-img-left reveal-item" data-delay="160">
        <div class="jf-img-col">
          <a href="{{ route('jurusan.mp') }}" style="display: block; cursor: pointer;">
            <img src="{{ asset('images/jurusan/hero_mp.png') }}" alt="Manajemen Perkantoran" class="jf-img" loading="lazy" width="400" height="250" style="transition: transform 0.3s ease;">
          </a>
        </div>
        <div class="jf-text-col">
          <div class="jf-label">
            <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" width="32" height="32">
            <span>Jurusan SMKN 1 Probolinggo</span>
          </div>
          <h3 class="jf-heading">Manajemen<br><span style="color:#be185d">Perkantoran</span></h3>
          <p class="jf-desc">Jurusan Manajemen Perkantoran bertujuan untuk mencetak tenaga administrasi yang profesional, terampil, dan siap kerja di berbagai bidang, baik di kantor pemerintahan, swasta, maupun dunia usaha.</p>
          <div class="jf-features-block">
            <img src="{{ asset('images/jurusan/thumb_mp.webp') }}" alt="Thumbnail MP" class="jf-thumb" loading="lazy" width="80" height="80">
            <ul class="jf-features" style="--check:#be185d">
              <li>Tata kelola surat &amp; dokumen</li>
              <li>Layanan publik &amp; komunikasi kantor</li>
              <li>Administrasi digital &amp; teknologi perkantoran</li>
            </ul>
          </div>
          <a href="{{ route('jurusan.mp') }}" class="jf-btn" style="background:#be185d">Info Selengkapnya</a>
        </div>
      </div>

      <!-- 4. Layanan Perbankan — Text Left, Image Right (Yellow) -->
      <div class="jf-row jf-img-right reveal-item" data-delay="240">
        <div class="jf-img-col">
          <a href="{{ route('jurusan.lp') }}" style="display: block; cursor: pointer;">
            <img src="{{ asset('images/jurusan/hero_lp.png') }}" alt="Layanan Perbankan" class="jf-img" loading="lazy" width="400" height="250" style="transition: transform 0.3s ease;">
          </a>
        </div>
        <div class="jf-text-col">
          <div class="jf-label">
            <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" width="32" height="32">
            <span>Jurusan SMKN 1 Probolinggo</span>
          </div>
          <h3 class="jf-heading">Layanan<br><span style="color:#a16207">Perbankan</span></h3>
          <p class="jf-desc">Jurusan ini membekali siswa dengan pengetahuan dan keterampilan di bidang perbankan, mulai dari pelayanan nasabah, transaksi keuangan, hingga teknologi perbankan digital.</p>
          <div class="jf-features-block">
            <img src="{{ asset('images/jurusan/thumb_lp.webp') }}" alt="Thumbnail LP" class="jf-thumb" loading="lazy" width="80" height="80">
            <ul class="jf-features" style="--check:#a16207">
              <li>Pelayanan teller &amp; customer service</li>
              <li>Administrasi keuangan &amp; tabungan</li>
              <li>Simulasi transaksi perbankan digital</li>
            </ul>
          </div>
          <a href="{{ route('jurusan.lp') }}" class="jf-btn" style="background:#a16207">Info Selengkapnya</a>
        </div>
      </div>

      <!-- 5. Akuntansi — Image Left, Text Right (Red) -->
      <div class="jf-row jf-img-left reveal-item" data-delay="320">
        <div class="jf-img-col">
          <a href="{{ route('jurusan.ak') }}" style="display: block; cursor: pointer;">
            <img src="{{ asset('images/jurusan/hero_ak.png') }}" alt="Akuntansi" class="jf-img" loading="lazy" width="400" height="250" style="transition: transform 0.3s ease;">
          </a>
        </div>
        <div class="jf-text-col">
          <div class="jf-label">
            <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" width="32" height="32">
            <span>Jurusan SMKN 1 Probolinggo</span>
          </div>
          <h3 class="jf-heading"><span style="color:#b91c1c">Akuntansi</span></h3>
          <p class="jf-desc">Jurusan Akuntansi mempersiapkan siswa untuk menjadi tenaga profesional di bidang akuntansi dan keuangan, dengan keterampilan yang siap langsung diterapkan di dunia kerja maupun pendidikan lanjutan</p>
          <div class="jf-features-block">
            <img src="{{ asset('images/jurusan/thumb_ak.webp') }}" alt="Thumbnail AK" class="jf-thumb" loading="lazy" width="80" height="80">
            <ul class="jf-features" style="--check:#b91c1c">
              <li>Pembukuan &amp; jurnal transaksi</li>
              <li>Laporan keuangan &amp; perpajakan</li>
              <li>Aplikasi akuntansi digital (MYOB, Excel, dll)</li>
            </ul>
          </div>
          <a href="{{ route('jurusan.ak') }}" class="jf-btn" style="background:#b91c1c">Info Selengkapnya</a>
        </div>
      </div>

    </div>
  </section>

  <!-- 5. Berita & Kegiatan Terkini (Data Riil dari smkn1probolinggo.sch.id) -->
  <section class="section" id="berita" style="background: #F8FAFC;">
    <div class="container">
      <div class="section-header reveal-item" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 16px;">
        <div>
          <h2 class="section-title">Berita &amp; Kegiatan Terkini</h2>
          <p style="color: var(--text-muted); font-size: 0.9375rem; margin-top: 6px;">Informasi kegiatan akademik, prestasi siswa, dan program vokasi terbaru SMKN 1 Probolinggo.</p>
        </div>
        <a href="https://smkn1probolinggo.sch.id" target="_blank" rel="noopener noreferrer" class="btn btn-outline-navy btn-sm" style="display: inline-flex; align-items: center; gap: 6px; font-weight: 700;">
          Lihat Semua Berita
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <div class="news-grid-3">
        <!-- Berita 1 -->
        <article class="news-card reveal-item" data-delay="0">
          <div class="news-card-img-wrap">
            <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Siswa Bisnis Digital Belajar Bersama AGMARI" class="news-card-img" loading="lazy" width="400" height="225">
          </div>
          <div class="news-card-body">
            <div class="news-editorial-meta">30 SEPTEMBER 2026 • BISNIS DIGITAL</div>
            <h3 class="news-card-title">
              Perkuat Wawasan Bisnis Digital, Siswa Kelas X Belajar Bersama AGMARI AKSESMU
            </h3>
            <p class="news-card-desc">
              Siswa konsentrasi keahlian Bisnis Digital mendapatkan pembekalan langsung dari praktisi industri mengenai tren ritel dan live shopping e-commerce.
            </p>
            <a href="https://smkn1probolinggo.sch.id" target="_blank" rel="noopener noreferrer" class="news-card-link">
              <span>Baca Selengkapnya</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </article>

        <!-- Berita 2 -->
        <article class="news-card reveal-item" data-delay="100">
          <div class="news-card-img-wrap">
            <img src="{{ asset('images/news_perkantoran.webp') }}" alt="Paperwork to Partywork MPLB" class="news-card-img" loading="lazy" width="400" height="225">
          </div>
          <div class="news-card-body">
            <div class="news-editorial-meta">28 SEPTEMBER 2026 • MANAJEMEN PERKANTORAN</div>
            <h3 class="news-card-title">
              Dari Paperwork to Partywork, Siswa MPLB Belajar Mengelola Event Profesional
            </h3>
            <p class="news-card-desc">
              Praktik nyata kepanitiaan dan public relations dalam mengorganisir kegiatan resmi sekolah berstandar MICE perkantoran modern.
            </p>
            <a href="https://smkn1probolinggo.sch.id" target="_blank" rel="noopener noreferrer" class="news-card-link">
              <span>Baca Selengkapnya</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </article>

        <!-- Berita 3 -->
        <article class="news-card reveal-item" data-delay="200">
          <div class="news-card-img-wrap">
            <img src="{{ asset('images/news_ai.webp') }}" alt="Kepolisian Probolinggo & AI" class="news-card-img" loading="lazy" width="400" height="225">
          </div>
          <div class="news-card-body">
            <div class="news-editorial-meta">16 SEPTEMBER 2026 • TEKNOLOGI &amp; RPL</div>
            <h3 class="news-card-title">
              Kepolisian Probolinggo Berikan Paparan tentang Pemanfaatan Artificial Intelligence
            </h3>
            <p class="news-card-desc">
              Edukasi literasi digital, keamanan data siber, dan etika pemanfaatan AI bagi generasi muda vokasi di lingkungan SMKN 1 Probolinggo.
            </p>
            <a href="https://smkn1probolinggo.sch.id" target="_blank" rel="noopener noreferrer" class="news-card-link">
              <span>Baca Selengkapnya</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 6. SMEXAMALL Teaching Factory Preview -->
  <section class="section section-white" id="smexamall">
    <div class="container">
      <div class="section-header center reveal-item">
        <h2 class="section-title">Produk &amp; Layanan Unggulan SMEXAMALL</h2>
        <p style="color: var(--text-muted); font-size: 0.9375rem; margin-top: 6px;">Dukung karya wirausaha siswa SMKN 1 Probolinggo di unit produksi Teaching Factory resmi.</p>
      </div>

      <div class="smx-home-grid">
        <!-- 1: RPL -->
        <div class="smx-card reveal-item" data-delay="0">
          <div class="smx-card-img-wrap">
            <img src="{{ asset('images/products/tefa_rpl.webp') }}" alt="Website Profil UMKM Probolinggo" class="smx-card-img" loading="lazy" width="300" height="200">
          </div>
          <div class="smx-card-body">
            <span class="smx-card-cat">Software &amp; Web Development</span>
            <h3 class="smx-card-title">Website Profil UMKM Probolinggo</h3>
            <div class="smx-card-price-row">
              <span class="smx-card-price">Rp 350.000</span>
            </div>
            <div class="smx-card-actions">
              <a href="{{ route('smexamall.product') }}" class="btn-buy-now">
                <span>Pesan Layanan</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- 2: Bisnis Digital -->
        <div class="smx-card reveal-item" data-delay="80">
          <div class="smx-card-img-wrap">
            <img src="{{ asset('images/products/tefa_bd.webp') }}" alt="Paket Kelola TikTok & IG UMKM" class="smx-card-img" loading="lazy" width="300" height="200">
          </div>
          <div class="smx-card-body">
            <span class="smx-card-cat">Live Commerce &amp; Marketing</span>
            <h3 class="smx-card-title">Paket Kelola TikTok &amp; IG UMKM</h3>
            <div class="smx-card-price-row">
              <span class="smx-card-price">Rp 250.000</span>
            </div>
            <div class="smx-card-actions">
              <a href="{{ route('smexamall.product') }}" class="btn-buy-now">
                <span>Pesan Layanan</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- 3: MPLB -->
        <div class="smx-card reveal-item" data-delay="160">
          <div class="smx-card-img-wrap">
            <img src="{{ asset('images/products/tefa_mplb.webp') }}" alt="Digitalisasi Arsip & Dokumen" class="smx-card-img" loading="lazy" width="300" height="200">
          </div>
          <div class="smx-card-body">
            <span class="smx-card-cat">Manajemen Perkantoran</span>
            <h3 class="smx-card-title">Digitalisasi Arsip &amp; Dokumen</h3>
            <div class="smx-card-price-row">
              <span class="smx-card-price">Rp 50.000</span>
            </div>
            <div class="smx-card-actions">
              <a href="{{ route('smexamall.product') }}" class="btn-buy-now">
                <span>Pesan Layanan</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- 4: AKL -->
        <div class="smx-card reveal-item" data-delay="240">
          <div class="smx-card-img-wrap">
            <img src="{{ asset('images/products/tefa_akl.webp') }}" alt="Laporan Keuangan UMKM Accurate" class="smx-card-img" loading="lazy" width="300" height="200">
          </div>
          <div class="smx-card-body">
            <span class="smx-card-cat">Akuntansi &amp; Perpajakan</span>
            <h3 class="smx-card-title">Laporan Keuangan UMKM Accurate</h3>
            <div class="smx-card-price-row">
              <span class="smx-card-price">Rp 175.000</span>
            </div>
            <div class="smx-card-actions">
              <a href="{{ route('smexamall.product') }}" class="btn-buy-now">
                <span>Pesan Layanan</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- 5: LPB -->
        <div class="smx-card reveal-item" data-delay="320">
          <div class="smx-card-img-wrap">
            <img src="{{ asset('images/products/tefa_bank.webp') }}" alt="Konsultasi Pembukuan Kas Toko" class="smx-card-img" loading="lazy" width="300" height="200">
          </div>
          <div class="smx-card-body">
            <span class="smx-card-cat">Layanan Perbankan</span>
            <h3 class="smx-card-title">Konsultasi Pembukuan Kas Toko</h3>
            <div class="smx-card-price-row">
              <span class="smx-card-price">Rp 100.000</span>
            </div>
            <div class="smx-card-actions">
              <a href="{{ route('smexamall.product') }}" class="btn-buy-now">
                <span>Pesan Layanan</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 36px;" class="reveal-item" data-delay="100">
        <a href="{{ route('smexamall.index') }}" class="btn btn-navy-primary">Buka Katalog Lengkap SMEXAMALL</a>
      </div>
    </div>
  </section>

  <!-- 6.5. Cerita Alumni Section (Matching Figma Design) -->
  <section class="section-cerita-alumni" id="cerita-alumni">
    <div class="container alumni-container">
      <!-- Left Column: Title & Subtitle -->
      <div class="alumni-text-col reveal-item" data-delay="0">
        <h2 class="alumni-heading">
          Cerita<br>Alumni
        </h2>
        <p class="alumni-desc">
          Belajar di SMKN 1 Probolinggo bukan cuma soal pelajaran, tapi juga membangun karakter, menemukan passion, dan menyiapkan langkah besar setelah lulus.<br>
          Yuk, simak cerita mereka yang pernah duduk di bangku ini dan kini berprestasi di luar sana.
        </p>
      </div>

      <!-- Right Column: 3 Testimonial Cards using card.png -->
      <div class="alumni-cards-col reveal-item" data-delay="100">
        <a href="{{ route('alumni.show', 1) }}" class="alumni-card-link" aria-label="Cerita Alumni Andiena">
          <img src="{{ asset('images/card.png') }}" alt="Testimoni Alumni Andiena - SMKN 1 Probolinggo" class="alumni-card-img" width="265" height="363" loading="lazy">
        </a>
        <a href="{{ route('alumni.show', 2) }}" class="alumni-card-link" aria-label="Cerita Alumni Andiena">
          <img src="{{ asset('images/card.png') }}" alt="Testimoni Alumni Andiena - SMKN 1 Probolinggo" class="alumni-card-img" width="265" height="363" loading="lazy">
        </a>
        <a href="{{ route('alumni.show', 3) }}" class="alumni-card-link" aria-label="Cerita Alumni Andiena">
          <img src="{{ asset('images/card.png') }}" alt="Testimoni Alumni Andiena - SMKN 1 Probolinggo" class="alumni-card-img" width="265" height="363" loading="lazy">
        </a>
      </div>
    </div>
  </section>

  <style>
    .section-cerita-alumni {
      background: #FFFFFF;
      padding: 90px 0;
      position: relative;
      overflow: hidden;
    }
    .alumni-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 50px;
    }
    .alumni-text-col {
      flex: 0 0 380px;
      max-width: 420px;
    }
    .alumni-heading {
      font-family: var(--font-heading, 'Inter', sans-serif);
      font-size: 3.25rem;
      font-weight: 800;
      color: #3A5C9A;
      line-height: 1.12;
      margin: 0 0 24px 0;
      letter-spacing: -0.02em;
    }
    .alumni-desc {
      font-size: 0.875rem;
      line-height: 1.65;
      color: #64748B;
      margin: 0;
      font-weight: 500;
    }
    .alumni-cards-col {
      display: flex;
      align-items: center;
      gap: 22px;
      flex: 1;
      justify-content: flex-end;
    }
    .alumni-card-link {
      display: inline-block;
      text-decoration: none;
      border-radius: 16px;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s ease;
      will-change: transform;
    }
    .alumni-card-link:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 28px rgba(58, 92, 154, 0.15);
    }
    .alumni-card-img {
      width: 225px;
      height: auto;
      max-width: 100%;
      border-radius: 16px;
      display: block;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    }
    @media (max-width: 1100px) {
      .alumni-heading {
        font-size: 2.75rem;
      }
      .alumni-card-img {
        width: 190px;
      }
      .alumni-cards-col {
        gap: 16px;
      }
    }
    @media (max-width: 900px) {
      .section-cerita-alumni {
        padding: 60px 0;
      }
      .alumni-container {
        flex-direction: column;
        align-items: flex-start;
        gap: 36px;
      }
      .alumni-text-col {
        flex: none;
        max-width: 100%;
      }
      .alumni-cards-col {
        width: 100%;
        justify-content: flex-start;
        overflow-x: auto;
        padding-bottom: 14px;
        -webkit-overflow-scrolling: touch;
      }
      .alumni-card-link {
        flex-shrink: 0;
      }
      .alumni-card-img {
        width: 210px;
      }
    }
  </style>

  <!-- 7. Kerja Sama Industri Mitra DUDI (MATCHING REFERENCE IMAGE 3) -->
  <section class="partner-ref-section" id="mitra">
    <div class="container">
      <div class="partner-ref-header reveal-item">
        <div>
          <h2 class="partner-ref-title">
            Partner Industri &amp; Jaringan Karir
          </h2>
        </div>
        <div class="partner-ref-right">
          <p class="partner-ref-desc">
            SMKN 1 Probolinggo bekerja sama secara strategis dengan 50+ jaringan industri terkemuka nasional &amp; internasional untuk sinkronisasi kurikulum, program magang, dan penyerapan kerja alumni.
          </p>
          <a href="{{ route('bkk') }}" class="btn-partner-header">
            <span>Lihat Semua Partner Industri</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </a>
        </div>
      </div>

      <!-- Bordered Tile Grid with Lightweight 60fps CSS Marquee -->
      <div class="partner-ref-marquee-container" aria-label="Daftar Partner Industri SMKN 1 Probolinggo">
        <!-- Row 1: Scrolls Smoothly Left -->
        <div class="partner-ref-track">
          <!-- Set A -->
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_daihatsu.svg') }}" alt="Daihatsu" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_lg.svg') }}" alt="LG Electronics" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_bd_trans.svg') }}" alt="B&D Transformer" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_jatimpark.svg') }}" alt="Jawa Timur Park 1" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_jagoanhosting.png') }}" alt="Jagoan Hosting" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_japfa.svg') }}" alt="JAPFA" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_radarmalang.svg') }}" alt="Radar Malang" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_alfamart.png') }}" alt="Alfamart" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_pjb.svg') }}" alt="PJB PLN" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_axioo.png') }}" alt="Axioo Smart Classroom" loading="lazy"></div>

          <!-- Duplicate Set for infinite seamless loop -->
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_daihatsu.svg') }}" alt="Daihatsu" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_lg.svg') }}" alt="LG Electronics" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_bd_trans.svg') }}" alt="B&D Transformer" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_jatimpark.svg') }}" alt="Jawa Timur Park 1" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_jagoanhosting.png') }}" alt="Jagoan Hosting" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_japfa.svg') }}" alt="JAPFA" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_radarmalang.svg') }}" alt="Radar Malang" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_alfamart.png') }}" alt="Alfamart" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_pjb.svg') }}" alt="PJB PLN" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_axioo.png') }}" alt="Axioo Smart Classroom" loading="lazy"></div>
        </div>

        <!-- Row 2: Scrolls Smoothly Left (Offset) -->
        <div class="partner-ref-track track-reverse">
          <!-- Set B -->
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_bank_jatim.svg') }}" alt="Bank Jatim" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_indomaret.svg') }}" alt="Indomaret" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_pelindo.svg') }}" alt="PT Pelindo BUMN" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_intel.png') }}" alt="Intel AI" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_hummasoft.png') }}" alt="Hummasoft" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_agmari.svg') }}" alt="AGMARI AKSESMU" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_yamaha.png') }}" alt="Yamaha Motor" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_maspion.png') }}" alt="Maspion IT" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_ubig.png') }}" alt="UBIG" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_tdi.png') }}" alt="Technopark TDI" loading="lazy"></div>

          <!-- Duplicate Set for infinite seamless loop -->
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_bank_jatim.svg') }}" alt="Bank Jatim" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_indomaret.svg') }}" alt="Indomaret" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_pelindo.svg') }}" alt="PT Pelindo BUMN" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_intel.png') }}" alt="Intel AI" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_hummasoft.png') }}" alt="Hummasoft" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_agmari.svg') }}" alt="AGMARI AKSESMU" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_yamaha.png') }}" alt="Yamaha Motor" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_maspion.png') }}" alt="Maspion IT" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_ubig.png') }}" alt="UBIG" loading="lazy"></div>
          <div class="partner-box-cell"><img src="{{ asset('images/partners/partner_tdi.png') }}" alt="Technopark TDI" loading="lazy"></div>
        </div>
      </div>

  <!-- 8. FAQ ACCORDION SECTION (MATCHING REFERENCE IMAGE 2) -->
  <section class="section-faq" id="faq">
    <div class="container">
      <div class="faq-header reveal-item">
        <h2 class="faq-title">
          Pertanyaan Seputar Agenda &amp; Kegiatan Sekolah
        </h2>
        <p class="faq-subtitle">
          Temukan jawaban lengkap dan transparan seputar layanan, program, dan informasi penting lainnya.
        </p>
      </div>

      <div class="faq-accordion-list reveal-item">
        <!-- FAQ Item 1 -->
        <div class="faq-item active">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="true">
            <span class="faq-question-text">Di mana saya bisa melihat liputan kegiatan dan update berita terbaru Smkn 1 Probolinggo?</span>
            <div class="faq-trigger-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-content">
            <p class="faq-answer-text">
              Seluruh liputan kegiatan, rilis pers, dokumentasi prestasi siswa, dan agenda resmi sekolah dipublikasikan secara berkala di portal Berita &amp; Agenda situs ini, serta disiarkan secara langsung melalui akun resmi Instagram @smkn1probolinggo dan kanal YouTube SMKN 1 Probolinggo.
            </p>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
            <span class="faq-question-text">Apakah masyarakat umum bisa mengunduh foto dokumentasi kegiatan?</span>
            <div class="faq-trigger-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-content">
            <p class="faq-answer-text">
              Ya, dokumentasi kegiatan publik seperti pelepasan wisuda, peringatan hari besar nasional, dan pameran Teaching Factory dapat diakses serta diunduh secara bebas untuk keperluan non-komersial melalui halaman Galeri Digital sekolah dengan menyertakan kredit resmi SMKN 1 Probolinggo.
            </p>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
            <span class="faq-question-text">Bagaimana cara mengirimkan liputan atau rilis pers kerjasama?</span>
            <div class="faq-trigger-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-content">
            <p class="faq-answer-text">
              Pihak media, mitra DUDI, atau instansi mitra dapat mengirimkan naskah siaran pers, proposal kemitraan, atau undangan peliputan melalui surel resmi Hubungan Masyarakat (Humas) di info@smkn1probolinggo.sch.id atau menghubungi layanan informasi WhatsApp Humas pada hari kerja.
            </p>
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
            <span class="faq-question-text">Kapan jadwal pendaftaran peserta didik baru (PPDB 2026) dibuka?</span>
            <div class="faq-trigger-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-content">
            <p class="faq-answer-text">
              PPDB SMKN 1 Probolinggo tahun ajaran 2026/2027 diselenggarakan bertahap melalui jalur afirmasi, perpindahan tugas orang tua, prestasi hasil lomba, dan zonasi. Panduan syarat berkas dan pendaftaran online dapat diakses langsung pada menu navigasi PPDB 2026.
            </p>
          </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="faq-item">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)" aria-expanded="false">
            <span class="faq-question-text">Bagaimana prosedur pemesanan produk Teaching Factory (TEFA) SMEXAMALL?</span>
            <div class="faq-trigger-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-content">
            <p class="faq-answer-text">
              Anda dapat menjelajahi etalase digital SMEXAMALL di portal ini, memilih produk aplikasi software, merchandise, hampers ritel, atau jasa akuntansi lembaga, kemudian menekan tombol 'Beli via WhatsApp' untuk langsung terhubung dengan unit Teaching Factory jurusan terkait.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('styles')
<style>
/* Hover effect untuk gambar jurusan yang clickable */
.jf-img-col a:hover img {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.jf-img-col a {
  overflow: hidden;
  border-radius: 12px;
  display: block;
}

.jf-img-col a img {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
</style>
@endpush

@push('scripts')
<script>
  // 1. Department Stacked Card Switcher Data & Logic (Matching Image 4)
  const majorData = {
    rpl: {
      title: 'Departemen Rekayasa Perangkat Lunak',
      badge: 'RPL • REKAYASA PERANGKAT LUNAK',
      desc: 'Fokus pada rekayasa aplikasi web modern, mobile Flutter, integrasi kecerdasan buatan terapan (Cloud AI), dan arsitektur database cloud binaan Axioo Sentra Digital & Jagoan Hosting.',
      img: '{{ asset("images/jurusan/lab_rpl.webp") }}',
      alt: 'Laboratorium Rekayasa Perangkat Lunak SMKN 1 Probolinggo'
    },
    bd: {
      title: 'Departemen Bisnis Digital & Pemasaran',
      badge: 'BD • BISNIS DIGITAL & RITEL',
      desc: 'Membekali keahlian strategi pemasaran digital omni-channel, live commerce studio, operasional marketplace, dan manajemen ritel modern binaan Alfamart Class & AGMARI AKSESMU.',
      img: '{{ asset("images/jurusan/lab_bd.webp") }}',
      alt: 'Studio Live Streaming & Ritel Bisnis Digital'
    },
    mplb: {
      title: 'Departemen Manajemen Perkantoran & Bisnis',
      badge: 'MPLB • MANAJEMEN PERKANTORAN',
      desc: 'Membentuk tenaga ahli administrasi modern dengan kemampuan kearsipan digital cloud, komunikasi bisnis bilingual, dan manajemen event profesional (MICE - Paperwork to Partywork).',
      img: '{{ asset("images/jurusan/lab_mplb.webp") }}',
      alt: 'Laboratorium Simulasi Perkantoran Digital MPLB'
    },
    akl: {
      title: 'Departemen Akuntansi & Keuangan Lembaga',
      badge: 'AKL • AKUNTANSI & KEUANGAN',
      desc: 'Keahlian akuntansi komputer berbasis Accurate dan MYOB, penyusunan laporan keuangan fiskal terstandar, dan perpajakan terapan Brevet A/B bekerjasama dengan KAP & Bank Jatim.',
      img: '{{ asset("images/jurusan/lab_akl.webp") }}',
      alt: 'Laboratorium Komputer Akuntansi AKL'
    },
    lpb: {
      title: 'Departemen Layanan Perbankan & Syariah',
      badge: 'LPB • LAYANAN PERBANKAN',
      desc: 'Mencetak frontliner perbankan terampil dalam operasional kas teller, customer service, administrasi pembiayaan mikro syariah, dan pengelolaan kas Mini Bank SMEXA.',
      img: '{{ asset("images/jurusan/lab_lpb.webp") }}',
      alt: 'Laboratorium Mini Bank SMEXA'
    }
  };

  function switchMajor(key) {
    const data = majorData[key];
    if (!data) return;
    
    // Update active tab buttons
    document.querySelectorAll('.deck-tab-btn').forEach(btn => {
      btn.classList.toggle('active', btn.getAttribute('data-major') === key);
    });

    const img = document.getElementById('deckCardImg');
    const title = document.getElementById('deckTitle');
    const desc = document.getElementById('deckDesc');
    const badgeText = document.getElementById('deckBadgeText');

    if (img && title && desc && badgeText) {
      img.style.opacity = '0.3';
      setTimeout(() => {
        img.src = data.img;
        img.alt = data.alt;
        title.textContent = data.title;
        desc.textContent = data.desc;
        badgeText.textContent = data.badge;
        img.style.opacity = '1';
      }, 150);
    }
  }

  // 2. FAQ Accordion Toggle (Matching Image 2)
  function toggleFaq(button) {
    const item = button.closest('.faq-item');
    if (!item) return;
    const isActive = item.classList.contains('active');
    
    document.querySelectorAll('.faq-item').forEach(el => {
      if (el !== item) {
        el.classList.remove('active');
        const btn = el.querySelector('.faq-trigger');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      }
    });

    item.classList.toggle('active', !isActive);
    button.setAttribute('aria-expanded', !isActive);
  }

  document.addEventListener('DOMContentLoaded', function() {
    // 3. Smooth Scroll Reveal (Hardware-Accelerated Fade-Up)
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealElements = document.querySelectorAll('.reveal-item');
    
    if (!prefersReducedMotion && 'IntersectionObserver' in window && revealElements.length > 0) {
      const revealObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const delay = parseInt(entry.target.getAttribute('data-delay') || '0', 10);
            setTimeout(() => {
              entry.target.classList.add('is-revealed');
            }, delay);
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

      revealElements.forEach(el => revealObserver.observe(el));
    } else {
      revealElements.forEach(el => el.classList.add('is-revealed'));
    }

    // 4. Animated Numeric Counter Ticker - Auto Start on Page Load
    const counterElements = document.querySelectorAll('.count-ticker');
    if (!prefersReducedMotion && counterElements.length > 0) {
      function startCountAnimation(el) {
        if (el.dataset.counted) return;
        el.dataset.counted = 'true';
        const target = parseInt(el.getAttribute('data-target') || '0', 10);
        const suffix = el.getAttribute('data-suffix') || '';
        const prefix = el.getAttribute('data-prefix') || '';
        const duration = 2000;
        const startTime = performance.now();

        function updateCounter(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          // Ease-out cubic untuk animasi smooth
          const easeProgress = 1 - Math.pow(1 - progress, 3);
          const currentVal = Math.floor(easeProgress * target);
          el.textContent = prefix + currentVal.toLocaleString('id-ID') + suffix;

          if (progress < 1) {
            requestAnimationFrame(updateCounter);
          } else {
            el.textContent = prefix + target.toLocaleString('id-ID') + suffix;
          }
        }
        requestAnimationFrame(updateCounter);
      }

      // Set initial value to 0
      counterElements.forEach(el => {
        const prefix = el.getAttribute('data-prefix') || '';
        const suffix = el.getAttribute('data-suffix') || '';
        el.textContent = prefix + '0' + suffix;
      });

      // Start animation immediately when page loads
      setTimeout(() => {
        counterElements.forEach(el => {
          startCountAnimation(el);
        });
      }, 300); // Small delay untuk smooth page load
    }
  });
</script>
@endpush
