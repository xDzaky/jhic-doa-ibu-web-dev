@extends('layouts.app')

@section('title', 'Profil Sekolah - SMKN 1 Probolinggo')
@section('meta_description', 'Profil lengkap SMK Negeri 1 Probolinggo - Sekolah Pusat Keunggulan dengan visi menjadi sekolah berkarakter yang menghasilkan sumber daya manusia berdaya saing global.')

@push('styles')
<style>
  /* Profil Sekolah Section */
  .profil-hero-section {
    background: #082046;
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
  <!-- Hero Section with Clean SF Pro Typography Banner -->
  <section class="profil-hero-section" style="background: #082046; border-bottom: 2px solid #0D2C54; padding: 70px 0 60px; color: #FFFFFF; position: relative; overflow: hidden;">
    <div style="position: absolute; right: -50px; bottom: -50px; opacity: 0.05; pointer-events: none;">
      <img src="{{ asset('images/logo_smkn1.webp') }}" alt="" width="360" height="360">
    </div>
    <div class="container reveal-item" data-delay="0" style="position: relative; z-index: 2;">
      <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.12); border: 1px solid rgba(255, 255, 255, 0.2); color: #FFB800; font-size: 0.78125rem; font-weight: 800; padding: 5px 14px; border-radius: 6px; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 16px;">
        Sekolah Pusat Keunggulan &amp; BLUD
      </div>
      <h1 style="font-family: var(--font-heading); font-size: 2.75rem; font-weight: 900; line-height: 1.15; letter-spacing: -0.03em; margin: 0 0 14px; color: #FFFFFF;">
        Profil SMK Negeri 1 Probolinggo
      </h1>
      <p style="font-size: 1.0625rem; line-height: 1.6; color: #E2E8F0; max-width: 760px; margin: 0;">
        Pusat pendidikan vokasi unggulan terakreditasi A Unggul dengan ekosistem Teaching Factory berbadan layanan BLUD, melahirkan lulusan berkarakter, kompeten, dan berdaya saing global.
      </p>
    </div>
  </section>

  <!-- Content Section -->
  <section class="profil-content-section" style="padding: 60px 0 80px; background: #FFFFFF;">
    <div class="container">
      
      <!-- Profil SMKN 1 Probolinggo -->
      <div class="profil-section-spacing reveal-item" data-delay="100" style="margin-bottom: 54px;">
        <h2 class="profil-section-title">Sekilas Profil Lembaga</h2>
        <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; margin-top: 24px; align-items: center;">
          <div>
            <p class="profil-text" style="margin-top: 0;">
              <strong>SMK Negeri 1 Probolinggo</strong> merupakan institusi pendidikan kejuruan rujukan di Kota Probolinggo yang secara konsisten berdedikasi menghasilkan lulusan berkualitas prima. Sebagai <strong>Sekolah Menengah Kejuruan Pusat Keunggulan (SMK PK)</strong> dan <strong>Badan Layanan Umum Daerah (BLUD)</strong>, kurikulum pembelajaran diselaraskan langsung dengan dinamika kebutuhan industri serta akselerasi transformasi digital.
            </p>
            <p class="profil-text">
              Kami memadukan penguatan <em>soft skills</em> (karakter IMTAQ, integritas, dan budaya kerja 5R) dengan kecakapan teknis <em>hard skills</em> terapan. Peserta didik difasilitasi pengalaman kerja riil melalui <strong>Teaching Factory SMEXAMALL</strong>, kelas industri mitra nasional, serta uji kompetensi berlisensi <strong>Badan Nasional Sertifikasi Profesi (BNSP)</strong> melalui LSP-P1 SMKN 1 Probolinggo.
            </p>
          </div>
          <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 16px rgba(8, 32, 70, 0.04);">
            <div style="font-size: 0.75rem; font-weight: 800; color: #1D4ED8; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">Identitas Resmi</div>
            <h3 style="font-size: 1.25rem; font-weight: 800; color: #082046; margin: 0 0 16px;">SMKN 1 Probolinggo</h3>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 0.875rem; color: #334155;">
              <li><strong>NPSN:</strong> 20566373</li>
              <li><strong>Status Akreditasi:</strong> A Unggul (BAN-SM)</li>
              <li><strong>Status Kelembagaan:</strong> SMK PK &amp; BLUD Jawa Timur</li>
              <li><strong>Konsentrasi Keahlian:</strong> 5 Program Unggulan</li>
              <li><strong>Sertifikasi:</strong> LSP-P1 Terlisensi BNSP</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Visi 2029 -->
      <div class="profil-section-spacing reveal-item" data-delay="150" style="margin-bottom: 54px; background: #F8FAFC; border-left: 4px solid #1D4ED8; border-radius: 0 16px 16px 0; padding: 28px 32px;">
        <span style="font-size: 0.75rem; font-weight: 800; color: #1D4ED8; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 6px;">Visi Strategis Lembaga</span>
        <h2 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #082046; margin: 0 0 14px;">VISI TAHUN 2029</h2>
        <blockquote style="font-size: 1.0625rem; line-height: 1.7; color: #0F172A; font-weight: 600; margin: 0; font-style: italic;">
          &ldquo;Pada Tahun 2029 Menjadi Sekolah Berkarakter yang Menghasilkan Sumber Daya Manusia Berdaya Saing Global, Kreatif, Inovatif, Berjiwa Wirausaha, Berbudaya Lingkungan, dan Adaptif Terhadap Dunia Kerja &amp; Industri serta Perkembangan IPTEK dengan Berlandaskan IMTAQ.&rdquo;
        </blockquote>
      </div>

      <!-- Misi Strategis -->
      <div class="profil-section-spacing reveal-item" data-delay="200" style="margin-bottom: 54px;">
        <h2 class="profil-section-title">MISI STRATEGIS</h2>
        <p style="font-size: 0.9375rem; color: #64748B; margin: 16px 0 20px;">Lima pilar implementasi untuk mencapai keunggulan vokasi terpadu:</p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px;">
          <div style="background: #FFFFFF; border: 1.5px solid #E2E8F0; border-radius: 12px; padding: 18px 20px; display: flex; gap: 14px; align-items: start;">
            <span style="display: inline-flex; width: 28px; height: 28px; background: #082046; color: #FFF; border-radius: 50%; font-size: 0.8125rem; font-weight: 800; align-items: center; justify-content: center; flex-shrink: 0;">1</span>
            <span style="font-size: 0.90625rem; color: #1E293B; line-height: 1.5; font-weight: 600;">Mengoptimalkan pembelajaran berbasis industri dan penyelesaian proyek riil (Project-Based Learning).</span>
          </div>
          <div style="background: #FFFFFF; border: 1.5px solid #E2E8F0; border-radius: 12px; padding: 18px 20px; display: flex; gap: 14px; align-items: start;">
            <span style="display: inline-flex; width: 28px; height: 28px; background: #082046; color: #FFF; border-radius: 50%; font-size: 0.8125rem; font-weight: 800; align-items: center; justify-content: center; flex-shrink: 0;">2</span>
            <span style="font-size: 0.90625rem; color: #1E293B; line-height: 1.5; font-weight: 600;">Mengembangkan kerja sama kemitraan strategis dengan IDUKA skala nasional dan multinasional.</span>
          </div>
          <div style="background: #FFFFFF; border: 1.5px solid #E2E8F0; border-radius: 12px; padding: 18px 20px; display: flex; gap: 14px; align-items: start;">
            <span style="display: inline-flex; width: 28px; height: 28px; background: #082046; color: #FFF; border-radius: 50%; font-size: 0.8125rem; font-weight: 800; align-items: center; justify-content: center; flex-shrink: 0;">3</span>
            <span style="font-size: 0.90625rem; color: #1E293B; line-height: 1.5; font-weight: 600;">Memperluas sinergi berkelanjutan bersama perguruan tinggi vokasi dan politeknik negeri terkemuka.</span>
          </div>
          <div style="background: #FFFFFF; border: 1.5px solid #E2E8F0; border-radius: 12px; padding: 18px 20px; display: flex; gap: 14px; align-items: start;">
            <span style="display: inline-flex; width: 28px; height: 28px; background: #082046; color: #FFF; border-radius: 50%; font-size: 0.8125rem; font-weight: 800; align-items: center; justify-content: center; flex-shrink: 0;">4</span>
            <span style="font-size: 0.90625rem; color: #1E293B; line-height: 1.5; font-weight: 600;">Mengembangkan kemandirian wirausaha peserta didik melalui inkubasi Teaching Factory BLUD.</span>
          </div>
          <div style="background: #FFFFFF; border: 1.5px solid #E2E8F0; border-radius: 12px; padding: 18px 20px; display: flex; gap: 14px; align-items: start; grid-column: 1 / -1;">
            <span style="display: inline-flex; width: 28px; height: 28px; background: #082046; color: #FFF; border-radius: 50%; font-size: 0.8125rem; font-weight: 800; align-items: center; justify-content: center; flex-shrink: 0;">5</span>
            <span style="font-size: 0.90625rem; color: #1E293B; line-height: 1.5; font-weight: 600;">Meningkatkan kualitas pembelajaran yang beriman, bertakwa, berakhlak mulia, serta berbudaya peduli lingkungan hidup.</span>
          </div>
        </div>
      </div>

      <!-- Fasilitas & Ekosistem Kampus -->
      <div class="profil-section-spacing reveal-item" data-delay="250">
        <h2 class="profil-section-title">Ekosistem Fasilitas Praktik Industri</h2>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 24px;">
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 20px;">
            <div style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; background: #E0E7FF; border-radius: 6px; color: #1E3A8A; margin-bottom: 12px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M8 14h.01"/><path d="M16 14h.01"/></svg></div>
            <h3 style="font-size: 1rem; font-weight: 800; color: #082046; margin: 0 0 6px;">Technopark SMEXA</h3>
            <p style="font-size: 0.8125rem; color: #64748B; margin: 0; line-height: 1.5;">Gedung pusat inovasi terpadu untuk Teaching Factory, pameran produk, dan kolaborasi startup siswa.</p>
          </div>
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 20px;">
            <div style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; background: #DCFCE7; border-radius: 6px; color: #15803D; margin-bottom: 12px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
            <h3 style="font-size: 1rem; font-weight: 800; color: #082046; margin: 0 0 6px;">Laboratorium Axioo &amp; Cloud</h3>
            <p style="font-size: 0.8125rem; color: #64748B; margin: 0; line-height: 1.5;">Lab komputer berspesifikasi industri untuk rekayasa software, mobile development, dan sertifikasi BNSP.</p>
          </div>
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 20px;">
            <div style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; background: #DBEAFE; border-radius: 6px; color: #1D4ED8; margin-bottom: 12px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="2" y="6" rx="2"/></svg></div>
            <h3 style="font-size: 1rem; font-weight: 800; color: #082046; margin: 0 0 6px;">Studio Live Commerce BD</h3>
            <p style="font-size: 0.8125rem; color: #64748B; margin: 0; line-height: 1.5;">Fasilitas siaran langsung penjualan online profesional dengan tata pencahayaan dan audio studio.</p>
          </div>
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 20px;">
            <div style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; background: #FEF3C7; border-radius: 6px; color: #B45309; margin-bottom: 12px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="21" x2="21" y2="21"/><line x1="6" y1="18" x2="6" y2="11"/><line x1="10" y1="18" x2="10" y2="11"/><line x1="14" y1="18" x2="14" y2="11"/><line x1="18" y1="18" x2="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg></div>
            <h3 style="font-size: 1rem; font-weight: 800; color: #082046; margin: 0 0 6px;">Mini Bank SMEXA</h3>
            <p style="font-size: 0.8125rem; color: #64748B; margin: 0; line-height: 1.5;">Simulasi operasional teller dan perbankan digital riil bekerjasama dengan Bank Jatim.</p>
          </div>
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 20px;">
            <div style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; background: #FCE7F3; border-radius: 6px; color: #BE185D; margin-bottom: 12px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
            <h3 style="font-size: 1rem; font-weight: 800; color: #082046; margin: 0 0 6px;">Lab Simulasi Perkantoran MICE</h3>
            <p style="font-size: 0.8125rem; color: #64748B; margin: 0; line-height: 1.5;">Ruang praktik tata kelola rapat eksekutif, kearsipan cloud, dan manajemen keprotokolan acara.</p>
          </div>
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 20px;">
            <div style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; background: #FEE2E2; border-radius: 6px; color: #B91C1C; margin-bottom: 12px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
            <h3 style="font-size: 1rem; font-weight: 800; color: #082046; margin: 0 0 6px;">Lab Komputer Akuntansi Accurate</h3>
            <p style="font-size: 0.8125rem; color: #64748B; margin: 0; line-height: 1.5;">Perangkat lunak akuntansi resmi berlisensi untuk simulasi pembukuan fiskal dan Brevet Pajak.</p>
          </div>
        </div>
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
