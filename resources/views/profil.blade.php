@extends('layouts.app')

@section('title', 'Profil Sekolah - SMKN 1 Probolinggo')
@section('meta_description', 'Profil lengkap SMK Negeri 1 Probolinggo - Sekolah Pusat Keunggulan dengan visi menjadi sekolah berkarakter yang menghasilkan sumber daya manusia berdaya saing global.')

@push('styles')
<style>
  /* Profil Sekolah Section */
  .profil-hero-section {
    background: linear-gradient(180deg, #F8FAFC 0%, #FFFFFF 100%);
    padding: 40px 0 20px;
  }
  
  .profil-title-box {
    width: 100%;
    margin: 0 auto 48px;
    position: relative;
  }
  
  .profil-title-box img {
    width: 100%;
    height: auto;
    display: block;
  }
  
  .profil-content-section {
    background: #FFFFFF;
    padding: 0 0 72px;
  }
  
  .profil-section-title {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 800;
    color: #0B1B3D;
    margin: 0 0 8px 0;
    padding-bottom: 10px;
    border-bottom: 3px solid #FFB800;
    display: inline-block;
  }
  
  .profil-text {
    font-family: var(--font-body);
    font-size: 0.9375rem;
    line-height: 1.75;
    color: #334155;
    margin: 20px 0 0;
    text-align: justify;
  }
  
  .profil-misi-list {
    list-style: none;
    padding: 0;
    margin: 20px 0 0;
  }
  
  .profil-misi-list li {
    font-family: var(--font-body);
    font-size: 0.9375rem;
    line-height: 1.75;
    color: #334155;
    margin-bottom: 12px;
    padding-left: 28px;
    position: relative;
  }
  
  .profil-misi-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 8px;
    width: 8px;
    height: 8px;
    background: #0B1B3D;
    border-radius: 50%;
  }
  
  .profil-section-spacing {
    margin-bottom: 48px;
  }
  
  @media (max-width: 768px) {
    .profil-title-box {
      margin-bottom: 32px;
    }
    
    .profil-section-title {
      font-size: 1.25rem;
    }
    
    .profil-text,
    .profil-misi-list li {
      font-size: 0.875rem;
      line-height: 1.65;
    }
    
    .profil-section-spacing {
      margin-bottom: 32px;
    }
  }
</style>
@endpush

@section('content')
  <!-- Hero Section with Title Box -->
  <section class="profil-hero-section">
    <div class="profil-title-box reveal-item" data-delay="0">
      <img src="{{ asset('images/Title Box.png') }}" alt="Profil Sekolah SMKN 1 Probolinggo" loading="eager" fetchpriority="high">
    </div>
  </section>

  <!-- Content Section -->
  <section class="profil-content-section">
    <div class="container">
      <!-- Profil SMKN 1 Probolinggo -->
      <div class="profil-section-spacing reveal-item" data-delay="100">
        <h2 class="profil-section-title">Profil SMKN 1 PROBOLINGGO</h2>
        <p class="profil-text">
          SMKN 1 Probolinggo merupakan sekolah menengah kejuruan terkemuka yang berdedikasi mencetak lulusan berkualitas dan siap menghadapi dunia kerja maupun berwirausaha. Sekolah ini mengedepankan pendidikan vokasi berbasis kompetensi yang selaras dengan kebutuhan industri dan perkembangan teknologi.
        </p>
        <p class="profil-text">
          Dengan fasilitas lengkap seperti technopark, laboratorium modern, perpustakaan digital, serta business centre, SMKN 1 Probolinggo memberikan pengalaman belajar praktik nyata yang memperkuat keterampilan dan soft skill siswa. Selain fokus pada keunggulan akademik dan teknik, sekolah juga menanamkan nilai karakter seperti kejujuran, disiplin, kreativitas, dan jiwa wirausahaan. Melalui kerja sama aktif dengan dunia usaha, industri, dan perguruan tinggi, SMKN 1 Probolinggo mempersiapkan siswa menjadi profesional yang adaptif dan berdaya saing tinggi di era global.
        </p>
      </div>

      <!-- Visi -->
      <div class="profil-section-spacing reveal-item" data-delay="150">
        <h2 class="profil-section-title">VISI</h2>
        <p class="profil-text">
          "Pada Tahun 2029 Menjadi Sekolah Berkarakter yang Menghasilkan Sumber Daya Manusia Berdaya Saing Global, Kreatif, Inovatif, Berjwa Wirausaha, Berbudaya Lingkungan, dan Adaptif Terhadap Dunia Kerja & Industri dan Perkembangan IPTEK dengan Berlandaskan IMTAQ"
        </p>
      </div>

      <!-- Misi -->
      <div class="profil-section-spacing reveal-item" data-delay="200">
        <h2 class="profil-section-title">MISI</h2>
        <ol class="profil-misi-list">
          <li>Misi SMK Negeri 1 Probolinggo adalah:</li>
          <li>Mengoptimalkan pembelajaran berbasis industri dan project riil.</li>
          <li>Mengembangkan Kerjasama dengan Iduka skala nasional/internasional.</li>
          <li>Meningkatkan Kerjasama dengan perguruan tinggi vokasi.</li>
          <li>Mengembangkan kemampuan berwirausaha melalui kerjasama dengan Iduka.</li>
          <li>Meningkatkan pembelajaran yang beriman, bertakwa, berakhlak mulia, peduli dan berbudaya lingkungan.</li>
        </ol>
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
