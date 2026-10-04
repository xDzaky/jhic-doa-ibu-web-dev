@extends('layouts.app')

@section('title', 'BKK & Portal PKL Industri - SMKN 1 Probolinggo')
@section('meta_description', 'Bursa Kerja Khusus (BKK) dan Portal PKL SMKN 1 Probolinggo. Lowongan kerja mitra industri, informasi magang, dan peluang karir bagi lulusan SMK. 99% lulusan terserap industri.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/bkk.css') }}">
@endpush

@section('content')
  <!-- 1. HERO BKK & PKL -->
  <section class="bkk-hero">
    <div class="container bkk-hero-grid">
      <div>
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
          <img src="{{ asset('images/logo_bkk_resmi.webp') }}" alt="Logo Resmi BKK SMKN 1 Probolinggo" style="height: 52px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.06));">
          <div>
            <span style="display: inline-block; font-family: var(--font-heading); background: #EEF2F6; color: var(--navy-header); font-size: 0.75rem; font-weight: 800; padding: 3px 8px; border-radius: 4px; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid #CBD5E1;">
              Portal Resmi BKK &amp; Praktik Kerja Lapangan
            </span>
          </div>
        </div>
        <h1 class="bkk-hero-title">Lowongan alumni dan magang industri SMKN 1 Probolinggo</h1>
        <p class="bkk-hero-sub">
          Satu pintu untuk penyaluran kerja alumni (BKK) dan penempatan magang industri 6 bulan (PKL). Pilih posisi, cek kualifikasi, lalu ajukan langsung ke sekolah.
        </p>
      </div>
      <p class="bkk-hero-facts">
        <strong>50+</strong> mitra industri terikat MoU, <strong>120+</strong> lowongan kerja tiap tahun,
        <strong>95%</strong> lulusan terserap, dan <strong>100%</strong> siswa PKL tersertifikasi.
      </p>
    </div>
  </section>

  <!-- 2. FILTER -->
  <div class="container filter-container">
    <div class="filter-toolbar-box">
      <input type="text" class="filter-input-search" id="searchInput" placeholder="Cari posisi, perusahaan, atau kota" aria-label="Cari lowongan" onkeyup="filterJobs()">
      <select class="filter-select-field" id="majorSelect" aria-label="Program keahlian" onchange="filterJobs()">
        <option value="all">Semua program keahlian</option>
        <option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
        <option value="BD">BD (Bisnis Digital)</option>
        <option value="MPLB">MPLB (Manajemen Perkantoran)</option>
        <option value="AKL">AKL (Akuntansi)</option>
        <option value="LPB">LPB (Layanan Perbankan)</option>
      </select>
      <select class="filter-select-field" id="locSelect" aria-label="Wilayah" onchange="filterJobs()">
        <option value="all">Semua wilayah</option>
        <option value="Probolinggo">Probolinggo</option>
        <option value="Surabaya">Surabaya / Sidoarjo</option>
        <option value="Malang">Malang</option>
      </select>
      <button class="btn-filter-apply" onclick="filterJobs()">Terapkan</button>
    </div>
    <div class="filter-pills-row">
      <button class="filter-pill-btn active" onclick="filterType('all', this)">Semua (6)</button>
      <button class="filter-pill-btn" onclick="filterType('bkk', this)">Lowongan alumni (BKK)</button>
      <button class="filter-pill-btn" onclick="filterType('pkl', this)">Magang siswa (PKL)</button>
    </div>
  </div>

  <!-- 3. DAFTAR LOWONGAN -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <ol class="job-list" id="jobsGrid">
        <li class="card-job job-row" data-type="bkk" data-major="MPLB" data-loc="Probolinggo">
          <div class="job-who">
            <span class="job-kind kind-bkk">Lowongan alumni</span>
            <span class="job-company">PT Indomarco Prismatama (Indomaret)</span>
          </div>
          <div class="job-what">
            <h3 class="job-title">Admin Logistik &amp; Operasional Distribusi</h3>
            <dl class="job-meta">
              <div><dt>Penempatan</dt><dd>Probolinggo &amp; Pasuruan</dd></div>
              <div><dt>Kualifikasi</dt><dd>Lulusan MPLB / AKL / BD SMKN 1 Probolinggo</dd></div>
              <div><dt>Fasilitas</dt><dd>Gaji UMK, BPJS Ketenagakerjaan, Jenjang Karir</dd></div>
            </dl>
          </div>
          <div class="job-act">
            <button class="job-apply" onclick="openApplyModal('Admin Logistik - PT Indomarco Prismatama')">Lamar</button>
          </div>
        </li>
        <li class="card-job job-row" data-type="bkk" data-major="RPL" data-loc="Malang">
          <div class="job-who">
            <span class="job-kind kind-bkk">Lowongan alumni</span>
            <span class="job-company">Jagoan Hosting (PT Beon Intermedia)</span>
          </div>
          <div class="job-what">
            <h3 class="job-title">Junior Web Developer &amp; Cloud Support</h3>
            <dl class="job-meta">
              <div><dt>Penempatan</dt><dd>Malang (Sistem Kerja Hybrid)</dd></div>
              <div><dt>Kualifikasi</dt><dd>Lulusan RPL (PHP, Laravel, MySQL, Linux CLI)</dd></div>
              <div><dt>Fasilitas</dt><dd>Mentoring Senior Dev, Gaji Pokok, Sertifikasi Cloud</dd></div>
            </dl>
          </div>
          <div class="job-act">
            <button class="job-apply" onclick="openApplyModal('Junior Web Dev - Jagoan Hosting')">Lamar</button>
          </div>
        </li>
        <li class="card-job job-row" data-type="bkk" data-major="AKL" data-loc="Probolinggo">
          <div class="job-who">
            <span class="job-kind kind-bkk">Lowongan alumni</span>
            <span class="job-company">Bank Jatim Cabang Probolinggo</span>
          </div>
          <div class="job-what">
            <h3 class="job-title">Staff Junior Accounting &amp; Teller</h3>
            <dl class="job-meta">
              <div><dt>Penempatan</dt><dd>Kota Probolinggo</dd></div>
              <div><dt>Kualifikasi</dt><dd>Lulusan AKL / LPB (Komputer Akuntansi &amp; Teller Kas)</dd></div>
              <div><dt>Fasilitas</dt><dd>Tunjangan Perbankan, BPJS, Bonus Prestasi</dd></div>
            </dl>
          </div>
          <div class="job-act">
            <button class="job-apply" onclick="openApplyModal('Junior Accounting - Bank Jatim')">Lamar</button>
          </div>
        </li>
        <li class="card-job job-row" data-type="pkl" data-major="MPLB" data-loc="Probolinggo">
          <div class="job-who">
            <span class="job-kind kind-pkl">Magang siswa</span>
            <span class="job-company">PT Pelabuhan Indonesia (Pelindo Regional Jatim)</span>
          </div>
          <div class="job-what">
            <h3 class="job-title">Administrasi Kepelabuhanan &amp; Kearsipan Digital</h3>
            <dl class="job-meta">
              <div><dt>Penempatan</dt><dd>Pelabuhan Tanjung Tembaga Probolinggo</dd></div>
              <div><dt>Kualifikasi</dt><dd>Siswa Aktif MPLB (Kelas XI / XII)</dd></div>
              <div><dt>Durasi</dt><dd>6 Bulan Magang PKL Bersertifikat</dd></div>
            </dl>
          </div>
          <div class="job-act">
            <button class="job-apply" onclick="openApplyModal('Administrasi Pelabuhan - PT Pelindo')">Ajukan magang</button>
          </div>
        </li>
        <li class="card-job job-row" data-type="pkl" data-major="BD" data-loc="Probolinggo">
          <div class="job-who">
            <span class="job-kind kind-pkl">Magang siswa</span>
            <span class="job-company">PT Sumber Alfaria Trijaya (Alfamart Class)</span>
          </div>
          <div class="job-what">
            <h3 class="job-title">E-Commerce Live Streamer &amp; Retail Associate</h3>
            <dl class="job-meta">
              <div><dt>Penempatan</dt><dd>Probolinggo</dd></div>
              <div><dt>Kualifikasi</dt><dd>Siswa Aktif Bisnis Digital (Kelas XI / XII)</dd></div>
              <div><dt>Fasilitas</dt><dd>Uang Saku Magang, Pelatihan Kasir POS, Sertifikat</dd></div>
            </dl>
          </div>
          <div class="job-act">
            <button class="job-apply" onclick="openApplyModal('Retail Associate - Alfamart')">Ajukan magang</button>
          </div>
        </li>
        <li class="card-job job-row" data-type="pkl" data-major="RPL" data-loc="Surabaya">
          <div class="job-who">
            <span class="job-kind kind-pkl">Magang siswa</span>
            <span class="job-company">Axioo Indonesia (PT Tera Data Indonusa)</span>
          </div>
          <div class="job-what">
            <h3 class="job-title">Software Quality Assurance &amp; IT Maintenance</h3>
            <dl class="job-meta">
              <div><dt>Penempatan</dt><dd>Surabaya Service Center</dd></div>
              <div><dt>Kualifikasi</dt><dd>Siswa Aktif RPL (Kelas XI / XII)</dd></div>
              <div><dt>Fasilitas</dt><dd>Sertifikasi Resmi Axioo Master Certified</dd></div>
            </dl>
          </div>
          <div class="job-act">
            <button class="job-apply" onclick="openApplyModal('QA &amp; Maintenance - Axioo')">Ajukan magang</button>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- 4. ALUR PKL -->
  <section class="section section-white" id="alur-pkl">
    <div class="container pkl-flow">
      <div class="pkl-flow-head">
        <h2 class="section-title">Alur praktik kerja lapangan</h2>
        <p class="section-subtitle">Tiga langkah dari memilih mitra sampai memegang sertifikat kompetensi industri.</p>
      </div>
      <ol class="pkl-steps">
        <li>
          <h3 class="pkl-step-title">Pemilihan mitra dan verifikasi</h3>
          <p class="pkl-step-desc">Siswa memilih perusahaan mitra terakreditasi sesuai program keahlian dan memperoleh persetujuan guru pembimbing kejuruan.</p>
        </li>
        <li>
          <h3 class="pkl-step-title">Surat pengantar dan MoU</h3>
          <p class="pkl-step-desc">Sekolah menerbitkan surat pengantar resmi, dokumen perjanjian kerja sama, serta pembekalan K3 keselamatan kerja.</p>
        </li>
        <li>
          <h3 class="pkl-step-title">Pelaksanaan dan sertifikasi</h3>
          <p class="pkl-step-desc">Siswa menjalani PKL selama 6 bulan dengan E-Logbook harian, lalu menerima sertifikat kompetensi resmi dari DUDI.</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- APPLY MODAL -->
  <div id="applyModal" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.6); z-index: 9999; align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #FFF; width: 100%; max-width: 500px; border-radius: 16px; padding: 28px; box-shadow: 0 20px 40px rgba(0,0,0,0.2); position: relative;">
      <button onclick="closeApplyModal()" style="position: absolute; right: 16px; top: 16px; border: none; background: none; font-size: 1.25rem; cursor: pointer; color: #64748B;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
      <h3 id="modalJobTitle" style="font-size: 1.15rem; font-weight: 800; color: var(--navy-header); margin-bottom: 6px;">Form Pengajuan Lamaran</h3>
      <p style="font-size: 0.8125rem; color: #64748B; margin-bottom: 20px;">Isi data Anda untuk pengajuan lamaran kerja BKK atau magang industri PKL.</p>
      
      <form onsubmit="handleApplySubmit(event)">
        <div style="margin-bottom: 14px;">
          <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1E293B; margin-bottom: 4px;">Nama Lengkap</label>
          <input type="text" required placeholder="Masukkan nama lengkap" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 0.875rem;">
        </div>
        <div style="margin-bottom: 14px;">
          <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1E293B; margin-bottom: 4px;">NISN / Tahun Lulus</label>
          <input type="text" required placeholder="Contoh: 0061234567 / 2026" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 0.875rem;">
        </div>
        <div style="margin-bottom: 14px;">
          <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1E293B; margin-bottom: 4px;">Program Keahlian</label>
          <select required style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 0.875rem;">
            <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
            <option value="BD">Bisnis Digital (BD)</option>
            <option value="MPLB">Manajemen Perkantoran &amp; Layanan Bisnis (MPLB)</option>
            <option value="AKL">Akuntansi &amp; Keuangan Lembaga (AKL)</option>
            <option value="LPB">Layanan Perbankan (LPB)</option>
          </select>
        </div>
        <div style="margin-bottom: 20px;">
          <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1E293B; margin-bottom: 4px;">Nomor WhatsApp / HP</label>
          <input type="tel" required placeholder="08xxxxxxxxxx" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 0.875rem;">
        </div>
        <button type="submit" class="btn btn-green" style="width: 100%;">Kirim Pengajuan via BKK SMEXA</button>
      </form>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  function openApplyModal(title) {
    document.getElementById('modalJobTitle').innerText = title;
    const modal = document.getElementById('applyModal');
    modal.style.display = 'flex';
  }

  function closeApplyModal() {
    document.getElementById('applyModal').style.display = 'none';
  }

  function handleApplySubmit(e) {
    e.preventDefault();
    alert('Pengajuan Anda telah berhasil dicatat oleh Koordinator BKK SMKN 1 Probolinggo! Tim BKK akan menghubungi nomor WhatsApp Anda untuk tahapan seleksi.');
    closeApplyModal();
  }

  let currentType = 'all';

  function filterType(type, btn) {
    currentType = type;
    document.querySelectorAll('.filter-pill-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    filterJobs();
  }

  function filterJobs() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const major = document.getElementById('majorSelect').value;
    const loc = document.getElementById('locSelect').value;

    const cards = document.querySelectorAll('.card-job');
    cards.forEach(card => {
      const cardType = card.getAttribute('data-type');
      const cardMajor = card.getAttribute('data-major');
      const cardLoc = card.getAttribute('data-loc');
      const text = card.innerText.toLowerCase();

      const matchesSearch = text.includes(search);
      const matchesMajor = major === 'all' || cardMajor === major;
      const matchesLoc = loc === 'all' || cardLoc === loc;
      const matchesType = currentType === 'all' || cardType === currentType;

      if (matchesSearch && matchesMajor && matchesLoc && matchesType) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  }
</script>
@endpush
