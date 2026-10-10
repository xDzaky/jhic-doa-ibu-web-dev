@extends('layouts.app')

@section('title', 'Akuntansi - SMKN 1 Probolinggo')

@section('content')
<div class="container" style="padding: 60px 0; max-width: 800px;">
  
  <!-- Logo Jurusan -->
  <div style="text-align: center; margin-bottom: 32px;">
    <img src="{{ asset('images/jurusan/logo_ak_new.png') }}" alt="Logo Akuntansi" style="height: 140px; width: auto;">
  </div>

  <!-- Judul Jurusan -->
  <h1 style="font-size: 1.75rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #E2E8F0;">
    Akuntansi
  </h1>

  <!-- Deskripsi -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Jurusan Akuntansi adalah salah satu pilihan jurusan yang mempersiapkan siswa untuk memiliki pengetahuan dan keterampilan dalam bidang akuntansi. Dalam jurusan ini, siswa akan mempelajari konsep dasar akuntansi, prosedur pencatatan keuangan, analisis laporan keuangan, perpajakan, serta pengelolaan keuangan perusahaan atau organisasi.
    </p>
  </div>

  <!-- Program Pendidikan -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 16px;">
      Program pendidikan dalam jurusan Akuntansi mencakup mata pelajaran seperti:
    </p>
    
    <ol style="color: #334155; line-height: 1.8; font-size: 0.9375rem; padding-left: 24px; margin: 0;">
      <li style="margin-bottom: 12px;"><strong>Akuntansi Dasar</strong>: Konsep dasar akuntansi, prinsip-prinsip akuntansi, dan teknik-teknik pencatatan transaksi keuangan.</li>
      <li style="margin-bottom: 12px;"><strong>Analisis Laporan Keuangan</strong>: Memahami laporan keuangan seperti neraca, laporan laba rugi, dan laporan arus kas, serta kemampuan untuk menganalisisnya.</li>
      <li style="margin-bottom: 12px;"><strong>Perpajakan</strong>: Pembelajaran tentang peraturan dan prosedur perpajakan, termasuk cara menghitung pajak dan kewajiban perpajakan.</li>
      <li style="margin-bottom: 12px;"><strong>Manajemen Keuangan</strong>: Studi tentang pengelolaan keuangan perusahaan, termasuk perencanaan anggaran, pengendalian biaya, dan manajemen kas.</li>
      <li style="margin-bottom: 12px;"><strong>Komputerisasi Akuntansi</strong>: Penggunaan perangkat lunak akuntansi dan perangkat lunak keuangan untuk mengotomatiskan proses pencatatan dan pelaporan keuangan.</li>
    </ol>
  </div>

  <!-- Prospek Lulusan -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Lulusan dari jurusan Akuntansi memiliki dasar pengetahuan dan keterampilan yang dapat membantu mereka memulai karier di berbagai bidang, termasuk sebagai asisten akuntan, staf keuangan, atau dalam peran terkait akuntansi dan keuangan lainnya. Selain itu, mereka juga dapat melanjutkan pendidikan ke jenjang yang lebih tinggi, seperti diploma atau sarjana dalam bidang akuntansi atau keuangan.
    </p>
  </div>

  <!-- Foto Jurusan -->
  <div style="margin-bottom: 40px;">
    <h2 style="font-size: 1.375rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Foto Jurusan
    </h2>
    
    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 400px;">
      <img src="{{ asset('images/jurusan/lab_akl.webp') }}" alt="Foto Jurusan Akuntansi" style="width: 100%; height: auto; display: block;">
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

      <!-- Manajemen Perkantoran -->
      <a href="{{ route('jurusan.mp') }}" style="text-decoration: none; background: #FDF2F8; border: 2px solid #FBCFE8; border-radius: 12px; padding: 20px; text-align: center; transition: all 0.2s ease; display: block;">
        <img src="{{ asset('images/jurusan/logo_mp_new.png') }}" alt="Manajemen Perkantoran" style="height: 60px; width: auto; margin: 0 auto 12px; display: block;">
        <div style="font-size: 0.875rem; font-weight: 700; color: #BE185D;">Manajemen Perkantoran</div>
      </a>

      <!-- Layanan Perbankan -->
      <a href="{{ route('jurusan.lp') }}" style="text-decoration: none; background: #FFFBEB; border: 2px solid #FDE68A; border-radius: 12px; padding: 20px; text-align: center; transition: all 0.2s ease; display: block;">
        <img src="{{ asset('images/jurusan/logo_lp_new.png') }}" alt="Layanan Perbankan" style="height: 60px; width: auto; margin: 0 auto 12px; display: block;">
        <div style="font-size: 0.875rem; font-weight: 700; color: #A16207;">Layanan Perbankan</div>
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
