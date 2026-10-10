@extends('layouts.app')

@section('title', 'SMEXAMALL - Marketplace Siswa & Teaching Factory BLUD SMKN 1 Probolinggo')
@section('meta_description', 'SMEXAMALL — Marketplace produk karya siswa SMKN 1 Probolinggo. Makanan, minuman, snack, kue artisan buatan siswa Teaching Factory BLUD. Beli produk berkualitas langsung dari pelajar SMK.')

@push('styles')
<style>
  .smx-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 32px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }
  .smx-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 32px;
  }
  /* Hero Banner - Clean White Identity Card */
  .smx-hero-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-left: 5px solid #0284C7;
    border-radius: 14px;
    padding: 28px 32px;
    color: var(--navy-header);
    margin-bottom: 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 10px rgba(0, 37, 101, 0.03);
    flex-wrap: wrap;
    gap: 20px;
  }
  .smx-hero-title {
    font-size: 1.65rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 8px;
    line-height: 1.2;
  }
  .smx-hero-sub {
    font-size: 0.875rem;
    color: #475569;
    max-width: 580px;
    line-height: 1.5;
    margin: 0;
  }
  /* Search & Filter Bar */
  .smx-filter-bar {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.02);
  }
  .smx-search-box {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #F8FAFC;
    border: 1px solid #CBD5E1;
    border-radius: 8px;
    padding: 6px 14px;
    flex: 1;
    max-width: 440px;
  }
  .smx-search-input {
    border: none;
    background: transparent;
    font-size: 0.875rem;
    font-family: inherit;
    width: 100%;
    outline: none;
  }
  .smx-cat-pills {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 24px;
  }
  .smx-cat-pill {
    padding: 7px 16px;
    border-radius: 20px;
    font-size: 0.8125rem;
    font-weight: 700;
    text-decoration: none;
    border: 1px solid #E2E8F0;
    background: #FFFFFF;
    color: #475569;
    transition: all 0.15s ease;
  }
  .smx-cat-pill:hover {
    background: #F1F5F9;
    border-color: #CBD5E1;
  }
  .smx-cat-pill.active {
    background: var(--navy-header);
    color: #FFFFFF;
    border-color: var(--navy-header);
  }
  /* Product Grid */
  .smx-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 20px;
  }
  .smx-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: all 0.2s ease;
    box-shadow: 0 2px 6px rgba(0, 37, 101, 0.02);
  }
  .smx-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 37, 101, 0.08);
    border-color: #CBD5E1;
  }
  .smx-card-img-wrap {
    height: 170px;
    width: 100%;
    position: relative;
    background: #F1F5F9;
    overflow: hidden;
  }
  .smx-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.35s ease;
  }
  .smx-card:hover .smx-card-img {
    transform: scale(1.05);
  }
  .smx-card-major-badge {
    display: none !important;
  }
  .smx-card-body {
    padding: 16px;
    display: flex;
    flex-direction: column;
    flex: 1;
  }
  .smx-card-cat {
    font-size: 0.6875rem;
    font-weight: 800;
    color: #0284C7;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    margin-bottom: 4px;
  }
  .smx-card-title {
    font-size: 0.9375rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 6px;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    height: 2.6em;
  }
  .smx-card-desc {
    font-size: 0.75rem;
    color: #64748B;
    line-height: 1.4;
    margin-bottom: 12px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
  }
  .smx-card-price {
    font-size: 1.125rem;
    font-weight: 800;
    color: #16A34A;
    margin-top: auto;
    margin-bottom: 12px;
  }
  .smx-card-actions {
    display: flex;
    gap: 8px;
  }
  .btn-buy-now {
    flex: 1;
    background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
    color: #FFFFFF;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 0.8125rem;
    font-weight: 700;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2);
    transition: all 0.2s ease;
  }
  .btn-buy-now:hover {
    background: linear-gradient(135deg, #1E3A8A 0%, #1D4ED8 100%);
    box-shadow: 0 4px 14px rgba(37, 99, 235, 0.35);
    transform: translateY(-1px);
  }
  .btn-add-cart-icon {
    background: #F1F5F9;
    border: 1px solid #CBD5E1;
    color: var(--navy-header);
    border-radius: 6px;
    padding: 8px 12px;
    cursor: pointer;
    font-weight: 700;
    font-size: 0.8125rem;
    transition: all 0.15s ease;
  }
  .btn-add-cart-icon:hover {
    background: #E2E8F0;
  }
  /* Toast Alert */
  .toast-alert {
    position: fixed;
    bottom: 24px;
    right: 24px;
    background: #1E293B;
    color: #FFFFFF;
    padding: 14px 20px;
    border-radius: 8px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    font-size: 0.875rem;
    font-weight: 600;
    display: none;
    align-items: center;
    gap: 10px;
    z-index: 1100;
  }
  .toast-alert.show { display: flex; }

  @media (max-width: 768px) {
    .smx-container { padding: 0 16px; }
    .smx-hero-card { padding: 22px 20px; }
    .smx-hero-title { font-size: 1.35rem; }
    .smx-grid, .smx-products-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 12px !important; }
    .smx-card-img-wrap { height: 135px; }
    .smx-card-body { padding: 12px 10px; }
    .smx-card-title { font-size: 0.8125rem; }
    .smx-card-price { font-size: 0.9375rem; }
  }
  @media (max-width: 480px) {
    .smx-grid, .smx-products-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 10px !important; }
    .smx-card-img-wrap { height: 125px; }
    .smx-card-body { padding: 10px 8px; }
    .smx-card-title { font-size: 0.8125rem; }
    .btn-buy-now { font-size: 0.75rem; padding: 6px 6px; }
  }
</style>
@endpush

@section('content')
<div class="smx-page">
  <div class="smx-container">

    <!-- Hero Banner -->
    <div class="smx-hero-card">
      <div>
        <h1 class="smx-hero-title">SMEXAMALL Teaching Factory</h1>
        <p class="smx-hero-sub">
          Dukung produk kuliner, makanan ringan, dan minuman racikan siswa SMKN 1 Probolinggo. Segar, higienis, dan terjamin mutunya oleh Guru Pembina BLUD.
        </p>
      </div>
      <div>
        <a href="{{ route('smexamall.cart') }}" class="btn btn-navy-primary" style="display:flex; align-items:center; gap:8px;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          Keranjang Belanja (<span id="cartCountHeader">{{ $cartCount ?? 0 }}</span>)
        </a>
      </div>
    </div>

    <!-- Search Bar -->
    <div class="smx-filter-bar">
      <form action="{{ route('smexamall.index') }}" method="GET" style="display:contents;">
        <div class="smx-search-box">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <input type="text" name="q" class="smx-search-input" placeholder="Cari roti sisir, keripik pisang, kopi robusta, dimsum, baso aci..." value="{{ $search ?? '' }}">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-navy">Cari</button>
      </form>

      <div style="font-size:0.8125rem; color:#64748B; font-weight:700;">
        Menampilkan <strong>{{ count($products) }}</strong> Produk Teaching Factory Aktif
      </div>
    </div>

    <!-- Category Pills -->
    <div class="smx-cat-pills">
      <a href="{{ route('smexamall.index') }}" class="smx-cat-pill {{ ($category ?? 'all') === 'all' ? 'active' : '' }}">
        Semua Produk
      </a>
      @if(isset($categories))
        @foreach($categories as $c)
          <a href="{{ route('smexamall.index', ['cat' => $c]) }}" class="smx-cat-pill {{ ($category ?? '') === $c ? 'active' : '' }}">
            {{ $c }}
          </a>
        @endforeach
      @endif
    </div>

    <!-- Product Grid (Image 2 Template) -->
    <div class="smx-products-grid">
      @if(count($products) > 0)
        @foreach($products as $index => $p)
          <article class="smx-card-v2 reveal-item" data-delay="{{ ($index % 6) * 60 }}" onclick="window.location.href='{{ route('smexamall.product', $p->id) }}'">
            <div class="smx-card-v2-top">
              <div class="smx-card-v2-photo">
                <span class="smx-card-v2-badge {{ $p->category_badge_class }}">
                  {{ $p->category_badge_label }}
                </span>
                <img src="{{ asset($p->image_url) }}" alt="{{ $p->name }}" class="smx-card-v2-img" loading="lazy" width="500" height="500">
              </div>
              <h4 class="smx-card-v2-title">
                {{ $p->name }}
              </h4>
              <div class="smx-card-v2-price">
                Rp {{ number_format($p->price, 0, ',', '.') }}
              </div>
            </div>
            <div class="smx-card-v2-footer">
              <span class="smx-card-v2-seller">{{ $p->seller_name }}</span>
              <span class="smx-card-v2-sold">{{ $p->sold_count }}</span>
            </div>
          </article>
        @endforeach
      @else
        <div style="grid-column: 1 / -1; background:#FFFFFF; border:1px solid #E2E8F0; border-radius:12px; padding:40px; text-align:center;">
          <h3 style="color:var(--navy-header); margin:0 0 6px;">Tidak ada produk ditemukan</h3>
          <p style="color:#64748B; margin:0 0 16px;">Coba gunakan kata kunci lain atau pilih semua kategori.</p>
          <a href="{{ route('smexamall.index') }}" class="btn btn-sm btn-outline-navy">Reset Pencarian</a>
        </div>
      @endif
    </div>

  </div>
</div>

<!-- Toast Feedback -->
<div class="toast-alert" id="smxToast">
  <span id="toastMsg">Notifikasi</span>
</div>
@endsection

@push('scripts')
<script>
  function addRealToCart(productId, name) {
    fetch('{{ route("smexamall.cart.add") }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ product_id: productId, qty: 1 })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('cartCountHeader').innerText = data.cartCount;
        showToast(`"${name}" berhasil masuk ke keranjang!`);
      }
    })
    .catch(err => {
      showToast('Gagal menambahkan ke keranjang.');
    });
  }

  function showToast(msg) {
    const toast = document.getElementById('smxToast');
    document.getElementById('toastMsg').innerText = msg;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 3200);
  }

  document.addEventListener('DOMContentLoaded', function() {
    const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const smxRevealElements = document.querySelectorAll('.reveal-item');
    if (!prefersReducedMotion && 'IntersectionObserver' in window && smxRevealElements.length > 0) {
      const revealObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const delay = parseInt(entry.target.getAttribute('data-delay') || '0', 10);
            setTimeout(() => {
              entry.target.classList.add('is-revealed');
            }, delay);
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1, rootMargin: '0px 0px -20px 0px' });
      smxRevealElements.forEach(el => revealObserver.observe(el));
    } else {
      smxRevealElements.forEach(el => el.classList.add('is-revealed'));
    }
  });
</script>
@endpush