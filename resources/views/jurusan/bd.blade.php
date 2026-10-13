@extends('layouts.app')

@section('title', 'Bisnis Digital (BD) - SMKN 1 Probolinggo')
@section('meta_description', 'Konsentrasi Keahlian Bisnis Digital SMKN 1 Probolinggo. Kelas industri Alfamart & AGMARI, studio live streaming commerce, marketplace operations, dan sertifikasi BNSP.')

@section('content')
<!-- Department Header Banner -->
<section style="background: #082046; border-bottom: 2px solid #1D4ED8; padding: 60px 0 50px; color: #FFFFFF; position: relative; overflow: hidden;">
  <div class="container reveal-item" data-delay="0">
    <div style="display: flex; align-items: center; gap: 8px; font-size: 0.8125rem; color: #BFDBFE; font-weight: 700; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.05em;">
      <a href="{{ route('home') }}" style="color: #BFDBFE; text-decoration: none;">Beranda</a>
      <span>/</span>
      <a href="{{ route('home') }}#jurusan" style="color: #BFDBFE; text-decoration: none;">Program Keahlian</a>
      <span>/</span>
      <span style="color: #FFFFFF;">Bisnis Digital</span>
    </div>

    <div style="display: flex; align-items: center; gap: 24px; flex-wrap: wrap;">
      <div style="width: 80px; height: 80px; border-radius: 8px; background: rgba(255, 255, 255, 0.1); border: 1.5px solid rgba(255, 255, 255, 0.2); display: flex; align-items: center; justify-content: center; flex-shrink: 0; backdrop-filter: blur(8px);">
        <img src="{{ asset('images/jurusan/logo_bd_new.png') }}" alt="Logo Bisnis Digital" width="60" height="60" style="object-fit: contain;">
      </div>
      <div>
        <div style="display: inline-block; background: #1D4ED8; color: #FFF; font-size: 0.71875rem; font-weight: 800; padding: 4px 12px; border-radius: 6px; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 8px;">
          Kelas Industri Alfamart Class &amp; AGMARI AKSESMU
        </div>
        <h1 style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; line-height: 1.15; letter-spacing: -0.025em; margin: 0 0 8px; color: #FFFFFF;">
          Bisnis Digital (BD)
        </h1>
        <p style="font-size: 1rem; color: #CBD5E1; margin: 0; max-width: 720px; line-height: 1.5;">
          Mencetak talenta e-commerce, live commerce streamer, dan digital marketing strategist yang mahir mengelola toko online, periklanan digital, dan retail modern beromzet nyata.
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
            Konsentrasi Keahlian <strong>Bisnis Digital (BD)</strong> di SMKN 1 Probolinggo merupakan program kejuruan modern yang merespons pertumbuhan pesat industri perdagangan elektronik (e-commerce) dan pemasaran digital. Didukung kemitraan resmi <strong>Alfamart Class</strong> dan asosiasi ritel <strong>AGMARI AKSESMU</strong>, proses pembelajaran berbasis praktik bisnis riil.
          </p>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify; margin: 0;">
            Peserta didik dibekali studio live streaming penjualan berstandar industri komersial, praktik pengelolaan etalase marketplace (Shopee, Tokopedia, TikTok Shop), strategi beriklan berbayar (Meta Ads), riset tren konsumen, dan manajemen supply chain ritel terintegrasi dengan Teaching Factory <strong>SMEXAMALL</strong>.
          </p>
        </div>

        <!-- 5 Kompetensi Utama -->
        <div style="margin-bottom: 40px;">
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Standar Kompetensi Lulusan (Digital Business)
          </h2>
          <div style="display: flex; flex-direction: column; gap: 14px;">
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #1D4ED8; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">1. Live Commerce Streaming &amp; Broadcasting</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Keahlian menjadi host siaran langsung interaktif dengan teknik copywriting persuasi, teknik visualisasi produk, dan konversi closing penjualan tinggi.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #1D4ED8; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">2. E-Commerce Marketplace Operations</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Manajemen katalog digital, algoritma search SEO marketplace, customer relationship management (CRM), dan pemenuhan order (order fulfillment).</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #1D4ED8; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">3. Performance Marketing &amp; Social Media Advertising</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Penyusunan kampanye periklanan digital bertarget di Meta Ads dan Google Ads, pembuatan konten promosi kreatif (Canva/CapCut), dan analisis metrik ROAS.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #1D4ED8; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">4. Modern Retail Management (Alfamart Class)</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Sistem kasir Point of Sale (POS), penataan visual merchandising, kontrol inventaris barcode, dan standar pelayanan prima konsumen ritel.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #1D4ED8; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">5. Inkubasi Bisnis &amp; Omzet Nyata SMEXAMALL</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Siswa mengoperasikan unit usaha ritel dan produk kreatif siswa di bawah naungan BLUD dengan laporan omzet transparan.</p>
            </div>
          </div>
        </div>

        <!-- Peluang Karir Lulusan -->
        <div>
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Prospek Karir &amp; Sertifikasi Profesi BNSP
          </h2>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 14px;">
            Lulusan Bisnis Digital memperoleh sertifikat keahlian <strong>BNSP skema Pengelola Toko Daring / Tenaga Pemasar Operasional</strong> dari LSP-P1 SMKN 1 Probolinggo, membuka peluang karir antara lain:
          </p>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Live Streamer / Live Commerce Host</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Marketplace Specialist / Store Admin</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Digital Ads Campaign Executive</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Store Leader / Supervisor Ritel Alfamart</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Social Media Content Specialist</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Wirausahawan Toko Online Mandiri</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Quick Facts & CTA -->
      <div>
        <div style="background: #F8FAFC; border: 1.5px solid #CBD5E1; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(8, 32, 70, 0.05); position: sticky; top: 90px;">
          <!-- Foto Studio -->
          <div style="width: 100%; height: 210px; overflow: hidden; position: relative;">
            <img src="{{ asset('images/jurusan/lab_bd.webp') }}" alt="Studio Live Commerce Bisnis Digital" style="width: 100%; height: 100%; object-fit: cover;" width="400" height="210">
            <span style="position: absolute; bottom: 12px; left: 12px; background: rgba(8, 32, 70, 0.85); color: #FFF; font-size: 0.71875rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; backdrop-filter: blur(4px);">
              Studio Live Commerce &amp; Ritel
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
                <strong style="color: #0F172A;">108 Siswa (3 Rombel)</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Akreditasi:</span>
                <strong style="color: #1D4ED8;">A Unggul (BAN-SM)</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Sertifikasi:</span>
                <strong style="color: #0F172A;">BNSP LSP-P1 Resmi</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Mitra Industri:</span>
                <strong style="color: #0F172A; text-align: right;">Alfamart, AGMARI AKSESMU, Indomaret</strong>
              </div>
            </div>

            <!-- CTA Actions -->
            <a href="{{ route('ppdb') }}#daftar" class="btn btn-navy-primary" style="width: 100%; display: block; text-align: center; padding: 12px; font-size: 0.90625rem; font-weight: 800; border-radius: 8px; text-decoration: none; margin-bottom: 10px;">
              Daftar Konsentrasi Bisnis Digital 2026
            </a>
            <a href="{{ route('smexamall.index') }}" class="btn btn-outline-navy" style="width: 100%; display: block; text-align: center; padding: 10px; font-size: 0.84375rem; font-weight: 700; border-radius: 8px; text-decoration: none;">
              Jelajahi Produk Siswa di SMEXAMALL
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
        <a href="{{ route('jurusan.mp') }}" style="text-decoration: none; background: #FDF2F8; border: 1.5px solid #FBCFE8; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_mp_new.png') }}" alt="Manajemen Perkantoran" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #BE185D;">Manajemen Perkantoran</div>
        </a>
        <a href="{{ route('jurusan.lp') }}" style="text-decoration: none; background: #FFFBEB; border: 1.5px solid #FDE68A; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_lp_new.png') }}" alt="Layanan Perbankan" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #A16207;">Layanan Perbankan</div>
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
