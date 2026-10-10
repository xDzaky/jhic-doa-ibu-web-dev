@extends('layouts.app')

@section('title', 'Berita & Artikel - SMKN 1 Probolinggo')
@section('meta_description', 'Berita terbaru, artikel, dan informasi kegiatan SMKN 1 Probolinggo - Sekolah Pusat Keunggulan.')

@push('styles')
<style>
  /* Berita Hero Section with Background */
  .berita-hero-section {
    position: relative;
    width: 100%;
    background: url('{{ asset('images/Berita-Background.png') }}') center/cover no-repeat;
    padding: 80px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 300px;
  }
  
  .berita-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(8, 32, 70, 0.85) 0%, rgba(15, 42, 74, 0.75) 100%);
  }
  
  .berita-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #FFFFFF;
  }
  
  .berita-hero-title {
    font-family: 'Inter', sans-serif;
    font-size: 2.75rem;
    font-weight: 800;
    color: #FFFFFF;
    margin: 0 0 8px;
    text-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    letter-spacing: -0.02em;
  }
  
  .berita-hero-subtitle {
    font-family: 'Inter', sans-serif;
    font-size: 1.125rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.9);
    margin: 0;
  }
  
  .berita-search-box {
    margin: 24px auto 0;
    max-width: 500px;
    position: relative;
  }
  
  .berita-search-input {
    width: 100%;
    padding: 12px 50px 12px 20px;
    border: 1px solid rgba(203, 213, 225, 0.4);
    border-radius: 8px;
    background: #FFFFFF;
    color: #0F172A;
    font-size: 0.9375rem;
    font-family: var(--font-body);
    outline: none;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  }
  
  .berita-search-input::placeholder {
    color: #94A3B8;
  }
  
  .berita-search-input:focus {
    border-color: #3B82F6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
  }
  
  .berita-search-btn {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    width: 36px;
    height: 36px;
    border-radius: 6px;
    background: #3B82F6;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  
  .berita-search-btn:hover {
    background: #2563EB;
    transform: translateY(-50%) scale(1.05);
  }
  
  /* Berita Content Section */
  .berita-content-section {
    background: #F8FAFC;
    padding: 60px 0;
  }
  
  .berita-section-title {
    font-family: var(--font-heading);
    font-size: 1.75rem;
    font-weight: 800;
    color: #0B1B3D;
    margin: 0 0 32px;
  }
  
  .berita-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    margin-bottom: 48px;
  }
  
  .berita-card {
    background: #FFFFFF;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    text-decoration: none;
  }
  
  .berita-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
  }
  
  .berita-card-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
  }
  
  .berita-card-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: #DC2626;
    color: #FFFFFF;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 6px 12px;
    border-radius: 6px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  
  .berita-card-body {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }
  
  .berita-card-meta {
    font-size: 0.8125rem;
    color: #64748B;
    margin-bottom: 8px;
  }
  
  .berita-card-title {
    font-family: var(--font-heading);
    font-size: 1.125rem;
    font-weight: 700;
    color: #0B1B3D;
    line-height: 1.4;
    margin: 0 0 12px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  
  .berita-card-excerpt {
    font-size: 0.875rem;
    line-height: 1.6;
    color: #64748B;
    margin: 0 0 16px;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  
  .berita-card-link {
    font-size: 0.875rem;
    font-weight: 700;
    color: #2563EB;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.2s ease;
  }
  
  .berita-card:hover .berita-card-link {
    gap: 10px;
  }
  
  .berita-kategori-title {
    font-family: var(--font-heading);
    font-size: 1.375rem;
    font-weight: 800;
    color: #0B1B3D;
    margin: 48px 0 24px;
    padding-bottom: 12px;
    border-bottom: 2px solid #E2E8F0;
  }
  
  @media (max-width: 1024px) {
    .berita-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
  }
  
  @media (max-width: 768px) {
    .berita-hero-section {
      padding: 60px 0;
      min-height: 250px;
    }
    
    .berita-hero-title {
      font-size: 2rem;
    }
    
    .berita-hero-subtitle {
      font-size: 0.9375rem;
    }
    
    .berita-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    
    .berita-section-title {
      font-size: 1.5rem;
      margin-bottom: 24px;
    }
    
    .berita-kategori-title {
      font-size: 1.25rem;
    }
  }
</style>
@endpush

@section('content')
  <!-- Hero Section with Background -->
  <section class="berita-hero-section">
    <div class="berita-hero-content">
      <h1 class="berita-hero-title">Berita & Artikel</h1>
      <p class="berita-hero-subtitle">SMKN 1 Probolinggo</p>
      
      <div class="berita-search-box">
        <input type="text" class="berita-search-input" placeholder="Cari berita atau artikel...">
        <button class="berita-search-btn" aria-label="Cari">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
          </svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Berita Content Section -->
  <section class="berita-content-section">
    <div class="container">
      <!-- Berita Terbaru -->
      <h2 class="berita-section-title reveal-item">Berita Terbaru</h2>
      
      <div class="berita-grid">
        @for ($i = 1; $i <= 6; $i++)
        <a href="{{ route('berita.show', $i) }}" class="berita-card reveal-item" data-delay="{{ $i * 50 }}">
          <div style="position: relative;">
            <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Berita {{ $i }}" class="berita-card-image" loading="lazy">
            <div class="berita-card-badge">Terbaru</div>
          </div>
          <div class="berita-card-body">
            <div class="berita-card-meta">30 September 2026</div>
            <h3 class="berita-card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi in magna mollis</h3>
            <p class="berita-card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi in magna mollis. Pellentesque maximus vulputate nisi, id lacinia tellus blandit in.</p>
            <span class="berita-card-link">
              Baca Selengkapnya
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>
        @endfor
      </div>

      <!-- Kategori 1 -->
      <h3 class="berita-kategori-title reveal-item">Kategori 1</h3>
      <div class="berita-grid">
        @for ($i = 1; $i <= 3; $i++)
        <a href="{{ route('berita.show', $i + 10) }}" class="berita-card reveal-item" data-delay="{{ $i * 50 }}">
          <img src="{{ asset('images/news_perkantoran.webp') }}" alt="Kategori 1 Berita {{ $i }}" class="berita-card-image" loading="lazy">
          <div class="berita-card-body">
            <div class="berita-card-meta">28 September 2026</div>
            <h3 class="berita-card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi</h3>
            <p class="berita-card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi in magna mollis.</p>
            <span class="berita-card-link">
              Baca Selengkapnya
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>
        @endfor
      </div>

      <!-- Kategori 2 -->
      <h3 class="berita-kategori-title reveal-item">Kategori 2</h3>
      <div class="berita-grid">
        @for ($i = 1; $i <= 3; $i++)
        <a href="{{ route('berita.show', $i + 20) }}" class="berita-card reveal-item" data-delay="{{ $i * 50 }}">
          <img src="{{ asset('images/news_ai.webp') }}" alt="Kategori 2 Berita {{ $i }}" class="berita-card-image" loading="lazy">
          <div class="berita-card-body">
            <div class="berita-card-meta">25 September 2026</div>
            <h3 class="berita-card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi</h3>
            <p class="berita-card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi in magna mollis.</p>
            <span class="berita-card-link">
              Baca Selengkapnya
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>
        @endfor
      </div>

      <!-- Kategori 3 -->
      <h3 class="berita-kategori-title reveal-item">Kategori 3</h3>
      <div class="berita-grid">
        @for ($i = 1; $i <= 3; $i++)
        <a href="{{ route('berita.show', $i + 30) }}" class="berita-card reveal-item" data-delay="{{ $i * 50 }}">
          <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Kategori 3 Berita {{ $i }}" class="berita-card-image" loading="lazy">
          <div class="berita-card-body">
            <div class="berita-card-meta">20 September 2026</div>
            <h3 class="berita-card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi</h3>
            <p class="berita-card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nisi in magna mollis.</p>
            <span class="berita-card-link">
              Baca Selengkapnya
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>
        @endfor
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
