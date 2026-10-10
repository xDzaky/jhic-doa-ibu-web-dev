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
            <div style="background: #F1F5F9; width: 100%; aspect-ratio: 16/9; border-radius: 12px; margin-bottom: 32px; display: flex; align-items: center; justify-content: center; color: #64748B;">
              <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
                <path d="M21 15l-5-5L5 21"/>
              </svg>
            </div>
          </div>

          <div class="article-content reveal-item" data-delay="150">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi in magna mollis, in ut ornare, tristique accumsan nunc. Pellentesque maximus vulputate nisi, id lacinia libero. Aenean venenatis nisl sed libero condimentum, ut mauris arcu sollicitudin lectus ut congue. Aenean ac lacus magna. Mauris ullamcorper tincidunt ipsum non consequat. Quisque tellus nibh porta sollicitudin luctus ut congue sed dapibus.
            </p>
            
            <p>
              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut volutpat, amet mollis feugiat elit, amet molestie mauris, cursus scelerisque diam eut libero. Quisque eu finibus lorem. Maecenas id tincidunt ipsum. Nam in lacinia elit, luctum porta sollicitudin luctus et congue. Aenean ac lacus magna. Mauris ullamcorper mauris a arcu porttitor tincidunt lectus ut congue dolor in congue.
            </p>

            <div style="background: #F1F5F9; width: 100%; aspect-ratio: 16/9; border-radius: 12px; margin: 24px 0; display: flex; align-items: center; justify-content: center; color: #64748B;">
              <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
                <path d="M21 15l-5-5L5 21"/>
              </svg>
            </div>

            <p>
              Sed at elit elit. Quisque cursus dictum metus posuere lobortis. Nam fringilla mauris mauris, ullamcorper ac volutpat, tristique luctus sapien. Sed congue ultrices metus aliquam justo mauris arcu, tincidunt massa iaculis sit amet non, gravida mauris ullamcorper leo. Maecenas id interdum mollis fermentum nec a molestie mauris, cursus scelerisque diam eut libero. Quisque eu finibus augue. Nullam porta sollicitudin lectus et congue. Aenean ac lacus magna. Mauris ullamcorper mauris a arcu porttitor tincidunt lectus ut congue faucibus in velit ornare nisi sed tellus augue quis justo. Aenean ut magna ut magna ullamcorper at eu. Maecenas lacinia sollicitudin congue.
            </p>

            <p>
              Quisque dictum vestibulum sapien et elementum. Sed congue dictum aliquam non aliquat aliquam euismod. Sed sollicitudin, netus et malesuada ullamcorper leo. Aenean vitae pellentesque lacus arcu porttitor tincidunt facilisis in neque. Vivamus mauris faucibus in ultricies quam ut nunc. Pellentesque magna molestie id in cursus in et justo. Maecenas nulla ullamcorper et et sed ullamcorper vulputate risus. Vivamus luctus magna molestie cursus scelerisque diam eut libero. Quisque eu finibus lorem. Maecenas id tincidunt dictum. Nullam sodales, metus ut finibus lorem. Morbi accumsan vitae in adipiscing in.
            </p>

            <div style="background: #F1F5F9; width: 100%; aspect-ratio: 16/9; border-radius: 12px; margin: 24px 0; display: flex; align-items: center; justify-content: center; color: #64748B;">
              <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
                <path d="M21 15l-5-5L5 21"/>
              </svg>
            </div>

            <p>
              Sed at elit elit. Quisque cursus dictum metus posuere lobortis. Nam fringilla mauris mauris, ullamcorper ac volutpat, tristique luctus sapien. Sed congue ultrices metus aliquam justo mauris arcu, tincidunt massa iaculis sit amet non, gravida mauris ullamcorper leo. Maecenas id interdum mollis fermentum nec a molestie mauris, cursus scelerisque diam eut libero. Quisque eu finibus augue. Nullam porta sollicitudin lectus et congue. Aenean ac lacus magna. Mauris ullamcorper mauris a arcu porttitor tincidunt lectus ut congue faucibus in velit ornare nisi sed tellus augue quis justo. Aenean ut magna ut magna ullamcorper at eu. Maecenas lacinia sollicitudin congue.
            </p>

            <p>
              Quisque dictum vestibulum sapien et elementum. Sed congue dictum aliquam non aliquat aliquam euismod. Sed sollicitudin, netus et malesuada ullamcorper leo. Aenean vitae pellentesque lacus arcu porttitor tincidunt facilisis in neque. Vivamus mauris faucibus in ultricies quam ut nunc. Pellentesque magna molestie id in cursus in et justo. Maecenas nulla ullamcorper et et sed ullamcorper vulputate risus. Vivamus luctus magna molestie id. Morbi volutpat in. Morbi accumsan maximus mauris imperdiet scelerisque. Nam mauris massa finibus vehicula sit amet et nisi, finibus eu lacus in dapibus magna at cursus in et justo. Maecenas posuere. Ut magna augue vero eros varius imperdiet ut.
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
                <a href="#" class="sidebar-kategori-link">
                  <span>Kategori 1</span>
                  <span class="sidebar-kategori-count">(24)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="#" class="sidebar-kategori-link">
                  <span>Kategori 2</span>
                  <span class="sidebar-kategori-count">(12)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="#" class="sidebar-kategori-link">
                  <span>Kategori 3</span>
                  <span class="sidebar-kategori-count">(32)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="#" class="sidebar-kategori-link">
                  <span>Kategori 4</span>
                  <span class="sidebar-kategori-count">(18)</span>
                </a>
              </li>
              <li class="sidebar-kategori-item">
                <a href="#" class="sidebar-kategori-link">
                  <span>Kategori 5</span>
                  <span class="sidebar-kategori-count">(21)</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Berita Lainnya -->
          <div class="sidebar-card reveal-item" data-delay="200">
            <h3 class="sidebar-title">Berita Lainnya</h3>
            
            @for ($i = 1; $i <= 3; $i++)
            <a href="{{ route('berita.show', $i + 100) }}" class="berita-lainnya-card">
              <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Berita {{ $i }}" class="berita-lainnya-image">
              <div class="berita-lainnya-content">
                <div class="berita-lainnya-date">30 Oktober 2025</div>
                <h4 class="berita-lainnya-title">Tim LKR SMKN 1 Probolinggo Raih Juara 2 Potensial di Ajang STEP OF HONOR Jawa Timur 2025</h4>
              </div>
            </a>
            @endfor
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
