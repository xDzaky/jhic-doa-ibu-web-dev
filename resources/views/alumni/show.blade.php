@extends('layouts.app')

@section('title', 'Kata Alumni - ' . ($alumni['name'] ?? 'SMKN 1 Probolinggo'))
@section('meta_description', 'Testimoni dan cerita sukses alumni SMKN 1 Probolinggo')

@push('styles')
<style>
  /* Alumni Hero Section with Full Width Background (100% Width) */
  .alumni-hero-section {
    position: relative;
    width: 100%;
    background-image: url('{{ asset('images/kata-alumni-background.png') }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 100px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 280px;
    box-sizing: border-box;
  }
  
  .alumni-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(8, 32, 70, 0.88) 0%, rgba(29, 78, 216, 0.75) 100%);
  }
  
  .alumni-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #FFFFFF;
  }
  
  .alumni-hero-title {
    font-family: var(--font-heading);
    font-size: 3rem;
    font-weight: 900;
    color: #FFFFFF;
    margin: 0;
    text-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    letter-spacing: -0.02em;
  }
  
  /* Alumni Content Section */
  .alumni-content-section {
    background: #F8FAFC;
    padding: 80px 0;
  }
  
  .alumni-story-container {
    max-width: 1000px;
    margin: 0 auto;
  }
  
  .alumni-story-card {
    background: #F8FAFC;
    border-radius: 16px;
    border: none;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04), 0 6px 16px rgba(0, 0, 0, 0.02);
    margin-bottom: 40px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  
  .alumni-story-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(0, 37, 101, 0.06);
  }
  
  .alumni-card-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
    padding: 40px;
    align-items: start;
  }
  
  .alumni-photo-frame {
    width: 100%;
    height: 320px;
    border-radius: 12px;
    overflow: hidden;
    border: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    background: #F1F5F9;
  }
  
  .alumni-photo-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  
  .alumni-story-content {
    flex: 1;
  }
  
  .alumni-name {
    font-family: var(--font-heading);
    font-size: 1.75rem;
    font-weight: 800;
    color: #082046;
    margin: 0 0 4px;
    letter-spacing: -0.01em;
  }
  
  .alumni-year {
    font-size: 0.9375rem;
    font-weight: 700;
    color: #2563EB;
    margin-bottom: 20px;
    display: block;
  }
  
  .alumni-story-text {
    font-size: 0.9375rem;
    line-height: 1.8;
    color: #334155;
    margin: 0;
  }
  
  /* Alternate Layout (Image Right) */
  .alumni-card-layout.image-right {
    grid-template-columns: 1fr 280px;
  }
  
  .alumni-card-layout.image-right .alumni-photo-frame {
    order: 2;
  }
  
  .alumni-card-layout.image-right .alumni-story-content {
    order: 1;
  }
  
  @media (max-width: 768px) {
    .alumni-hero-title {
      font-size: 2rem;
    }
    
    .alumni-hero-section {
      padding: 60px 0;
      min-height: 200px;
    }
    
    .alumni-card-layout,
    .alumni-card-layout.image-right {
      grid-template-columns: 1fr;
      gap: 24px;
      padding: 28px;
    }
    
    .alumni-photo-frame {
      height: 280px;
      order: 1 !important;
    }
    
    .alumni-story-content {
      order: 2 !important;
    }
    
    .alumni-content-section {
      padding: 50px 0;
    }
  }
</style>
@endpush

@section('content')
  <!-- Hero Section with Full Width Background -->
  <section class="alumni-hero-section">
    <div class="alumni-hero-content">
      <h1 class="alumni-hero-title">Kata Alumni</h1>
    </div>
  </section>

  <!-- Alumni Story Content -->
  <section class="alumni-content-section">
    <div class="container alumni-story-container">
      
      <!-- Story 1 -->
      <div class="alumni-story-card reveal-item" data-delay="0">
        <div class="alumni-card-layout">
          <div class="alumni-photo-frame">
            <img src="{{ asset('images/mohammad-rizal-foto.png') }}" alt="Mohammad Rizal" loading="lazy">
          </div>
          <div class="alumni-story-content">
            <h2 class="alumni-name">Mohammad Rizal</h2>
            <span class="alumni-year">Alumni 2015</span>
            <p class="alumni-story-text">
              Ada yang bilang sekolah menengah itu gak bisa jadi apa-apa? Kata siapa? Kesuksesanmu adalah cerminan usahamu sewakiltu sekolah loh sobat. Tidak sedikit lulusan SMK yang sukses, diluar sana orang-orang sukses lulusan SMK banyak loh. Bahkan mental anak SMK itu sudah teruj. Siapapun kalam, apapun latar belakang pendidikan kalam kalian punya kemauan yang kuat, kalian pasti bisa menggapai cita-cita kalian. Jangan menyerah, jangan putus asa. Tetap jadi diri kalam masing-masing, asah kemampuan, uju teruskan suapya kalian bisa menjadi CHANGE AGENT, pemuda berkualitas - generasi yang menginsirasi. SMK Bisal Semua Luar Biasa!
            </p>
          </div>
        </div>
      </div>

      <!-- Story 2 (Image Right) -->
      <div class="alumni-story-card reveal-item" data-delay="100">
        <div class="alumni-card-layout image-right">
          <div class="alumni-photo-frame">
            <img src="{{ asset('images/mohammad-rizal-foto.png') }}" alt="Mohammad Rizal" loading="lazy">
          </div>
          <div class="alumni-story-content">
            <h2 class="alumni-name">Mohammad Rizal</h2>
            <span class="alumni-year">Alumni 2015</span>
            <p class="alumni-story-text">
              Ada yang bilang sekolah menengah itu gak bisa jadi apa-apa? Kata siapa? Kesuksesanmu adalah cerminan usahamu sewakiltu sekolah loh sobat. Tidak sedikit lulusan SMK yang sukses, diluar sana orang-orang sukses lulusan SMK banyak loh. Bahkan mental anak SMK itu sudah teruj. Siapapun kalam, apapun latar belakang pendidikan kalam kalian punya kemauan yang kuat, kalian pasti bisa menggapai cita-cita kalian. Jangan menyerah, jangan putus asa. Tetap jadi diri kalam masing-masing, asah kemampuan, uju teruskan suapya kalian bisa menjadi CHANGE AGENT, pemuda berkualitas - generasi yang menginsirasi. SMK Bisal Semua Luar Biasa!
            </p>
          </div>
        </div>
      </div>

      <!-- Story 3 -->
      <div class="alumni-story-card reveal-item" data-delay="200">
        <div class="alumni-card-layout">
          <div class="alumni-photo-frame">
            <img src="{{ asset('images/mohammad-rizal-foto.png') }}" alt="Mohammad Rizal" loading="lazy">
          </div>
          <div class="alumni-story-content">
            <h2 class="alumni-name">Mohammad Rizal</h2>
            <span class="alumni-year">Alumni 2015</span>
            <p class="alumni-story-text">
              Ada yang bilang sekolah menengah itu gak bisa jadi apa-apa? Kata siapa? Kesuksesanmu adalah cerminan usahamu sewakiltu sekolah loh sobat. Tidak sedikit lulusan SMK yang sukses, diluar sana orang-orang sukses lulusan SMK banyak loh. Bahkan mental anak SMK itu sudah teruj. Siapapun kalam, apapun latar belakang pendidikan kalam kalian punya kemauan yang kuat, kalian pasti bisa menggapai cita-cita kalian. Jangan menyerah, jangan putus asa. Tetap jadi diri kalam masing-masing, asah kemampuan, uju teruskan suapya kalian bisa menjadi CHANGE AGENT, pemuda berkualitas - generasi yang menginsirasi. SMK Bisal Semua Luar Biasa!
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Smooth Scroll Reveal Animation
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
