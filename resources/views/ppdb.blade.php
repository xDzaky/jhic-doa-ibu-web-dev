@extends('layouts.app')

@section('title', 'Pusat Informasi & Pendaftaran PPDB 2026 - SMKN 1 Probolinggo')
@section('meta_description', 'Daftar PPDB 2026 SMKN 1 Probolinggo online. Persyaratan, jadwal seleksi, daya tampung 5 konsentrasi keahlian: RPL, Bisnis Digital, Akuntansi, Layanan Perkantoran, Logistik. Sekolah Pusat Keunggulan akreditasi A.')

@push('head')
  <link rel="preload" as="image" href="{{ asset('images/ppdb/spmb-poster-2.webp') }}" type="image/webp" fetchpriority="high">
@endpush

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/ppdb.min.css') }}?v=20261010_v27">
  <style>
    .ppdb-action-section {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 16px;
      padding: 32px;
      margin-top: 32px;
      box-shadow: 0 4px 16px rgba(0, 37, 101, 0.04);
      max-width: 100%;
      box-sizing: border-box;
      overflow: hidden;
    }
    .ppdb-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      width: 100%;
      box-sizing: border-box;
    }
    .ppdb-input-group {
      display: flex;
      flex-direction: column;
      gap: 6px;
      min-width: 0;
      width: 100%;
      box-sizing: border-box;
    }
    .ppdb-input-group label {
      font-size: 0.8125rem;
      font-weight: 700;
      color: #334155;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }
    .ppdb-input {
      padding: 10px 14px;
      border: 1.5px solid #CBD5E1;
      border-radius: 8px;
      font-size: 0.9375rem;
      font-family: inherit;
      outline: none;
      transition: all 0.2s;
      width: 100%;
      max-width: 100%;
      min-width: 0;
      box-sizing: border-box;
    }
    select.ppdb-input {
      width: 100%;
      max-width: 100%;
      min-width: 0;
      box-sizing: border-box;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }
    select.ppdb-input option {
      max-width: 100%;
      white-space: normal;
    }
    .ppdb-input:focus {
      border-color: var(--navy-header);
      box-shadow: 0 0 0 3px rgba(0, 37, 101, 0.1);
    }
    @media (max-width: 768px) {
      .ppdb-action-section {
        padding: 20px 16px;
        border-radius: 12px;
      }
      .ppdb-form-grid {
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .ppdb-submit-row {
        justify-content: stretch !important;
      }
      .ppdb-submit-btn,
      .ppdb-action-section button[type="submit"] {
        width: 100% !important;
        white-space: normal !important;
        line-height: 1.35 !important;
        padding: 12px 16px !important;
        font-size: 0.875rem !important;
        justify-content: center !important;
        text-align: center !important;
      }
    }
    /* Executive PPDB Quota & Verification Ledger Ribbon - Stats Bar Style (Full Width) */
    .ppdb-stat-strip {
      width: 100%;
      background: #053382;
      padding: 18px 0;
      display: block;
      position: relative;
      margin: 32px 0;
      box-shadow: 0 4px 16px rgba(5, 51, 130, 0.15);
    }
    .ppdb-stat-strip-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0;
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .ppdb-stat-card {
      flex: 1;
      text-align: center;
      padding: 0 24px;
      border-right: 1px solid rgba(255, 255, 255, 0.22);
      transition: transform 0.3s ease;
    }
    .ppdb-stat-card:last-child {
      border-right: none;
    }
    .ppdb-stat-card:hover {
      transform: scale(1.05);
    }
    .ppdb-stat-num {
      display: block;
      font-family: 'Istok Web', sans-serif;
      font-size: 2.25rem;
      font-weight: 700;
      color: #FFFFFF;
      line-height: 1.1;
      letter-spacing: -0.5px;
      transition: color 0.3s ease;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .ppdb-stat-label {
      display: block;
      font-family: 'Istok Web', sans-serif;
      font-size: 0.8rem;
      font-weight: 400;
      color: rgba(255, 255, 255, 0.88);
      margin-top: 6px;
      line-height: 1.3;
    }
    @media (max-width: 900px) {
      .ppdb-stat-strip { 
        padding: 16px 0;
        margin: 24px 0;
      }
      .ppdb-stat-strip-inner { 
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
        padding: 12px 16px;
      }
      .ppdb-stat-card { 
        border-right: none;
        padding: 12px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 10px;
      }
      .ppdb-stat-num { font-size: 1.75rem; }
      .ppdb-stat-label { font-size: 0.7rem; }
    }
    @media (max-width: 540px) {
      .ppdb-stat-strip-inner { 
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
      }
      .ppdb-stat-card { padding: 10px; }
      .ppdb-stat-num { font-size: 1.5rem; }
      .ppdb-stat-label { font-size: 0.65rem; }
    }
  </style>
@endpush

@section('content')
  <!-- 1. HERO SECTION -->
  <section class="ppdb-hero">
    <div class="container ppdb-hero-grid">
      <div>
        <h1 class="ppdb-hero-title">Penerimaan Peserta Didik Baru (PPDB) SMKN 1 Probolinggo</h1>
        
        <div class="official-gov-box">
          <strong>Petunjuk Resmi:</strong> Pendaftaran SMK Negeri dilaksanakan secara transparan melalui seleksi kuota resmi <strong>{{ $totalQuota ?? 432 }} Siswa ({{ $totalRombel ?? 12 }} Rombel)</strong>. Laman ini menyajikan formulir pendaftaran langsung, rincian daya tampung 5 program keahlian, dan pengecekan verifikasi berkas.
        </div>

        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
          <a href="#form-daftar" class="btn btn-red">Daftar Online Sekarang</a>
          <a href="#cek-status" class="btn btn-orange">Cek Status Pendaftaran</a>
          <a href="#daya-tampung" class="btn btn-outline-navy">Lihat Kuota Jurusan</a>
          <a href="{{ asset('docs/Formulir_Pendaftaran_PPDB_Resmi.pdf') }}" target="_blank" download class="btn btn-outline-navy" style="display: inline-flex; align-items: center; gap: 6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Unduh Formulir Resmi (PDF)
          </a>
        </div>
      </div>

      <!-- Right: Interactive HD Poster Showcase (Ganti-ganti Foto) -->
      <div>
        <div class="ppdb-poster-showcase" id="ppdbPosterShowcase">
          <!-- Main Display Frame with aspect-ratio 1170/1463 to guarantee CLS=0 -->
          <div class="poster-display-frame">
            <!-- Slides Wrapper -->
            <div class="poster-slides-wrapper" id="posterSlidesWrapper">
              <!-- Slide 1: SPMB Poster 2 (Default Active) -->
              <div class="poster-slide active" data-index="0" data-label="Poster Resmi PPDB 2026" data-sub="Alur &amp; Kuota 432 Siswa">
                <img 
                  src="{{ asset('images/ppdb/spmb-poster-2.webp') }}" 
                  alt="Poster Resmi PPDB 2026 SMKN 1 Probolinggo" 
                  width="1170" 
                  height="1463" 
                  fetchpriority="high"
                  loading="eager" 
                  decoding="async" 
                  class="poster-img"
                >
              </div>

              <!-- Slide 2: Jadwal SPMB -->
              <div class="poster-slide" data-index="1" data-label="Jadwal &amp; Persyaratan Seleksi" data-sub="Kalender Resmi PPDB Jatim 2026">
                <img 
                  src="{{ asset('images/ppdb/jadwal-spmb.webp') }}" 
                  alt="Jadwal Tahapan Seleksi PPDB Jatim 2026 SMKN 1 Probolinggo" 
                  width="1170" 
                  height="1463" 
                  loading="lazy" 
                  decoding="async" 
                  class="poster-img"
                >
              </div>

              <!-- Slide 3: MPLS Poster -->
              <div class="poster-slide" data-index="2" data-label="Informasi MPLS Ramah Anak" data-sub="Masa Pengenalan Lingkungan Sekolah SMEXA">
                <img 
                  src="{{ asset('images/ppdb/mpls-poster.webp') }}" 
                  alt="Poster MPLS Ramah Anak SMKN 1 Probolinggo" 
                  width="1170" 
                  height="1463" 
                  loading="lazy" 
                  decoding="async" 
                  class="poster-img"
                >
              </div>
            </div>

            <!-- Navigation Arrow Buttons -->
            <button type="button" class="poster-nav-btn poster-prev" id="posterPrevBtn" aria-label="Poster Sebelumnya">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button type="button" class="poster-nav-btn poster-next" id="posterNextBtn" aria-label="Poster Selanjutnya">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>

            <!-- Indicator Dots -->
            <div class="poster-dots" id="posterDots" aria-label="Indikator Poster">
              <button type="button" class="poster-dot active" data-slide="0" aria-label="Lihat Slide 1 Poster PPDB"></button>
              <button type="button" class="poster-dot" data-slide="1" aria-label="Lihat Slide 2 Jadwal Seleksi"></button>
              <button type="button" class="poster-dot" data-slide="2" aria-label="Lihat Slide 3 Info MPLS"></button>
            </div>
          </div>

          <!-- Interactive 3-Thumb Selector Strip -->
          <div class="poster-thumb-strip">
            <button type="button" class="poster-thumb-card active" data-target="0">
              <img src="{{ asset('images/ppdb/thumbs/spmb-poster-2.webp') }}" alt="Mini Poster PPDB" width="32" height="40" loading="lazy">
              <div class="thumb-meta">
                <span class="thumb-title">Poster PPDB</span>
                <span class="thumb-sub">Alur &amp; Kuota</span>
              </div>
            </button>
            <button type="button" class="poster-thumb-card" data-target="1">
              <img src="{{ asset('images/ppdb/thumbs/jadwal-spmb.webp') }}" alt="Mini Jadwal" width="32" height="40" loading="lazy">
              <div class="thumb-meta">
                <span class="thumb-title">Jadwal Seleksi</span>
                <span class="thumb-sub">Tahapan Resmi</span>
              </div>
            </button>
            <button type="button" class="poster-thumb-card" data-target="2">
              <img src="{{ asset('images/ppdb/thumbs/mpls-poster.webp') }}" alt="Mini MPLS" width="32" height="40" loading="lazy">
              <div class="thumb-meta">
                <span class="thumb-title">Info MPLS</span>
                <span class="thumb-sub">Orientasi Siswa</span>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Wave Transition between Hero & Jadwal Seleksi (Matching Reference Image 1) -->
    <div class="ppdb-hero-wave-wrap" aria-hidden="true">
      <img src="{{ asset('images/ppdb/wave-transition.png') }}" alt="" width="1343" height="63" class="ppdb-hero-wave-img" loading="eager" decoding="async">
    </div>
  </section>

  <!-- 2. JADWAL TAHAPAN SELEKSI PPDB JATIM 2026 (Matching Reference Image 2) -->
  <section class="section ppdb-schedule-section" id="jadwal-seleksi">
    <div class="container">
      <div class="section-header center" style="text-align: center; max-width: 720px; margin: 0 auto 36px;">
        <h2 class="section-title" style="font-size: 2rem; font-weight: 800; color: var(--navy-header); margin: 8px 0 10px;">
          Jadwal Tahapan Seleksi PPDB Jatim 2026
        </h2>
        <p style="color: #475569; font-size: 0.9375rem; line-height: 1.6;">
          Penerimaan Peserta Didik Baru (PPDB) SMK Negeri dilaksanakan secara transparan, akuntabel, dan bertahap. Pastikan mencatat seluruh tanggal penting agar tidak terlewat proses registrasi.
        </p>
      </div>

      <!-- Modern Stepped Timeline (Reference Image 2: Center Line + Alternating Connected Icons) -->
      <div class="ppdb-timeline-v2">
        <!-- STEP 1 (LEFT) -->
        <div class="ppdb-tl-v2-item ppdb-tl-v2-left reveal-item" data-delay="0">
          <div class="ppdb-tl-v2-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          </div>
          <div class="ppdb-tl-v2-dash" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-node" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-content">
            <div class="ppdb-tl-v2-step">STEP 1</div>
            <h3 class="ppdb-tl-v2-title">Pengambilan PIN &amp; Verifikasi Nilai Rapor</h3>
            <p class="ppdb-tl-v2-desc">
              Calon peserta didik baru melakukan login mandiri pada portal resmi PPDB Jatim, mengunggah kartu keluarga (KK), dan memverifikasi kesesuaian nilai rapor semester 1 s.d 5.
            </p>
            <div class="ppdb-tl-v2-meta">
              <span class="ppdb-tl-v2-date">20 Mei &ndash; 10 Juni 2026</span>
              <span class="ppdb-tl-v2-badge">Mandiri Online &amp; Layanan Posko SMEXA</span>
            </div>
          </div>
        </div>

        <!-- STEP 2 (RIGHT) -->
        <div class="ppdb-tl-v2-item ppdb-tl-v2-right reveal-item" data-delay="80">
          <div class="ppdb-tl-v2-node" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-dash" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
          </div>
          <div class="ppdb-tl-v2-content">
            <div class="ppdb-tl-v2-step">STEP 2</div>
            <h3 class="ppdb-tl-v2-title">Pendaftaran Jalur Afirmasi &amp; Prestasi Lomba</h3>
            <p class="ppdb-tl-v2-desc">
              Pendaftaran khusus jalur afirmasi keluarga pra-sejahtera (kuota 15%), perpindahan tugas orang tua (5%), serta prestasi hasil kejuaraan akademik, olahraga, sains &amp; seni (5%).
            </p>
            <div class="ppdb-tl-v2-meta">
              <span class="ppdb-tl-v2-date">15 &ndash; 16 Juni 2026</span>
              <span class="ppdb-tl-v2-badge">Pengumuman Hasil: 17 Juni 2026 (08.00 WIB)</span>
            </div>
          </div>
        </div>

        <!-- STEP 3 (LEFT) -->
        <div class="ppdb-tl-v2-item ppdb-tl-v2-left reveal-item" data-delay="160">
          <div class="ppdb-tl-v2-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
          </div>
          <div class="ppdb-tl-v2-dash" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-node" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-content">
            <div class="ppdb-tl-v2-step">STEP 3</div>
            <h3 class="ppdb-tl-v2-title">Pendaftaran Jalur Prestasi Nilai Akademik (Umum)</h3>
            <p class="ppdb-tl-v2-desc">
              Seleksi berbasis bobot nilai rapor 70% dan nilai akreditasi SMP/MTs 30% untuk 5 konsentrasi keahlian: RPL, Bisnis Digital, Akuntansi, Manajemen Perkantoran, dan Layanan Perbankan.
            </p>
            <div class="ppdb-tl-v2-meta">
              <span class="ppdb-tl-v2-date">22 &ndash; 23 Juni 2026</span>
              <span class="ppdb-tl-v2-badge">Pengumuman Kelulusan: 24 Juni 2026</span>
            </div>
          </div>
        </div>

        <!-- STEP 4 (RIGHT) -->
        <div class="ppdb-tl-v2-item ppdb-tl-v2-right reveal-item" data-delay="240">
          <div class="ppdb-tl-v2-node" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-dash" aria-hidden="true"></div>
          <div class="ppdb-tl-v2-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          </div>
          <div class="ppdb-tl-v2-content">
            <div class="ppdb-tl-v2-step">STEP 4</div>
            <h3 class="ppdb-tl-v2-title">Daftar Ulang &amp; Verifikasi Berkas Fisik</h3>
            <p class="ppdb-tl-v2-desc">
              Siswa yang dinyatakan diterima hadir langsung di Kampus SMKN 1 Probolinggo untuk penyerahan berkas fisik asli, tes kesehatan kejuruan, dan pengukuran seragam praktek/sekolah.
            </p>
            <div class="ppdb-tl-v2-meta">
              <span class="ppdb-tl-v2-date">01 &ndash; 02 Juli 2026</span>
              <span class="ppdb-tl-v2-badge">Kampus SMKN 1 Probolinggo &bull; Jl. Mastrip No. 357</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LIVE METRIC STRIP (Matching Stats Bar Style - Full Width) -->
  <div class="ppdb-stat-strip reveal-item" data-delay="50">
    <div class="ppdb-stat-strip-inner">
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num count-ticker" data-target="{{ $totalQuota ?? 432 }}">{{ $totalQuota ?? 432 }}</div>
        <div class="ppdb-stat-label">Total Daya Tampung</div>
      </div>
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num count-ticker" data-target="{{ $totalRombel ?? 12 }}" data-suffix=" Kelas">{{ $totalRombel ?? 12 }} Kelas</div>
        <div class="ppdb-stat-label">Rombongan Belajar</div>
      </div>
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num count-ticker" data-target="{{ $applicantCount ?? 5 }}">{{ $applicantCount ?? 5 }}</div>
        <div class="ppdb-stat-label">Pendaftar Terdata</div>
      </div>
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num count-ticker" data-target="{{ $verifiedCount ?? 3 }}">{{ $verifiedCount ?? 3 }}</div>
        <div class="ppdb-stat-label">Berkas Terverifikasi</div>
      </div>
    </div>
  </div>

  <!-- INTERACTIVE FORMULIR PENDAFTARAN (Real SQLite Database) -->
  <section class="container" id="form-daftar">
    <div class="ppdb-action-section reveal-item" data-delay="100">
      <div style="margin-bottom: 24px;">
        <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--navy-header); margin: 8px 0 6px;">
          Formulir Pendaftaran Calon Siswa Baru 2026
        </h2>
        <p style="color: #64748B; font-size: 0.875rem; margin: 0 0 12px;">
          Isi data diri dengan teliti sesuai rapor SMP/MTs. Setelah mengirimkan formulir, sistem akan otomatis menerbitkan <strong>Nomor Registrasi</strong> dan <strong>Kartu Bukti Pendaftaran Digital</strong> di Portal Siswa.
        </p>
        <div style="background: #F8FAFC; border: 1px dashed #CBD5E1; border-radius: 8px; padding: 10px 14px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
          <div style="font-size: 0.8125rem; color: #475569;">
            <strong style="color: var(--navy-header);">Mendaftar langsung di loket sekolah?</strong> Unduh &amp; cetak dokumen formulir fisik resmi SMKN 1 Probolinggo.
          </div>
          <a href="{{ asset('docs/Formulir_Pendaftaran_PPDB_Resmi.pdf') }}" target="_blank" download class="btn btn-outline-navy btn-sm" style="display: inline-flex; align-items: center; gap: 6px; font-size: 0.75rem;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Unduh Formulir Fisik Resmi (PDF 166 KB)
          </a>
        </div>
      </div>

      @if(session('success'))
        <div style="background:#DCFCE7; border:1px solid #86EFAC; color:#15803D; padding:14px 18px; border-radius:8px; margin-bottom:20px; font-weight:600; font-size:0.875rem;">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('ppdb.register') }}" method="POST">
        @csrf
        <div class="ppdb-form-grid">
          <div class="ppdb-input-group">
            <label for="ppdb_name">Nama Lengkap Siswa</label>
            <input type="text" id="ppdb_name" name="name" class="ppdb-input" placeholder="Contoh: Muhammad Rizky Pratama" required value="{{ old('name') }}">
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_nisn">Nomor Induk Siswa Nasional (NISN)</label>
            <input type="text" id="ppdb_nisn" name="nisn" class="ppdb-input" placeholder="Contoh: 0089234121 (10 Digit)" required value="{{ old('nisn') }}">
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_school_origin">Asal Sekolah (SMP / MTs)</label>
            <input type="text" id="ppdb_school_origin" name="school_origin" class="ppdb-input" placeholder="Contoh: SMP Negeri 1 Probolinggo" required value="{{ old('school_origin') }}">
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_major_choice">Pilihan Program Keahlian (Konsentrasi)</label>
            <select id="ppdb_major_choice" name="major_choice" class="ppdb-input" required>
              <option value="">-- Pilih Program Keahlian --</option>
              @if(isset($majors) && $majors->count() > 0)
                @foreach($majors as $m)
                  <option value="{{ $m->name }} ({{ $m->code }})">
                    {{ $m->name }} ({{ $m->code }}) - Kuota {{ $m->quota_seats }} Siswa
                  </option>
                @endforeach
              @else
                <option value="Rekayasa Perangkat Lunak (Axioo Class)">Rekayasa Perangkat Lunak (Axioo Class) - 108 Siswa</option>
                <option value="Bisnis Digital (Alfamart Class)">Bisnis Digital (Alfamart Class) - 108 Siswa</option>
                <option value="Manajemen Perkantoran & Layanan Bisnis (MPLB)">Manajemen Perkantoran & Layanan Bisnis - 72 Siswa</option>
                <option value="Akuntansi & Keuangan Lembaga (AKL)">Akuntansi & Keuangan Lembaga - 72 Siswa</option>
                <option value="Layanan Perbankan (Bank Jatim)">Layanan Perbankan (Bank Jatim) - 72 Siswa</option>
              @endif
            </select>
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_avg_score">Nilai Rata-rata Rapor (Sem 1 - 5)</label>
            <input type="number" id="ppdb_avg_score" step="0.1" min="0" max="100" name="avg_score" class="ppdb-input" placeholder="Contoh: 89.4" required value="{{ old('avg_score') }}">
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_selection_path">Jalur Pendaftaran</label>
            <select id="ppdb_selection_path" name="selection_path" class="ppdb-input">
              <option value="Prestasi Nilai Rapor (Umum)">Prestasi Nilai Rapor (Umum - Kuota 75%)</option>
              <option value="Jalur Afirmasi (KIP/PKH)">Jalur Afirmasi (KIP/PKH - Kuota 15%)</option>
              <option value="Prestasi Hasil Lomba">Prestasi Hasil Lomba (Kuota 5%)</option>
              <option value="Perpindahan Tugas Orang Tua">Perpindahan Tugas Orang Tua (Kuota 5%)</option>
            </select>
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_phone">Nomor WhatsApp Aktif</label>
            <input type="text" id="ppdb_phone" name="phone" class="ppdb-input" placeholder="Contoh: 081234567890" value="{{ old('phone') }}">
          </div>

          <div class="ppdb-input-group">
            <label for="ppdb_email">Alamat Email Calon Siswa</label>
            <input type="email" id="ppdb_email" name="email" class="ppdb-input" placeholder="Contoh: nama@gmail.com" value="{{ old('email') }}">
          </div>
        </div>

        <div class="ppdb-submit-row" style="margin-top: 24px; display: flex; justify-content: flex-end;">
          <button type="submit" class="btn btn-red ppdb-submit-btn" style="padding: 12px 28px; font-size: 0.9375rem; font-weight: 800;">
            Kirim Pendaftaran &amp; Dapatkan Kartu Peserta Resmi
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- CEK STATUS PENDAFTARAN INSTAN -->
  <section class="container" id="cek-status" style="margin-top: 32px;">
    <div style="background: #002565; color: #FFFFFF; border-radius: 16px; padding: 32px;">
      <h3 style="font-size: 1.375rem; font-weight: 800; margin: 0 0 8px;">
        Pengecekan Status Verifikasi Pendaftaran
      </h3>
      <p style="color: rgba(255,255,255,0.8); font-size: 0.875rem; margin: 0 0 20px;">
        Masukkan Nomor Registrasi (contoh: <strong>REG-2026-001</strong>) atau NISN Anda untuk memeriksa status verifikasi panitia.
      </p>

      <div style="display: flex; gap: 10px; max-width: 600px; flex-wrap: wrap;">
        <input type="text" id="checkInput" class="ppdb-input" style="flex: 1; min-width: 240px; background: #FFFFFF; color: #0F172A;" placeholder="Nomor Registrasi atau NISN..." aria-label="Nomor Registrasi atau NISN">
        <button type="button" class="btn btn-orange" onclick="checkPpdbStatus()">Periksa Status</button>
      </div>

      <div id="checkResult" style="display: none; margin-top: 20px; background: rgba(255,255,255,0.1); border-radius: 10px; padding: 18px;"></div>
    </div>
  </section>

  <!-- 2. TABEL DAYA TAMPUNG KEAHLIAN -->
  <section class="section section-white" id="daya-tampung" style="margin-top: 32px;">
    <div class="container">
      <div class="kuota-head">
        <h2 class="section-title">Daya tampung dan kuota resmi 5 program keahlian</h2>
        <p class="section-subtitle">Kuota penerimaan tahun ajaran 2026/2027 mengikuti petunjuk teknis Dinas Pendidikan Provinsi Jawa Timur. Garis tipis di bawah nama program menunjukkan porsi program itu terhadap seluruh kursi.</p>
      </div>

      <div class="table-responsive">
        <table class="kuota-table">
          <caption class="sr-only">Rincian kuota per program keahlian dan per jalur seleksi</caption>
          <thead>
            <tr>
              <th scope="col">Program keahlian</th>
              <th scope="col">Rombel</th>
              <th scope="col">Afirmasi <span>15%</span></th>
              <th scope="col">Pindah tugas <span>5%</span></th>
              <th scope="col">Prestasi lomba <span>5%</span></th>
              <th scope="col">Nilai rapor <span>75%</span></th>
              <th scope="col">Total kursi</th>
            </tr>
          </thead>
          <tbody>          @php
            $majorLogos = [
              'RPL' => 'images/jurusan/logo_rpl.webp',
              'BD' => 'images/logo_alfamart_class.webp',
              'MPLB' => 'images/jurusan/logo_mplb.webp',
              'AKL' => 'images/jurusan/logo_akl.webp',
              'LPB' => 'images/jurusan/logo_lpb.webp',
            ];
          @endphp
          @if(isset($majors) && $majors->count() > 0)
            @foreach($majors as $m)
              @php
                $afirmasi = round($m->quota_seats * 0.15);
                $pindah = round($m->quota_seats * 0.05);
                $lomba = round($m->quota_seats * 0.05);
                $rapor = $m->quota_seats - ($afirmasi + $pindah + $lomba);
                $share = round($m->quota_seats / max(($totalQuota ?? 432), 1) * 100);
                $logoPath = $majorLogos[$m->code] ?? null;
              @endphp
              <tr>
                <th scope="row">
                  <span class="kuota-code" style="display: inline-flex; align-items: center; gap: 6px;">
                    @if($logoPath)
                      <img src="{{ asset($logoPath) }}" alt="{{ $m->code }}" width="18" height="18" style="width: 18px; height: 18px; object-fit: contain;" loading="lazy">
                    @endif
                    {{ $m->code }}
                  </span>
                  <span class="kuota-name">{{ $m->name }}</span>
                  <span class="kuota-bar" aria-hidden="true"><i style="width: {{ $share }}%"></i></span>
                </th>
                <td>{{ $m->rombel_count }}</td><td>{{ $afirmasi }}</td><td>{{ $pindah }}</td><td>{{ $lomba }}</td><td>{{ $rapor }}</td>
                <td class="kuota-total">{{ $m->quota_seats }}</td>
              </tr>
            @endforeach
          @else
            <tr>
              <th scope="row">
                <span class="kuota-code" style="display: inline-flex; align-items: center; gap: 6px;">
                  <img src="{{ asset('images/jurusan/logo_rpl.webp') }}" alt="RPL" style="width: 18px; height: 18px; object-fit: contain;" width="400" height="300"> RPL
                </span>
                <span class="kuota-name">Rekayasa Perangkat Lunak</span>
                <span class="kuota-bar" aria-hidden="true"><i style="width: 25%"></i></span>
              </th>
              <td>3</td><td>16</td><td>5</td><td>5</td><td>82</td>
              <td class="kuota-total">108</td>
            </tr>
            <tr>
              <th scope="row">
                <span class="kuota-code" style="display: inline-flex; align-items: center; gap: 6px;">
                  <img src="{{ asset('images/logo_alfamart_class.webp') }}" alt="BD" style="height: 14px; width: auto; object-fit: contain;" width="400" height="300"> BD
                </span>
                <span class="kuota-name">Bisnis Digital</span>
                <span class="kuota-bar" aria-hidden="true"><i style="width: 25%"></i></span>
              </th>
              <td>3</td><td>16</td><td>5</td><td>5</td><td>82</td>
              <td class="kuota-total">108</td>
            </tr>
            <tr>
              <th scope="row">
                <span class="kuota-code" style="display: inline-flex; align-items: center; gap: 6px;">
                  <img src="{{ asset('images/jurusan/logo_mplb.webp') }}" alt="MPLB" style="width: 18px; height: 18px; object-fit: contain;" width="400" height="300"> MPLB
                </span>
                <span class="kuota-name">Manajemen Perkantoran &amp; Layanan Bisnis</span>
                <span class="kuota-bar" aria-hidden="true"><i style="width: 17%"></i></span>
              </th>
              <td>2</td><td>11</td><td>4</td><td>4</td><td>53</td>
              <td class="kuota-total">72</td>
            </tr>
            <tr>
              <th scope="row">
                <span class="kuota-code" style="display: inline-flex; align-items: center; gap: 6px;">
                  <img src="{{ asset('images/jurusan/logo_akl.webp') }}" alt="AKL" style="width: 18px; height: 18px; object-fit: contain;" width="400" height="300"> AKL
                </span>
                <span class="kuota-name">Akuntansi &amp; Keuangan Lembaga</span>
                <span class="kuota-bar" aria-hidden="true"><i style="width: 17%"></i></span>
              </th>
              <td>2</td><td>11</td><td>4</td><td>4</td><td>53</td>
              <td class="kuota-total">72</td>
            </tr>
            <tr>
              <th scope="row">
                <span class="kuota-code" style="display: inline-flex; align-items: center; gap: 6px;">
                  <img src="{{ asset('images/jurusan/logo_lpb.webp') }}" alt="LPB" style="width: 18px; height: 18px; object-fit: contain;" width="400" height="300"> LPB
                </span>
                <span class="kuota-name">Layanan Perbankan</span>
                <span class="kuota-bar" aria-hidden="true"><i style="width: 17%"></i></span>
              </th>
              <td>2</td><td>11</td><td>4</td><td>4</td><td>53</td>
              <td class="kuota-total">72</td>
            </tr>
          @endif
          </tbody>
          <tfoot>
            <tr>
              <th scope="row">Total SMKN 1 Probolinggo</th>
              <td>{{ $totalRombel ?? 12 }}</td><td>65</td><td>22</td><td>22</td><td>323</td>
              <td class="kuota-total">{{ $totalQuota ?? 432 }}</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </section>

  <!-- 3. KETENTUAN 4 JALUR PENDAFTARAN (DaisyUI Breadcrumbs & Flow Style) -->
  <section class="section" id="jalur">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">4 Jalur Pendaftaran PPDB SMK Negeri</h2>
        <p style="color: #64748B; font-size: 0.875rem; margin-top: 4px;">Alur pilihan seleksi resmi berjenjang berdasarkan regulasi Dinas Pendidikan Jawa Timur.</p>
      </div>


      <!-- Connected Cards with Breadcrumb Arrows -->
      <div class="jalur-breadcrumb-flow">
        <!-- Card 1 -->
        <div class="card-jalur">
          <div class="jalur-card-header">
            <span class="jalur-quota-pill">Kuota 15%</span>
            <span class="jalur-step-badge">Tahap 1</span>
          </div>
          <h3 class="jalur-name">1. Jalur Afirmasi</h3>
          <p class="jalur-desc">
            Diperuntukkan bagi calon peserta didik dari keluarga tidak mampu dan penyandang disabilitas dengan bukti KIP/PKH.
          </p>
        </div>

        <!-- Arrow Divider 1 -> 2 -->
        <div class="jalur-flow-arrow" aria-hidden="true" title="Lanjut ke Jalur 2">
          <div class="jalur-arrow-circle">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card-jalur">
          <div class="jalur-card-header">
            <span class="jalur-quota-pill">Kuota 5%</span>
            <span class="jalur-step-badge">Tahap 2</span>
          </div>
          <h3 class="jalur-name">2. Perpindahan Tugas</h3>
          <p class="jalur-desc">
            Bagi siswa yang mengikuti perpindahan tugas resmi orang tua/wali dari instansi pemerintah, BUMN, atau TNI/Polri.
          </p>
        </div>

        <!-- Arrow Divider 2 -> 3 -->
        <div class="jalur-flow-arrow" aria-hidden="true" title="Lanjut ke Jalur 3">
          <div class="jalur-arrow-circle">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card-jalur">
          <div class="jalur-card-header">
            <span class="jalur-quota-pill">Kuota 5%</span>
            <span class="jalur-step-badge">Tahap 3</span>
          </div>
          <h3 class="jalur-name">3. Prestasi Hasil Lomba</h3>
          <p class="jalur-desc">
            Penghargaan sertifikat kejuaraan akademik, olahraga, seni, atau keagamaan resmi berjenjang.
          </p>
        </div>

        <!-- Arrow Divider 3 -> 4 -->
        <div class="jalur-flow-arrow" aria-hidden="true" title="Lanjut ke Jalur 4">
          <div class="jalur-arrow-circle">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        </div>

        <!-- Card 4 (Dominant / Main Path) -->
        <div class="card-jalur card-jalur-featured">
          <div class="jalur-card-header">
            <span class="jalur-quota-pill jalur-quota-pill-red">Kuota 75% (Terbesar)</span>
            <span class="jalur-step-badge jalur-step-badge-red">Tahap 4 &bull; Utama</span>
          </div>
          <h3 class="jalur-name">4. Prestasi Nilai Rapor</h3>
          <p class="jalur-desc">
            Jalur umum berdasarkan rerata nilai rapor semester 1 s.d 5 ditambah nilai akreditasi SMP/MTs asal.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  function checkPpdbStatus() {
    const val = document.getElementById('checkInput').value.trim();
    if (!val) {
      alert('Masukkan Nomor Registrasi atau NISN!');
      return;
    }
    const resultBox = document.getElementById('checkResult');
    resultBox.style.display = 'block';
    resultBox.innerHTML = '<span style="color:#FFF;">Memeriksa basis data PPDB...</span>';

    fetch('{{ route("ppdb.check") }}?keyword=' + encodeURIComponent(val))
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          const d = data.data;
          const statusBg = d.status === 'Terverifikasi' ? '#16A34A' : '#D97706';
          resultBox.innerHTML = `
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
              <div>
                <strong style="font-size:1.125rem; color:#FFF;">${d.name}</strong>
                <div style="font-size:0.8125rem; color:rgba(255,255,255,0.7);">${d.registration_no} • Asal: ${d.school_origin}</div>
              </div>
              <span style="background:${statusBg}; color:#FFF; font-weight:800; font-size:0.75rem; padding:4px 12px; border-radius:20px;">
                ${d.status}
              </span>
            </div>
            <div style="font-size:0.8125rem; color:rgba(255,255,255,0.9); line-height:1.5;">
              <strong>Pilihan Konsentrasi:</strong> ${d.major_choice} • <strong>Nilai Rapor Rata-rata:</strong> ${d.avg_score} / 100<br>
              <a href="{{ route('portal.siswa') }}" style="color:#F59E0B; font-weight:700; text-decoration:underline; display:inline-block; margin-top:8px;">Buka Kartu Bukti Pendaftaran Resmi di Portal Siswa</a>
            </div>
          `;
        } else {
          resultBox.innerHTML = `<span style="color:#FCA5A5;">${data.message}</span>`;
        }
      })
      .catch(err => {
        resultBox.innerHTML = '<span style="color:#FCA5A5;">Gagal menghubungkan ke server PPDB.</span>';
      });
  }

  // Interactive HD Poster Showcase Switcher (Deferred to Idle)
  (function() {
    function initPosterShowcase() {
      const showcase = document.getElementById('ppdbPosterShowcase');
      if (!showcase) return;

      const slides = showcase.querySelectorAll('.poster-slide');
      const dots = showcase.querySelectorAll('.poster-dot');
      const thumbCards = showcase.querySelectorAll('.poster-thumb-card');
      const prevBtn = document.getElementById('posterPrevBtn');
      const nextBtn = document.getElementById('posterNextBtn');
      let currentIndex = 0;
      let autoPlayTimer = null;

      function goToSlide(index) {
        if (index < 0) index = slides.length - 1;
        if (index >= slides.length) index = 0;
        currentIndex = index;

        slides.forEach((slide, idx) => {
          slide.classList.toggle('active', idx === currentIndex);
        });

        dots.forEach((dot, idx) => {
          dot.classList.toggle('active', idx === currentIndex);
        });

        thumbCards.forEach((thumb, idx) => {
          thumb.classList.toggle('active', idx === currentIndex);
          thumb.setAttribute('aria-selected', idx === currentIndex ? 'true' : 'false');
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
          e.preventDefault();
          goToSlide(currentIndex - 1);
          resetAutoPlay();
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
          e.preventDefault();
          goToSlide(currentIndex + 1);
          resetAutoPlay();
        });
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener('click', function(e) {
          e.preventDefault();
          goToSlide(idx);
          resetAutoPlay();
        });
      });

      thumbCards.forEach((thumb, idx) => {
        thumb.addEventListener('click', function(e) {
          e.preventDefault();
          goToSlide(idx);
          resetAutoPlay();
        });
      });

      function startAutoPlay() {
        if (autoPlayTimer) clearInterval(autoPlayTimer);
        autoPlayTimer = setInterval(function() {
          goToSlide(currentIndex + 1);
        }, 6000);
      }

      function resetAutoPlay() {
        clearInterval(autoPlayTimer);
        startAutoPlay();
      }

      showcase.addEventListener('mouseenter', function() {
        clearInterval(autoPlayTimer);
      }, { passive: true });

      showcase.addEventListener('mouseleave', function() {
        startAutoPlay();
      }, { passive: true });

      // Touch swipe support for mobile
      let touchStartX = 0;
      showcase.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      showcase.addEventListener('touchend', function(e) {
        const touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 45) {
          goToSlide(currentIndex + 1);
          resetAutoPlay();
        } else if (touchEndX - touchStartX > 45) {
          goToSlide(currentIndex - 1);
          resetAutoPlay();
        }
      }, { passive: true });

      startAutoPlay();
    }

    if ('requestIdleCallback' in window) {
      window.requestIdleCallback(initPosterShowcase, { timeout: 2000 });
    } else {
      window.addEventListener('load', function() {
        setTimeout(initPosterShowcase, 150);
      });
    }

    // Smooth Scroll Reveal (Hardware-Accelerated Fade-Up)
    const ppdbRevealElements = document.querySelectorAll('.reveal-item');
    if (!prefersReducedMotion && 'IntersectionObserver' in window && ppdbRevealElements.length > 0) {
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
      }, { threshold: 0.1, rootMargin: '0px 0px -20px 0px' });
      ppdbRevealElements.forEach(el => revealObserver.observe(el));
    } else {
      ppdbRevealElements.forEach(el => el.classList.add('is-revealed'));
    }

    // Animated Numeric Counter Ticker (Count-Up from 0) - Enhanced with Pulse Effect
    const ppdbCounters = document.querySelectorAll('.count-ticker');
    if (!prefersReducedMotion && ppdbCounters.length > 0) {
      function startCounter(el) {
        if (el.dataset.counted) return;
        el.dataset.counted = 'true';
        const target = parseInt(el.getAttribute('data-target') || '0', 10);
        const suffix = el.getAttribute('data-suffix') || '';
        const prefix = el.getAttribute('data-prefix') || '';
        const duration = 2000; // Increased duration for smoother animation
        const startTime = performance.now();

        function updateCounter(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const easeProgress = 1 - Math.pow(1 - progress, 3);
          const currentVal = Math.floor(easeProgress * target);
          el.textContent = prefix + currentVal.toLocaleString('id-ID') + suffix;

          if (progress < 1) {
            requestAnimationFrame(updateCounter);
          } else {
            el.textContent = prefix + target.toLocaleString('id-ID') + suffix;
            // Add pulse effect on completion
            el.style.transform = 'scale(1.1)';
            setTimeout(() => {
              el.style.transform = 'scale(1)';
            }, 200);
          }
        }
        requestAnimationFrame(updateCounter);
      }

      if ('IntersectionObserver' in window) {
        const counterObs = new IntersectionObserver((entries, obs) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              startCounter(entry.target);
              obs.unobserve(entry.target);
            }
          });
        }, { threshold: 0.1 });

        ppdbCounters.forEach(el => {
          const prefix = el.getAttribute('data-prefix') || '';
          const suffix = el.getAttribute('data-suffix') || '';
          el.textContent = prefix + '0' + suffix;
          el.style.transition = 'transform 0.3s ease';
          counterObs.observe(el);

          const rect = el.getBoundingClientRect();
          if (rect.top >= 0 && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) {
            startCounter(el);
          }
        });
      } else {
        ppdbCounters.forEach(el => startCounter(el));
      }
    }
  })();
</script>
@endpush
