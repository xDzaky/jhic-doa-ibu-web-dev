<!DOCTYPE html>
<html lang="id">
<head>
  @php $assetVersion = config('app.asset_version', '20261005_v15'); @endphp
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
  <link rel="preconnect" href="https://fonts.cdnfonts.com">
  <link rel="preconnect" href="https://fonts.cdnfonts.com" crossorigin>

  <!-- Typography: Inter, Figtree & Istok Web -->
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400..700;1,400..700&family=Inter:wght@400..900&family=Istok+Web:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400..700;1,400..700&family=Inter:wght@400..900&family=Istok+Web:wght@400;700&display=swap" rel="stylesheet"></noscript>

  {{-- CSS lokal: minified untuk performa maksimal --}}
  <link rel="stylesheet" href="{{ asset('css/wireframe.min.css') }}?v={{ $assetVersion }}">
  <link rel="stylesheet" href="{{ asset('css/satoshi.min.css') }}?v={{ $assetVersion }}">

  <!-- Primary & Heading Font: SF Pro Display -->
  <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet"></noscript>
  
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
      "streetAddress": "Jl. Mastrip No. 357, Kanigaran",
      "addressLocality": "Kota Probolinggo",
      "addressRegion": "Jawa Timur",
      "postalCode": "67219",
      "addressCountry": "ID"
    },
    "telephone": "+62335421121",
    "email": "info@smkn1probolinggo.sch.id",
    "sameAs": ["https://www.instagram.com/smkn1probolinggo","https://www.facebook.com/smkn1official"]
  }
  </script>

  {{-- Preload LCP Hero Image (school_gate.webp = LCP element on homepage) --}}
  <link rel="preload" as="image" href="{{ asset('images/school_gate.webp') }}" type="image/webp" fetchpriority="high">

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

      <!-- Nav Links (Distilled, Anti-Sumpek) -->
      <ul class="nav-menu">
        <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="{{ route('ppdb') }}" class="nav-link {{ request()->routeIs('ppdb') ? 'active' : '' }}">PPDB 2026</a></li>
        <li><a href="{{ route('smexamall.index') }}" class="nav-link {{ request()->routeIs('smexamall.*') ? 'active' : '' }}">SMEXAMALL</a></li>
        <li><a href="{{ route('bkk') }}" class="nav-link {{ request()->routeIs('bkk') ? 'active' : '' }}">BKK &amp; PKL</a></li>
        <li><a href="{{ route('home') }}#jurusan" class="nav-link">Program Keahlian</a></li>
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
        <a href="{{ route('ppdb') }}" class="drawer-nav-link {{ request()->routeIs('ppdb') ? 'active' : '' }}">Pusat Informasi PPDB 2026</a>
        <a href="{{ route('smexamall.index') }}" class="drawer-nav-link {{ request()->routeIs('smexamall.*') ? 'active' : '' }}">SMEXAMALL Marketplace</a>
        <a href="{{ route('bkk') }}" class="drawer-nav-link {{ request()->routeIs('bkk') ? 'active' : '' }}">BKK &amp; Portal PKL Industri</a>
        <a href="{{ route('home') }}#jurusan" class="drawer-nav-link">5 Program Keahlian</a>
        <a href="{{ route('home') }}#prestasi" class="drawer-nav-link">Prestasi &amp; Alumni</a>
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
            Jl. Mastrip No. 357, Kanigaran, Kec. Kanigaran, Kota Probolinggo, Jawa Timur 67219
          </div>

          <div class="footer-info-divider"></div>

          <div class="footer-info-heading">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>Hubungi Kami</span>
          </div>
          <a href="tel:0335421121" class="footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>(0335) 421121</span>
          </a>
          <a href="mailto:info@smkn1probolinggo.sch.id" class="footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
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
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <span>Lokasi Google Maps</span>
            </div>
            <a href="https://www.google.com/maps/search/?api=1&query=SMK+Negeri+1+Probolinggo" target="_blank" rel="noopener noreferrer" class="footer-maps-pill-btn">
              Buka Peta Besar
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>

          <div class="footer-map-card">
            <a href="https://www.google.com/maps/search/?api=1&query=SMK+Negeri+1+Probolinggo" target="_blank" rel="noopener noreferrer" class="footer-map-badge">
              <span>Buka di Maps</span>
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
            <iframe 
              src="https://maps.google.com/maps?q=SMK%20Negeri%201%20Probolinggo%20Jl.%20Mastrip%20No.%20357&t=&z=15&ie=UTF8&iwloc=&output=embed" 
              loading="lazy" 
              title="Peta Lokasi SMK Negeri 1 Probolinggo"
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

    });
  </script>
  @stack('scripts')
</body>
</html>
