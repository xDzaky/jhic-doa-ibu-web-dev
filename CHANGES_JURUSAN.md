# Perubahan Halaman Jurusan & Navbar

## 📋 Ringkasan Perubahan

Tanggal: 10 Oktober 2026
Developer: Dzaky

## ✅ Perubahan yang Telah Dilakukan

### 1. Navbar Fixed/Sticky ✓
- Navbar sudah menggunakan `position: sticky` di CSS (`backend/public/css/wireframe.css`)
- Navbar akan tetap berada di atas saat halaman di-scroll
- Tidak perlu perubahan tambahan karena sudah dikonfigurasi dengan benar

### 2. Halaman Detail Jurusan ✓

#### File Baru yang Dibuat:
1. **RPL (Rekayasa Perangkat Lunak)**
   - File: `backend/resources/views/jurusan/rpl.blade.php`
   - Route: `/jurusan/rpl`
   - Warna: Hijau (#15803d)
   - Logo: `logo_rpl_new.png`
   - Foto: `foto_rpl_new.png`

2. **BD (Bisnis Digital)**
   - File: `backend/resources/views/jurusan/bd.blade.php`
   - Route: `/jurusan/bisnis-digital`
   - Warna: Biru (#1d4ed8)
   - Logo: `logo_bd_new.png`
   - Foto: `bg_bd.webp`

3. **AK (Akuntansi)**
   - File: `backend/resources/views/jurusan/ak.blade.php`
   - Route: `/jurusan/akuntansi`
   - Warna: Merah (#b91c1c)
   - Logo: `logo_ak_new.png`
   - Foto: `bg_ak.webp`

4. **MP (Manajemen Perkantoran)**
   - File: `backend/resources/views/jurusan/mp.blade.php`
   - Route: `/jurusan/manajemen-perkantoran`
   - Warna: Pink (#be185d)
   - Logo: `logo_mp_new.png`
   - Foto: `foto_mp_new.png`

5. **LP (Layanan Perbankan)**
   - File: `backend/resources/views/jurusan/lp.blade.php`
   - Route: `/jurusan/layanan-perbankan`
   - Warna: Kuning/Gold (#a16207)
   - Logo: `logo_lp_new.png`
   - Foto: `bg_lp.webp`

### 3. Route yang Ditambahkan ✓

File: `backend/routes/web.php`

```php
// 3.3. Halaman Detail Jurusan
Route::get('/jurusan/rpl', function () {
    return view('jurusan.rpl');
})->name('jurusan.rpl');

Route::get('/jurusan/bisnis-digital', function () {
    return view('jurusan.bd');
})->name('jurusan.bd');

Route::get('/jurusan/manajemen-perkantoran', function () {
    return view('jurusan.mp');
})->name('jurusan.mp');

Route::get('/jurusan/layanan-perbankan', function () {
    return view('jurusan.lp');
})->name('jurusan.lp');

Route::get('/jurusan/akuntansi', function () {
    return view('jurusan.ak');
})->name('jurusan.ak');
```

### 4. Update Tombol "Info Selengkapnya" ✓

File: `backend/resources/views/index.blade.php`

Semua tombol "Info Selengkapnya" di section Program Keahlian Unggulan telah diubah dari mengarah ke PPDB menjadi mengarah ke halaman detail jurusan masing-masing:

- RPL → `route('jurusan.rpl')`
- BD → `route('jurusan.bd')`
- MP → `route('jurusan.mp')`
- LP → `route('jurusan.lp')`
- AK → `route('jurusan.ak')`

### 5. Asset Gambar yang Ditambahkan ✓

Logo Jurusan (dari folder bahan):
- ✓ logo_rpl_new.png
- ✓ logo_bd_new.png
- ✓ logo_ak_new.png
- ✓ logo_mp_new.png
- ✓ logo_lp_new.png

Foto Jurusan (dari folder bahan):
- ✓ foto_rpl_new.png
- ✓ foto_mp_new.png

## 📝 Struktur Halaman Detail Jurusan

Setiap halaman jurusan memiliki struktur yang konsisten:

1. **Hero Section** - Header dengan gradient warna jurusan
   - Logo jurusan
   - Nama jurusan
   - Deskripsi singkat
   - Foto jurusan

2. **Materi Yang Dipelajari** - List materi/kompetensi

3. **Prospek Lulusan** / **Fasilitas** / **Program Pendidikan** (tergantung jurusan)

4. **Foto Jurusan** - Gallery foto kegiatan

5. **CTA Section** - Call-to-action pendaftaran PPDB

## 🎨 Fitur Desain

- Responsive design (mobile & desktop)
- Warna tema sesuai identitas jurusan
- Smooth transitions dan hover effects
- Typography hierarchy yang jelas
- CTA button yang menonjol

## 🔗 Link yang Tersedia

Dari halaman beranda (/), pengunjung dapat:
1. Klik "Info Selengkapnya" pada setiap jurusan
2. Menuju ke halaman detail jurusan
3. Dari halaman detail, dapat klik "Daftar PPDB 2026" untuk mendaftar

## ✅ Testing Checklist

- [ ] Navbar tetap di atas saat scroll
- [ ] Semua link "Info Selengkapnya" berfungsi
- [ ] Halaman detail jurusan dapat diakses
- [ ] Responsive di mobile & desktop
- [ ] Gambar/logo tampil dengan benar
- [ ] CTA button mengarah ke PPDB

## 📱 Cara Mengakses

1. **Dari Beranda:**
   - Scroll ke section "5 Konsentrasi Keahlian"
   - Klik tombol "Info Selengkapnya" pada jurusan yang diinginkan

2. **Direct URL:**
   - https://smexapro.my.id/jurusan/rpl
   - https://smexapro.my.id/jurusan/bisnis-digital
   - https://smexapro.my.id/jurusan/manajemen-perkantoran
   - https://smexapro.my.id/jurusan/layanan-perbankan
   - https://smexapro.my.id/jurusan/akuntansi

## 🚀 Deployment

Untuk deploy perubahan:

```bash
cd backend
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---
**Status:** ✅ COMPLETED
**Tested:** Pending
