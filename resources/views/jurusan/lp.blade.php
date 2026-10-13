@extends('layouts.app')

@section('title', 'Layanan Perbankan (LPB) - SMKN 1 Probolinggo')
@section('meta_description', 'Konsentrasi Keahlian Layanan Perbankan SMKN 1 Probolinggo. Kemitraan Bank Jatim, laboratorium Mini Bank SMEXA, standar teller service excellence, dan sertifikasi BNSP.')

@section('content')
<!-- Department Header Banner -->
<section style="background: #082046; border-bottom: 2px solid #A16207; padding: 60px 0 50px; color: #FFFFFF; position: relative; overflow: hidden;">
  <div class="container reveal-item" data-delay="0">
    <div style="display: flex; align-items: center; gap: 8px; font-size: 0.8125rem; color: #FDE68A; font-weight: 700; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.05em;">
      <a href="{{ route('home') }}" style="color: #FDE68A; text-decoration: none;">Beranda</a>
      <span>/</span>
      <a href="{{ route('home') }}#jurusan" style="color: #FDE68A; text-decoration: none;">Program Keahlian</a>
      <span>/</span>
      <span style="color: #FFFFFF;">Layanan Perbankan</span>
    </div>

    <div style="display: flex; align-items: center; gap: 24px; flex-wrap: wrap;">
      <div style="width: 80px; height: 80px; border-radius: 8px; background: rgba(255, 255, 255, 0.1); border: 1.5px solid rgba(255, 255, 255, 0.2); display: flex; align-items: center; justify-content: center; flex-shrink: 0; backdrop-filter: blur(8px);">
        <img src="{{ asset('images/jurusan/logo_lp_new.png') }}" alt="Logo Layanan Perbankan" width="60" height="60" style="object-fit: contain;">
      </div>
      <div>
        <div style="display: inline-block; background: #A16207; color: #FFF; font-size: 0.71875rem; font-weight: 800; padding: 4px 12px; border-radius: 6px; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 8px;">
          Kemitraan Bank Jatim &amp; Perbankan Syariah
        </div>
        <h1 style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; line-height: 1.15; letter-spacing: -0.025em; margin: 0 0 8px; color: #FFFFFF;">
          Layanan Perbankan (LPB)
        </h1>
        <p style="font-size: 1rem; color: #CBD5E1; margin: 0; max-width: 720px; line-height: 1.5;">
          Mencetak tenaga frontliner perbankan yang berintegritas tinggi, menguasai operasional teller, pelayanan nasabah prima, dan transaksi keuangan digital.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Main Department Grid -->
<section style="background: #FFFFFF; padding: 50px 0 80px;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 40px; align-items: start;">
      
      <!-- Left Column -->
      <div>
        <!-- Profil & Deskripsi -->
        <div style="margin-bottom: 40px;">
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Profil &amp; Keunggulan Konsentrasi Keahlian
          </h2>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify; margin: 0 0 14px;">
            Konsentrasi Keahlian <strong>Layanan Perbankan (LPB)</strong> di SMKN 1 Probolinggo menyiapkan peserta didik menjadi tenaga profesional dan frontliner unggul di sektor industri perbankan konvensional, perbankan syariah, dan lembaga keuangan mikro. Bekerjasama erat dengan <strong>Bank Jatim Cabang Probolinggo</strong>, siswa mendapatkan kurikulum berbasis kebutuhan nyata industri keuangan.
          </p>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify; margin: 0;">
            Keunggulan utama jurusan ini terletak pada kepemilikan <strong>Laboratorium Mini Bank SMEXA</strong>, tempat peserta didik secara langsung mempraktikkan pembukaan rekening, penyetoran dan penarikan tunai, penanganan keluhan nasabah, serta pembukuan kas harian dengan akurasi dan etika perbankan tinggi.
          </p>
        </div>

        <!-- 5 Kompetensi Utama -->
        <div style="margin-bottom: 40px;">
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Standar Kompetensi Lulusan (Banking &amp; Financial Services)
          </h2>
          <div style="display: flex; flex-direction: column; gap: 14px;">
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #A16207; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">1. Operasional Teller &amp; Transaksi Kas</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Keterampilan verifikasi keaslian uang kertas, perhitungan cepat mesin hitung uang, transaksi setoran/penarikan, dan rekonsiliasi kas harian.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #A16207; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">2. Service Excellence &amp; Customer Care Frontliner</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Standar keramahan 3S (Senyum, Sapa, Salam), komunikasi persuasif produk tabungan/deposito, penanganan komplain, dan cross-selling layanan bank.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #A16207; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">3. Praktik Terpadu Mini Bank SMEXA</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Pengelolaan tabungan nyata civitas akademika sekolah, administrasi slip setoran, validasi sistem komputer bank, dan pelaporan kas harian.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #A16207; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">4. Prinsip Perbankan Syariah &amp; Kredit Mikro</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Pemahaman akad-akad syariah (Mudharabah, Musyarakah, Murabahah), analisis kelayakan nasabah pembiayaan mikro, dan kepatuhan regulasi OJK.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #A16207; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">5. Regulasi Kepatuhan &amp; Digital Banking Security</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Penerapan prinsip Know Your Customer (KYC), pencegahan pencucian uang (Anti-Money Laundering), dan perlindungan data nasabah digital.</p>
            </div>
          </div>
        </div>

        <!-- Peluang Karir Lulusan -->
        <div>
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Prospek Karir &amp; Sertifikasi Profesi BNSP
          </h2>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 14px;">
            Lulusan Layanan Perbankan memperoleh sertifikat kompetensi <strong>BNSP skema Layanan Operasional Perbankan / Frontliner</strong> dari LSP-P1 SMKN 1 Probolinggo untuk mengisi formasi:
          </p>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A16207" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Bank Teller (Kasir Perbankan)</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A16207" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Customer Service Representative</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A16207" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Staf Administrasi Kredit &amp; Pembiayaan</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A16207" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Pengelola Kas Lembaga Keuangan Mikro</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A16207" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Frontliner Koperasi Simpan Pinjam / BMT</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A16207" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Petugas Kasir Korporat Retail</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Quick Facts & CTA -->
      <div>
        <div style="background: #F8FAFC; border: 1.5px solid #CBD5E1; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(8, 32, 70, 0.05); position: sticky; top: 90px;">
          <!-- Foto Lab -->
          <div style="width: 100%; height: 210px; overflow: hidden; position: relative;">
            <img src="{{ asset('images/jurusan/lab_lpb.webp') }}" alt="Laboratorium Mini Bank SMEXA" style="width: 100%; height: 100%; object-fit: cover;" width="400" height="210">
            <span style="position: absolute; bottom: 12px; left: 12px; background: rgba(8, 32, 70, 0.85); color: #FFF; font-size: 0.71875rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; backdrop-filter: blur(4px);">
              Laboratorium Mini Bank SMEXA
            </span>
          </div>

          <!-- Quick Data Body -->
          <div style="padding: 24px;">
            <h3 style="font-size: 1.125rem; font-weight: 800; color: #082046; margin: 0 0 16px;">
              Informasi Pendaftaran PPDB 2026
            </h3>

            <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 24px; font-size: 0.875rem;">
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Daya Tampung:</span>
                <strong style="color: #0F172A;">72 Siswa (2 Rombel)</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Akreditasi:</span>
                <strong style="color: #A16207;">A Unggul (BAN-SM)</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Sertifikasi:</span>
                <strong style="color: #0F172A;">BNSP LSP-P1 Resmi</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Mitra Perbankan:</span>
                <strong style="color: #0F172A; text-align: right;">Bank Jatim, BPRS Syariah</strong>
              </div>
            </div>

            <!-- CTA Actions -->
            <a href="{{ route('ppdb') }}#daftar" class="btn btn-navy-primary" style="width: 100%; display: block; text-align: center; padding: 12px; font-size: 0.90625rem; font-weight: 800; border-radius: 8px; text-decoration: none; margin-bottom: 10px;">
              Daftar Konsentrasi Layanan Perbankan 2026
            </a>
            <a href="{{ route('ppdb.check') }}" class="btn btn-outline-navy" style="width: 100%; display: block; text-align: center; padding: 10px; font-size: 0.84375rem; font-weight: 700; border-radius: 8px; text-decoration: none;">
              Cek Alur Seleksi &amp; Syarat Berkas
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- Navigasi Jurusan Lainnya -->
    <div style="margin-top: 60px; padding-top: 36px; border-top: 2px solid #E2E8F0;">
      <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: #082046; margin: 0 0 20px;">
        Jelajahi 4 Konsentrasi Keahlian Lainnya di SMKN 1 Probolinggo
      </h3>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">
        <a href="{{ route('jurusan.rpl') }}" style="text-decoration: none; background: #ECFDF5; border: 1.5px solid #A7F3D0; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_rpl_new.png') }}" alt="Rekayasa Perangkat Lunak" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #047857;">Rekayasa Perangkat Lunak</div>
        </a>
        <a href="{{ route('jurusan.bd') }}" style="text-decoration: none; background: #EFF6FF; border: 1.5px solid #BFDBFE; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_bd_new.png') }}" alt="Bisnis Digital" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #1E40AF;">Bisnis Digital</div>
        </a>
        <a href="{{ route('jurusan.mp') }}" style="text-decoration: none; background: #FDF2F8; border: 1.5px solid #FBCFE8; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_mp_new.png') }}" alt="Manajemen Perkantoran" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #BE185D;">Manajemen Perkantoran</div>
        </a>
        <a href="{{ route('jurusan.ak') }}" style="text-decoration: none; background: #FEF2F2; border: 1.5px solid #FECACA; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_ak_new.png') }}" alt="Akuntansi" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #B91C1C;">Akuntansi</div>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
