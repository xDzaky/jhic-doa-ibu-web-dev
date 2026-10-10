@extends('layouts.app')

@section('title', 'Bisnis Digital - SMKN 1 Probolinggo')

@section('content')
<div class="container" style="padding: 60px 0; max-width: 800px;">
  
  <!-- Logo Jurusan -->
  <div style="text-align: center; margin-bottom: 32px;">
    <img src="{{ asset('images/jurusan/logo_bd_new.png') }}" alt="Logo Bisnis Digital" style="height: 140px; width: auto;">
  </div>

  <!-- Judul Jurusan -->
  <h1 style="font-size: 1.75rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #E2E8F0;">
    Bisnis Digital
  </h1>

  <!-- Deskripsi -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Jurusan bisnis digital adalah bidang studi yang fokus pada pengembangan keterampilan dan pengetahuan yang diperlukan untuk berhasil dalam dunia bisnis yang sangat tergantung pada teknologi digital dan internet. Jurusan ini biasanya tersedia di perguruan tinggi dan universitas, dan mengintegrasikan aspek-aspek bisnis tradisional dengan teknologi digital dan strategi online.
    </p>
  </div>

  <!-- Materi Yang Dipelajari -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 16px;">
      Di Jurusan Bisnis Digital, materi yang dipelajari mencakup hal-hal berikut:
    </p>
    
    <ol style="color: #334155; line-height: 1.8; font-size: 0.9375rem; padding-left: 24px; margin: 0;">
      <li style="margin-bottom: 12px;"><strong>E-commerce</strong>: Belajar cara mengelola bisnis online, termasuk pembuatan dan pengelolaan toko online, strategi pemasaran e-commerce, dan pemahaman terhadap konsep pembelian online.</li>
      <li style="margin-bottom: 12px;"><strong>Pemasaran Digital</strong>: Memahami strategi pemasaran digital, seperti SEO (Search Engine Optimization), periklanan online, media sosial, kampanye email, dan analisis data pemasaran.</li>
      <li style="margin-bottom: 12px;"><strong>Analitik Bisnis</strong>: Penggunaan data dan analitik untuk mengambil keputusan bisnis yang lebih baik dan efisien.</li>
      <li style="margin-bottom: 12px;"><strong>Manajemen Proyek Digital</strong>: Pengembangan keterampilan manajemen proyek khusus untuk proyek-proyek yang berkaitan dengan teknologi digital.</li>
      <li style="margin-bottom: 12px;"><strong>Keamanan Informasi</strong>: Perlindungan terhadap data dan informasi perusahaan dari ancaman keamanan cyber.</li>
      <li style="margin-bottom: 12px;"><strong>Inovasi dan Kewirausahaan</strong>: Pengembangan ide bisnis digital baru, pemahaman tentang cara mendirikan startup teknologi, dan inovasi dalam lingkungan bisnis digital.</li>
      <li style="margin-bottom: 12px;"><strong>Manajemen Sumber Daya Manusia</strong>: Bagaimana mengelola tim dan tenaga kerja dalam lingkungan bisnis digital.</li>
      <li style="margin-bottom: 12px;"><strong>Hukum dan Etika Digital</strong>: Memahami aspek hukum dan etika terkait dengan bisnis online, seperti hak cipta, privasi, dan aturan perdagangan online.</li>
    </ol>
  </div>

  <!-- Prospek Lulusan -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Jurusan bisnis digital dirancang untuk mempersiapkan siswa untuk bekerja di berbagai peran dalam dunia bisnis digital, termasuk sebagai manajer e-commerce, analis pemasaran digital, pengusaha teknologi, atau profesional bisnis digital lainnya. Dalam era dimana teknologi digital mendominasi banyak aspek kehidupan bisnis, pemahaman tentang bisnis digital dapat menjadi aset yang sangat berharga.
    </p>
  </div>

  <!-- Foto Jurusan -->
  <div style="margin-bottom: 40px;">
    <h2 style="font-size: 1.375rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Foto Jurusan
    </h2>
    
    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 400px;">
      <img src="{{ asset('images/jurusan/bg_bd.webp') }}" alt="Foto Jurusan Bisnis Digital" style="width: 100%; height: auto; display: block;">
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
