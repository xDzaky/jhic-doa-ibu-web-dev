<!DOCTYPE html>
<html lang="id">
<head>
  @php $assetVersion = config('app.asset_version', '20261011_v32_compact_mega_menu'); @endphp
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Website Resmi SMKN 1 Probolinggo - Sekolah Pusat Keunggulan & BLUD')</title>
  <meta name="description" content="@yield('meta_description', 'Portal Resmi SMK Negeri 1 Probolinggo - Pusat Keunggulan & BLUD. Informasi PPDB 2026, Marketplace Siswa SMEXAMALL, dan Bursa Kerja Khusus (BKK).')">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'Website Resmi SMKN 1 Probolinggo - Sekolah Pusat Keunggulan & BLUD')">
  <meta property="og:description" content="@yield('meta_description', 'Portal Resmi SMK Negeri 1 Probolinggo - Pusat Keunggulan & BLUD. Informasi PPDB 2026, Marketplace Siswa SMEXAMALL, dan Bursa Kerja Khusus (BKK).')">
  <meta property="og:image" content="{{ asset('images/logo_smkn1.webp') }}">

  <meta name="theme-color" content="#0F2A4A">
  <link rel="icon" href="{{ asset('images/logo_emblem.png') }}?v={{ $assetVersion }}">
  
  {{-- Buka koneksi ke CDN font sedini mungkin --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Typography: Inter, Figtree & Istok Web (Google Fonts HTTP/2 Edge) -->
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400..700;1,400..700&family=Inter:wght@400..900&family=Istok+Web:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400..700;1,400..700&family=Inter:wght@400..900&family=Istok+Web:wght@400;700&display=swap" rel="stylesheet"></noscript>

  {{-- Preload & Load CSS Utama (Minified, Zero-CLS) --}}
  <link rel="preload" href="{{ asset('css/wireframe.min.css') }}?v={{ $assetVersion }}" as="style">
  <link rel="stylesheet" href="{{ asset('css/wireframe.min.css') }}?v={{ $assetVersion }}">

  {{-- Sembunyikan Floating Chat Icon di Mobile karena sudah ada tab Tanya AI di Bottom Bar --}}
  <style>
    @media (max-width: 900px) {
      .chatbot-launcher, #chatbotLauncher { display: none !important; }
    }
  </style>

  {{-- Preload LCP Hero Image yang sebenarnya --}}
  <link rel="preload" as="image" href="{{ asset('images/hero_bg.webp') }}" type="image/webp" fetchpriority="high">
  
  {{-- JSON-LD Structured Data (Boost SEO score ke 100) --}}
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "SMK Negeri 1 Probolinggo",
    "alternateName": "SMKN 1 Probolinggo",
    "url": "https://smexapro.my.id",
    "logo": "https://smexapro.my.id/images/logo_smkn1.webp",
    "image": "https://smexapro.my.id/images/school_gate.webp",
    "description": "Sekolah Menengah Kejuruan Negeri 1 Probolinggo — Pusat Keunggulan, 5 konsentrasi keahlian modern, Teaching Factory SMEXAMALL, kemitraan industri nasional.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Mastrip No. 357, Kademangan, Jrebeng Wetan",
      "addressLocality": "Kec. Kedopok, Kota Probolinggo",
      "addressRegion": "Jawa Timur",
      "postalCode": "67239",
      "addressCountry": "ID"
    },
    "telephone": "+62335421121",
    "email": "info@smkn1probolinggo.sch.id",
    "sameAs": ["https://www.instagram.com/smkn1probolinggo","https://www.facebook.com/smkn1official"]
  }
  </script>



  @stack('head')
  @stack('styles')
</head>
<body>

  {{-- Skip to main content (Accessibility — required for 100 score) --}}
  <a href="#main-content" class="skip-nav-link">Lewati ke konten utama</a>

  <!-- MAIN NAVBAR (Flat Deep Navy) -->
  <header class="navbar">
    <div class="container nav-wrapper">
      <a href="{{ route('home') }}" class="nav-brand">
        <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" class="school-logo-img" width="36" height="36" fetchpriority="high">

        <div class="brand-text">
          <span class="school-main">SMK NEGERI 1</span>
          <span class="school-sub">PROBOLINGGO</span>
        </div>
      </a>

      <!-- Nav Links (Professional with Dynamic Feature Dropdowns) -->
      <ul class="nav-menu">
        <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>

        <!-- 1. Mega Dropdown: Tentang Sekolah -->
        <li class="nav-dropdown has-mega-menu">
          <button class="nav-link nav-dropdown-toggle {{ request()->routeIs('profil') || request()->is('alumni*') || request()->is('ekstrakurikuler*') ? 'active' : '' }}" type="button">
            Tentang Sekolah
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="nav-dropdown-icon"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="mega-menu-container">
            <!-- Left Pane: Use Cases Style -->
            <div class="mega-pane-left">
              <h3 class="mega-pane-title">Jelajahi SMEXA &amp; Kesiswaan</h3>
              <div class="mega-card-grid">
                <a href="{{ route('profil') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 7V3h12v4M9 11h2M13 11h2M9 15h2M13 15h2"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Profil Sekolah</div>
                    <div class="mega-card-desc">Visi, misi &amp; akreditasi A institusi.</div>
                  </div>
                </a>

                <a href="{{ route('home') }}#sambutan" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Sambutan Kepsek</div>
                    <div class="mega-card-desc">Komitmen mutu &amp; kepemimpinan.</div>
                  </div>
                </a>

                <a href="{{ route('ekstra.show', 'volly-ball') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6M18 9h1.5a2.5 2.5 0 0 0 0-5H18M4 22h16M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Ekstrakurikuler <span class="mega-badge-pill badge-orange">11 CABANG</span></div>
                    <div class="mega-card-desc">Bakat kesiswaan, seni &amp; olahraga.</div>
                  </div>
                </a>

                <a href="{{ route('alumni.show', 1) }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Cerita Alumni</div>
                    <div class="mega-card-desc">Jejak karir &amp; kiprah wirausaha.</div>
                  </div>
                </a>

                <a href="{{ route('home') }}#fasilitas" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Fasilitas Kampus</div>
                    <div class="mega-card-desc">Lab modern &amp; bengkel TEFA.</div>
                  </div>
                </a>

                <a href="{{ route('home') }}#mitra" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Mitra Industri</div>
                    <div class="mega-card-desc">Sinergi magang 15+ korporasi.</div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Right Pane: AI Features Style -->
            <div class="mega-pane-right">
              <div>
                <h3 class="mega-pane-title">Informasi &amp; Layanan Cepat</h3>
                <div class="mega-links-columns">
                  <div>
                    <div class="mega-link-col-header">Kesiswaan &amp; Ekskul</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('ekstra.show', 'volly-ball') }}" class="mega-link-item">Volly Ball</a></li>
                      <li><a href="{{ route('ekstra.show', 'koptuda') }}" class="mega-link-item">Koptuda Pramuka</a></li>
                      <li><a href="{{ route('ekstra.show', 'mustika-taruna') }}" class="mega-link-item">Mustika Taruna</a></li>
                      <li><a href="{{ route('ekstra.show', 'futsal') }}" class="mega-link-item">Futsal Club</a></li>
                      <li><a href="{{ route('ekstra.show', 'smexa-music') }}" class="mega-link-item">SMEXA Music</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Akademik &amp; Karir</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('home') }}#jurusan" class="mega-link-item">5 Program Keahlian</a></li>
                      <li><a href="{{ route('bkk') }}" class="mega-link-item">Bursa Kerja Khusus</a></li>
                      <li><a href="{{ route('bkk') }}#pkl" class="mega-link-item">Portal PKL Industri</a></li>
                      <li><a href="{{ route('home') }}#prestasi" class="mega-link-item">Prestasi Sekolah</a></li>
                      <li><a href="{{ route('berita.index') }}" class="mega-link-item">Kabar Terkini</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Pusat Layanan</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Syarat PPDB 2026</a></li>
                      <li><a href="{{ route('ppdb.check') }}" class="mega-link-item">Cek Status Seleksi <span class="mega-badge-pill badge-green">LIVE</span></a></li>
                      <li><a href="{{ route('login') }}" class="mega-link-item">Portal SSO Siswa</a></li>
                      <li><a href="{{ route('home') }}#kontak" class="mega-link-item">Pengaduan &amp; Kontak</a></li>
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Download Brosur</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Bottom Promo Card: Meet Underlord Style -->
              <a href="javascript:void(0)" onclick="if(window.openSmexaChat) window.openSmexaChat();" class="mega-promo-card">
                <div class="mega-promo-avatar">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zM4 12a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7z"/><circle cx="9" cy="15" r="1"/><circle cx="15" cy="15" r="1"/></svg>
                </div>
                <div class="mega-promo-body">
                  <div class="mega-promo-title">
                    Tanya Asisten AI SMEXA
                    <span class="mega-badge-pill badge-orange">24/7 ONLINE</span>
                  </div>
                  <div class="mega-promo-desc">Dapatkan informasi instan seputar jurusan, alur pendaftaran PPDB, dan fasilitas sekolah.</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- 2. Mega Dropdown: Program Keahlian -->
        <li class="nav-dropdown has-mega-menu">
          <button class="nav-link nav-dropdown-toggle {{ request()->is('jurusan*') ? 'active' : '' }}" type="button">
            Program Keahlian
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="nav-dropdown-icon"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="mega-menu-container">
            <!-- Left Pane: 5 Jurusan -->
            <div class="mega-pane-left">
              <h3 class="mega-pane-title">5 Konsentrasi Keahlian TEFA</h3>
              <div class="mega-card-grid">
                <a href="{{ route('jurusan.rpl') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Rekayasa Perangkat Lunak <span class="mega-badge-pill badge-orange">UNGGULAN</span></div>
                    <div class="mega-card-desc">Web, mobile Flutter &amp; terapan AI.</div>
                  </div>
                </a>

                <a href="{{ route('jurusan.bd') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Bisnis Digital (BD)</div>
                    <div class="mega-card-desc">E-commerce, konten &amp; pemasaran SEO.</div>
                  </div>
                </a>

                <a href="{{ route('jurusan.mp') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Manajemen Perkantoran (MPLB)</div>
                    <div class="mega-card-desc">Administrasi modern &amp; kearsipan digital.</div>
                  </div>
                </a>

                <a href="{{ route('jurusan.lp') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Layanan Perbankan (LPS)</div>
                    <div class="mega-card-desc">Frontliner, teller &amp; bank syariah.</div>
                  </div>
                </a>

                <a href="{{ route('jurusan.ak') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Akuntansi &amp; Keuangan (AKL)</div>
                    <div class="mega-card-desc">Laporan keuangan &amp; audit perpajakan.</div>
                  </div>
                </a>

                <a href="{{ route('home') }}#jurusan" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Teaching Factory (TEFA)</div>
                    <div class="mega-card-desc">Praktik standar industri riil.</div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Right Pane: Kurikulum & Sertifikasi -->
            <div class="mega-pane-right">
              <div>
                <h3 class="mega-pane-title">Kompetensi &amp; Standar Industri</h3>
                <div class="mega-links-columns">
                  <div>
                    <div class="mega-link-col-header">Teknologi &amp; IT</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('jurusan.rpl') }}" class="mega-link-item">Web Fullstack Laravel</a></li>
                      <li><a href="{{ route('jurusan.rpl') }}" class="mega-link-item">Mobile Flutter App</a></li>
                      <li><a href="{{ route('jurusan.rpl') }}" class="mega-link-item">Artificial Intelligence <span class="mega-badge-pill badge-orange">NEW</span></a></li>
                      <li><a href="{{ route('jurusan.rpl') }}" class="mega-link-item">Cloud &amp; Database</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Bisnis &amp; Finansial</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('jurusan.bd') }}" class="mega-link-item">Social Media Marketing</a></li>
                      <li><a href="{{ route('jurusan.bd') }}" class="mega-link-item">E-Commerce Specialist</a></li>
                      <li><a href="{{ route('jurusan.mp') }}" class="mega-link-item">Executive Administrative</a></li>
                      <li><a href="{{ route('jurusan.lp') }}" class="mega-link-item">Core Banking Syariah</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Sertifikasi &amp; Mitra</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('home') }}#mitra" class="mega-link-item">LSP-P1 BNSP Nasional</a></li>
                      <li><a href="{{ route('home') }}#mitra" class="mega-link-item">Kelas Industri Hummasoft</a></li>
                      <li><a href="{{ route('home') }}#mitra" class="mega-link-item">Kelas Industri Intel AI</a></li>
                      <li><a href="{{ route('bkk') }}#pkl" class="mega-link-item">Magang DUDI Nasional</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Bottom Promo Card -->
              <a href="{{ route('home') }}#jurusan" class="mega-promo-card">
                <div class="mega-promo-avatar">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                </div>
                <div class="mega-promo-body">
                  <div class="mega-promo-title">Kurikulum Link &amp; Match Industri Nasional</div>
                  <div class="mega-promo-desc">Siswa dibekali portofolio nyata dan sertifikasi kompetensi berstandar industri sebelum lulus.</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- 3. Mega Dropdown: PPDB 2026 -->
        <li class="nav-dropdown has-mega-menu">
          <button class="nav-link nav-dropdown-toggle {{ request()->routeIs('ppdb*') ? 'active' : '' }}" type="button">
            PPDB 2026
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="nav-dropdown-icon"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="mega-menu-container">
            <!-- Left Pane -->
            <div class="mega-pane-left">
              <h3 class="mega-pane-title">Penerimaan Siswa Baru 2026/2027</h3>
              <div class="mega-card-grid">
                <a href="{{ route('ppdb') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Syarat &amp; Kuota PPDB</div>
                    <div class="mega-card-desc">Daya tampung, jadwal &amp; ketentuan.</div>
                  </div>
                </a>

                <a href="{{ route('ppdb') }}#daftar" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Pendaftaran Online <span class="mega-badge-pill badge-orange">BUKA</span></div>
                    <div class="mega-card-desc">Registrasi &amp; upload berkas digital.</div>
                  </div>
                </a>

                <a href="{{ route('ppdb.check') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Cek Status Seleksi <span class="mega-badge-pill badge-green">LIVE</span></div>
                    <div class="mega-card-desc">Verifikasi berkas &amp; hasil seleksi.</div>
                  </div>
                </a>

                <a href="{{ route('ppdb') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Petunjuk Teknis PPDB</div>
                    <div class="mega-card-desc">Panduan jalur masuk &amp; jurusan.</div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Right Pane -->
            <div class="mega-pane-right">
              <div>
                <h3 class="mega-pane-title">Jalur Seleksi &amp; Daya Tampung</h3>
                <div class="mega-links-columns">
                  <div>
                    <div class="mega-link-col-header">Jalur Pendaftaran</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Jalur Prestasi Nilai Rapor</a></li>
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Jalur Prestasi Lomba</a></li>
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Jalur Domisili / Zonasi</a></li>
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Jalur Afirmasi KIP</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Kuota 5 Jurusan</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('jurusan.rpl') }}" class="mega-link-item">RPL: 108 Siswa (3 Kelas)</a></li>
                      <li><a href="{{ route('jurusan.bd') }}" class="mega-link-item">BD: 108 Siswa (3 Kelas)</a></li>
                      <li><a href="{{ route('jurusan.mp') }}" class="mega-link-item">MPLB: 108 Siswa (3 Kelas)</a></li>
                      <li><a href="{{ route('jurusan.ak') }}" class="mega-link-item">AKL: 108 Siswa / LPS: 72</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Bantuan &amp; Helpdesk</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('home') }}#kontak" class="mega-link-item">Call Center Panitia</a></li>
                      <li><a href="{{ route('ppdb') }}" class="mega-link-item">Verifikasi Berkas Fisik</a></li>
                      <li><a href="{{ route('ppdb.check') }}" class="mega-link-item">Cetak Bukti Registrasi</a></li>
                      <li><a href="{{ route('home') }}#kontak" class="mega-link-item">Posko Kampus Mastrip</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Bottom Promo Card -->
              <a href="{{ route('ppdb') }}" class="mega-promo-card">
                <div class="mega-promo-avatar">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="mega-promo-body">
                  <div class="mega-promo-title">
                    Pusat Informasi Resmi PPDB Online 2026/2027
                    <span class="mega-badge-pill badge-green">GRATIS &amp; TRANSPARAN</span>
                  </div>
                  <div class="mega-promo-desc">Proses seleksi transparan, akuntabel, bebas pungutan, dan dipantau langsung oleh dinas pendidikan.</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- Link: Berita -->
        <li><a href="{{ route('berita.index') }}" class="nav-link {{ request()->routeIs('berita.*') ? 'active' : '' }}">Berita</a></li>

        <!-- 4. Mega Dropdown: SMEXAMALL -->
        <li class="nav-dropdown has-mega-menu">
          <button class="nav-link nav-dropdown-toggle {{ request()->is('smexamall*') || request()->routeIs('seller*') || request()->routeIs('teacher*') ? 'active' : '' }}" type="button">
            SMEXAMALL
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="nav-dropdown-icon"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="mega-menu-container">
            <!-- Left Pane -->
            <div class="mega-pane-left">
              <h3 class="mega-pane-title">Marketplace Siswa BLUD TEFA</h3>
              <div class="mega-card-grid">
                <a href="{{ route('smexamall.index') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Katalog Produk <span class="mega-badge-pill badge-orange">BELANJA</span></div>
                    <div class="mega-card-desc">Karya kriya, kuliner, busana &amp; jasa.</div>
                  </div>
                </a>

                <a href="{{ route('smexamall.cart') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Keranjang Belanja</div>
                    <div class="mega-card-desc">Cek pesanan &amp; bayar QRIS Midtrans.</div>
                  </div>
                </a>

                <a href="{{ route('seller.index') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Seller Centre <span class="mega-badge-pill badge-green">WIRAUSAHA</span></div>
                    <div class="mega-card-desc">Upload produk, omset &amp; kelola order.</div>
                  </div>
                </a>

                <a href="{{ route('teacher.index') }}" class="mega-card-item">
                  <div class="mega-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  </div>
                  <div class="mega-card-body">
                    <div class="mega-card-title">Panel Kurasi Guru</div>
                    <div class="mega-card-desc">Validasi mutu produk &amp; kurikulum BLUD.</div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Right Pane -->
            <div class="mega-pane-right">
              <div>
                <h3 class="mega-pane-title">Kategori &amp; Transaksi BLUD</h3>
                <div class="mega-links-columns">
                  <div>
                    <div class="mega-link-col-header">Kategori Pilihan</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('smexamall.index') }}" class="mega-link-item">Kuliner &amp; Bakery</a></li>
                      <li><a href="{{ route('smexamall.index') }}" class="mega-link-item">Kriya &amp; Handycraft</a></li>
                      <li><a href="{{ route('smexamall.index') }}" class="mega-link-item">Busana &amp; Tekstil</a></li>
                      <li><a href="{{ route('smexamall.index') }}" class="mega-link-item">Jasa Digital &amp; Desain</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Pembayaran Mudah</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('smexamall.cart') }}" class="mega-link-item">QRIS Dinamis (All Bank)</a></li>
                      <li><a href="{{ route('smexamall.cart') }}" class="mega-link-item">Transfer Virtual Account</a></li>
                      <li><a href="{{ route('smexamall.cart') }}" class="mega-link-item">Bayar di Kasir TEFA</a></li>
                      <li><a href="{{ route('smexamall.cart') }}" class="mega-link-item">Pickup di Kampus</a></li>
                    </ul>
                  </div>

                  <div>
                    <div class="mega-link-col-header">Program Kewirausahaan</div>
                    <ul class="mega-link-list">
                      <li><a href="{{ route('seller.index') }}" class="mega-link-item">Inkubator Bisnis Siswa</a></li>
                      <li><a href="{{ route('smexamall.index') }}" class="mega-link-item">Standar Mutu BLUD</a></li>
                      <li><a href="{{ route('seller.index') }}" class="mega-link-item">Laporan Omset Penjualan</a></li>
                      <li><a href="{{ route('teacher.index') }}" class="mega-link-item">Kurasi Sertifikasi Produk</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Bottom Promo Card -->
              <a href="{{ route('smexamall.index') }}" class="mega-promo-card">
                <div class="mega-promo-avatar">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                </div>
                <div class="mega-promo-body">
                  <div class="mega-promo-title">Gerakan Bangga Beli Produk Siswa SMEXA</div>
                  <div class="mega-promo-desc">Setiap pembelian produk memberdayakan kreativitas, skill bisnis, dan kemandirian siswa vokasi.</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- Link: BKK & PKL -->
        <li><a href="{{ route('bkk') }}" class="nav-link {{ request()->routeIs('bkk') ? 'active' : '' }}">BKK &amp; PKL</a></li>
      </ul>

      <!-- Nav Actions (Sleek, Dynamic, Zero AI-Slop) -->
      <div class="nav-actions">
        @if(session()->has('auth_user'))
          @php 
            $authUser = session('auth_user'); 
            $initials = strtoupper(substr($authUser['name'], 0, 1));
            $firstName = explode(' ', $authUser['name'])[0];
          @endphp
          <div class="user-menu-wrapper" id="userMenuWrapper">
            <button class="user-chip-btn" id="userMenuToggle" type="button" aria-expanded="false" title="Menu Akun: {{ $authUser['name'] }}">
              <span class="user-avatar-badge">{{ $initials }}</span>
              <span class="user-chip-details">
                <span class="user-chip-name">{{ $firstName }}</span>
                <span class="user-chip-role">{{ $authUser['role_label'] }}</span>
              </span>
              <svg class="chevron-svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
            </button>

            <!-- Dropdown Menu Popover -->
            <div class="user-dropdown-popover" id="userDropdown">
              <div class="user-popover-header">
                <div class="popover-name">{{ $authUser['name'] }}</div>
                <div class="popover-email">{{ $authUser['email'] }}</div>
                <span class="popover-role-tag">{{ $authUser['role_label'] }}</span>
              </div>
              <div class="popover-menu-list">
                <a href="{{ url($authUser['redirect'] ?? '/admin') }}" class="popover-menu-item">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                  Dashboard Saya
                </a>
                <div class="popover-divider"></div>
                <a href="{{ route('logout') }}" class="popover-menu-item text-danger">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                  Keluar Sesi
                </a>
              </div>
            </div>
          </div>
        @else
          <a href="{{ route('login') }}" class="btn-nav-login">
            Masuk Portal
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        @endif
        <button class="mobile-toggle" aria-label="Menu"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
      </div>
    </div>
  </header>

  <!-- MOBILE SLIDE-OVER DRAWER -->
  <div class="mobile-drawer-backdrop" id="drawerBackdrop"></div>
  <aside class="mobile-drawer" id="mobileDrawer" aria-label="Menu Navigasi Mobile">
    <div class="mobile-drawer-header">
      <div class="drawer-brand">
        <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" class="school-logo-img" width="36" height="36" loading="lazy">
        <div class="brand-text">
          <span class="school-main">SMK NEGERI 1</span>
          <span class="school-sub">PROBOLINGGO</span>
        </div>
      </div>
      <button class="drawer-close" id="drawerClose" aria-label="Tutup Menu"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>

    <div class="mobile-drawer-body">
      <div class="drawer-nav-group">
        <div class="drawer-nav-title">Menu Utama</div>
        <a href="{{ route('home') }}" class="drawer-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ route('berita.index') }}" class="drawer-nav-link {{ request()->routeIs('berita.*') ? 'active' : '' }}">Berita &amp; Artikel Sekolah</a>
      </div>

      <div class="drawer-nav-group">
        <div class="drawer-nav-title">Tentang Sekolah</div>
        <a href="{{ route('profil') }}" class="drawer-nav-link {{ request()->routeIs('profil') ? 'active' : '' }}">Profil Sekolah &amp; Visi Misi</a>
        <a href="{{ route('home') }}#sambutan" class="drawer-nav-link">Sambutan Kepala Sekolah</a>
        <a href="{{ route('ekstra.show', 'volly-ball') }}" class="drawer-nav-link {{ request()->is('ekstrakurikuler*') ? 'active' : '' }}">Ekstrakurikuler (11 Cabang)</a>
        <a href="{{ route('alumni.show', 1) }}" class="drawer-nav-link {{ request()->is('alumni*') ? 'active' : '' }}">Cerita &amp; Kiprah Alumni</a>
        <a href="{{ route('home') }}#fasilitas" class="drawer-nav-link">Fasilitas Kampus &amp; Sarana</a>
      </div>

      <div class="drawer-nav-group">
        <div class="drawer-nav-title">5 Program Keahlian</div>
        <a href="{{ route('jurusan.rpl') }}" class="drawer-nav-link {{ request()->routeIs('jurusan.rpl') ? 'active' : '' }}">Rekayasa Perangkat Lunak (RPL)</a>
        <a href="{{ route('jurusan.bd') }}" class="drawer-nav-link {{ request()->routeIs('jurusan.bd') ? 'active' : '' }}">Bisnis Digital (BD)</a>
        <a href="{{ route('jurusan.mp') }}" class="drawer-nav-link {{ request()->routeIs('jurusan.mp') ? 'active' : '' }}">Manajemen Perkantoran (MPLB)</a>
        <a href="{{ route('jurusan.lp') }}" class="drawer-nav-link {{ request()->routeIs('jurusan.lp') ? 'active' : '' }}">Layanan Perbankan (LPS)</a>
        <a href="{{ route('jurusan.ak') }}" class="drawer-nav-link {{ request()->routeIs('jurusan.ak') ? 'active' : '' }}">Akuntansi &amp; Keuangan (AKL)</a>
      </div>

      <div class="drawer-nav-group">
        <div class="drawer-nav-title">Pusat Informasi PPDB 2026</div>
        <a href="{{ route('ppdb') }}" class="drawer-nav-link {{ request()->routeIs('ppdb') ? 'active' : '' }}">Alur &amp; Kuota PPDB 2026</a>
        <a href="{{ route('ppdb') }}#daftar" class="drawer-nav-link">Formulir Pendaftaran Online</a>
        <a href="{{ route('ppdb.check') }}" class="drawer-nav-link {{ request()->routeIs('ppdb.check') ? 'active' : '' }}">Cek Status Seleksi PPDB</a>
      </div>

      <div class="drawer-nav-group">
        <div class="drawer-nav-title">SMEXAMALL &amp; Karir</div>
        <a href="{{ route('smexamall.index') }}" class="drawer-nav-link {{ request()->routeIs('smexamall.index') ? 'active' : '' }}">SMEXAMALL Marketplace Siswa</a>
        <a href="{{ route('smexamall.cart') }}" class="drawer-nav-link {{ request()->routeIs('smexamall.cart') ? 'active' : '' }}">Keranjang Belanja</a>
        <a href="{{ route('seller.index') }}" class="drawer-nav-link {{ request()->routeIs('seller.index') ? 'active' : '' }}">Seller Centre Siswa</a>
        <a href="{{ route('teacher.index') }}" class="drawer-nav-link {{ request()->routeIs('teacher.index') ? 'active' : '' }}">Panel Kurasi Guru BLUD</a>
        <a href="{{ route('bkk') }}" class="drawer-nav-link {{ request()->routeIs('bkk') ? 'active' : '' }}">BKK &amp; Portal PKL Industri</a>
        <a href="{{ route('home') }}#kontak" class="drawer-nav-link">Kontak &amp; Lokasi</a>
      </div>

      <div class="drawer-cta-box">
        @if(session()->has('auth_user'))
          @php $authUser = session('auth_user'); @endphp
          <div style="font-size: 0.8125rem; color: #FFF; font-weight: 700; margin-bottom: 8px;">
            Masuk sebagai: {{ $authUser['name'] }}
          </div>
          <a href="{{ url($authUser['redirect'] ?? '/admin') }}" class="btn btn-navy-primary" style="width: 100%; margin-bottom: 8px;">Buka {{ $authUser['role_label'] }}</a>
          <a href="{{ route('logout') }}" class="btn btn-outline-navy" style="width: 100%; color:#FFF; border-color:rgba(255,255,255,0.3);">Keluar dari Akun</a>
        @else
          <a href="{{ route('login') }}" class="btn btn-navy-primary" style="width: 100%; margin-bottom: 8px;">Login Portal SSO</a>
          <a href="{{ route('ppdb') }}" class="btn btn-outline-navy" style="width: 100%; color:#FFF; border-color:rgba(255,255,255,0.3);">Daftar PPDB 2026</a>
        @endif
      </div>
    </div>
  </aside>

  <!-- CONTENT -->
  <main id="main-content" role="main">
    @yield('content')
  </main>

  <!-- FOOTER (MATCHING REFERENCE IMAGE 1 - SKARIGA STYLE) -->
  <footer class="footer-skariga" id="kontak">
    <div class="container">
      <div class="footer-top-grid">
        <!-- Col 1: Tetap Terhubung -->
        <div class="footer-connect-col">
          <h3>Tetap Terhubung</h3>
          <p>
            Dapatkan informasi terbaru mengenai pendaftaran, acara sekolah, dan prestasi siswa langsung di berandamu.
          </p>
          <div class="footer-social-bubbles" aria-label="Media Sosial SMKN 1 Probolinggo">
            <!-- Instagram -->
            <a href="https://www.instagram.com/smkn1probolinggo" target="_blank" rel="noopener noreferrer" class="footer-social-bubble" aria-label="Instagram">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
            <!-- Facebook -->
            <a href="https://www.facebook.com/smkn1official" target="_blank" rel="noopener noreferrer" class="footer-social-bubble" aria-label="Facebook">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/school/smkn1probolinggo" target="_blank" rel="noopener noreferrer" class="footer-social-bubble" aria-label="LinkedIn">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <!-- YouTube -->
            <a href="https://www.youtube.com/@smkn1probolinggo" target="_blank" rel="noopener noreferrer" class="footer-social-bubble" aria-label="YouTube">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
            <!-- TikTok -->
            <a href="https://www.tiktok.com/@smkn1probolinggo" target="_blank" rel="noopener noreferrer" class="footer-social-bubble" aria-label="TikTok">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.97v7.55c.01 2.37-.82 4.75-2.4 6.44-2.11 2.29-5.35 3.32-8.39 2.64-3.1-.7-5.69-3.08-6.6-6.11-.93-3.13-.02-6.67 2.36-8.83 1.83-1.66 4.38-2.39 6.82-1.93.04 1.48-.02 2.97-.02 4.45-.98-.29-2.06-.29-3.02.05-1.12.39-2.01 1.28-2.39 2.38-.41 1.19-.24 2.55.45 3.59.7 1.05 1.88 1.71 3.14 1.75 1.34.05 2.67-.65 3.33-1.81.36-.63.51-1.37.5-2.1V.02z"/></svg>
            </a>
            <!-- WhatsApp -->
            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="footer-social-bubble" aria-label="WhatsApp">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            </a>
          </div>
          <div class="footer-copyright-note">
            &copy; 2026 SMK Negeri 1 Probolinggo &bull; <a href="{{ route('home') }}#kontak">Hubungi Kami</a>
          </div>
        </div>

        <!-- Col 2: Sekolah Utama & Hubungi Kami -->
        <div class="footer-info-block">
          <div class="footer-info-heading">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <span>Sekolah Utama</span>
          </div>
          <div class="footer-school-name">SMK Negeri 1 Probolinggo</div>
          <div class="footer-school-addr">
            Jl. Mastrip No.357, Kademangan, Jrebeng Wetan, Kec. Kedopok, Kota Probolinggo, Jawa Timur 67239
          </div>

          <div class="footer-info-divider"></div>

          <div class="footer-info-heading">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>Hubungi Kami</span>
          </div>
          <a href="tel:0335421121" class="footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>(0335) 421121</span>
          </a>
          <a href="mailto:info@smkn1probolinggo.sch.id" class="footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span>info@smkn1probolinggo.sch.id</span>
          </a>
          <a href="{{ route('ppdb') }}" class="footer-ppdb-link">
            <span>DAFTAR PPDB SMKN 1 PROBOLINGGO &rarr;</span>
          </a>
        </div>

        <!-- Col 3: Lokasi Google Maps -->
        <div class="footer-map-col">
          <div class="footer-map-top">
            <div class="footer-info-heading" style="margin-bottom: 0;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <span>Lokasi Google Maps</span>
            </div>
            <a href="https://www.google.com/maps/search/?api=1&query=SMK+Negeri+1+Probolinggo+Jl.+Mastrip+No.+357+Kedopok+Kota+Probolinggo" target="_blank" rel="noopener noreferrer" class="footer-maps-pill-btn" aria-label="Buka peta besar SMK Negeri 1 Probolinggo di tab baru">
              Buka Peta Besar
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>

          <div class="footer-map-card" id="footerMapContainer">
            <a href="https://www.google.com/maps/search/?api=1&query=SMK+Negeri+1+Probolinggo+Jl.+Mastrip+No.+357+Kedopok+Kota+Probolinggo" target="_blank" rel="noopener noreferrer" class="footer-map-badge" aria-label="Buka di aplikasi Google Maps">
              <span>Buka di Maps</span>
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>

            <!-- Performance-Preserving Facade -->
            <div id="footerMapFacade" class="footer-map-facade">
              <div class="facade-pin">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="#EF4444" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3" fill="#FFFFFF"></circle></svg>
                <span>SMKN 1 Probolinggo</span>
              </div>
              <p class="facade-address">Jl. Mastrip No. 357, Kec. Kedopok</p>
            </div>

            <!-- Real Interactive Google Maps iframe (lazy activated via IntersectionObserver) -->
            <iframe 
              id="footerMapIframe"
              data-src="https://www.google.com/maps?q=-7.7817,113.2116+(SMK+Negeri+1+Probolinggo)&amp;hl=id&amp;z=16&amp;output=embed" 
              loading="lazy" 
              title="Peta Lokasi SMK Negeri 1 Probolinggo - Jl. Mastrip No. 357"
              aria-label="Peta Google Maps SMK Negeri 1 Probolinggo"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>

      <!-- Bottom Collaboration Strip (JHIC 2.0 / Jagoan Hosting / Komdigi / Garuda Spark / Ngalup) -->
      <div class="footer-collab-strip">
        <div class="footer-collab-left">
          <span class="collab-tagline">INISIATIF DIGITAL &amp; KOLABORASI</span>
          <span class="collab-name">Jagoan Hosting Innovation Competition (JHIC 2.0)</span>
        </div>
        <div class="footer-collab-logos" aria-label="Mitra Kolaborasi Inisiatif Digital">
          <div class="footer-collab-logo-item" title="JHIC 2.0">
            <img src="{{ asset('images/collab/logo_jhic.webp') }}" alt="JHIC 2.0 Logo" loading="lazy" width="80" height="32">
          </div>
          <div class="footer-collab-logo-item" title="Jagoan Hosting">
            <img src="{{ asset('images/collab/logo_jagoanhosting.webp') }}" alt="Jagoan Hosting Logo" loading="lazy" width="80" height="32">
          </div>
          <div class="footer-collab-logo-item" title="Kementerian Komunikasi dan Digital (Komdigi)">
            <img src="{{ asset('images/collab/logo_komdigi.webp') }}" alt="Komdigi Logo" loading="lazy" width="80" height="32">
          </div>
          <div class="footer-collab-logo-item" title="Garuda Spark">
            <img src="{{ asset('images/collab/logo_garudaspark.webp') }}" alt="Garuda Spark Logo" loading="lazy" width="80" height="32">
          </div>
          <div class="footer-collab-logo-item" title="Ngalup.co">
            <img src="{{ asset('images/collab/logo_ngalupco.webp') }}" alt="Ngalup.co Logo" loading="lazy" width="80" height="32">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- CHATBOT VIRTUAL ASSISTANT -->
  <div class="chatbot-widget" id="chatbotWidget">
    <div class="chatbot-window" id="chatbotWindow">
      <div class="chatbot-header">
        <div>
          <div class="chatbot-title">Asisten Pintar SMEXA</div>
          <div class="chatbot-subtitle">Informasi PPDB, Jurusan &amp; Profil Sekolah</div>
        </div>
        <button class="chatbot-close" id="chatbotClose" aria-label="Tutup"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
      </div>

      <div class="chatbot-body" id="chatBody">
        <div class="chat-msg bot">
          Halo! Mau cari info apa hari ini? Kamu bisa tanya seputar jurusan unggulan, jadwal PPDB 2026, atau produk SMEXAMALL.
        </div>
        <div class="chat-quick-chips" id="quickChips">
          <button class="chat-chip" onclick="handleChipClick('Rekomendasi Jurusan')">Rekomendasi Jurusan</button>
          <button class="chat-chip" onclick="handleChipClick('Info PPDB 2026')">Info PPDB 2026</button>
          <button class="chat-chip" onclick="handleChipClick('Jurusan RPL')">Jurusan RPL</button>
          <button class="chat-chip" onclick="handleChipClick('Produk SMEXAMALL')">SMEXAMALL</button>
        </div>
      </div>

      <form class="chatbot-footer" onsubmit="handleChatSubmit(event)">
        <input type="text" id="chatInput" class="chatbot-input" placeholder="Tanya PPDB, jurusan, atau info SMEXA..." autocomplete="off">
        <button type="submit" class="chatbot-send" id="chatSendBtn">Kirim</button>
      </form>
    </div>

    <button class="chatbot-launcher" id="chatbotLauncher" aria-label="Tanya Asisten Pintar SMEXA">
      <img src="{{ asset('images/pesan-icon.webp') }}" id="chatLauncherIcon" alt="Buka Asisten Pintar SMEXA" class="chat-launcher-img" width="52" height="52">
    </button>
  </div>

  <!-- MOBILE BOTTOM APP NAVIGATION BAR -->
  <nav class="mobile-bottom-bar" aria-label="Navigasi Bawah Mobile">
    <a href="{{ route('home') }}" class="mobile-tab-item {{ request()->routeIs('home') ? 'active' : '' }}">
      <span class="mobile-tab-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
      </span>
      <span class="mobile-tab-label">Beranda</span>
    </a>
    <a href="{{ route('ppdb') }}" class="mobile-tab-item {{ request()->routeIs('ppdb') ? 'active' : '' }}">
      <span class="mobile-tab-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
      </span>
      <span class="mobile-tab-label">PPDB</span>
    </a>
    <a href="{{ route('smexamall.index') }}" class="mobile-tab-item {{ request()->routeIs('smexamall.*') ? 'active' : '' }}">
      <span class="mobile-tab-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
      </span>
      <span class="mobile-tab-label">Mall</span>
    </a>
    <a href="{{ route('bkk') }}" class="mobile-tab-item {{ request()->routeIs('bkk') ? 'active' : '' }}">
      <span class="mobile-tab-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
      </span>
      <span class="mobile-tab-label">Karir &amp; PKL</span>
    </a>
    <button class="mobile-tab-item mobile-tab-ai" onclick="toggleMobileChat()">
      <span class="mobile-tab-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
      </span>
      <span class="mobile-tab-label">Tanya AI</span>
    </button>
  </nav>

  <script>
    // Professional Navbar Dropdown Toggle
    document.addEventListener('DOMContentLoaded', function() {
      const navDropdowns = document.querySelectorAll('.nav-dropdown');
      
      navDropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.nav-dropdown-toggle');
        
        if (toggle) {
          // Toggle on click
          toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const isActive = dropdown.classList.contains('active');
            
            // Close all other dropdowns
            navDropdowns.forEach(d => d.classList.remove('active'));
            
            // Toggle current dropdown
            if (!isActive) {
              dropdown.classList.add('active');
            }
          });
          
          // Hover effect (desktop only)
          if (window.innerWidth > 900) {
            dropdown.addEventListener('mouseenter', function() {
              dropdown.classList.add('active');
            });
            
            dropdown.addEventListener('mouseleave', function() {
              dropdown.classList.remove('active');
            });
          }
        }
      });
      
      // Close dropdown when clicking outside
      document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-dropdown')) {
          navDropdowns.forEach(d => d.classList.remove('active'));
        }
      });
    });

    // Slide-Over Mobile Drawer
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const drawerBackdrop = document.getElementById('drawerBackdrop');
    const drawerClose = document.getElementById('drawerClose');

    function openDrawer() {
      if (mobileDrawer) mobileDrawer.classList.add('active');
      if (drawerBackdrop) drawerBackdrop.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
      if (mobileDrawer) mobileDrawer.classList.remove('active');
      if (drawerBackdrop) drawerBackdrop.classList.remove('active');
      document.body.style.overflow = '';
    }

    if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
    if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
    if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);

    function toggleMobileChat() {
      const win = document.getElementById('chatbotWindow');
      if (win) {
        win.classList.toggle('active');
        if (win.classList.contains('active')) {
          document.getElementById('chatInput').focus();
        }
      }
    }

    const launcher = document.getElementById('chatbotLauncher');
    const launcherIcon = document.getElementById('chatLauncherIcon');
    const windowEl = document.getElementById('chatbotWindow');
    const closeBtn = document.getElementById('chatbotClose');
    const chatBody = document.getElementById('chatBody');
    const chatInput = document.getElementById('chatInput');
    const quickChips = document.getElementById('quickChips');

    const iconPesan = "{{ asset('images/pesan-icon.webp') }}";
    const iconClose = "{{ asset('images/close-icon.webp') }}";

    function updateChatbotIcon(isOpen) {
      if (launcherIcon) {
        launcherIcon.src = isOpen ? iconClose : iconPesan;
        launcherIcon.alt = isOpen ? 'Tutup Asisten' : 'Tanya Asisten AI';
      }
    }

    launcher.addEventListener('click', () => {
      const isOpen = windowEl.classList.toggle('active');
      updateChatbotIcon(isOpen);
      if (isOpen) {
        chatInput.focus();
      }
    });

    closeBtn.addEventListener('click', () => {
      windowEl.classList.remove('active');
      updateChatbotIcon(false);
    });

    const chatSendBtn = document.getElementById('chatSendBtn');
    let chatHistory = [];

    function handleChipClick(topic) {
      sendMessage(topic, 'user');
      processBotResponse(topic);
    }

    function handleChatSubmit(e) {
      e.preventDefault();
      const val = chatInput.value.trim();
      if (!val) return;
      sendMessage(val, 'user');
      chatInput.value = '';
      processBotResponse(val);
    }

    function escapeHtml(str) {
      const div = document.createElement('div');
      div.textContent = str;
      return div.innerHTML;
    }

    function formatMarkdown(text) {
      if (!text) return '';
      let safe = escapeHtml(text);
      // Bold **text**
      safe = safe.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
      // Italics _text_
      safe = safe.replace(/_(.*?)_/g, '<em>$1</em>');
      // Markdown links [text](url) -> sanitize url and render link
      safe = safe.replace(/\[(.*?)\]\((.*?)\)/g, function(match, label, url) {
        const cleanUrl = url.trim();
        return `<a href="${cleanUrl}">${label}</a>`;
      });

      // Split lines to handle lists and paragraphs
      const lines = safe.split('\n');
      let html = '';
      let listType = null;

      for (let i = 0; i < lines.length; i++) {
        let line = lines[i].trim();
        if (!line) {
          if (listType) {
            html += listType === 'ol' ? '</ol>' : '</ul>';
            listType = null;
          }
          continue;
        }

        // Unordered list
        if (line.startsWith('• ') || line.startsWith('* ') || line.startsWith('- ')) {
          if (listType !== 'ul') {
            if (listType === 'ol') html += '</ol>';
            html += '<ul>';
            listType = 'ul';
          }
          html += `<li>${line.substring(2)}</li>`;
        }
        // Ordered list (1. / 2.)
        else if (/^\d+\.\s/.test(line)) {
          if (listType !== 'ol') {
            if (listType === 'ul') html += '</ul>';
            html += '<ol>';
            listType = 'ol';
          }
          html += `<li>${line.replace(/^\d+\.\s/, '')}</li>`;
        }
        // Paragraph
        else {
          if (listType) {
            html += listType === 'ol' ? '</ol>' : '</ul>';
            listType = null;
          }
          html += `<p>${line}</p>`;
        }
      }

      if (listType) {
        html += listType === 'ol' ? '</ol>' : '</ul>';
      }

      return html;
    }

    function sendMessage(content, sender, isHtml = false) {
      const msg = document.createElement('div');
      msg.className = 'chat-msg ' + sender;
      if (isHtml) {
        msg.innerHTML = content;
      } else {
        msg.innerText = content;
      }
      chatBody.appendChild(msg);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    function showTypingIndicator() {
      const indicator = document.createElement('div');
      indicator.className = 'typing-indicator';
      indicator.id = 'typingIndicator';
      indicator.innerHTML = '<span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span>';
      chatBody.appendChild(indicator);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    function removeTypingIndicator() {
      const indicator = document.getElementById('typingIndicator');
      if (indicator) indicator.remove();
    }

    async function processBotResponse(query) {
      showTypingIndicator();
      if (chatInput) chatInput.disabled = true;
      if (chatSendBtn) chatSendBtn.disabled = true;

      // Bersihkan chips lama yang berada di akhir percakapan
      const oldChips = chatBody.querySelectorAll('.chat-quick-chips');
      oldChips.forEach(el => el.remove());

      try {
        const response = await fetch('{{ route('ai.chat') }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          body: JSON.stringify({
            message: query,
            history: chatHistory
          })
        });

        const data = await response.json();
        removeTypingIndicator();

        if (response.ok && data && data.reply) {
          const formatted = formatMarkdown(data.reply);
          sendMessage(formatted, 'bot', true);

          // Update context memory (batasi panjang tiap pesan agar hemat bandwidth dan token)
          chatHistory.push({ role: 'user', content: query.substring(0, 300) });
          chatHistory.push({ role: 'assistant', content: data.reply.substring(0, 500) });
          if (chatHistory.length > 6) {
            chatHistory = chatHistory.slice(-6);
          }

          // Render suggestion chips dinamis
          const suggestions = data.suggestions || [];
          if (suggestions.length > 0) {
            const chipsContainer = document.createElement('div');
            chipsContainer.className = 'chat-quick-chips';
            suggestions.forEach(chipText => {
              const btn = document.createElement('button');
              btn.type = 'button';
              btn.className = 'chat-chip';
              btn.innerText = chipText;
              btn.onclick = () => handleChipClick(chipText);
              chipsContainer.appendChild(btn);
            });
            chatBody.appendChild(chipsContainer);
            chatBody.scrollTop = chatBody.scrollHeight;
          }
        } else {
          // Reset history jika ada kendala validasi agar turn berikutnya bersih
          chatHistory = [];
          sendMessage('Maaf, saya tidak dapat memproses jawaban saat ini. Silakan ulangi pertanyaanmu.', 'bot');
        }
      } catch (err) {
        console.error('AI Assistant Error:', err);
        removeTypingIndicator();
        sendMessage('Mohon maaf, sistem Asisten AI SMEXA sedang tidak dapat dihubungi. Silakan hubungi langsung panitia SMKN 1 Probolinggo di (0335) 421121.', 'bot');
      } finally {
        if (chatInput) {
          chatInput.disabled = false;
          chatInput.focus();
        }
        if (chatSendBtn) {
          chatSendBtn.disabled = false;
        }
      }
    }
  </script>
  <script>
    // User Dropdown Popover Interactivity
    document.addEventListener('DOMContentLoaded', function() {
      const userMenuToggle = document.getElementById('userMenuToggle');
      const userDropdown = document.getElementById('userDropdown');
      if (userMenuToggle && userDropdown) {
        userMenuToggle.addEventListener('click', function(e) {
          e.stopPropagation();
          const isExpanded = userMenuToggle.getAttribute('aria-expanded') === 'true';
          userMenuToggle.setAttribute('aria-expanded', !isExpanded);
          userDropdown.classList.toggle('show');
        });
        document.addEventListener('click', function(e) {
          if (!userDropdown.contains(e.target) && !userMenuToggle.contains(e.target)) {
            userDropdown.classList.remove('show');
            userMenuToggle.setAttribute('aria-expanded', 'false');
          }
        });
      }

      // High-performance Lazy Google Maps loader (zero impact on initial PageSpeed / Lighthouse audit)
      const mapContainer = document.getElementById('footerMapContainer');
      const mapIframe = document.getElementById('footerMapIframe');
      const mapFacade = document.getElementById('footerMapFacade');

      if (mapContainer && mapIframe) {
        let isMapLoaded = false;
        const loadGoogleMap = function() {
          if (isMapLoaded) return;
          isMapLoaded = true;
          const targetSrc = mapIframe.getAttribute('data-src');
          if (targetSrc) {
            mapIframe.src = targetSrc;
            mapIframe.addEventListener('load', function() {
              if (mapFacade) {
                mapFacade.classList.add('loaded');
              }
            }, { once: true });
          }
        };

        if ('IntersectionObserver' in window) {
          const mapObserver = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
              loadGoogleMap();
              mapObserver.disconnect();
            }
          }, { rootMargin: '300px 0px' });
          mapObserver.observe(mapContainer);
        } else {
          window.addEventListener('load', function() {
            setTimeout(loadGoogleMap, 2500);
          });
        }

        mapContainer.addEventListener('click', loadGoogleMap, { once: true });
      }
    });
  </script>

  {{-- Alpine.js for lightweight interactive components (Marquee, etc.) --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
  @stack('scripts')
</body>
</html>
