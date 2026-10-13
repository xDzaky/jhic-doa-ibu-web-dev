@extends('layouts.app')

@section('title', 'Website Resmi SMKN 1 Probolinggo - Sekolah Pusat Keunggulan & BLUD')

@section('content')
  <!-- 1. Hero Section (Exact 1-Screen Viewport Matching Telkom dengan Foto Cutout hero sec.webp) -->
  <section class="telkom-hero-section">
    <div class="container hero-container text-center">
      <div class="hero-eyebrow reveal-item" data-delay="0">
        Selamat Datang di <span class="text-accent">SMKN 1 Probolinggo!</span>
      </div>
      <h1 class="hero-main-title reveal-item" data-delay="50">
        Sekolah Tangguh, Berkarakter,<br>
        <span class="text-accent">&amp; Berwawasan Vokasi Digital</span>
      </h1>

      <!-- Hero Model Stage dengan Lingkaran Dashed Telkom di Belakang Foto Cutout -->
      <div class="hero-stage-wrapper reveal-item" data-delay="100">
        <div class="hero-dashed-arc-circle"></div>
        <img src="{{ asset('images/rial.webp') }}" alt="Gedung Technopark SMKN 1 Probolinggo" class="hero-student-img" width="520" height="340" fetchpriority="high" loading="eager">
      </div>

      <!-- 2. Big Metric Strip Counter Bar (Overlapping Bottom Foto Persis Telkom) -->
      <div class="metric-strip-container reveal-item" data-delay="150">
        <div class="metric-item">
          <div class="metric-num count-ticker" data-target="5">5</div>
          <div class="metric-label">Konsentrasi Keahlian</div>
        </div>
        <div class="metric-item">
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

  <!-- 3. Sambutan Kepala Sekolah (Persis 100% Layout Telkom Sidoarjo) -->
  <section class="section-sambutan" id="sambutan">
    <div class="container sambutan-container">
      <div class="sambutan-photo-col reveal-item" data-delay="0">
        <div class="sambutan-visual-frame">
          <div class="sambutan-deco-pill"></div>
          <div class="sambutan-deco-arch"></div>
          <img src="{{ asset('images/kepala_sekolah.webp') }}" alt="Edi Hananto Eko, M.Pd. - Kepala SMKN 1 Probolinggo" class="sambutan-model-img" width="340" height="420" loading="lazy">
        </div>
      </div>
      <div class="sambutan-text-col reveal-item" data-delay="100">
        <div class="sambutan-eyebrow">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          <span>Sambutan</span>
        </div>
        <div class="sambutan-heading-group">
          <h2 class="sambutan-title">Kepala Sekolah</h2>
          <h3 class="sambutan-school-name">SMKN 1 Probolinggo</h3>
        </div>
        <p class="sambutan-desc">
          Selamat datang di website resmi SMKN 1 Probolinggo. Sebagai institusi pendidikan vokasi yang berfokus pada keahlian teknologi dan vokasi digital unggulan di Jawa Timur, kami berkomitmen mencetak generasi yang tidak hanya unggul dalam kompetensi, tetapi juga berkarakter dan siap menghadapi tantangan era digital. Semoga kehadiran website ini menjadi jendela informasi yang bermanfaat bagi seluruh masyarakat.
        </p>
        <div class="sambutan-signature">
          — Edi Hananto Eko, M.Pd.
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

  <!-- 5. Mitra Industri DUDI (Infinite Marquee Running Animated Gaya Telkom Tanpa Judul) -->
  <section class="section-mitra-marquee" id="mitra">
    <div class="marquee-track-container">
      <div class="marquee-track">
        <!-- Set 1 -->
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_axioo.png') }}" alt="Axioo Class" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_alfamart.png') }}" alt="Alfamart Class" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_bank_jatim.svg') }}" alt="Bank Jatim" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_jagoanhosting.png') }}" alt="Jagoan Hosting" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_agmari.svg') }}" alt="AGMARI AKSESMU" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_hummasoft.png') }}" alt="Hummasoft" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_intel.png') }}" alt="Intel" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_indomaret.svg') }}" alt="Indomaret" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_maspion.png') }}" alt="Maspion" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_ubig.png') }}" alt="UBIG" loading="lazy">
        </div>

        <!-- Set 2 (Duplikasi untuk Seamless Infinite Loop) -->
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_axioo.png') }}" alt="Axioo Class" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_alfamart.png') }}" alt="Alfamart Class" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_bank_jatim.svg') }}" alt="Bank Jatim" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_jagoanhosting.png') }}" alt="Jagoan Hosting" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_agmari.svg') }}" alt="AGMARI AKSESMU" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_hummasoft.png') }}" alt="Hummasoft" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_intel.png') }}" alt="Intel" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_indomaret.svg') }}" alt="Indomaret" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_maspion.png') }}" alt="Maspion" loading="lazy">
        </div>
        <div class="partner-marquee-card">
          <img src="{{ asset('images/partners/partner_ubig.png') }}" alt="UBIG" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Program Keahlian (100% Persis Telkom Sidoarjo dengan Model Siswa) -->
  <section class="section-program-keahlian" id="jurusan">
    <div class="container">
      <div class="text-center reveal-item" data-delay="0">
        <h2 class="program-main-title">
          Program Keahlian<br>
          <span>di SMKN 1 Probolinggo</span>
        </h2>
      </div>

      <!-- Tab Buttons Navigation Capsule -->
      <div class="program-tab-wrapper reveal-item" data-delay="50">
        <div class="program-tabs-capsule">
          <button type="button" class="program-tab-btn active" data-major="rpl" onclick="selectMajor('rpl')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1 4-10z"/></svg>
            <span>RPL</span>
          </button>
          <button type="button" class="program-tab-btn" data-major="bd" onclick="selectMajor('bd')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            <span>BD</span>
          </button>
          <button type="button" class="program-tab-btn" data-major="mplb" onclick="selectMajor('mplb')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            <span>MPLB</span>
          </button>
          <button type="button" class="program-tab-btn" data-major="akl" onclick="selectMajor('akl')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            <span>AKL</span>
          </button>
          <button type="button" class="program-tab-btn" data-major="lpb" onclick="selectMajor('lpb')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
            <span>LPB</span>
          </button>
        </div>
      </div>

      <!-- Interactive Display Box (2-Column Telkom Layout) -->
      <div class="program-display-card reveal-item" data-delay="100" id="majorDisplayCard">
        <!-- Visual Model Siswa dengan Arch Telkom -->
        <div class="program-visual-col">
          <div class="program-arch-wrapper">
            <div class="program-deco-shape"></div>
            <div class="program-deco-dashed"></div>
            <img src="{{ asset('images/jurusan/bg_bd.webp') }}" alt="Model Siswa Kejuruan" class="program-model-img" id="majorImg" loading="lazy">
          </div>
        </div>

        <!-- Detail Konten Jurusan -->
        <div class="program-content-col">
          <h3 class="program-title" id="majorTitle">
            <span class="text-accent" id="majorTitleAccent">Rekayasa</span> <span id="majorTitleRest">Perangkat Lunak</span>
          </h3>
          <p class="program-desc" id="majorDesc">
            Program 3 tahun yang mempelajari rekayasa web modern (Laravel &amp; React), mobile Flutter, database cloud, dan integrasi AI terapan berstandar Axioo Smart Classroom.
          </p>

          <!-- 3 Fitur Poin dengan Icon Bulat -->
          <div class="program-points-list" id="majorFeatures">
            <div class="program-point-item">
              <div class="program-point-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
              </div>
              <div class="program-point-text">
                <strong>Software Development</strong>
                <p>Belajar membuat aplikasi web modern, mobile Flutter, dan sistem cloud yang fungsional.</p>
              </div>
            </div>
            <div class="program-point-item">
              <div class="program-point-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
              </div>
              <div class="program-point-text">
                <strong>Database &amp; Cloud Computing</strong>
                <p>Arsitektur database relasional, RESTful API backend, dan server cloud hosting mandiri.</p>
              </div>
            </div>
            <div class="program-point-item">
              <div class="program-point-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
              </div>
              <div class="program-point-text">
                <strong>Networking &amp; Cybersecurity</strong>
                <p>Sertifikasi BNSP Junior Web Developer, keamanan aplikasi, dan unit produksi SMEXAMALL.</p>
              </div>
            </div>
          </div>

          <!-- Prospek Kerja -->
          <div class="program-prospect-row" id="majorProspectBox">
            <strong class="prospect-label">Prospek Kerja:</strong>
            <p class="prospect-names" id="majorProspect">Software Engineer, Web Developer, Mobile App Developer, Database Administrator, IT Consultant.</p>
          </div>

          <!-- Tombol CTA -->
          <a href="{{ route('jurusan.rpl') }}" class="program-cta-btn" id="majorCtaLink">
            <span>Pelajari lebih lanjut</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Berita & Informasi Terkini (Matching Telkom 2-Kolom + Hybrid Kreatif UI/UX Pro Max) -->
  <section class="section-berita-telkom" id="berita">
    <div class="container">
      <!-- Section Header -->
      <div class="berita-telkom-header reveal-item" data-delay="0">
        <h2 class="berita-telkom-title">
          Berita &amp; Informasi Terkini<br>
          <span class="text-accent">SMKN 1 Probolinggo</span>
        </h2>
      </div>

      <!-- 2-Column Layout: Sidebar Kategori di Kiri + Grid 6 Kartu di Kanan -->
      <div class="berita-telkom-layout">
        <!-- Sidebar Kategori Interaktif -->
        <aside class="berita-category-sidebar reveal-item" data-delay="50">
          <div class="berita-category-heading">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.2"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"/></svg>
            <span>Kategori Berita</span>
          </div>
          <ul class="berita-category-list">
            <li>
              <button type="button" class="berita-cat-btn active" data-cat="all" onclick="filterNewsCategory('all', this)">
                <span>Semua Berita</span>
                <span class="cat-count">6</span>
              </button>
            </li>
            <li>
              <button type="button" class="berita-cat-btn" data-cat="kegiatan" onclick="filterNewsCategory('kegiatan', this)">
                <span>Kegiatan Sekolah</span>
                <span class="cat-count">2</span>
              </button>
            </li>
            <li>
              <button type="button" class="berita-cat-btn" data-cat="prestasi" onclick="filterNewsCategory('prestasi', this)">
                <span>Prestasi Siswa</span>
                <span class="cat-count">2</span>
              </button>
            </li>
            <li>
              <button type="button" class="berita-cat-btn" data-cat="kemitraan" onclick="filterNewsCategory('kemitraan', this)">
                <span>Kemitraan DUDI</span>
                <span class="cat-count">1</span>
              </button>
            </li>
            <li>
              <button type="button" class="berita-cat-btn" data-cat="karya" onclick="filterNewsCategory('karya', this)">
                <span>Karya &amp; Inovasi</span>
                <span class="cat-count">1</span>
              </button>
            </li>
            <li>
              <button type="button" class="berita-cat-btn" data-cat="karir" onclick="filterNewsCategory('karir', this)">
                <span>BKK &amp; Karir</span>
                <span class="cat-count">1</span>
              </button>
            </li>
          </ul>
        </aside>

        <!-- Grid 6 Kartu Berita (3 Kolom x 2 Baris) -->
        <div class="berita-grid-container reveal-item" data-delay="100">
          <div class="berita-cards-grid" id="beritaCardsGrid">
            <!-- Card 1 -->
            <article class="telkom-news-card" data-category="kegiatan">
              <a href="{{ route('berita.show', 1) }}" class="telkom-news-link" aria-label="Lihat detail berita">
                <div class="news-thumb-box">
                  <img src="{{ asset('images/school_gate.webp') }}" alt="SMKN 1 Probolinggo Pusat Keunggulan" class="news-thumb-img" loading="lazy" width="400" height="225">
                  <span class="news-glass-chip">KEGIATAN</span>
                  <span class="news-watermark-tag">SMEXAPRO</span>
                </div>
                <div class="news-card-content">
                  <h3 class="news-title-text">
                    SMKN 1 Probolinggo Perkuat Status SMK Pusat Keunggulan (SMK PK) Skema Lanjutan
                  </h3>
                  <div class="news-meta-row">
                    <span class="news-category-name">Kegiatan Sekolah</span>
                    <span class="news-date-meta">2026-10-10</span>
                  </div>
                </div>
              </a>
            </article>

            <!-- Card 2 -->
            <article class="telkom-news-card" data-category="prestasi">
              <a href="{{ route('berita.show', 2) }}" class="telkom-news-link" aria-label="Lihat detail berita">
                <div class="news-thumb-box">
                  <img src="{{ asset('images/lab_rpl_resmi.webp') }}" alt="Siswa RPL Juara LKS Web Technologies" class="news-thumb-img" loading="lazy" width="400" height="225">
                  <span class="news-glass-chip">PRESTASI</span>
                  <span class="news-watermark-tag">RPL</span>
                </div>
                <div class="news-card-content">
                  <h3 class="news-title-text">
                    Siswa RPL Raih Medali Emas LKS Wilayah Kerja Bidang Web Technologies
                  </h3>
                  <div class="news-meta-row">
                    <span class="news-category-name">Prestasi Siswa</span>
                    <span class="news-date-meta">2026-10-02</span>
                  </div>
                </div>
              </a>
            </article>

            <!-- Card 3 -->
            <article class="telkom-news-card" data-category="kemitraan">
              <a href="{{ route('berita.show', 3) }}" class="telkom-news-link" aria-label="Lihat detail berita">
                <div class="news-thumb-box">
                  <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Bisnis Digital Bersama AGMARI" class="news-thumb-img" loading="lazy" width="400" height="225">
                  <span class="news-glass-chip">KEMITRAAN</span>
                  <span class="news-watermark-tag">BD</span>
                </div>
                <div class="news-card-content">
                  <h3 class="news-title-text">
                    Perkuat Wawasan Bisnis Digital, Siswa Belajar Bersama AGMARI AKSESMU
                  </h3>
                  <div class="news-meta-row">
                    <span class="news-category-name">Kemitraan DUDI</span>
                    <span class="news-date-meta">2026-09-30</span>
                  </div>
                </div>
              </a>
            </article>

            <!-- Card 4 -->
            <article class="telkom-news-card" data-category="karya">
              <a href="{{ route('berita.show', 1) }}" class="telkom-news-link" aria-label="Lihat detail berita">
                <div class="news-thumb-box">
                  <img src="{{ asset('images/news_perkantoran.webp') }}" alt="Siswa MPLB Kelola Event Profesional" class="news-thumb-img" loading="lazy" width="400" height="225">
                  <span class="news-glass-chip">INOVASI</span>
                  <span class="news-watermark-tag">MPLB</span>
                </div>
                <div class="news-card-content">
                  <h3 class="news-title-text">
                    Dari Paperwork to Partywork, Siswa MPLB Belajar Mengelola Event Profesional
                  </h3>
                  <div class="news-meta-row">
                    <span class="news-category-name">Karya &amp; Inovasi</span>
                    <span class="news-date-meta">2026-09-28</span>
                  </div>
                </div>
              </a>
            </article>

            <!-- Card 5 -->
            <article class="telkom-news-card" data-category="karir">
              <a href="{{ route('berita.show', 2) }}" class="telkom-news-link" aria-label="Lihat detail berita">
                <div class="news-thumb-box">
                  <img src="{{ asset('images/bkk_indomarco.webp') }}" alt="BKK Walk-in Interview Rekrutmen" class="news-thumb-img" loading="lazy" width="400" height="225">
                  <span class="news-glass-chip">BKK KARIR</span>
                  <span class="news-watermark-tag">BKK</span>
                </div>
                <div class="news-card-content">
                  <h3 class="news-title-text">
                    Bursa Kerja Khusus (BKK) Gelar Walk-In Interview Bersama Retail &amp; Bank
                  </h3>
                  <div class="news-meta-row">
                    <span class="news-category-name">BKK &amp; Karir</span>
                    <span class="news-date-meta">2026-09-22</span>
                  </div>
                </div>
              </a>
            </article>

            <!-- Card 6 -->
            <article class="telkom-news-card" data-category="prestasi">
              <a href="{{ route('berita.show', 3) }}" class="telkom-news-link" aria-label="Lihat detail berita">
                <div class="news-thumb-box">
                  <img src="{{ asset('images/news_ai.webp') }}" alt="Workshop Artificial Intelligence" class="news-thumb-img" loading="lazy" width="400" height="225">
                  <span class="news-glass-chip">TEKNOLOGI</span>
                  <span class="news-watermark-tag">AI/IT</span>
                </div>
                <div class="news-card-content">
                  <h3 class="news-title-text">
                    Kepolisian Probolinggo &amp; SMKN 1 Paparkan Edukasi Artificial Intelligence
                  </h3>
                  <div class="news-meta-row">
                    <span class="news-category-name">Prestasi Siswa</span>
                    <span class="news-date-meta">2026-09-16</span>
                  </div>
                </div>
              </a>
            </article>
          </div>

          <!-- Footer Controls: Slider Arrows + Pagination Dots + View All Pill -->
          <div class="berita-footer-controls">
            <div class="berita-nav-arrows">
              <button type="button" class="berita-arrow-btn" aria-label="Berita Sebelumnya" onclick="navigateNews(-1)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
              </button>
              <div class="berita-pagination-dots" id="beritaPaginationDots">
                <button type="button" class="berita-dot active" aria-label="Halaman 1" onclick="goToNewsPage(0)"></button>
                <button type="button" class="berita-dot" aria-label="Halaman 2" onclick="goToNewsPage(1)"></button>
                <button type="button" class="berita-dot" aria-label="Halaman 3" onclick="goToNewsPage(2)"></button>
              </div>
              <button type="button" class="berita-arrow-btn" aria-label="Berita Selanjutnya" onclick="navigateNews(1)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>

            <a href="{{ route('berita.index') }}" class="berita-view-all-pill">
              <span>Lihat Semua Berita</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
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

  <!-- 7. FAQ ACCORDION SECTION (MATCHING REFERENCE IMAGE 2) -->
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
      accent: 'Rekayasa',
      rest: 'Perangkat Lunak',
      desc: 'Program 3 tahun yang mempelajari rekayasa web modern (Laravel & React), mobile Flutter, database cloud, dan integrasi AI terapan berstandar Axioo Smart Classroom.',
      img: '{{ asset("images/jurusan/bg_bd.webp") }}',
      alt: 'Model Siswa Rekayasa Perangkat Lunak',
      url: '{{ route("jurusan.rpl") }}',
      points: [
        { h: 'Software Development', p: 'Belajar membuat aplikasi web modern, mobile Flutter, dan sistem cloud yang fungsional.' },
        { h: 'Database & Cloud Computing', p: 'Arsitektur database relasional, RESTful API backend, dan server cloud hosting mandiri.' },
        { h: 'Networking & Cybersecurity', p: 'Sertifikasi BNSP Junior Web Developer, keamanan aplikasi, dan unit produksi SMEXAMALL.' }
      ],
      prospect: 'Software Engineer, Full-Stack Web Developer, Mobile App Developer, Database Administrator, IT Consultant.'
    },
    bd: {
      accent: 'Bisnis',
      rest: 'Digital',
      desc: 'Mencetak wirausahawan digital, spesialis e-commerce, digital marketing, live commerce streaming, dan pengelolaan ritel modern omnichannel.',
      img: '{{ asset("images/jurusan/bg_bd.webp") }}',
      alt: 'Model Siswa Bisnis Digital',
      url: '{{ route("jurusan.bd") }}',
      points: [
        { h: 'E-Commerce & Live Sales', p: 'Praktik live streaming sales & marketplace store management omnichannel.' },
        { h: 'Digital Marketing & Ads', p: 'Optimasi Meta Ads, Google Ads, TikTok Ads, dan social media strategy.' },
        { h: 'Retail Business Management', p: 'Inkubator bisnis siswa dan operasional ritel minimarket sekolah SMEXAMART.' }
      ],
      prospect: 'Digital Marketer, E-Commerce Specialist, Social Media Strategist, Content Creator, Entrepreneur / Founder Startup.'
    },
    mplb: {
      accent: 'Manajemen',
      rest: 'Perkantoran & Layanan Bisnis',
      desc: 'Keahlian tata kelola administrasi modern, korespondensi digital, digital archiving, public relations, dan etika komunikasi eksekutif.',
      img: '{{ asset("images/jurusan/bg_mp.webp") }}',
      alt: 'Model Siswa Manajemen Perkantoran',
      url: '{{ route("jurusan.mp") }}',
      points: [
        { h: 'Paperless Office System', p: 'Penguasaan paperless office management dan cloud collaboration enterprise.' },
        { h: 'Event & Protocol Organizing', p: 'Simulasi tata kelola keprotokolan resmi, executive meeting, dan humas lembaga.' },
        { h: 'Sertifikasi Profesi BNSP', p: 'Uji kompetensi otomasi administrasi perkantoran berlisensi BNSP LSP-P1.' }
      ],
      prospect: 'Executive Administrative Assistant, Office Manager, Public Relations Officer, Customer Care Specialist, Records Manager.'
    },
    akl: {
      accent: 'Akuntansi',
      rest: '& Keuangan Lembaga',
      desc: 'Mendalami akuntansi keuangan terkomputerisasi (MYOB & Accurate), pelaporan pajak digital, audit keuangan lembaga, dan analisis laporan bisnis.',
      img: '{{ asset("images/jurusan/bg_ak.webp") }}',
      alt: 'Model Siswa Akuntansi & Keuangan',
      url: '{{ route("jurusan.ak") }}',
      points: [
        { h: 'Computerized Accounting', p: 'Laboratorium komputer akuntansi terintegrasi software MYOB dan Accurate industri.' },
        { h: 'Applied Taxation & FinTech', p: 'Praktik perpajakan terapan e-Faktur, e-SPT, dan perbankan digital modern.' },
        { h: 'Financial Audit & Reports', p: 'Penyusunan laporan keuangan lembaga, audit internal, dan tata kelola kas.' }
      ],
      prospect: 'Staff Akuntansi & Keuangan, Junior Auditor, Tax Consultant Assistant, Payroll Specialist, Budget Analyst.'
    },
    lpb: {
      accent: 'Layanan',
      rest: 'Perbankan',
      desc: 'Mempersiapkan tenaga perbankan profesional, customer service prima, teller operasional bank, manajemen kredit mikro, dan transaksi digital banking.',
      img: '{{ asset("images/jurusan/bg_lp.webp") }}',
      alt: 'Model Siswa Layanan Perbankan',
      url: '{{ route("jurusan.lp") }}',
      points: [
        { h: 'Mini Bank Laboratory', p: 'Simulasi operasional mini bank dengan standar pelayanan perbankan nasional.' },
        { h: 'Front & Back Office Ops', p: 'Pelatihan customer service prima, teller, kliring transaksi, dan administrasi kredit.' },
        { h: 'Cash Handling & Security', p: 'Praktik validasi keaslian uang tunai, sistem brankas, dan digital banking ops.' }
      ],
      prospect: 'Bank Teller, Customer Service Representative, Credit Officer, Staff Operasional Lembaga Keuangan / BPR, Cashier Executive.'
    }
  };

  function selectMajor(key) {
    const data = majorData[key];
    if (!data) return;

    // Update active tab buttons
    document.querySelectorAll('.program-tab-btn').forEach(btn => {
      if (btn.dataset.major === key) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });

    // Animate display card slightly and update content
    const card = document.getElementById('majorDisplayCard');
    if (card) {
      card.style.opacity = '0.5';
      card.style.transition = 'opacity 0.2s ease';
      setTimeout(() => {
        const img = document.getElementById('majorImg');
        const accent = document.getElementById('majorTitleAccent');
        const rest = document.getElementById('majorTitleRest');
        const desc = document.getElementById('majorDesc');
        const features = document.getElementById('majorFeatures');
        const prospect = document.getElementById('majorProspect');
        const cta = document.getElementById('majorCtaLink');

        if (img) { img.src = data.img; img.alt = data.alt; }
        if (accent) accent.textContent = data.accent;
        if (rest) rest.textContent = data.rest;
        if (desc) desc.textContent = data.desc;
        if (cta) cta.href = data.url;

        if (features) {
          const icons = [
            '<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>',
            '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
            '<circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/>'
          ];
          features.innerHTML = data.points.map((pt, idx) => `
            <div class="program-point-item">
              <div class="program-point-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">${icons[idx % 3]}</svg>
              </div>
              <div class="program-point-text">
                <strong>${pt.h}</strong>
                <p>${pt.p}</p>
              </div>
            </div>
          `).join('');
        }

        if (prospect) {
          prospect.textContent = data.prospect;
        }

        card.style.opacity = '1';
      }, 140);
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

  // 3. News Category Filter & Slider Pagination (Telkom Architecture + Hybrid UI/UX)
  let currentNewsPage = 0;
  const totalNewsPages = 3;

  function filterNewsCategory(cat, btn) {
    // Update active button
    document.querySelectorAll('.berita-cat-btn').forEach(b => b.classList.remove('active'));
    if (btn) btn.classList.add('active');

    const cards = document.querySelectorAll('.telkom-news-card');
    cards.forEach(card => {
      const cardCat = card.getAttribute('data-category');
      if (cat === 'all' || cardCat === cat) {
        card.style.display = 'flex';
        card.style.opacity = '0';
        card.style.transform = 'translateY(10px)';
        setTimeout(() => {
          card.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, 30);
      } else {
        card.style.display = 'none';
      }
    });
  }

  function goToNewsPage(pageIndex) {
    currentNewsPage = Math.max(0, Math.min(pageIndex, totalNewsPages - 1));
    const dots = document.querySelectorAll('.berita-pagination-dots .berita-dot');
    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentNewsPage);
    });
    
    // Smooth micro-animation on cards
    const grid = document.getElementById('beritaCardsGrid');
    if (grid) {
      grid.style.opacity = '0.4';
      grid.style.transition = 'opacity 0.2s ease';
      setTimeout(() => {
        grid.style.opacity = '1';
      }, 150);
    }
  }

  function navigateNews(direction) {
    let next = currentNewsPage + direction;
    if (next < 0) next = totalNewsPages - 1;
    if (next >= totalNewsPages) next = 0;
    goToNewsPage(next);
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
