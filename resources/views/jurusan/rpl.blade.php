@extends('layouts.app')

@section('title', 'Rekayasa Perangkat Lunak (RPL) - SMKN 1 Probolinggo')
@section('meta_description', 'Konsentrasi Keahlian Rekayasa Perangkat Lunak SMKN 1 Probolinggo. Kelas industri Axioo & Jagoan Hosting, kurikulum Full-Stack Web, Flutter, dan sertifikasi BNSP.')

@section('content')
<!-- Department Header Banner -->
<section style="background: #082046; border-bottom: 2px solid #15803D; padding: 60px 0 50px; color: #FFFFFF; position: relative; overflow: hidden;">
  <div class="container reveal-item" data-delay="0">
    <div style="display: flex; align-items: center; gap: 8px; font-size: 0.8125rem; color: #A7F3D0; font-weight: 700; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.05em;">
      <a href="{{ route('home') }}" style="color: #A7F3D0; text-decoration: none;">Beranda</a>
      <span>/</span>
      <a href="{{ route('home') }}#jurusan" style="color: #A7F3D0; text-decoration: none;">Program Keahlian</a>
      <span>/</span>
      <span style="color: #FFFFFF;">RPL</span>
    </div>

    <div style="display: flex; align-items: center; gap: 24px; flex-wrap: wrap;">
      <div style="width: 80px; height: 80px; border-radius: 8px; background: rgba(255, 255, 255, 0.1); border: 1.5px solid rgba(255, 255, 255, 0.2); display: flex; align-items: center; justify-content: center; flex-shrink: 0; backdrop-filter: blur(8px);">
        <img src="{{ asset('images/jurusan/logo_rpl_new.png') }}" alt="Logo RPL" width="60" height="60" style="object-fit: contain;">
      </div>
      <div>
        <div style="display: inline-block; background: #15803D; color: #FFF; font-size: 0.71875rem; font-weight: 800; padding: 4px 12px; border-radius: 6px; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 8px;">
          Kelas Industri Axioo &amp; Jagoan Hosting
        </div>
        <h1 style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; line-height: 1.15; letter-spacing: -0.025em; margin: 0 0 8px; color: #FFFFFF;">
          Rekayasa Perangkat Lunak (RPL)
        </h1>
        <p style="font-size: 1rem; color: #CBD5E1; margin: 0; max-width: 720px; line-height: 1.5;">
          Mencetak software engineer tangguh yang menguasai full-stack web, mobile Flutter, arsitektur database, dan alur kerja pengembangan aplikasi berstandar industri modern.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Main Department Grid -->
<section style="background: #FFFFFF; padding: 50px 0 80px;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 40px; align-items: start;">
      
      <!-- Left Column: Curriculum & Deep Vocational Capabilities -->
      <div>
        <!-- Profil & Deskripsi -->
        <div style="margin-bottom: 40px;">
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Profil &amp; Keunggulan Konsentrasi Keahlian
          </h2>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify; margin: 0 0 14px;">
            Konsentrasi Keahlian <strong>Rekayasa Perangkat Lunak (RPL)</strong> di SMK Negeri 1 Probolinggo dirancang khusus untuk menjembatani kebutuhan talenta teknologi informasi di era industri digital. Pembelajaran mengadopsi standar kurikulum industri terkini melalui kemitraan strategis <strong>Axioo Smart Classroom</strong> dan <strong>Jagoan Hosting (PT Beon Intermedia)</strong>.
          </p>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; text-align: justify; margin: 0;">
            Siswa tidak hanya belajar coding dasar, melainkan dilatih memecahkan persoalan riil melalui metodologi <em>Software Development Life Cycle (SDLC)</em>, kontrol versi Git/GitHub, perancangan antarmuka UI/UX, pengujian perangkat lunak, serta penerapan kecerdasan buatan terapan untuk efisiensi produksi aplikasi.
          </p>
        </div>

        <!-- 5 Kompetensi Utama -->
        <div style="margin-bottom: 40px;">
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Standar Kompetensi Lulusan (Industri 4.0)
          </h2>
          <div style="display: flex; flex-direction: column; gap: 14px;">
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #15803D; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">1. Full-Stack Web Application Engineering</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Pengembangan aplikasi web berbasis PHP framework (Laravel), JavaScript modern, responsive CSS (Tailwind), dan integrasi basis data relational.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #15803D; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">2. Mobile Cross-Platform Development (Flutter)</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Pembuatan aplikasi perangkat bergerak berbasis Flutter dan Dart dengan integrasi RESTful API dan arsitektur state management.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #15803D; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">3. Cloud Infrastructure &amp; DevOps Fundamental</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Administrasi server Linux, pengelolaan domain dan web hosting di Jagoan Hosting, deployment aplikasi cloud, serta keamanan siber dasar.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #15803D; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">4. UI/UX Interface Design &amp; Prototyping</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Perancangan desain antarmuka digital yang intuitif menggunakan Figma, user flow, wireframing, dan riset pengalaman pengguna.</p>
            </div>
            <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-left: 4px solid #15803D; border-radius: 10px; padding: 14px 18px;">
              <strong style="color: #082046; font-size: 0.9375rem; display: block; margin-bottom: 4px;">5. Teaching Factory: Software House Siswa di SMEXAMALL</strong>
              <p style="font-size: 0.84375rem; color: #475569; margin: 0; line-height: 1.5;">Mengerjakan pesanan pembuatan website UMKM dan aplikasi digital komersial nyata di bawah bimbingan guru dan mentor industri.</p>
            </div>
          </div>
        </div>

        <!-- Peluang Karir Lulusan -->
        <div>
          <h2 style="font-family: var(--font-heading); font-size: 1.375rem; font-weight: 800; color: #082046; margin: 0 0 16px; padding-bottom: 10px; border-bottom: 2px solid #E2E8F0;">
            Prospek Karir &amp; Sertifikasi Profesi BNSP
          </h2>
          <p style="color: #334155; line-height: 1.8; font-size: 0.9375rem; margin-bottom: 14px;">
            Setiap lulusan RPL dibekali sertifikat kompetensi <strong>Badan Nasional Sertifikasi Profesi (BNSP)</strong> skema <em>Junior Web Developer</em> melalui Lembaga Sertifikasi Profesi (LSP-P1) SMKN 1 Probolinggo. Posisi kerja strategis lulusan antara lain:
          </p>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Junior Full-Stack Web Developer</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Mobile Flutter App Developer</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Quality Assurance (QA) Software Tester</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>IT Support &amp; Cloud Technical Specialist</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>UI/UX Product Designer</div>
            <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 8px; padding: 10px 14px; font-size: 0.84375rem; color: #0F172A; font-weight: 700; display: flex; align-items: center; gap: 8px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Digital Tech Entrepreneur / Freelancer</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Quick Facts, Lab Photo & CTA Card -->
      <div>
        <div style="background: #F8FAFC; border: 1.5px solid #CBD5E1; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(8, 32, 70, 0.05); position: sticky; top: 90px;">
          <!-- Foto Lab -->
          <div style="width: 100%; height: 210px; overflow: hidden; position: relative;">
            <img src="{{ asset('images/jurusan/lab_rpl.webp') }}" alt="Laboratorium Rekayasa Perangkat Lunak" style="width: 100%; height: 100%; object-fit: cover;" width="400" height="210">
            <span style="position: absolute; bottom: 12px; left: 12px; background: rgba(8, 32, 70, 0.85); color: #FFF; font-size: 0.71875rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; backdrop-filter: blur(4px);">
              Laboratorium Komputer Axioo
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
                <strong style="color: #15803D;">A Unggul (BAN-SM)</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Sertifikasi:</span>
                <strong style="color: #0F172A;">BNSP LSP-P1 Resmi</strong>
              </div>
              <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 8px;">
                <span style="color: #64748B;">Mitra Industri:</span>
                <strong style="color: #0F172A; text-align: right;">Axioo, Jagoan Hosting, Hummasoft</strong>
              </div>
            </div>

            <!-- CTA Actions -->
            <a href="{{ route('ppdb') }}#daftar" class="btn btn-navy-primary" style="width: 100%; display: block; text-align: center; padding: 12px; font-size: 0.90625rem; font-weight: 800; border-radius: 8px; text-decoration: none; margin-bottom: 10px;">
              Daftar Konsentrasi RPL 2026
            </a>
            <a href="{{ route('smexamall.index') }}" class="btn btn-outline-navy" style="width: 100%; display: block; text-align: center; padding: 10px; font-size: 0.84375rem; font-weight: 700; border-radius: 8px; text-decoration: none;">
              Lihat Karya Software di SMEXAMALL
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
        <a href="{{ route('jurusan.bd') }}" style="text-decoration: none; background: #EFF6FF; border: 1.5px solid #BFDBFE; border-radius: 12px; padding: 18px; text-align: center; transition: all 0.2s ease;">
          <img src="{{ asset('images/jurusan/logo_bd_new.png') }}" alt="Bisnis Digital" style="height: 50px; width: auto; margin: 0 auto 10px; display: block;" width="50" height="50">
          <div style="font-size: 0.875rem; font-weight: 800; color: #1E40AF;">Bisnis Digital</div>
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
