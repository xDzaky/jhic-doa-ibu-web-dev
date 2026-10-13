@extends('layouts.app')

@section('title', 'Tim LKR SMKN 1 Probolinggo Raih Juara 2 Potensial di Ajang STEP OF HONOR Jawa Timur 2025 - Berita SMKN 1 Probolinggo')
@section('meta_description', 'Berita lengkap tentang prestasi Tim LKR SMKN 1 Probolinggo yang meraih Juara 2 Potensial di Ajang STEP OF HONOR Jawa Timur 2025')

@push('styles')
<style>
  /* Breadcrumb */
  .berita-breadcrumb {
    background: #F8FAFC;
    padding: 16px 0;
    border-bottom: 1px solid #E2E8F0;
  }
  
  .breadcrumb-list {
    display: flex;
    align-items: center;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 0.875rem;
  }
  
  .breadcrumb-item {
    color: #64748B;
  }
  
  .breadcrumb-item a {
    color: #64748B;
    text-decoration: none;
    transition: color 0.15s;
  }
  
  .breadcrumb-item a:hover {
    color: #0B1B3D;
  }
  
  .breadcrumb-separator {
    color: #CBD5E1;
  }
  
  .breadcrumb-current {
    color: #0B1B3D;
    font-weight: 600;
  }
  
  /* Article Content Layout */
  .article-section {
    background: #FFFFFF;
    padding: 48px 0 72px;
  }
  
  .article-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 48px;
    align-items: start;
  }
  
  /* Main Article */
  .article-main {
    background: #FFFFFF;
  }
  
  .article-header {
    margin-bottom: 32px;
  }
  
  .article-title {
    font-family: var(--font-heading);
    font-size: 2rem;
    font-weight: 800;
    color: #0B1B3D;
    line-height: 1.3;
    margin: 0 0 16px;
  }
  
  .article-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    font-size: 0.875rem;
    color: #64748B;
  }
  
  .article-meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
  }
  
  .article-featured-image {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 32px;
    background: #F1F5F9;
    aspect-ratio: 16/9;
    object-fit: cover;
  }
  
  .article-content {
    font-family: var(--font-body);
    font-size: 1rem;
    line-height: 1.8;
    color: #334155;
  }
  
  .article-content p {
    margin: 0 0 20px;
    text-align: justify;
  }
  
  .article-content h2 {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 700;
    color: #0B1B3D;
    margin: 32px 0 16px;
  }
  
  .article-content img {
    width: 100%;
    border-radius: 12px;
    margin: 24px 0;
  }
  
  /* Sidebar */
  .article-sidebar {
    position: sticky;
    top: 88px;
  }
  
  .sidebar-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  }
  
  .sidebar-title {
    font-family: var(--font-heading);
    font-size: 1.125rem;
    font-weight: 800;
    color: #0B1B3D;
    margin: 0 0 16px;
    padding-bottom: 12px;
    border-bottom: 2px solid #E2E8F0;
  }
  
  .sidebar-search {
    position: relative;
    margin-bottom: 24px;
  }
  
  .sidebar-search-input {
    width: 100%;
    padding: 12px 40px 12px 16px;
    border: 1px solid #E2E8F0;
    border-radius: 8px;
    font-size: 0.875rem;
    outline: none;
    transition: all 0.2s;
  }
  
  .sidebar-search-input:focus {
    border-color: #2563EB;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
  }
  
  .sidebar-search-btn {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
    color: #64748B;
  }
  
  .sidebar-kategori-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .sidebar-kategori-item {
    padding: 0;
    margin-bottom: 8px;
  }
  
  .sidebar-kategori-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 12px;
    border-radius: 8px;
    font-size: 0.9375rem;
    font-weight: 600;
    color: #475569;
    text-decoration: none;
    transition: all 0.15s;
  }
  
  .sidebar-kategori-link:hover {
    background: #F8FAFC;
    color: #0B1B3D;
  }
  
  .sidebar-kategori-count {
    font-size: 0.8125rem;
    color: #94A3B8;
    background: #F1F5F9;
    padding: 2px 8px;
    border-radius: 4px;
  }
  
  .berita-lainnya-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    padding: 16px;
    margin-bottom: 16px;
    display: flex;
    gap: 16px;
    text-decoration: none;
    transition: all 0.2s;
  }
  
  .berita-lainnya-card:hover {
    border-color: #CBD5E1;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  }
  
  .berita-lainnya-image {
    width: 80px;
    height: 80px;
    border-radius: 8px;
    object-fit: cover;
    flex-shrink: 0;
  }
  
  .berita-lainnya-content {
    flex: 1;
    min-width: 0;
  }
  
  .berita-lainnya-date {
    font-size: 0.75rem;
    color: #64748B;
    margin-bottom: 4px;
  }
  
  .berita-lainnya-title {
    font-family: var(--font-heading);
    font-size: 0.875rem;
    font-weight: 700;
    color: #0B1B3D;
    line-height: 1.4;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  
  @media (max-width: 1024px) {
    .article-layout {
      grid-template-columns: 1fr;
      gap: 32px;
    }
    
    .article-sidebar {
      position: static;
    }
  }
  
  @media (max-width: 768px) {
    .article-section {
      padding: 32px 0 48px;
    }
    
    .article-title {
      font-size: 1.5rem;
    }
    
    .article-meta {
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
    }
    
    .article-content {
      font-size: 0.9375rem;
    }
    
    .sidebar-card {
      padding: 20px;
    }
  }
</style>
@endpush

@section('content')
  <!-- Breadcrumb -->
  <section class="berita-breadcrumb">
    <div class="container">
      <ul class="breadcrumb-list">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
        <li class="breadcrumb-separator">/</li>
        <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Artikel</a></li>
        <li class="breadcrumb-separator">/</li>
        <li class="breadcrumb-item"><span class="breadcrumb-current">Prestasi</span></li>
      </ul>
    </div>
  </section>

  <!-- Article Content -->
  <section class="article-section">
    <div class="container">
      <div class="article-layout">
        <!-- Main Article Content -->
        <article class="article-main">
          <header class="article-header reveal-item">
            <h1 class="article-title">Tim LKR SMKN 1 Probolinggo Raih Juara 2 Potensial di Ajang STEP OF HONOR Jawa Timur 2025</h1>
            <div class="article-meta">
              <div class="article-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                <span>30 Oktober 2025</span>
              </div>
              <div class="article-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <span>Admin</span>
              </div>
              <div class="article-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                <span>245 views</span>
              </div>
            </div>
          </header>

          <div class="reveal-item" data-delay="100">
            <div style="width: 100%; border-radius: 12px; margin-bottom: 28px; overflow: hidden; box-shadow: 0 4px 16px rgba(8, 32, 70, 0.08);">
              <img src="{{ asset('images/news_perkantoran.webp') }}" alt="Prestasi Tim LKR SMKN 1 Probolinggo" style="width: 100%; height: auto; display: block;" width="800" height="450" loading="eager" fetchpriority="high">
            </div>
          </div>

          <div class="article-content reveal-item" data-delay="150" style="line-height: 1.8; color: #334155; font-size: 0.96875rem;">
            <p>
              <strong>PROBOLINGGO</strong> — Prestasi membanggakan kembali ditorehkan oleh peserta didik SMK Negeri 1 Probolinggo di tingkat regional Jawa Timur. Tim Lomba Ketangkasan Baris-Berbaris (LKR) SMKN 1 Probolinggo sukses menyabet predikat <strong>Juara 2 Potensial</strong> dalam ajang bergengsi <em>STEP OF HONOR Jawa Timur 2025</em> yang diselenggarakan di GOR Ki Mageti, Magetan.
            </p>
            
            <p>
              Kompetisi yang diikuti oleh puluhan kontingen perwakilan SMA/SMK/MA se-Jawa Timur ini menguji ketahanan fisik, kekompakan formasi variasi, kedisiplinan aba-aba, serta kepemimpinan komandan peleton. Tim SMKN 1 Probolinggo yang beranggotakan gabungan siswa konsentrasi keahlian MPLB, RPL, Bisnis Digital, dan Akuntansi tampil memukau dengan menyajikan formasi formil berpadu variasi kreasi bertema "Semangat Vokasi Indonesia Maju".
            </p>

            <blockquote style="background: #F8FAFC; border-left: 4px solid #1D4ED8; border-radius: 0 10px 10px 0; padding: 18px 24px; margin: 28px 0; font-style: italic; color: #082046; font-weight: 600;">
              &ldquo;Alhamdulillah, kerja keras latihan intensif selama dua bulan berbuah manis. Prestasi ini membuktikan bahwa siswa kejuruan tidak hanya unggul dalam keahlian teknis industri, tetapi juga memiliki kedisiplinan mental dan jiwa kepemimpinan yang tangguh,&rdquo; ungkap Pembina Ekstrakurikuler Paskibra SMKN 1 Probolinggo.
            </blockquote>

            <p>
              Kepala SMKN 1 Probolinggo, Edi Hananto Eko, M.Pd., menyampaikan apresiasi setinggi-tingginya kepada seluruh anggota tim dan pelatih. Beliau menegaskan bahwa pencapaian ini selaras dengan pilar pendidikan karakter sekolah sebagai <strong>SMK Pusat Keunggulan (SMK PK)</strong> yang mengedepankan pembentukan karakter Profil Pelajar Pancasila dan budaya kerja industri 5R.
            </p>

            <p>
              Dengan torehan piala ini, SMKN 1 Probolinggo semakin mempertegas komitmennya dalam memfasilitasi minat dan bakat peserta didik melalui 11 cabang ekstrakurikuler resmi, sekaligus mengharumkan nama Kota Probolinggo di kancah perlombaan tingkat provinsi maupun nasional.
            </p>
          </div>
        </article>

        <!-- Sidebar -->
        <aside class="article-sidebar">
          <!-- Search -->
          <div class="sidebar-card reveal-item" data-delay="100">
            <h3 class="sidebar-title">Pencarian Berita</h3>
            <div class="sidebar-search">
              <input type="text" class="sidebar-search-input" placeholder="Cari berita...">
              <button class="sidebar-search-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="m21 21-4.35-4.35"></path>
                </svg>
              </button>
            </div>
          </div>

          <!-- Kategori -->
          <div class="sidebar-card reveal-item" data-delay="150">
            <h3 class="sidebar-title">Kategori Berita</h3>
            <ul class="sidebar-kategori-list">
              <li class="sidebar-kategori-item">
                <a href="{{ route('berita.index') }}" class="sidebar-kategori-link">
                  <span>Prestasi Siswa &amp; LKS</span>
                  <span class="sidebar-kategori-count">(28)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="{{ route('berita.index') }}" class="sidebar-kategori-link">
                  <span>Kemitraan DUDI &amp; Industri</span>
                  <span class="sidebar-kategori-count">(35)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="{{ route('berita.index') }}" class="sidebar-kategori-link">
                  <span>Teaching Factory &amp; BLUD</span>
                  <span class="sidebar-kategori-count">(19)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="{{ route('berita.index') }}" class="sidebar-kategori-link">
                  <span>Kegiatan Ekstrakurikuler</span>
                  <span class="sidebar-kategori-count">(16)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="{{ route('berita.index') }}" class="sidebar-kategori-link">
                  <span>Informasi Karir BKK &amp; PPDB</span>
                  <span class="sidebar-kategori-count">(24)</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Berita Lainnya -->
          <div class="sidebar-card reveal-item" data-delay="200">
            <h3 class="sidebar-title">Berita Terkait &amp; Populer</h3>
            
            <a href="{{ route('berita.show', 1) }}" class="berita-lainnya-card">
              <img src="{{ asset('images/school_gate.webp') }}" alt="SMK Pusat Keunggulan" class="berita-lainnya-image" loading="lazy">
              <div class="berita-lainnya-content">
                <div class="berita-lainnya-date">10 Oktober 2026</div>
                <h4 class="berita-lainnya-title">SMKN 1 Probolinggo Perkuat Status SMK Pusat Keunggulan (SMK PK)</h4>
              </div>
            </a>

            <a href="{{ route('berita.show', 10) }}" class="berita-lainnya-card">
              <img src="{{ asset('images/lab_rpl_resmi.webp') }}" alt="Axioo Class Lab RPL" class="berita-lainnya-image" loading="lazy">
              <div class="berita-lainnya-content">
                <div class="berita-lainnya-date">29 September 2026</div>
                <h4 class="berita-lainnya-title">Peresmian Axioo Class Program &amp; Jagoan Hosting di Lab RPL</h4>
              </div>
            </a>

            <a href="{{ route('berita.show', 13) }}" class="berita-lainnya-card">
              <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Teaching Factory SMEXAMALL" class="berita-lainnya-image" loading="lazy">
              <div class="berita-lainnya-content">
                <div class="berita-lainnya-date">27 September 2026</div>
                <h4 class="berita-lainnya-title">Katalog SMEXAMALL Tembus Ratusan Transaksi Siswa Vokasi</h4>
              </div>
            </a>
          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Smooth Scroll Reveal
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
  });
</script>
@endpush
