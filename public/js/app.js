/**
 * SMEXAMALL — App Core JS
 * Shared data store, cart management, and global utilities
 * Zero dependencies. Vanilla JS for max performance.
 * 
 * Target: <5ms execution on initial load
 */

// ============================================================
// MASTER DATA: 5 Program Keahlian (from spec Section 5)
// In production: Cache::rememberForever('ppdb_quotas', ...)
// ============================================================
window.MAJORS = [
  { code: 'RPL', name: 'Rekayasa Perangkat Lunak', quota: 108, rombel: 3, focus: 'Web & Mobile Dev, Database, UI/UX, Axioo Sentra Digital' },
  { code: 'BD', name: 'Bisnis Digital', quota: 108, rombel: 3, focus: 'E-Commerce, Digital Marketing, Retail Class Alfamart & Yamaha' },
  { code: 'MPLB', name: 'Manajemen Perkantoran & Layanan Bisnis', quota: 72, rombel: 2, focus: 'Admin Digital, Bilingual Secretary, Kearsipan, PR' },
  { code: 'AKL', name: 'Akuntansi & Keuangan Lembaga', quota: 72, rombel: 2, focus: 'Komputer Akuntansi MYOB, Perpajakan, Pengelolaan Kas' },
  { code: 'LPB', name: 'Layanan Perbankan', quota: 72, rombel: 2, focus: 'Operasional Kas Teller, Mini Bank Sekolah, Finansial Mikro' },
];

// ============================================================
// PRODUCT CATALOG (Simulated DB — in production: Eloquent + Redis cache)
// ============================================================
window.PRODUCTS = [
  // RPL Products
  { id: 1, name: 'Jasa Pembuatan Website Company Profile', price: 150000, hpp: 25000, stock: 10, sold: 12, major: 'RPL', type: 'Jasa', seller: 'Fajar K. (RPL XI-2)', emoji: '💻', bgColor: '#EFF6FF', badgeClass: 'service', rating: '4.9' },
  { id: 2, name: 'Jasa Desain UI/UX Aplikasi Mobile', price: 200000, hpp: 30000, stock: 5, sold: 8, major: 'RPL', type: 'Jasa', seller: 'Dian P. (RPL XII-1)', emoji: '📱', bgColor: '#EFF6FF', badgeClass: 'service', rating: '4.8' },
  { id: 3, name: 'Template Database Inventaris Sekolah', price: 50000, hpp: 5000, stock: 99, sold: 15, major: 'RPL', type: 'Dokumen', seller: 'Andi S. (RPL XI-3)', emoji: '🗄️', bgColor: '#EFF6FF', badgeClass: 'service', rating: '4.7' },

  // BD Products
  { id: 4, name: 'Brownies Lumer SMEA Premium', price: 25000, hpp: 14000, stock: 30, sold: 47, major: 'BD', type: 'Makanan', seller: 'Aisyah R. (BD XII-1)', emoji: '🍫', bgColor: '#FFF7ED', badgeClass: 'food', rating: '4.9' },
  { id: 5, name: 'Stiker Vinyl Custom Design', price: 8000, hpp: 3500, stock: 100, sold: 35, major: 'BD', type: 'Kerajinan', seller: 'Aisyah R. (BD XII-1)', emoji: '🏷️', bgColor: '#FFF7ED', badgeClass: 'craft', rating: '4.6' },
  { id: 6, name: 'Paket Digital Marketing Consultation', price: 75000, hpp: 10000, stock: 15, sold: 9, major: 'BD', type: 'Jasa', seller: 'Budi H. (BD XI-2)', emoji: '📈', bgColor: '#FFF7ED', badgeClass: 'service', rating: '4.8' },

  // MPLB Products
  { id: 7, name: 'Jasa Pengetikan & Formatting Dokumen', price: 15000, hpp: 2000, stock: 50, sold: 22, major: 'MPLB', type: 'Jasa', seller: 'Putri A. (MPLB XII-2)', emoji: '📝', bgColor: '#F5F3FF', badgeClass: 'service', rating: '4.7' },
  { id: 8, name: 'Template Surat Resmi Bilingual', price: 20000, hpp: 3000, stock: 99, sold: 19, major: 'MPLB', type: 'Dokumen', seller: 'Putri A. (MPLB XII-2)', emoji: '📋', bgColor: '#F5F3FF', badgeClass: 'service', rating: '4.5' },

  // AKL Products
  { id: 9, name: 'Template Laporan Keuangan Excel', price: 35000, hpp: 5000, stock: 99, sold: 31, major: 'AKL', type: 'Dokumen', seller: 'Nisa D. (AKL XII-3)', emoji: '📊', bgColor: '#F0FDF4', badgeClass: 'service', rating: '4.8' },
  { id: 10, name: 'Kue Nastar Premium (500gr)', price: 45000, hpp: 22000, stock: 20, sold: 14, major: 'AKL', type: 'Makanan', seller: 'Nisa D. (AKL XII-3)', emoji: '🍪', bgColor: '#F0FDF4', badgeClass: 'food', rating: '4.9' },

  // LPB Products
  { id: 11, name: 'Jasa Konsultasi Keuangan Pribadi', price: 30000, hpp: 5000, stock: 20, sold: 24, major: 'LPB', type: 'Jasa', seller: 'Rizki M. (LPB XI-1)', emoji: '💰', bgColor: '#FFFBEB', badgeClass: 'service', rating: '4.7' },
  { id: 12, name: 'Keripik Tempe Crispy (250gr)', price: 15000, hpp: 8000, stock: 40, sold: 18, major: 'LPB', type: 'Makanan', seller: 'Rizki M. (LPB XI-1)', emoji: '🥜', bgColor: '#FFFBEB', badgeClass: 'food', rating: '4.6' },

  // Extra variety
  { id: 13, name: 'Jasa Edit Video Promosi UMKM', price: 100000, hpp: 15000, stock: 8, sold: 6, major: 'RPL', type: 'Jasa', seller: 'Fajar K. (RPL XI-2)', emoji: '🎬', bgColor: '#EFF6FF', badgeClass: 'service', rating: '4.9' },
  { id: 14, name: 'Pudding Cup Aneka Rasa (6pcs)', price: 18000, hpp: 9000, stock: 25, sold: 28, major: 'BD', type: 'Makanan', seller: 'Lina W. (BD XI-3)', emoji: '🍮', bgColor: '#FFF7ED', badgeClass: 'food', rating: '4.7' },
  { id: 15, name: 'Gantungan Kunci Resin Custom', price: 12000, hpp: 5000, stock: 60, sold: 33, major: 'BD', type: 'Kerajinan', seller: 'Lina W. (BD XI-3)', emoji: '🔑', bgColor: '#FFF7ED', badgeClass: 'craft', rating: '4.5' },
  { id: 16, name: 'Jasa Input Data & Spreadsheet', price: 25000, hpp: 3000, stock: 30, sold: 11, major: 'AKL', type: 'Jasa', seller: 'Dewi A. (AKL XI-2)', emoji: '📑', bgColor: '#F0FDF4', badgeClass: 'service', rating: '4.6' },
];


// ============================================================
// CART MANAGEMENT (localStorage — in production: Redis session)
// ============================================================
function getCart() {
  try {
    return JSON.parse(localStorage.getItem('smexamall_cart') || '[]');
  } catch {
    return [];
  }
}

function updateCartCount() {
  const cart = getCart();
  const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
  document.querySelectorAll('#cartCount').forEach(el => {
    el.textContent = totalItems;
  });
}


// ============================================================
// CHATBOT WIDGET (Global — omnipresent on all pages)
// ============================================================
function initChatbot() {
  const launcher = document.getElementById('chatbotLauncher');
  const window_ = document.getElementById('chatbotWindow');
  const closeBtn = document.getElementById('chatbotClose');
  const sendBtn = document.getElementById('chatSendBtn');
  const input = document.getElementById('chatInput');
  const body = document.getElementById('chatbotBody');

  if (!launcher) return;

  launcher.addEventListener('click', () => {
    window_.classList.toggle('active');
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      window_.classList.remove('active');
    });
  }

  function sendMessage() {
    const text = input.value.trim();
    if (!text) return;

    // User bubble
    body.innerHTML += `<div style="display:flex;justify-content:flex-end;margin-top:10px"><div style="background:var(--orange-ecom);color:#fff;padding:10px 14px;border-radius:12px 12px 4px 12px;font-size:0.8125rem;max-width:85%">${escapeHtml(text)}</div></div>`;
    input.value = '';
    body.scrollTop = body.scrollHeight;

    // Simulate AI response
    setTimeout(() => {
      const responses = getSmartResponse(text);
      body.innerHTML += `<div style="margin-top:10px"><div style="background:#F0F4F8;padding:12px 14px;border-radius:12px 12px 12px 4px;font-size:0.8125rem;color:var(--text-main);line-height:1.5;max-width:85%">${responses}</div></div>`;
      body.scrollTop = body.scrollHeight;
    }, 600);
  }

  if (sendBtn) sendBtn.addEventListener('click', sendMessage);
  if (input) input.addEventListener('keyup', e => { if (e.key === 'Enter') sendMessage(); });
}

function getSmartResponse(text) {
  const q = text.toLowerCase();
  if (q.includes('ppdb') || q.includes('daftar') || q.includes('pendaftaran')) {
    return '📋 <strong>PPDB 2026</strong> sedang dibuka! Total 432 kursi di 5 jurusan: RPL (108), BD (108), MPLB (72), AKL (72), LPB (72). <a href="ppdb.html" style="color:var(--orange-ecom);font-weight:700">Daftar sekarang →</a>';
  }
  if (q.includes('jurusan') || q.includes('prodi') || q.includes('program')) {
    return '🎓 SMKN 1 Probolinggo memiliki 5 jurusan unggulan: <strong>RPL, Bisnis Digital, MPLB, AKL, dan LPB</strong>. Masing-masing memiliki Teaching Factory dan mitra DUDI industri.';
  }
  if (q.includes('produk') || q.includes('beli') || q.includes('belanja')) {
    return '🛍️ SMEXAMALL menyediakan produk karya siswa dari 5 jurusan! Mulai dari makanan, kerajinan, hingga jasa digital. <a href="smexamall.html" style="color:var(--orange-ecom);font-weight:700">Lihat katalog →</a>';
  }
  if (q.includes('kerja') || q.includes('lowongan') || q.includes('magang') || q.includes('pkl')) {
    return '💼 Bursa Kerja Khusus SMKN 1 Probolinggo memiliki lowongan untuk alumni dan program PKL 6 bulan. <a href="bkk.html" style="color:var(--orange-ecom);font-weight:700">Lihat lowongan →</a>';
  }
  if (q.includes('kepala sekolah') || q.includes('kepsek')) {
    return '👩‍💼 Kepala Sekolah SMKN 1 Probolinggo saat ini adalah <strong>Ibu Umi Nurhidayati, M.Pd.</strong>';
  }
  if (q.includes('alamat') || q.includes('lokasi') || q.includes('dimana')) {
    return '📍 SMKN 1 Probolinggo berlokasi di <strong>Jl. Mastrip No. 357, Kota Probolinggo, Jawa Timur</strong>. Telp: (0335) 421537.';
  }
  if (q.includes('akreditasi') || q.includes('blud')) {
    return '🏆 SMKN 1 Probolinggo memiliki <strong>Akreditasi A Unggul</strong>, berstatus <strong>SMK Pusat Keunggulan</strong> dan <strong>BLUD (Badan Layanan Umum Daerah)</strong>.';
  }
  return '👋 Terima kasih atas pertanyaannya! Saya adalah Asisten SMEXA. Silakan tanyakan seputar <strong>PPDB, jurusan, produk TEFA, atau lowongan BKK</strong>. Saya siap membantu!';
}

function escapeHtml(text) {
  const div = document.createElement('div');
  div.textContent = text;
  return div.innerHTML;
}


// ============================================================
// BERANDA: PPDB & Featured Products Rendering
// ============================================================
function renderBerandaPPDB() {
  const grid = document.getElementById('ppdbGrid');
  if (!grid) return;

  const colors = ['#EE4D2D', '#2563EB', '#7C3AED', '#16A34A', '#D97706'];
  grid.innerHTML = window.MAJORS.map((m, i) => {
    const registered = Math.floor(Math.random() * m.quota * 0.35);
    const pct = Math.round((registered / m.quota) * 100);
    return `
      <div class="ppdb-card">
        <div class="ppdb-code" style="color:${colors[i]}">${m.code}</div>
        <div class="ppdb-name">${m.name}</div>
        <div class="ppdb-seats">${m.quota}</div>
        <div class="ppdb-rombel">${m.rombel} Rombel</div>
        <div class="ppdb-quota-bar">
          <div class="ppdb-quota-fill" style="width:${pct}%;background:${colors[i]}"></div>
        </div>
        <div class="ppdb-quota-text"><strong>${registered}</strong> / ${m.quota} terdaftar</div>
      </div>
    `;
  }).join('');
}

function renderFeaturedProducts() {
  const grid = document.getElementById('featuredGrid');
  if (!grid) return;

  const featured = window.PRODUCTS
    .sort((a, b) => b.sold - a.sold)
    .slice(0, 8);

  grid.innerHTML = featured.map(p => `
    <a href="product.html?id=${p.id}" class="ecom-card">
      <div class="card-img-wf" style="background:${p.bgColor}">
        <span style="font-size:2rem">${p.emoji}</span>
        <span class="badge-tag badge-${p.badgeClass}" style="position:absolute;top:8px;left:8px">${p.major}</span>
      </div>
      <div class="card-content">
        <div class="card-product-title">${p.name}</div>
        <div class="card-price-row">
          <span class="card-price">Rp ${p.price.toLocaleString('id-ID')}</span>
        </div>
        <div class="card-seller-info">
          <span class="seller-tag-name">${p.seller}</span>
          <span class="sales-count">${p.sold} terjual</span>
        </div>
      </div>
    </a>
  `).join('');
}


// ============================================================
// GLOBAL INIT
// ============================================================
document.addEventListener('DOMContentLoaded', function() {
  // Cart count on every page
  updateCartCount();

  // Chatbot
  initChatbot();

  // Beranda-specific
  renderBerandaPPDB();
  renderFeaturedProducts();
});
