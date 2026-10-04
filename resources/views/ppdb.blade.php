@extends('layouts.app')

@section('title', 'Pusat Informasi & Pendaftaran PPDB 2026 - SMKN 1 Probolinggo')
@section('meta_description', 'Daftar PPDB 2026 SMKN 1 Probolinggo online. Persyaratan, jadwal seleksi, daya tampung 5 konsentrasi keahlian: RPL, Bisnis Digital, Akuntansi, Layanan Perkantoran, Logistik. Sekolah Pusat Keunggulan akreditasi A.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/ppdb.min.css') }}">
  <style>
    .ppdb-action-section {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 16px;
      padding: 32px;
      margin-top: 32px;
      box-shadow: 0 4px 16px rgba(0, 37, 101, 0.04);
    }
    .ppdb-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }
    .ppdb-input-group {
      display: flex;
      flex-direction: column;
      gap: 6px;
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
    }
    .ppdb-input:focus {
      border-color: var(--navy-header);
      box-shadow: 0 0 0 3px rgba(0, 37, 101, 0.1);
    }
    /* Executive PPDB Quota & Verification Ledger Ribbon */
    .ppdb-stat-strip {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(11, 27, 61, 0.03);
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      margin: 28px 0;
      overflow: hidden;
    }
    .ppdb-stat-card {
      background: transparent;
      border: none;
      border-right: 1px solid #F1F5F9;
      border-radius: 0;
      padding: 20px 24px;
      box-shadow: none;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: background 0.15s ease;
    }
    .ppdb-stat-card:last-child {
      border-right: none;
    }
    .ppdb-stat-card:hover {
      background: #FAFBFD;
    }
    .ppdb-stat-num {
      font-family: var(--font-heading);
      font-size: 1.6rem;
      font-weight: 800;
      color: var(--navy-header);
      line-height: 1.15;
      margin-bottom: 4px;
      font-variant-numeric: tabular-nums;
      letter-spacing: -0.02em;
    }
    .ppdb-stat-label {
      font-family: var(--font-heading);
      font-size: 0.75rem;
      font-weight: 700;
      color: #64748B;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }
    @media (max-width: 900px) {
      .ppdb-stat-strip { grid-template-columns: repeat(2, 1fr); }
      .ppdb-stat-card:nth-child(2) { border-right: none; }
      .ppdb-stat-card:nth-child(-n+2) { border-bottom: 1px solid #F1F5F9; }
      .ppdb-form-grid { grid-template-columns: 1fr; }
      .ppdb-action-section { padding: 22px 18px; border-radius: 12px; }
    }
    @media (max-width: 540px) {
      .ppdb-stat-strip { grid-template-columns: repeat(2, 1fr); }
      .ppdb-stat-card { border-right: none; padding: 14px 16px; }
      .ppdb-stat-card:nth-child(odd) { border-right: 1px solid #F1F5F9; }
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

      <!-- Right: Jadwal Tahapan Box -->
      <div>
        <div class="ppdb-schedule-card">
          <div class="schedule-card-header">
            Jadwal Tahapan Seleksi PPDB Jatim 2026
          </div>
          <div class="schedule-timeline-list">
            <div class="schedule-step">
              <span class="step-badge step-navy">Tahap 1</span>
              <div>
                <strong>Pengambilan PIN &amp; Verifikasi Rapor</strong><br>
                <span class="step-meta">20 Mei - 10 Juni 2026 • Mandiri / Posko SMEXA</span>
              </div>
            </div>
            <div class="schedule-step">
              <span class="step-badge step-orange">Tahap 2</span>
              <div>
                <strong>Pendaftaran Jalur Afirmasi &amp; Prestasi Lomba</strong><br>
                <span class="step-meta">15 - 16 Juni 2026</span>
              </div>
            </div>
            <div class="schedule-step">
              <span class="step-badge step-blue">Tahap 3</span>
              <div>
                <strong>Pendaftaran Jalur Prestasi Nilai Rapor (Umum)</strong><br>
                <span class="step-meta">22 - 23 Juni 2026</span>
              </div>
            </div>
            <div class="schedule-step">
              <span class="step-badge step-green">Tahap 4</span>
              <div>
                <strong>Daftar Ulang &amp; Lapor Diri</strong><br>
                <span class="step-meta">01 - 02 Juli 2026 • Kampus SMKN 1 Probolinggo</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LIVE METRIC STRIP -->
  <div class="container">
    <div class="ppdb-stat-strip">
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num">{{ $totalQuota ?? 432 }}</div>
        <div class="ppdb-stat-label">Total Daya Tampung</div>
      </div>
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num">{{ $totalRombel ?? 12 }} Kelas</div>
        <div class="ppdb-stat-label">Rombongan Belajar</div>
      </div>
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num" style="color: #0284C7;">{{ $applicantCount ?? 5 }}</div>
        <div class="ppdb-stat-label">Pendaftar Terdata</div>
      </div>
      <div class="ppdb-stat-card">
        <div class="ppdb-stat-num" style="color: #16A34A;">{{ $verifiedCount ?? 3 }}</div>
        <div class="ppdb-stat-label">Berkas Terverifikasi</div>
      </div>
    </div>
  </div>

  <!-- INTERACTIVE FORMULIR PENDAFTARAN (Real SQLite Database) -->
  <section class="container" id="form-daftar">
    <div class="ppdb-action-section">
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
            <label>Nama Lengkap Siswa</label>
            <input type="text" name="name" class="ppdb-input" placeholder="Contoh: Muhammad Rizky Pratama" required value="{{ old('name') }}">
          </div>

          <div class="ppdb-input-group">
            <label>Nomor Induk Siswa Nasional (NISN)</label>
            <input type="text" name="nisn" class="ppdb-input" placeholder="Contoh: 0089234121 (10 Digit)" required value="{{ old('nisn') }}">
          </div>

          <div class="ppdb-input-group">
            <label>Asal Sekolah (SMP / MTs)</label>
            <input type="text" name="school_origin" class="ppdb-input" placeholder="Contoh: SMP Negeri 1 Probolinggo" required value="{{ old('school_origin') }}">
          </div>

          <div class="ppdb-input-group">
            <label>Pilihan Program Keahlian (Konsentrasi)</label>
            <select name="major_choice" class="ppdb-input" required>
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
            <label>Nilai Rata-rata Rapor (Sem 1 - 5)</label>
            <input type="number" step="0.1" min="0" max="100" name="avg_score" class="ppdb-input" placeholder="Contoh: 89.4" required value="{{ old('avg_score') }}">
          </div>

          <div class="ppdb-input-group">
            <label>Jalur Pendaftaran</label>
            <select name="selection_path" class="ppdb-input">
              <option value="Prestasi Nilai Rapor (Umum)">Prestasi Nilai Rapor (Umum - Kuota 75%)</option>
              <option value="Jalur Afirmasi (KIP/PKH)">Jalur Afirmasi (KIP/PKH - Kuota 15%)</option>
              <option value="Prestasi Hasil Lomba">Prestasi Hasil Lomba (Kuota 5%)</option>
              <option value="Perpindahan Tugas Orang Tua">Perpindahan Tugas Orang Tua (Kuota 5%)</option>
            </select>
          </div>

          <div class="ppdb-input-group">
            <label>Nomor WhatsApp Aktif</label>
            <input type="text" name="phone" class="ppdb-input" placeholder="Contoh: 081234567890" value="{{ old('phone') }}">
          </div>

          <div class="ppdb-input-group">
            <label>Alamat Email Calon Siswa</label>
            <input type="email" name="email" class="ppdb-input" placeholder="Contoh: nama@gmail.com" value="{{ old('email') }}">
          </div>
        </div>

        <div style="margin-top: 24px; display: flex; justify-content: flex-end;">
          <button type="submit" class="btn btn-red" style="padding: 12px 28px; font-size: 0.9375rem; font-weight: 800;">
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
        <input type="text" id="checkInput" class="ppdb-input" style="flex: 1; min-width: 240px; background: #FFFFFF; color: #0F172A;" placeholder="Nomor Registrasi atau NISN...">
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
                      <img src="{{ asset($logoPath) }}" alt="{{ $m- width="400" height="300">code }}" style="width: 18px; height: 18px; object-fit: contain;">
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

  <!-- 3. KETENTUAN 4 JALUR PENDAFTARAN -->
  <section class="section" id="jalur">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">4 Jalur Pendaftaran PPDB SMK Negeri</h2>
      </div>

      <div class="grid-4">
        <div class="card-jalur">
          <span class="jalur-quota-pill">Kuota 15%</span>
          <h3 class="jalur-name">1. Jalur Afirmasi</h3>
          <p class="jalur-desc">
            Diperuntukkan bagi calon peserta didik dari keluarga tidak mampu dan penyandang disabilitas dengan bukti KIP/PKH.
          </p>
        </div>
        <div class="card-jalur">
          <span class="jalur-quota-pill">Kuota 5%</span>
          <h3 class="jalur-name">2. Perpindahan Tugas</h3>
          <p class="jalur-desc">
            Bagi siswa yang mengikuti perpindahan tugas resmi orang tua/wali dari instansi pemerintah, BUMN, atau TNI/Polri.
          </p>
        </div>
        <div class="card-jalur">
          <span class="jalur-quota-pill">Kuota 5%</span>
          <h3 class="jalur-name">3. Prestasi Hasil Lomba</h3>
          <p class="jalur-desc">
            Penghargaan sertifikat kejuaraan akademik, olahraga, seni, atau keagamaan resmi berjenjang.
          </p>
        </div>
        <div class="card-jalur">
          <span class="jalur-quota-pill" style="color: var(--red); background-color: var(--red-light);">Kuota 75% (Terbesar)</span>
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
</script>
@endpush
