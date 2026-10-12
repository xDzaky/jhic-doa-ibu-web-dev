# Desain Spesifikasi: Transformasi Beranda SMKN 1 Probolinggo Mengadopsi Arsitektur Visual SMK Telkom

- **Tanggal:** 12 Oktober 2026
- **Status:** Approved by User
- **Target File:** `resources/views/index.blade.php`, `public/css/wireframe.css`, `resources/views/layouts/app.blade.php`

---

## 1. Latar Belakang & Tujuan
Mengadopsi keunggulan arsitektur desain modern, bersih, dan berbobot institusional-korporat dari referensi **SMK Telkom Sidoarjo (`smktelkom-sda.sch.id`)** ke dalam website resmi **SMKN 1 Probolinggo** untuk memaksimalkan kriteria penilaian lomba:
1. **Performa Website (40%):** Kode CSS terstruktur, asset gambar berdimensi pasti dengan lazy loading, tanpa pustaka eksternal yang membebani.
2. **Kreativitas & Inovasi (25%):** Visual portal hero bertingkat (*arch dome mask*), dual-color headlines, interactive tab department switcher, dashed-border partner cards, dan strip metrik prestasi.
3. **Copywriting & Digital Business (20%):** Menonjolkan ekosistem vokasi unggulan: 5 Konsentrasi Keahlian, kurikulum industri (Axioo, Alfamart), lisensi BNSP LSP-P1, serta Teaching Factory BLUD SMEXAMALL.

---

## 2. Fondasi Token & Sistem Desain

### 2.1. Tipografi
- **Font Utama:** `Plus Jakarta Sans`, sans-serif (Google Fonts).
  - Regular (400), Medium (500), SemiBold (600), Bold (700), ExtraBold (800).
- **Heading Pattern:** Dual-Color Headline (Kata utama `#082046`, kata kunci highlight `#2563EB`).

### 2.2. Warna
- **Primary Base:** `#082046` (Navy Blue Institusional SMKN 1 Probolinggo).
- **Accent Action:** `#1D4ED8` & `#2563EB` (Royal Blue & Electric Blue).
- **Surface / Background:**
  - Base: `#FFFFFF` (Solid White).
  - Alternate Section: `#F8FAFC` (Slate Off-White).
  - Metric Strip: `#082046` (Deep Navy Strip) dengan teks `#FFFFFF`.
- **Border & Radius:**
  - Card Border: `1px solid #E2E8F0`.
  - Partner Card Border: `1px dashed #CBD5E1`.
  - Card Corner Radius: `10px`–`12px`.
  - Button & Filter Badge: `9999px` (Pill Shape khas Telkom).
  - Container Width: `width: 80% !important; max-width: 1400px; margin: 0 auto;`.

---

## 3. Rincian Komponen Seksie Beranda (Homepage)

### Seksie 1: Top Navigation Bar
- Logo resmi SMKN 1 Probolinggo di kiri dengan teks identitas sekolah.
- Menu navigasi bersih: Beranda, Profil, Jurusan, SMEXAMALL (TEFA), BKK, Berita, PPDB 2026.
- Tombol aksi kanan: *"Daftar PPDB"* (Pill button `#2563EB`) dan *"Katalog SMEXAMALL"*.

### Seksie 2: Hero Portal & Big Metric Strip
1. **Greeting Pill Tag:** `"Portal Resmi SMKN 1 Probolinggo • SMK Pusat Keunggulan"`.
2. **Dual-Color Headline:** 
   ```html
   <h1 class="hero-title">
     Sekolah Tangguh, Berkarakter,<br>
     <span class="text-accent">& Berwawasan Vokasi Digital</span>
   </h1>
   ```
3. **Hero Model Composition:**
   - Foto representatif siswa berprestasi SMKN 1 Probolinggo dengan background aksen kurva setengah lingkaran (*Arch Portal Dome*) warna biru navy-royal.
4. **Big Metric Strip:**
   - Terpasang tepat di bawah visual hero dengan kontainer kapsul navy gelap:
     - **5** Konsentrasi Keahlian
     - **1.800+** Siswa Aktif
     - **98%** Serapan Kerja BKK Mandiri

### Seksie 3: Sambutan Kepala Sekolah (2-Kolom Horisontal)
- **Kolom Kiri:** Foto resmi Kepala Sekolah (Dwi Anggraeni, S.Pd., M.Pd.) dengan framing rounded portal modern.
- **Kolom Kanan:**
  - Tag pill: `"Sambutan Pimpinan"`.
  - Heading: `"Kepala Sekolah SMKN 1 Probolinggo"`.
  - Paragraf sambutan resmi mengenai transformasi pendidikan vokasi, pembentukan karakter kerja industri, dan kesiapan wirausaha (BMW).
  - Nama dan gelar lengkap Kepala Sekolah.

### Seksie 4: Mengapa Memilih SMKN 1 Probolinggo (6 Grid Cards)
- Header seksie dengan dual-color: *"Mengapa memilih **SMKN 1 Probolinggo?**"*, diapit tombol CTA *"Daftar Sekarang &rarr;"*.
- 6 Kartu Keunggulan:
  1. **Sekolah Digital & Vokasi Modern** (Fasilitas Cloud Computing, IoT, dan AI Terapan).
  2. **Teaching Factory BLUD SMEXAMALL** (Praktik retail, live commerce, dan software development riil).
  3. **Akreditasi A - Unggul** (Pengakuan kualitas nasional dari BAN-S/M).
  4. **Lembaga Sertifikasi Profesi (LSP-P1 BNSP)** (Sertifikat kompetensi keahlian berstandar nasional).
  5. **Kelas Industri Kemitraan DUDI** (Axioo Class, Alfamart Class, & Bank Jatim).
  6. **Bursa Kerja Khusus (BKK) Mandiri** (Penyaluran dan rekrutmen kerja sebelum wisuda).

### Seksie 5: Mitra Industri (Dashed Border Card Slider)
- Menampilkan logo resmi mitra kerja sama industri:
  - Axioo Sentra Digital, Alfamart, Bank Jatim, Jagoan Hosting, AGMARI, Indomarco Prismatama.
- Menggunakan kartu berbingkai *dashed border* (`1px dashed #CBD5E1`) dengan hover elevation.

### Seksie 6: Showcase 5 Konsentrasi Keahlian (Tab Switcher Interaktif)
- **Tab Filter Pills:**
  - `[ RPL ]` `[ Bisnis Digital ]` `[ Manajemen Perkantoran ]` `[ Akuntansi ]` `[ Layanan Perbankan ]`
- **Layout Detail Jurusan Terpilih (2 Kolom):**
  - **Kiri:** Foto laboratorium resmi jurusan (Lab RPL, Lab BD, Lab MPLB, Lab AKL, Lab Perbankan) dengan sudut rounded `12px`.
  - **Kanan:**
    - Nama departemen & deskripsi keahlian.
    - 3 Poin fokus kompetensi dengan ikon.
    - Prospek karier lulusan.
    - Tombol CTA: *"Pelajari Lebih Lanjut &rarr;"* (mengarah ke route `jurusan.*`).

### Seksie 7: Berita & Informasi Terkini
- Filter kategori horizontal (Semua, Prestasi, Kegiatan Sekolah, Kemitraan Industri, Pengumuman).
- Grid kartu berita berbingkai bersih dengan foto, tag kategori biru, tanggal publikasi, dan judul tajam.
- Tombol navigasi / *"Lihat Semua Berita &rarr;"* mengarah ke `route('berita.index')`.

### Seksie 8: Dewan Guru & Tenaga Kependidikan
- Showcase frame dewan guru berwibawa di dalam kontainer 80% dengan border halus.

### Seksie 9: Cerita Sukses Alumni
- 3 Kartu alumni autentik (Mohammad Rizal, Amanda Putri, Dimas Wahyu) dengan avatar bulat, badge jurusan, kutipan sukses, dan link baca cerita.

### Seksie 10: Footer Institusional
- Informasi alamat kampus, kontak resmi, link navigasi cepat, dan statistik pengunjung website.

---

## 4. Rencana Eksekusi & Pengujian
1. Update font Google Fonts `Plus Jakarta Sans` di `resources/views/layouts/app.blade.php`.
2. Implementasikan token dan komponen styling baru di `public/css/wireframe.css`.
3. Rekonstruksi struktur view Beranda di `resources/views/index.blade.php` sesuai 10 seksie di atas.
4. Kompilasi minified CSS menggunakan esbuild (`build_min_css.cjs`).
5. Uji seluruh route HTTP (13 rute) untuk memastikan status **200 OK**.
6. Verifikasi estetika visual dan fungsionalitas tab jurusan interaktif.
