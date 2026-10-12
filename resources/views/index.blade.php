@extends('layouts.app')

@section('title', 'Website Resmi SMKN 1 Probolinggo - Sekolah Pusat Keunggulan & BLUD')

@section('content')
  <!-- 1. Hero Section (Exact 1-Screen Viewport Matching Telkom) -->
  <section class="telkom-hero-section">
    <div class="container hero-container text-center">
      <div class="hero-top-badge reveal-item" data-delay="0">
        <span class="badge-pill">Selamat Datang di Portal Resmi SMKN 1 Probolinggo</span>
      </div>
      <h1 class="hero-main-title reveal-item" data-delay="50">
        Sekolah Tangguh, Berkarakter,<br>
        <span class="text-accent">&amp; Berwawasan Vokasi Digital</span>
      </h1>

      <!-- Hero Model Arch Frame -->
      <div class="hero-model-wrapper reveal-item" data-delay="100">
        <div class="hero-arch-frame">
          <img src="{{ asset('images/school_gate.webp') }}" alt="Gerbang dan Kampus Digital SMKN 1 Probolinggo" class="hero-student-img" width="760" height="320" fetchpriority="high" loading="eager">
        </div>
      </div>

      <!-- 2. Big Metric Strip (Overlapping Arch Bottom Perfectly Like Telkom) -->
      <div class="metric-strip-container reveal-item" data-delay="150">
        <div class="metric-item">
          <div class="metric-num count-ticker" data-target="5">5</div>
          <div class="metric-label">Konsentrasi Keahlian</div>
        </div>
        <div class="metric-item" style="border-left: 1px solid rgba(255,255,255,0.15); border-right: 1px solid rgba(255,255,255,0.15);">
          <div class="metric-num count-ticker" data-target="1800" data-suffix="+">1.800+</div>
          <div class="metric-label">Peserta Didik Aktif</div>
        </div>
        <div class="metric-item">
          <div class="metric-num count-ticker" data-target="98" data-suffix="%">98%</div>
          <div class="metric-label">Serapan Kerja BKK Mandiri</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Sambutan Kepala Sekolah (2-Kolom Horisontal Gaya Telkom) -->
  <section class="section-sambutan" id="sambutan">
    <div class="container sambutan-container">
      <div class="sambutan-photo-col reveal-item" data-delay="0">
        <div class="sambutan-arch-box">
          <img src="{{ asset('images/kepala_sekolah.webp') }}" alt="Edi Hananto Eko, M.Pd. - Kepala SMKN 1 Probolinggo" class="sambutan-img" width="320" height="400" loading="lazy">
        </div>
      </div>
      <div class="sambutan-text-col reveal-item" data-delay="100">
        <span class="sambutan-tag">Sambutan Pimpinan</span>
        <h2 class="sambutan-title">
          Kepala Sekolah<br>
          <span class="text-accent">SMKN 1 Probolinggo</span>
        </h2>
        <p class="sambutan-desc">
          Selamat datang di portal resmi SMKN 1 Probolinggo. Sebagai institusi vokasi unggulan rujukan Jawa Timur dan SMK Pusat Keunggulan berstatus BLUD, kami berkomitmen mencetak lulusan tangguh yang tidak hanya menguasai keahlian teknis era digital, melainkan juga berakhlak mulia dan siap kerja, melanjutkan studi, maupun berwirausaha mandiri (BMW).
        </p>
        <div class="sambutan-author">
          <strong>Edi Hananto Eko, M.Pd.</strong>
          <span>Kepala SMK Negeri 1 Probolinggo</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Mengapa Memilih SMKN 1 Probolinggo (100% Layout Telkom Sidoarjo) -->
  <section class="section-why-us" id="keunggulan">
    <div class="container">
      <div class="why-header-row reveal-item" data-delay="0">
        <div class="why-header-titles">
          <h2 class="why-title-black">Mengapa memilih</h2>
          <h2 class="why-title-brand">SMKN 1 Probolinggo?</h2>
        </div>
        <a href="{{ route('ppdb') }}" class="why-cta-pill">
          <span>Daftar Sekarang</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>

      <div class="why-card-grid">
        <!-- Card 1: School of Digital Era -->
        <div class="why-card reveal-item" data-delay="50">
          <div class="why-card-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3 class="why-card-title">School of Digital Era</h3>
          <p class="why-card-desc">Fokus pada kurikulum digital dan keterampilan teknologi masa depan.</p>
        </div>

        <!-- Card 2 (Featured Card): Program Digital Talent -->
        <div class="why-card featured reveal-item" data-delay="100">
          <div class="why-card-featured-top">
            <div class="why-card-icon featured-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#082046" stroke-width="1.8"><rect x="3" y="4" width="18" height="12" rx="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
            </div>
            <div class="why-featured-arrow">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </div>
          </div>
          <h3 class="why-card-title">Program Digital Talent</h3>
          <p class="why-card-desc">Pembekalan skill digital yang sesuai kebutuhan industri dan startup.</p>
        </div>

        <!-- Card 3: Akreditasi A - Unggul -->
        <div class="why-card reveal-item" data-delay="150">
          <div class="why-card-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H8v2h8v-2h-1c-.55 0-1-.45-1-1v-2.34"/><path d="M6 4h12a2 2 0 0 1 2 2v3a6 6 0 0 1-6 6h0a6 6 0 0 1-6-6V6a2 2 0 0 1 2-2Z"/></svg>
          </div>
          <h3 class="why-card-title">Akreditasi A – Unggul</h3>
          <p class="why-card-desc">Diakui secara nasional dengan standar kualitas terbaik oleh BAN-S/M.</p>
        </div>

        <!-- Card 4: ISO 21001:2018 & BNSP -->
        <div class="why-card reveal-item" data-delay="200">
          <div class="why-card-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><line x1="9" y1="12" x2="11" y2="12"/><line x1="9" y1="16" x2="15" y2="16"/></svg>
          </div>
          <h3 class="why-card-title">ISO 21001:2018 &amp; BNSP</h3>
          <p class="why-card-desc">Telah menerapkan standar manajemen pendidikan internasional dan sertifikasi profesi.</p>
        </div>

        <!-- Card 5: Program Kelas Industri -->
        <div class="why-card reveal-item" data-delay="250">
          <div class="why-card-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
          </div>
          <h3 class="why-card-title">Program Kelas Industri</h3>
          <p class="why-card-desc">Jalur pendidikan berkelanjutan dari SMK hingga dunia kerja dan industri terkemuka.</p>
        </div>

        <!-- Card 6: Pusat Keunggulan & BLUD -->
        <div class="why-card reveal-item" data-delay="300">
          <div class="why-card-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </div>
          <h3 class="why-card-title">Pusat Keunggulan &amp; BLUD</h3>
          <p class="why-card-desc">Bagian dari ekosistem vokasi terpercaya dengan serapan kerja dan tracer study teruji.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Mitra Industri DUDI (Dashed Border Card Grid Gaya Telkom) -->
  <section class="section-mitra-dudi" id="mitra">
    <div class="container text-center">
      <span style="font-size: 0.7rem; font-weight: 700; color: #2563EB; background: #EFF6FF; padding: 3px 12px; border-radius: 9999px; display: inline-block; margin-bottom: 8px;">Kemitraan Industri Nasional</span>
      <h2 class="dual-heading" style="margin: 0;">Mitra DUDI &amp; Lembaga Sertifikasi</h2>
      <div class="partner-dashed-grid reveal-item" data-delay="100">
        <div class="partner-dashed-card">
          <img src="{{ asset('images/partners/partner_axioo.png') }}" alt="Axioo Class" loading="lazy">
        </div>
        <div class="partner-dashed-card">
          <img src="{{ asset('images/partners/partner_alfamart.png') }}" alt="Alfamart Class" loading="lazy">
        </div>
        <div class="partner-dashed-card">
          <img src="{{ asset('images/partners/partner_bank_jatim.svg') }}" alt="Bank Jatim" loading="lazy">
        </div>
        <div class="partner-dashed-card">
          <img src="{{ asset('images/partners/partner_jagoanhosting.png') }}" alt="Jagoan Hosting" loading="lazy">
        </div>
        <div class="partner-dashed-card">
          <img src="{{ asset('images/partners/partner_agmari.svg') }}" alt="AGMARI AKSESMU" loading="lazy">
        </div>
        <div class="partner-dashed-card">
          <img src="{{ asset('images/partners/partner_hummasoft.png') }}" alt="Hummasoft Technology" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Program Keahlian (Interactive 5-Major Department Tabs Matching Telkom) -->
  <section class="section-program-keahlian" id="jurusan">
    <div class="container">
      <div class="text-center reveal-item" data-delay="0">
        <h2 class="dual-heading" style="margin: 0 0 6px;">
          Program Keahlian <span class="text-accent">di SMKN 1 Probolinggo</span>
        </h2>
        <p style="color: #64748B; font-size: 0.84rem; margin: 0 auto; max-width: 540px;">
          Pilih konsentrasi keahlian berstandar industri untuk melihat fasilitas lab, kurikulum unggulan, dan proyeksi karier masa depan.
        </p>
      </div>

      <!-- Tab Buttons Navigation -->
      <div class="major-tabs-nav reveal-item" data-delay="50">
        <button type="button" class="major-tab-pill active" data-major="rpl" onclick="selectMajor('rpl')">Rekayasa Perangkat Lunak</button>
        <button type="button" class="major-tab-pill" data-major="bd" onclick="selectMajor('bd')">Bisnis Digital</button>
        <button type="button" class="major-tab-pill" data-major="mplb" onclick="selectMajor('mplb')">Manajemen Perkantoran</button>
        <button type="button" class="major-tab-pill" data-major="akl" onclick="selectMajor('akl')">Akuntansi</button>
        <button type="button" class="major-tab-pill" data-major="lpb" onclick="selectMajor('lpb')">Layanan Perbankan</button>
      </div>

      <!-- Interactive Display Box -->
      <div class="major-display-box reveal-item" data-delay="100" id="majorDisplayCard">
        <div class="major-display-left">
          <img src="{{ asset('images/jurusan/lab_rpl.webp') }}" alt="Laboratorium RPL" class="major-display-img" id="majorImg" loading="lazy">
        </div>
        <div class="major-display-right">
          <span style="font-size: 0.75rem; font-weight: 700; color: #2563EB; background: #EFF6FF; padding: 4px 10px; border-radius: 4px; display: inline-block; margin-bottom: 8px;" id="majorBadge">
            Kelas Industri Axioo &amp; Jagoan Hosting
          </span>
          <h3 class="major-display-title" id="majorTitle">Rekayasa Perangkat Lunak</h3>
          <p class="major-display-desc" id="majorDesc">
            Fokus pada rekayasa aplikasi web modern (Laravel &amp; React), mobile Flutter, database cloud, dan integrasi AI terapan binaan Axioo Smart Classroom.
          </p>

          <div class="major-feature-list" id="majorFeatures">
            <div class="major-feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Full-Stack Web (Laravel, React) &amp; Mobile Flutter Development</span>
            </div>
            <div class="major-feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Uji Sertifikasi Profesi BNSP Junior Web Developer &amp; LSP-P1</span>
            </div>
            <div class="major-feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Unit Produksi Software House &amp; TEFA di Marketplace SMEXAMALL</span>
            </div>
          </div>

          <div class="major-prospect-box" id="majorProspect">
            <strong>Prospek Karier:</strong> Software Engineer, Full-Stack Web Developer, Mobile App Developer, Database Administrator, IT Consultant.
          </div>

          <a href="{{ route('jurusan.rpl') }}" class="major-cta-btn" id="majorCtaLink">
            <span>Pelajari Lebih Lanjut</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
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
        <a href="{{ route('berita.index') }}" class="btn btn-outline-navy btn-sm" style="display: inline-flex; align-items: center; gap: 6px; font-weight: 700;">
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
            <a href="{{ route('berita.show', 1) }}" class="news-card-link">
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
            <a href="{{ route('berita.show', 2) }}" class="news-card-link">
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
            <a href="{{ route('berita.show', 3) }}" class="news-card-link">
              <span>Baca Selengkapnya</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 6.4. Ekstrakurikuler Section -->
  <section class="section" id="ekstrakurikuler" style="background: #FFFFFF; padding: 52px 0;">
    <div class="container">
      <!-- Header -->
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;" class="reveal-item">
        <div style="text-align: left;">
          <h2 style="font-family: var(--font-heading); font-size: 1.65rem; font-weight: 800; color: #082046; margin: 0 0 4px; letter-spacing: -0.02em;">
            Ekstrakurikuler
          </h2>
          <p style="font-family: var(--font-heading); font-size: 0.875rem; font-weight: 700; color: #64748B; margin: 0;">
            SMK NEGERI 1 PROBOLINGGO
          </p>
        </div>
        <a href="#ekstrakurikuler" style="font-size: 0.8125rem; font-weight: 700; color: #2563EB; text-decoration: none; display: flex; align-items: center; gap: 6px; transition: gap 0.2s ease;">
          <span>Lihat Semua Ekstrakurikuler</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>

      <!-- Horizontal Scroll Cards -->
      <div class="ekstra-scroll-container reveal-item" data-delay="50">
        <div class="ekstra-scroll-wrapper">
          
          <!-- Card 1: Volly Ball -->
          <a href="{{ route('ekstra.show', 'volly-ball') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-volly.webp') }}" alt="Volly Ball SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Volly Ball</h3>
          </a>

          <!-- Card 2: KOPTUDA -->
          <a href="{{ route('ekstra.show', 'koptuda') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-koptuda.webp') }}" alt="KOPTUDA SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Koperasi Tunas Muda</h3>
          </a>

          <!-- Card 3: PIK-R Srikandi -->
          <a href="{{ route('ekstra.show', 'pikr-srikandi') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-pikr.webp') }}" alt="PIK-R Srikandi SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">PIK-R Srikandi</h3>
          </a>

          <!-- Card 4: Futsal -->
          <a href="{{ route('ekstra.show', 'futsal') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-futsal.webp') }}" alt="Futsal SMEXA PRO" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Futsal SMEXA PRO</h3>
          </a>

          <!-- Card 5: Remaja Masjid -->
          <a href="{{ route('ekstra.show', 'remaja-masjid') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-remaja-masjid.webp') }}" alt="Remaja Masjid SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Remaja Masjid</h3>
          </a>

          <!-- Card 6: Tari (Mustika Taruna) -->
          <a href="{{ route('ekstra.show', 'mustika-taruna') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-tari.webp') }}" alt="Mustika Taruna SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Tari (Mustika Taruna)</h3>
          </a>

          <!-- Card 7: Smexa Music -->
          <a href="{{ route('ekstra.show', 'smexa-music') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-music.webp') }}" alt="Smexa Music" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Smexa Music</h3>
          </a>

          <!-- Card 8: Paduan Suara -->
          <a href="{{ route('ekstra.show', 'paduan-suara') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-paduan-suara.webp') }}" alt="Paduan Suara Gita Bahana" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Paduan Suara Gita Bahana</h3>
          </a>

          <!-- Card 9: Basket -->
          <a href="{{ route('ekstra.show', 'comrade-basketball') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-basket.webp') }}" alt="Comrade Basketball" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Comrade Basketball</h3>
          </a>

          <!-- Card 10: Pencak Silat -->
          <a href="{{ route('ekstra.show', 'pencak-silat') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-pencak-silat.webp') }}" alt="Pencak Silat SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Pencak Silat</h3>
          </a>

          <!-- Card 11: Pramuka -->
          <a href="{{ route('ekstra.show', 'pramuka') }}" class="ekstra-card">
            <div class="ekstra-card-image">
              <img src="{{ asset('images/ekstra-pramuka.webp') }}" alt="Pramuka SMKN 1 Probolinggo" loading="lazy">
            </div>
            <h3 class="ekstra-card-title">Pramuka</h3>
          </a>

        </div>
      </div>
    </div>
  </section>

  <style>
    .ekstra-scroll-container {
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: thin;
      scrollbar-color: #CBD5E1 #F1F5F9;
    }
    
    .ekstra-scroll-container::-webkit-scrollbar {
      height: 8px;
    }
    
    .ekstra-scroll-container::-webkit-scrollbar-track {
      background: #F1F5F9;
      border-radius: 4px;
    }
    
    .ekstra-scroll-container::-webkit-scrollbar-thumb {
      background: #CBD5E1;
      border-radius: 4px;
    }
    
    .ekstra-scroll-container::-webkit-scrollbar-thumb:hover {
      background: #94A3B8;
    }
    
    .ekstra-scroll-wrapper {
      display: flex;
      gap: 20px;
      padding-bottom: 12px;
    }
    
    .ekstra-card {
      flex: 0 0 280px;
      background: #FFFFFF;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
      text-decoration: none;
      transition: all 0.3s ease;
      border: 1px solid #E2E8F0;
    }
    
    .ekstra-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
      border-color: #CBD5E1;
    }
    
    .ekstra-card-image {
      width: 100%;
      height: 180px;
      overflow: hidden;
      background: #F1F5F9;
    }
    
    .ekstra-card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    
    .ekstra-card:hover .ekstra-card-image img {
      transform: scale(1.05);
    }
    
    .ekstra-card-title {
      font-family: var(--font-heading);
      font-size: 1rem;
      font-weight: 700;
      color: #082046;
      padding: 16px 18px;
      margin: 0;
      line-height: 1.4;
    }
    
    @media (max-width: 768px) {
      #ekstrakurikuler {
        padding: 60px 0 !important;
      }
      
      .ekstra-card {
        flex: 0 0 240px;
      }
    }
  </style>

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

      <!-- Right Column: 3 Authentic Testimonial Cards -->
      <div class="alumni-cards-col reveal-item" data-delay="100">
        <!-- Alumni Card 1 -->
        <a href="{{ route('alumni.show', 1) }}" class="alumni-card-item" aria-label="Cerita Alumni Mohammad Rizal">
          <div class="alumni-card-header">
            <img src="{{ asset('images/mohammad-rizal-foto.png') }}" alt="Mohammad Rizal" class="alumni-card-avatar" width="48" height="48" loading="lazy">
            <div class="alumni-card-info">
              <span class="alumni-card-name">Mohammad Rizal, S.Kom.</span>
              <span class="alumni-card-role">Senior Software Engineer</span>
            </div>
          </div>
          <span class="alumni-card-badge">Rekayasa Perangkat Lunak '17</span>
          <p class="alumni-card-quote">"Fondasi pemrograman & kedisiplinan industri di SMKN 1 Probolinggo membuktikan siswa SMK mampu bersaing menjadi Tech Lead."</p>
          <span class="alumni-card-cta">Baca Kisah Inspiratif &rarr;</span>
        </a>

        <!-- Alumni Card 2 -->
        <a href="{{ route('alumni.show', 2) }}" class="alumni-card-item" aria-label="Cerita Alumni Amanda Putri Pratama">
          <div class="alumni-card-header">
            <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Amanda Putri Pratama" class="alumni-card-avatar" width="48" height="48" loading="lazy">
            <div class="alumni-card-info">
              <span class="alumni-card-name">Amanda Putri Pratama</span>
              <span class="alumni-card-role">Digital Strategist & Founder</span>
            </div>
          </div>
          <span class="alumni-card-badge">Bisnis Digital '20</span>
          <p class="alumni-card-quote">"Praktik langsung di SMEXAMALL melatih keberanian eksekusi strategi live commerce dan manajemen bisnis riil."</p>
          <span class="alumni-card-cta">Baca Kisah Inspiratif &rarr;</span>
        </a>

        <!-- Alumni Card 3 -->
        <a href="{{ route('alumni.show', 3) }}" class="alumni-card-item" aria-label="Cerita Alumni Dimas Wahyu Prasetyo">
          <div class="alumni-card-header">
            <img src="{{ asset('images/jurusan/lab_lpb.webp') }}" alt="Dimas Wahyu Prasetyo" class="alumni-card-avatar" width="48" height="48" loading="lazy">
            <div class="alumni-card-info">
              <span class="alumni-card-name">Dimas Wahyu Prasetyo</span>
              <span class="alumni-card-role">Relationship Officer Bank Jatim</span>
            </div>
          </div>
          <span class="alumni-card-badge">Layanan Perbankan '19</span>
          <p class="alumni-card-quote">"Simulasi Mini Bank SMEXA dan rekomendasi Bursa Kerja Khusus mengantarkan saya berkarier di perbankan sebelum wisuda."</p>
          <span class="alumni-card-cta">Baca Kisah Inspiratif &rarr;</span>
        </a>
      </div>
    </div>
  </section>

  <style>
    .section-cerita-alumni {
      background: #F8FAFC;
      padding: 52px 0;
      position: relative;
      overflow: hidden;
      border-top: 1px solid #E2E8F0;
      border-bottom: 1px solid #E2E8F0;
    }
    .alumni-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 36px;
    }
    .alumni-text-col {
      flex: 0 0 300px;
      max-width: 320px;
    }
    .alumni-heading {
      font-family: var(--font-heading);
      font-size: 1.85rem;
      font-weight: 800;
      color: #082046;
      line-height: 1.18;
      margin: 0 0 10px 0;
      letter-spacing: -0.02em;
    }
    .alumni-desc {
      font-size: 0.8125rem;
      line-height: 1.6;
      color: #64748B;
      margin: 0;
      font-weight: 500;
    }
    .alumni-cards-col {
      display: flex;
      align-items: stretch;
      gap: 16px;
      flex: 1;
      justify-content: flex-end;
    }
    .alumni-card-item {
      flex: 1;
      max-width: 250px;
      min-width: 210px;
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 10px;
      padding: 16px 16px;
      display: flex;
      flex-direction: column;
      text-decoration: none;
      color: inherit;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
      transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }
    .alumni-card-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 18px rgba(0, 37, 101, 0.07);
      border-color: #3B82F6;
    }
    .alumni-card-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }
    .alumni-card-avatar {
      width: 40px;
      height: 40px;
      border-radius: 6px;
      object-fit: cover;
      background: #E2E8F0;
      flex-shrink: 0;
    }
    .alumni-card-info {
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }
    .alumni-card-name {
      font-size: 0.85rem;
      font-weight: 700;
      color: #082046;
      line-height: 1.3;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .alumni-card-role {
      font-size: 0.725rem;
      color: #64748B;
      line-height: 1.3;
      margin-top: 1px;
    }
    .alumni-card-badge {
      display: inline-block;
      align-self: flex-start;
      font-size: 0.675rem;
      font-weight: 700;
      color: #1D4ED8;
      background: #EFF6FF;
      padding: 2px 7px;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    .alumni-card-quote {
      font-size: 0.75rem;
      line-height: 1.55;
      color: #334155;
      margin: 0 0 12px 0;
      flex-grow: 1;
    }
    .alumni-card-cta {
      font-size: 0.725rem;
      font-weight: 700;
      color: #2563EB;
      display: inline-flex;
      align-items: center;
      margin-top: auto;
      transition: color 0.2s ease;
    }
    .alumni-card-item:hover .alumni-card-cta {
      color: #1D4ED8;
    }
    @media (max-width: 1024px) {
      .alumni-container {
        flex-direction: column;
        align-items: flex-start;
        gap: 32px;
      }
      .alumni-text-col {
        flex: none;
        max-width: 100%;
      }
      .alumni-cards-col {
        width: 100%;
        justify-content: flex-start;
        overflow-x: auto;
        padding-bottom: 12px;
      }
      .alumni-card-item {
        flex: 0 0 260px;
      }
    }
  </style>

  <!-- 7. Kerja Sama Industri Mitra DUDI (MATCHING REFERENCE IMAGE 3) -->
  <section class="partner-ref-section" id="mitra">
    <div class="container">
      <div class="partner-ref-header reveal-item" style="text-align: center; justify-content: center;">
        <div>
          <h2 class="partner-ref-title" style="font-size: 1.75rem; margin: 0 auto;">
            Mitra Dunia Industri
          </h2>
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
  // 1. Department Tabs Interactive Switcher (SMK Telkom Architecture)
  const majorData = {
    rpl: {
      title: 'Rekayasa Perangkat Lunak',
      badge: 'Kelas Industri Axioo & Jagoan Hosting',
      desc: 'Fokus pada rekayasa aplikasi web modern (Laravel & React), mobile Flutter, database cloud, dan integrasi AI terapan binaan Axioo Smart Classroom.',
      img: '{{ asset("images/jurusan/lab_rpl.webp") }}',
      alt: 'Laboratorium Rekayasa Perangkat Lunak',
      url: '{{ route("jurusan.rpl") }}',
      features: [
        'Full-Stack Web (Laravel, React) & Mobile Flutter Development',
        'Uji Sertifikasi Profesi BNSP Junior Web Developer & LSP-P1',
        'Unit Produksi Software House & TEFA di Marketplace SMEXAMALL'
      ],
      prospect: 'Software Engineer, Full-Stack Web Developer, Mobile App Developer, Database Administrator, IT Consultant.'
    },
    bd: {
      title: 'Bisnis Digital',
      badge: 'Kemitraan Industri Alfamart Class & AGMARI',
      desc: 'Mencetak wirausahawan digital, spesialis e-commerce, digital marketing, live commerce streaming, dan pengelolaan ritel modern omnichannel.',
      img: '{{ asset("images/jurusan/lab_bd.webp") }}',
      alt: 'Laboratorium Bisnis Digital',
      url: '{{ route("jurusan.bd") }}',
      features: [
        'Praktik Live Streaming Sales & Marketplace Store Management',
        'Digital Ads Optimization (Meta Ads, Google Ads, TikTok Ads)',
        'Inkubator Bisnis Siswa & Pengelolaan Minimarket Sekolah (SMEXAMART)'
      ],
      prospect: 'Digital Marketer, E-Commerce Specialist, Social Media Strategist, Content Creator, Entrepreneur / Founder Startup.'
    },
    mplb: {
      title: 'Manajemen Perkantoran & Layanan Bisnis',
      badge: 'Standar Otomasi Perkantoran Modern',
      desc: 'Keahlian tata kelola administrasi modern, korespondensi digital, digital archiving, public relations, dan etika komunikasi eksekutif.',
      img: '{{ asset("images/jurusan/lab_mplb.webp") }}',
      alt: 'Laboratorium Manajemen Perkantoran',
      url: '{{ route("jurusan.mp") }}',
      features: [
        'Penguasaan Paperless Office Management & Cloud Collaboration Suites',
        'Simulasi Manajemen Rapat, Event Organizing & Keprotokolan',
        'Sertifikasi Kompetensi Otomasi Tata Kelola Perkantoran LSP-P1'
      ],
      prospect: 'Executive Administrative Assistant, Office Manager, Public Relations Officer, Customer Care Specialist, Records Manager.'
    },
    akl: {
      title: 'Akuntansi & Keuangan Lembaga',
      badge: 'Komputerisasi Akuntansi & FinTech',
      desc: 'Mendalami akuntansi keuangan terkomputerisasi (MYOB & Accurate), pelaporan pajak digital, audit keuangan lembaga, dan analisis laporan bisnis.',
      img: '{{ asset("images/jurusan/lab_akl.webp") }}',
      alt: 'Laboratorium Akuntansi & Keuangan',
      url: '{{ route("jurusan.ak") }}',
      features: [
        'Laboratorium Komputer Akuntansi Terintegrasi Software Industri',
        'Praktik Perpajakan Terapan (e-Faktur, e-SPT) & Akuntansi Sektor Publik',
        'Unit Layanan Jasa Akuntansi Sekolah & Koperasi Siswa'
      ],
      prospect: 'Staff Akuntansi & Keuangan, Junior Auditor, Tax Consultant Assistant, Payroll Specialist, Budget Analyst.'
    },
    lpb: {
      title: 'Layanan Perbankan',
      badge: 'Binaan Bank Jatim & Lembaga Keuangan Formal',
      desc: 'Mempersiapkan tenaga perbankan profesional, customer service prima, teller operasional bank, manajemen kredit mikro, dan transaksi digital banking.',
      img: '{{ asset("images/jurusan/lab_lpb.webp") }}',
      alt: 'Laboratorium Layanan Perbankan (Mini Bank)',
      url: '{{ route("jurusan.lp") }}',
      features: [
        'Mini Bank Laboratorium dengan SOP Pelayanan Standar Perbankan Nasional',
        'Simulasi Front Office (Customer Service & Teller) & Back Office',
        'Praktik Penanganan Uang Tunai, Validasi Keaslian Uang & Digital Banking'
      ],
      prospect: 'Bank Teller, Customer Service Representative, Credit Officer, Staff Operasional Lembaga Keuangan / BPR, Cashier Executive.'
    }
  };

  function selectMajor(key) {
    const data = majorData[key];
    if (!data) return;

    // Update active tab buttons
    document.querySelectorAll('.major-tab-pill').forEach(btn => {
      if (btn.dataset.major === key) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });

    // Animate display card slightly and update content
    const card = document.getElementById('majorDisplayCard');
    if (card) {
      card.style.opacity = '0.6';
      card.style.transition = 'opacity 0.2s ease';
      setTimeout(() => {
        const img = document.getElementById('majorImg');
        const badge = document.getElementById('majorBadge');
        const title = document.getElementById('majorTitle');
        const desc = document.getElementById('majorDesc');
        const features = document.getElementById('majorFeatures');
        const prospect = document.getElementById('majorProspect');
        const cta = document.getElementById('majorCtaLink');

        if (img) { img.src = data.img; img.alt = data.alt; }
        if (badge) badge.textContent = data.badge;
        if (title) title.textContent = data.title;
        if (desc) desc.textContent = data.desc;
        if (cta) cta.href = data.url;

        if (features) {
          features.innerHTML = data.features.map(f => `
            <div class="major-feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>${f}</span>
            </div>
          `).join('');
        }

        if (prospect) {
          prospect.innerHTML = `<strong>Prospek Karier:</strong> ${data.prospect}`;
        }

        card.style.opacity = '1';
      }, 120);
    }
  }

  // 2. FAQ Accordion Toggle (Clean Accessible Interactive Pattern)
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
