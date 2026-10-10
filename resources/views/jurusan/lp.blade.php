@extends('layouts.app')

@section('title', 'Layanan Perbankan - SMKN 1 Probolinggo')

@section('content')
<div class="container" style="padding: 60px 0; max-width: 800px;">
  
  <!-- Logo Jurusan -->
  <div style="text-align: center; margin-bottom: 32px;">
    <img src="{{ asset('images/jurusan/logo_lp_new.png') }}" alt="Logo Layanan Perbankan" style="height: 140px; width: auto;">
  </div>

  <!-- Judul Jurusan -->
  <h1 style="font-size: 1.75rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #E2E8F0;">
    Layanan Perbankan
  </h1>

  <!-- Deskripsi -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Jurusan layanan perbankan adalah salah satu program pendidikan atau jurusan di bidang keuangan yang fokus pada keterampilan dan pengetahuan yang diperlukan untuk bekerja di industri perbankan. Program-program ini biasanya ditawarkan oleh institusi pendidikan seperti sekolah bisnis, perguruan tinggi, atau lembaga pelatihan.
    </p>
  </div>

  <!-- Materi Yang Dipelajari -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 16px;">
      Jurusan layanan perbankan mencakup berbagai aspek yang terkait dengan operasi perbankan dan layanan finansial. Siswa yang mengambil jurusan ini dapat mempelajari topik-topik seperti:
    </p>
    
    <ol style="color: #334155; line-height: 1.8; font-size: 0.9375rem; padding-left: 24px; margin: 0;">
      <li style="margin-bottom: 12px;">Pengetahuan tentang produk dan layanan perbankan, termasuk rekening tabungan, rekening giro, pinjaman, kartu kredit, dan investasi.</li>
      <li style="margin-bottom: 12px;">Keterampilan dalam melayani pelanggan dan berinteraksi dengan mereka secara profesional.</li>
      <li style="margin-bottom: 12px;">Keterampilan dalam manajemen risiko, kepatuhan peraturan, dan keamanan transaksi perbankan.</li>
      <li style="margin-bottom: 12px;">Prinsip-prinsip ekonomi dan keuangan yang berkaitan dengan operasi perbankan.</li>
      <li style="margin-bottom: 12px;">Teknologi dan perangkat lunak yang digunakan dalam industri perbankan.</li>
      <li style="margin-bottom: 12px;">Etika dan tata kelola perbankan.</li>
    </ol>
  </div>

  <!-- Prospek Lulusan -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Lulusan jurusan layanan perbankan sering memiliki peluang untuk bekerja di berbagai posisi di bank, seperti petugas layanan pelanggan, asisten bankir, petugas kredit, atau dalam departemen kepatuhan. Program-program ini bertujuan untuk membekali siswa dengan pengetahuan dan keterampilan yang dibutuhkan untuk menjadi profesional yang sukses di industri perbankan.
    </p>
  </div>

  <!-- Foto Jurusan -->
  <div style="margin-bottom: 40px;">
    <h2 style="font-size: 1.375rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Foto Jurusan
    </h2>
    
    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 400px;">
      <img src="{{ asset('images/jurusan/lab_lpb.webp') }}" alt="Foto Jurusan Layanan Perbankan" style="width: 100%; height: auto; display: block;">
    </div>
  </div>

  <!-- Lihat Jurusan Lainnya -->
  <div style="margin-top: 48px; padding-top: 32px; border-top: 2px solid #E2E8F0;">
    <h3 style="font-size: 1.125rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Lihat Jurusan Lainnya
    </h3>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; margin-top: 24px;">
      <!-- RPL -->
      <a href="{{ route('jurusan.rpl') }}" style="text-decoration: none; background: #F0FDF4; border: 2px solid #BBF7D0; border-radius: 12px; padding: 20px; text-align: center; transition: all 0.2s ease; display: block;">
        <img src="{{ asset('images/jurusan/logo_rpl_new.png') }}" alt="RPL" style="height: 60px; width: auto; margin: 0 auto 12px; display: block;">
        <div style="font-size: 0.875rem; font-weight: 700; color: #15803D;">Rekayasa Perangkat Lunak</div>
      </a>

      <!-- Bisnis Digital -->
      <a href="{{ route('jurusan.bd') }}" style="text-decoration: none; background: #EFF6FF; border: 2px solid #BFDBFE; border-radius: 12px; padding: 20px; text-align: center; transition: all 0.2s ease; display: block;">
        <img src="{{ asset('images/jurusan/logo_bd_new.png') }}" alt="Bisnis Digital" style="height: 60px; width: auto; margin: 0 auto 12px; display: block;">
        <div style="font-size: 0.875rem; font-weight: 700; color: #1E40AF;">Bisnis Digital</div>
      </a>

      <!-- Akuntansi -->
      <a href="{{ route('jurusan.ak') }}" style="text-decoration: none; background: #FEF2F2; border: 2px solid #FECACA; border-radius: 12px; padding: 20px; text-align: center; transition: all 0.2s ease; display: block;">
        <img src="{{ asset('images/jurusan/logo_ak_new.png') }}" alt="Akuntansi" style="height: 60px; width: auto; margin: 0 auto 12px; display: block;">
        <div style="font-size: 0.875rem; font-weight: 700; color: #B91C1C;">Akuntansi</div>
      </a>

      <!-- Manajemen Perkantoran -->
      <a href="{{ route('jurusan.mp') }}" style="text-decoration: none; background: #FDF2F8; border: 2px solid #FBCFE8; border-radius: 12px; padding: 20px; text-align: center; transition: all 0.2s ease; display: block;">
        <img src="{{ asset('images/jurusan/logo_mp_new.png') }}" alt="Manajemen Perkantoran" style="height: 60px; width: auto; margin: 0 auto 12px; display: block;">
        <div style="font-size: 0.875rem; font-weight: 700; color: #BE185D;">Manajemen Perkantoran</div>
      </a>
    </div>
  </div>

</div>

<style>
a[href*="jurusan"]:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}
</style>

@endsection
