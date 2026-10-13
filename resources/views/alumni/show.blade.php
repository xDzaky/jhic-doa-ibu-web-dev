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
    background: rgba(8, 32, 70, 0.92);
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
    width: 80%;
    max-width: 1400px;
    margin: 0 auto;
  }
  
  .alumni-story-card {
    background: #F8FAFC;
    border-radius: 10px;
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
      
      <!-- Story 1: Rekayasa Perangkat Lunak -->
      <div class="alumni-story-card reveal-item" data-delay="0">
        <div class="alumni-card-layout">
          <div class="alumni-photo-frame">
            <img src="{{ asset('images/mohammad-rizal-foto.png') }}" alt="Mohammad Rizal - Alumni RPL SMKN 1 Probolinggo" loading="lazy">
          </div>
          <div class="alumni-story-content">
            <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 8px;">
              <span style="display: inline-block; padding: 4px 10px; background: #EFF6FF; color: #1D4ED8; font-size: 0.75rem; font-weight: 700; border-radius: 6px;">Rekayasa Perangkat Lunak</span>
              <span style="display: inline-block; padding: 4px 10px; background: #ECFDF5; color: #047857; font-size: 0.75rem; font-weight: 700; border-radius: 6px;">Senior Software Engineer</span>
            </div>
            <h2 class="alumni-name">Mohammad Rizal, S.Kom.</h2>
            <span class="alumni-year">Alumni Angkatan 2017 &bull; Tech Lead di Ekosistem Digital Nasional</span>
            <p class="alumni-story-text">
              "Ada yang mengira lulusan SMK punya batasan dalam meniti karir teknologi tingkat lanjut? Nyatanya tidak. Fondasi logika pemrograman, arsitektur basis data, serta kedisiplinan kerja industri yang saya dapatkan selama di SMKN 1 Probolinggo menjadi modal akselerasi terbesar saya. Mental siswa SMK itu teruji lewat praktikum intensif dan uji sertifikasi BNSP LSP-P1 sejak dini. Kunci utamanya adalah kemauan belajar mandiri dan rasa ingin tahu yang tak pernah padam. SMK Bisa, SMK Hebat, SMEXA Luar Biasa!"
            </p>
          </div>
        </div>
      </div>

      <!-- Story 2: Bisnis Digital (Image Right) -->
      <div class="alumni-story-card reveal-item" data-delay="100">
        <div class="alumni-card-layout image-right">
          <div class="alumni-photo-frame" style="background: #0F172A; display: flex; align-items: center; justify-content: center; position: relative;">
            <img src="{{ asset('images/news_bisnis_digital.webp') }}" alt="Amanda Putri Pratama - Alumni Bisnis Digital" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
          </div>
          <div class="alumni-story-content">
            <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 8px;">
              <span style="display: inline-block; padding: 4px 10px; background: #FEF3C7; color: #B45309; font-size: 0.75rem; font-weight: 700; border-radius: 6px;">Bisnis Digital & Marketing</span>
              <span style="display: inline-block; padding: 4px 10px; background: #F3E8FF; color: #7E22CE; font-size: 0.75rem; font-weight: 700; border-radius: 6px;">Digital Strategist & Founder</span>
            </div>
            <h2 class="alumni-name">Amanda Putri Pratama</h2>
            <span class="alumni-year">Alumni Angkatan 2020 &bull; Founder Agensi Kreatif & Live Commerce Partner</span>
            <p class="alumni-story-text">
              "Pengalaman langsung mengelola etalase Teaching Factory SMEXAMALL dan kurikulum kemitraan Alfamart Class melatih saya memahami siklus live commerce, optimasi konversi, serta operasional retail modern. Saat terjun ke dunia industri dan merintis bisnis agensi digital, saya tidak kaget dengan dinamika pasar. SMKN 1 Probolinggo membekali kami bukan sekadar teori kelas, melainkan keberanian mengeksekusi strategi bisnis riil."
            </p>
          </div>
        </div>
      </div>

      <!-- Story 3: Layanan Perbankan & Syariah -->
      <div class="alumni-story-card reveal-item" data-delay="200">
        <div class="alumni-card-layout">
          <div class="alumni-photo-frame" style="background: #042F2E; display: flex; align-items: center; justify-content: center; position: relative;">
            <img src="{{ asset('images/jurusan/lab_lpb.webp') }}" alt="Dimas Wahyu Prasetyo - Alumni Perbankan SMKN 1 Probolinggo" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
          </div>
          <div class="alumni-story-content">
            <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 8px;">
              <span style="display: inline-block; padding: 4px 10px; background: #CCFBF1; color: #0F766E; font-size: 0.75rem; font-weight: 700; border-radius: 6px;">Layanan Perbankan Syariah</span>
              <span style="display: inline-block; padding: 4px 10px; background: #EFF6FF; color: #1E40AF; font-size: 0.75rem; font-weight: 700; border-radius: 6px;">Relationship Officer</span>
            </div>
            <h2 class="alumni-name">Dimas Wahyu Prasetyo, A.Md.</h2>
            <span class="alumni-year">Alumni Angkatan 2019 &bull; Customer Relationship Officer Bank Jatim Cabang Probolinggo</span>
            <p class="alumni-story-text">
              "Praktik operasional di Mini Bank SMEXA sejak bangku kelas XI membuat saya sangat akrab dengan SOP frontliner perbankan, administrasi tabungan, dan kepatuhan transaksi keuangan. Melalui jejaring Bursa Kerja Khusus (BKK) SMKN 1 Probolinggo yang terintegrasi dengan perbankan regional, saya mendapat rekomendasi karir bahkan sebelum proses wisuda selesai. Sekolah vokasi adalah pintu akselerasi tercepat menuju kemandirian finansial."
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
