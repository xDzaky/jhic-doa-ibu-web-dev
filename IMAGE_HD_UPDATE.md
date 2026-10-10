# Update Gambar HD - Section 5 Konsentrasi Keahlian

## ✅ Status: SELESAI

Tanggal: 10 Oktober 2026
Update: Gambar HD + Clickable Images

## 🎯 Yang Telah Dikerjakan

### 1. Gambar HD Disalin dari Folder Bahan ✓

Semua gambar dari folder `bahan/` telah disalin ke `backend/public/images/jurusan/`:

| Jurusan | File Sumber | File Tujuan | Status |
|---------|-------------|-------------|--------|
| RPL | `bahan/RPL.png` | `public/images/jurusan/hero_rpl.png` | ✅ |
| BD | `bahan/BD.png` | `public/images/jurusan/hero_bd.png` | ✅ |
| MP | `bahan/MP.png` | `public/images/jurusan/hero_mp.png` | ✅ |
| LP | `bahan/LP.png` | `public/images/jurusan/hero_lp.png` | ✅ |
| AK | `bahan/AK.png` | `public/images/jurusan/hero_ak.png` | ✅ |

### 2. Gambar di Index.blade.php Diganti ✓

**Section:** "5 Konsentrasi Keahlian" (id: `jurusan`)

**Perubahan:**

| Jurusan | Gambar Sebelumnya | Gambar Sekarang |
|---------|-------------------|-----------------|
| RPL | `bg_rpl.webp` | `hero_rpl.png` |
| BD | `bg_bd.webp` | `hero_bd.png` |
| MP | `bg_mp.webp` | `hero_mp.png` |
| LP | `bg_lp.webp` | `hero_lp.png` |
| AK | `bg_ak.webp` | `hero_ak.png` |

### 3. Gambar Dibuat Clickable ✓

Setiap gambar jurusan sekarang dibungkus dengan tag `<a>` yang mengarah ke halaman detail jurusan:

```html
<!-- Contoh untuk RPL -->
<div class="jf-img-col">
  <a href="{{ route('jurusan.rpl') }}" style="display: block; cursor: pointer;">
    <img src="{{ asset('images/jurusan/hero_rpl.png') }}" 
         alt="Rekayasa Perangkat Lunak" 
         class="jf-img" 
         loading="lazy" 
         width="400" 
         height="250" 
         style="transition: transform 0.3s ease;">
  </a>
</div>
```

### 4. Hover Effect Ditambahkan ✓

CSS hover effect untuk memberikan feedback visual saat user hover:

```css
.jf-img-col a:hover img {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.jf-img-col a {
  overflow: hidden;
  border-radius: 12px;
  display: block;
}

.jf-img-col a img {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
```

## 🎨 Fitur yang Ditambahkan

### A. Clickable Images
- Klik pada gambar = sama dengan klik tombol "Info Selengkapnya"
- Mengarah ke halaman detail jurusan
- Cursor pointer saat hover

### B. Hover Effect
- Gambar zoom 5% saat hover (scale 1.05)
- Shadow meningkat untuk depth
- Smooth transition 0.3s

### C. Optimasi Gambar
- Format PNG (dari bahan asli)
- Loading lazy untuk performa
- Width & height attributes untuk CLS prevention

## 📊 Perbandingan

### Sebelum
```html
<div class="jf-img-col">
  <img src="{{ asset('images/jurusan/bg_rpl.webp') }}" 
       alt="Rekayasa Perangkat Lunak" 
       class="jf-img">
</div>
```

### Sekarang
```html
<div class="jf-img-col">
  <a href="{{ route('jurusan.rpl') }}">
    <img src="{{ asset('images/jurusan/hero_rpl.png') }}" 
         alt="Rekayasa Perangkat Lunak" 
         class="jf-img"
         loading="lazy"
         width="400" 
         height="250">
  </a>
</div>
```

## 🔗 Routing Links

Setiap gambar mengarah ke:

| Gambar | Link |
|--------|------|
| RPL | `/jurusan/rpl` |
| BD | `/jurusan/bisnis-digital` |
| MP | `/jurusan/manajemen-perkantoran` |
| LP | `/jurusan/layanan-perbankan` |
| AK | `/jurusan/akuntansi` |

## 📐 Spesifikasi Gambar

### Format
- **Type:** PNG (lossless)
- **Dari:** Folder bahan (original HD)

### Attributes
```html
loading="lazy"          <!-- Lazy loading untuk performa -->
width="400"             <!-- Explicit width untuk CLS -->
height="250"            <!-- Explicit height untuk CLS -->
```

### Optimasi
- Lazy loading: gambar hanya dimuat saat visible
- Width/height explicit: mencegah layout shift
- Format PNG: kualitas HD tetap terjaga

## 🎯 User Experience

### Desktop
1. User scroll ke section "5 Konsentrasi Keahlian"
2. User hover pada gambar → gambar zoom + shadow
3. User klik gambar → redirect ke halaman detail jurusan

### Mobile/Touch
1. User scroll ke section jurusan
2. User tap pada gambar → redirect ke halaman detail
3. No hover effect (touch devices)

## ✅ File yang Diupdate

1. ✅ `backend/resources/views/index.blade.php` - Main content
2. ✅ `backend/public/images/jurusan/hero_rpl.png` - New image
3. ✅ `backend/public/images/jurusan/hero_bd.png` - New image
4. ✅ `backend/public/images/jurusan/hero_mp.png` - New image
5. ✅ `backend/public/images/jurusan/hero_lp.png` - New image
6. ✅ `backend/public/images/jurusan/hero_ak.png` - New image

## 🧪 Testing Checklist

- [ ] Gambar HD tampil dengan jelas
- [ ] Resolusi tidak berkurang/blur
- [ ] Gambar clickable (cursor pointer)
- [ ] Klik gambar mengarah ke halaman detail jurusan
- [ ] Hover effect berfungsi (desktop)
- [ ] Lazy loading berfungsi
- [ ] Tidak ada CLS (layout shift)
- [ ] Responsive di mobile

## 📱 Performance

### Lazy Loading
```html
loading="lazy"
```
- Gambar dimuat hanya saat visible di viewport
- Menghemat bandwidth awal
- Mempercepat initial page load

### Explicit Dimensions
```html
width="400" height="250"
```
- Browser reserve space sebelum gambar dimuat
- Mencegah Cumulative Layout Shift (CLS)
- Better Core Web Vitals score

## 🚀 Deploy

Tidak perlu konfigurasi tambahan. Refresh browser untuk melihat perubahan.

```bash
# Optional: Clear cache
cd backend
php artisan optimize:clear
```

---

**Status:** ✅ COMPLETED
**Gambar:** HD Quality (PNG from bahan/)
**Clickable:** YES
**Hover Effect:** YES
**Optimized:** YES (lazy loading, explicit dimensions)
