@extends('layouts.app')

@section('title', 'Rekayasa Perangkat Lunak - SMKN 1 Probolinggo')

@section('content')
<div class="container" style="padding: 60px 0; max-width: 800px;">
  
  <!-- Logo Jurusan -->
  <div style="text-align: center; margin-bottom: 32px;">
    <img src="{{ asset('images/jurusan/logo_rpl_new.png') }}" alt="Logo Rekayasa Perangkat Lunak" style="height: 140px; width: auto;">
  </div>

  <!-- Judul Jurusan -->
  <h1 style="font-size: 1.75rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #E2E8F0;">
    Rekayasa Perangkat Lunak
  </h1>

  <!-- Deskripsi -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Jurusan Rekayasa Perangkat Lunak (RPL) adalah program keahlian yang berfokus pada pengembangan perangkat lunak. Peserta didik akan mempelajari siklus pengembangan perangkat lunak secara menyeluruh, mulai dari perancangan, pembuatan kode, pengujian, hingga pemeliharaan aplikasi. Jurusan ini mencetak talenta yang siap berkontribusi dalam menciptakan solusi teknologi inovatif dan fungsional.
    </p>
  </div>

  <!-- Materi Yang Dipelajari -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 16px;">
      Di Jurusan Rekayasa Perangkat Lunak (RPL), materi yang dipelajari mencakup hal-hal berikut:
    </p>
    
    <ol style="color: #334155; line-height: 1.8; font-size: 0.9375rem; padding-left: 24px; margin: 0;">
      <li style="margin-bottom: 12px;"><strong>Pemrograman</strong>: Mempelajari berbagai bahasa pemrograman seperti Java, Python, dan C++ untuk membangun aplikasi yang fungsional.</li>
      <li style="margin-bottom: 12px;"><strong>Desain Perangkat Lunak</strong>: Merancang tampilan (UI/UX) dan arsitektur sebuah aplikasi agar mudah digunakan dan terstruktur dengan baik.</li>
      <li style="margin-bottom: 12px;"><strong>Pengujian dan Kualitas Perangkat Lunak</strong>: Menguji dan memastikan aplikasi bebas dari bug dan memenuhi standar kualitas.</li>
      <li style="margin-bottom: 12px;"><strong>Manajemen Proyek</strong>: Mengelola proses pengembangan perangkat lunak dari awal hingga selesai, termasuk pembagian tugas dan waktu.</li>
      <li style="margin-bottom: 12px;"><strong>Keamanan Perangkat Lunak</strong>: Memahami cara melindungi aplikasi dari berbagai ancaman siber dan kebocoran data.</li>
    </ol>
  </div>

  <!-- Prospek Lulusan -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Lulusan jurusan Rekayasa Perangkat Lunak (RPL) memiliki jalur karier yang menjanjikan. Mereka sangat dibutuhkan untuk mengisi posisi di sektor seperti Pengembang Aplikasi, Web Developer, Quality Assurance (QA), hingga Manager Proyek IT. Dengan keterampilan digitalisasi yang terus berkembang, lulusan RPL memiliki peluang kerja yang stabil dan terus meningkat di segala bidang, dari perbankan hingga hiburan digital.
    </p>
  </div>

  <!-- Foto Jurusan -->
  <div style="margin-bottom: 40px;">
    <h2 style="font-size: 1.375rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Foto Jurusan
    </h2>
    
    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 400px;">
      <img src="{{ asset('images/jurusan/foto_rpl_new.png') }}" alt="Foto Jurusan RPL" style="width: 100%; height: auto; display: block;">
    </div>
  </div>

  <!-- Lihat Jurusan Lainnya -->
  <div style="margin-top: 48px; padding-top: 32px; border-top: 2px solid #E2E8F0;">
    <h3 style="font-size: 1.125rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Lihat Jurusan Lainnya
    </h3>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; margin-top: 24px;">
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
