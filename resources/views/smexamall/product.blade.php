@extends('layouts.app')

@section('title', ($product->name ?? 'Detail Produk') . ' - SMEXAMALL SMKN 1 Probolinggo')

@section('content')
<div class="smx-page" style="background-color: #F8FAFC; min-height: calc(100vh - 68px); padding: 32px 0 64px; font-family: 'Satoshi', sans-serif;">
  <div class="smx-container" style="max-width: 1140px; margin: 0 auto; padding: 0 32px;">

    <!-- Breadcrumb -->
    <div style="margin-bottom: 20px; font-size: 0.875rem; color: #64748B;">
      <a href="{{ route('smexamall.index') }}" style="text-decoration:none; font-weight:700; color:var(--navy-header);">SMEXAMALL</a>
      <span style="margin: 0 6px;">&gt;</span>
      <a href="{{ route('smexamall.index', ['cat' => $product->category]) }}" style="text-decoration:none; font-weight:700; color:var(--navy-header);">{{ $product->major->name ?? $product->category }}</a>
      <span style="margin: 0 6px;">&gt;</span>
      <span style="color: #64748B;">{{ $product->name }}</span>
    </div>

    <!-- Main Product Detail Card (Image 3 Match with Dummy Images) -->
    <div class="detail-main-card">
      <div class="detail-product-layout">

        <!-- Left: Gallery -->
        <div class="gallery-column">
          <div class="gallery-main-frame" id="mainPhotoFrame">
            <img id="mainProductImg" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover; border-radius:6px; display:block;" width="500" height="500" fetchpriority="high">
          </div>
          @php $gallery = $product->gallery_images; @endphp
          <div class="gallery-thumbs-row">
            @foreach($gallery as $idx => $img)
              <div class="thumb-frame {{ $idx === 0 ? 'active' : '' }}" onclick="switchThumb('{{ asset($img) }}', this)">
                <img src="{{ asset($img) }}" alt="Foto produk {{ $idx + 1 }} — {{ $product->name }}" width="100" height="100" loading="lazy">
              </div>
            @endforeach
          </div>
        </div>

        <!-- Right: Summary & Action -->
        <div class="product-summary-column">
          <span class="detail-header-badge">Kategori: {{ $product->category }}</span>
          <h1 class="detail-h1">{{ $product->name }}</h1>
          
          <div class="detail-rating-row">
            <span class="rating-num">Rating 4.9</span>
            <span>48 Penilaian</span>
            <span>•</span>
            <span>{{ $product->sold_count }}</span>
          </div>

          <!-- Big Price Box -->
          <div class="detail-price-box">
            <div class="detail-main-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
            <span class="detail-price-sub">Produk Teaching Factory Resmi SMKN 1 Probolinggo</span>
          </div>

          <!-- Seller Profile Box -->
          <div class="detail-seller-strip">
            <div class="seller-avatar-wf" style="overflow:hidden; padding:0;">
              <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Avatar" style="width:100%; height:100%; object-fit:cover; border-radius:50%;">
            </div>
            <div>
              <div class="seller-profile-name">{{ $product->seller_name }}</div>
              <div class="seller-profile-store">Toko: {{ $product->store_name }}</div>
            </div>
          </div>

          <!-- Educational Value Box (PKWU / BLUD) -->
          <div class="pkwu-box">
            <div class="pkwu-title">Kompetensi Kurikulum yang Dipraktikkan (PKWU / BLUD):</div>
            <div class="pkwu-list">
              <span class="pkwu-pill">Perhitungan HPP &amp; Laba Bersih</span>
              <span class="pkwu-pill">Standar Higienitas HACCP</span>
              <span class="pkwu-pill">Digital Marketing &amp; Packaging</span>
              <span class="pkwu-pill">Pelayanan Pelanggan (CRM)</span>
            </div>
          </div>

          <!-- Action Buttons (Standard Full E-Commerce Flow) -->
          <div class="detail-actions-row">
            <button type="button" class="btn-detail-cart" id="btnAddToCart" onclick="addToCartDetail({{ $product->id }}, '{{ addslashes($product->name) }}')">
              + Tambah ke Keranjang
            </button>
            <button type="button" class="btn-detail-buy" id="btnBuyNow" onclick="buyNowDetail({{ $product->id }})">
              Beli Sekarang (Checkout) &rarr;
            </button>
          </div>
        </div>

      </div>
    </div>

    <!-- Related Products Section -->
    @if(isset($relatedProducts) && $relatedProducts->count() > 0)
      <div style="margin-top: 40px;">
        <h3 style="font-size: 1.125rem; font-weight: 800; color: var(--navy-header); margin-bottom: 16px;">
          Karya Siswa Lainnya di Teaching Factory
        </h3>
        <div class="smx-products-grid">
          @foreach($relatedProducts as $rp)
            <article class="smx-card-v2" onclick="window.location.href='{{ route('smexamall.product', $rp->id) }}'">
              <div class="smx-card-v2-top">
                <div class="smx-card-v2-photo">
                  <span class="smx-card-v2-badge {{ $rp->category_badge_class }}">
                    {{ $rp->category_badge_label }}
                  </span>
                  <img src="{{ asset($rp->image_url) }}" alt="{{ $rp->name }}" class="smx-card-v2-img" loading="lazy">
                </div>
                <h4 class="smx-card-v2-title">
                  {{ $rp->name }}
                </h4>
                <div class="smx-card-v2-price">
                  Rp {{ number_format($rp->price, 0, ',', '.') }}
                </div>
              </div>
              <div class="smx-card-v2-footer">
                <span class="smx-card-v2-seller">{{ $rp->seller_name }}</span>
                <span class="smx-card-v2-sold">{{ $rp->sold_count }}</span>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    @endif

  </div>
</div>

<!-- Toast Feedback -->
<div class="toast-alert" id="detailToast" style="position:fixed; bottom:24px; right:24px; background:#1E293B; color:#FFFFFF; padding:14px 20px; border-radius:8px; box-shadow:0 10px 25px rgba(0,0,0,0.15); font-size:0.875rem; font-weight:600; display:none; align-items:center; gap:10px; z-index:1100;">
  <span id="detailToastMsg">Notifikasi</span>
</div>
@endsection

@push('scripts')
<script>
  function switchThumb(src, el) {
    document.querySelectorAll('.thumb-frame').forEach(f => f.classList.remove('active'));
    el.classList.add('active');
    const mainImg = document.getElementById('mainProductImg');
    if (mainImg) {
      mainImg.src = src;
    }
  }

  function addToCartDetail(productId, name) {
    const btn = document.getElementById('btnAddToCart');
    if (btn) btn.disabled = true;

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
      if (btn) btn.disabled = false;
      if (data.success) {
        showDetailToast(`"${name}" berhasil ditambahkan ke keranjang!`);
        // Update header cart count badge if exists
        const headerBadge = document.querySelector('.cart-count-badge');
        if (headerBadge) {
          headerBadge.innerText = data.cartCount;
        }
      }
    })
    .catch(err => {
      if (btn) btn.disabled = false;
      showDetailToast('Gagal menambahkan ke keranjang.');
    });
  }

  function buyNowDetail(productId) {
    const btn = document.getElementById('btnBuyNow');
    if (btn) {
      btn.disabled = true;
      btn.innerText = 'Memproses Checkout...';
    }

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
      window.location.href = '{{ route("smexamall.checkout") }}';
    })
    .catch(err => {
      // Fallback direct checkout redirect
      window.location.href = '{{ route("smexamall.checkout") }}';
    });
  }

  function showDetailToast(msg) {
    const toast = document.getElementById('detailToast');
    if (!toast) return;
    document.getElementById('detailToastMsg').innerText = msg;
    toast.style.display = 'flex';
    setTimeout(() => {
      toast.style.display = 'none';
    }, 3200);
  }
</script>
@endpush