@extends('layouts.app')

@section('title', 'Manajemen Perkantoran - SMKN 1 Probolinggo')

@section('content')
<div class="container" style="padding: 60px 0; max-width: 800px;">
  
  <!-- Logo Jurusan -->
  <div style="text-align: center; margin-bottom: 32px;">
    <img src="{{ asset('images/jurusan/logo_mp_new.png') }}" alt="Logo Manajemen Perkantoran" style="height: 140px; width: auto;">
  </div>

  <!-- Judul Jurusan -->
  <h1 style="font-size: 1.75rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #E2E8F0;">
    Manajemen Perkantoran
  </h1>

  <!-- Deskripsi -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify;">
      Manajemen Perkantoran SMKN 1 Probolinggo bertujuan untuk mencetak peserta didiknya memiliki kompetensi sebagai operator junior computer, staff administrasi, staff HRD, resepsionis, asisten sekretaris dan sekretaris serta keterampilan tersebut dapat diterapkan dalam kehidupan sehari-hari.
    </p>
  </div>

  <!-- Materi/Kompetensi Yang Dipelajari -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 16px;">
      Materi/Kompetensi yang dipelajari:
    </p>
    
    <ol style="color: #334155; line-height: 1.8; font-size: 0.9375rem; padding-left: 24px; margin: 0;">
      <li style="margin-bottom: 12px;">Ekonomi dan bisnis</li>
      <li style="margin-bottom: 12px;">Pengelolaan Administrasi Umum</li>
      <li style="margin-bottom: 12px;">Komunikasi di tempat kerja</li>
      <li style="margin-bottom: 12px;">Pengelolaan Kesiswaan</li>
      <li style="margin-bottom: 12px;">Teknologi Perkantoran</li>
      <li style="margin-bottom: 12px;">Pengelolaan Rapat dan Pertemuan</li>
      <li style="margin-bottom: 12px;">Pengelolaan Keuangan Sederhana</li>
      <li style="margin-bottom: 12px;">Pengelolaan Sarana dan Prasarana</li>
      <li style="margin-bottom: 12px;">Pengelolaan Humas dan Keprotokolan</li>
      <li style="margin-bottom: 12px;">Public Speaking</li>
      <li style="margin-bottom: 12px;">Manajemen Pameran</li>
      <li style="margin-bottom: 12px;">Enterpreneurship (KWU)</li>
      <li style="margin-bottom: 12px;">Praktikum Kerja Lapangan bekerjasama dengan (IDUKA Industri dan Dunia Kerja) yang kompeten sesuai bidangnya</li>
    </ol>
  </div>

  <!-- Fasilitas -->
  <div style="margin-bottom: 40px;">
    <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 16px;">
      <strong>Fasilitas:</strong>
    </p>
    
    <ol style="color: #334155; line-height: 1.8; font-size: 0.9375rem; padding-left: 24px; margin: 0;">
      <li style="margin-bottom: 12px;">Ruang kelas belajar yang nyaman</li>
      <li style="margin-bottom: 12px;">Laboratorium komputer teknologi informasi (2 ruangan)</li>
      <li style="margin-bottom: 12px;">Mini coffe untuk para pertemuan</li>
      <li style="margin-bottom: 12px;">Bengkel Manajemen Perkantoran: pengurusan dokumen, studio foto, praktik loket/praktek asisten sekretaria</li>
      <li style="margin-bottom: 12px;">LIB (Lift.IT.SI) Manajemen Perkantoran</li>
      <li style="margin-bottom: 12px;">Uji Sertifikat Kompetensi dengan (IDUKA rekanan ahli 1 SP SMKN 1 Probolinggo)</li>
    </ol>
  </div>

  <!-- Foto Jurusan -->
  <div style="margin-bottom: 40px;">
    <h2 style="font-size: 1.375rem; font-weight: 700; color: #0F172A; margin-bottom: 20px;">
      Foto Jurusan
    </h2>
    
    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 400px;">
      <img src="{{ asset('images/jurusan/foto_mp_new.png') }}" alt="Foto Jurusan Manajemen Perkantoran" style="width: 100%; height: auto; display: block;">
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
