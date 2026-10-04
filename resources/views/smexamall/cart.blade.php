@extends('layouts.app')

@section('title', 'Keranjang Belanja Siswa - SMEXAMALL SMKN 1 Probolinggo')

@push('styles')
<style>
  .cart-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 36px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }
  .cart-container {
    max-width: 1040px;
    margin: 0 auto;
    padding: 0 32px;
  }
  .cart-layout {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 24px;
    align-items: start;
  }
  .cart-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
  }
  .cart-card-title {
    font-size: 1.125rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 16px;
    border-bottom: 1px solid #F1F5F9;
    padding-bottom: 12px;
  }
  .cart-item-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 0;
    border-bottom: 1px solid #F1F5F9;
    gap: 16px;
  }
  .cart-item-row:last-child {
    border-bottom: none;
  }
  .cart-item-info {
    display: flex;
    align-items: center;
    gap: 14px;
    flex: 1;
  }
  .cart-item-thumb {
    width: 60px;
    height: 60px;
    border-radius: 10px;
    background: #EFF6FF;
    border: 1px solid #E2E8F0;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .cart-item-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .cart-item-name {
    font-weight: 800;
    font-size: 0.9375rem;
    color: var(--navy-header);
    margin-bottom: 2px;
  }
  .cart-item-cat {
    font-size: 0.75rem;
    color: #64748B;
  }
  .cart-item-price {
    font-weight: 800;
    color: #16A34A;
    font-size: 0.9375rem;
    white-space: nowrap;
  }
  .qty-stepper {
    display: inline-flex;
    align-items: center;
    border: 1px solid #CBD5E1;
    border-radius: 6px;
    overflow: hidden;
  }
  .qty-btn {
    background: #F8FAFC;
    border: none;
    padding: 4px 10px;
    font-weight: 800;
    cursor: pointer;
    color: var(--navy-header);
  }
  .qty-btn:hover { background: #E2E8F0; }
  .qty-val {
    padding: 4px 10px;
    font-size: 0.8125rem;
    font-weight: 800;
    min-width: 24px;
    text-align: center;
  }
  .summary-row {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
    color: #475569;
    margin-bottom: 10px;
  }
  .summary-row.total {
    font-size: 1.125rem;
    font-weight: 800;
    color: var(--navy-header);
    border-top: 1.5px dashed #CBD5E1;
    padding-top: 14px;
    margin-top: 14px;
  }
  @media (max-width: 768px) {
    .cart-container { padding: 0 16px; }
    .cart-layout { grid-template-columns: 1fr; }
    .cart-card { padding: 18px 16px; }
  }
</style>
@endpush

@section('content')
<div class="cart-page">
  <div class="cart-container">

    <div style="margin-bottom: 20px;">
      <a href="{{ route('smexamall.index') }}" style="font-size:0.875rem; font-weight:700; color:var(--navy-header); text-decoration:none;">
        Lanjut Belanja di SMEXAMALL
      </a>
      <h1 style="font-size:1.5rem; font-weight:800; color:var(--navy-header); margin:8px 0 0;">
        Keranjang Belanja Anda
      </h1>
    </div>

    @if(session('success'))
      <div style="background:#DCFCE7; border:1px solid #86EFAC; color:#15803D; padding:12px 18px; border-radius:8px; margin-bottom:20px; font-weight:700; font-size:0.875rem;">
        {{ session('success') }}
      </div>
    @endif

    <div class="cart-layout">
      <!-- Left: Item List -->
      <div class="cart-card">
        <h2 class="cart-card-title">Daftar Produk Pesanan</h2>

        @if(count($cart) > 0)
          @foreach($cart as $id => $item)
            <div class="cart-item-row">
              <div class="cart-item-info">
                <div class="cart-item-thumb">
                  <img src="{{ asset($item['image_url'] ?? 'images/products/tefa_rpl.webp') }}" alt="{{ $item['name'] }}" loading="lazy">
                </div>
                <div>
                  <div class="cart-item-name">{{ $item['name'] }}</div>
                  <div class="cart-item-cat">{{ $item['category'] }}</div>
                  <div class="cart-item-price">Rp {{ number_format($item['price'], 0, ',', '.') }} / {{ $item['unit_label'] ?? 'item' }}</div>
                </div>
              </div>

              <!-- Quantity Controls Form -->
              <div style="display:flex; align-items:center; gap:12px;">
                <form action="{{ route('smexamall.cart.update') }}" method="POST" style="display:inline;">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $id }}">
                  <div class="qty-stepper">
                    <button type="submit" name="action" value="decrease" class="qty-btn">-</button>
                    <span class="qty-val">{{ $item['qty'] }}</span>
                    <button type="submit" name="action" value="increase" class="qty-btn">+</button>
                  </div>
                </form>

                <form action="{{ route('smexamall.cart.update') }}" method="POST" style="display:inline;">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $id }}">
                  <button type="submit" name="action" value="remove" style="background:transparent; border:none; color:#EF4444; cursor:pointer; font-size:0.75rem; font-weight:700;">
                    Hapus
                  </button>
                </form>
              </div>
            </div>
          @endforeach
        @else
          <div style="text-align:center; padding:32px; color:#64748B;">
            Keranjang belanja Anda kosong.
          </div>
        @endif
      </div>

      <!-- Right: Summary Card -->
      <div class="cart-card">
        <h2 class="cart-card-title">Ringkasan Transaksi BLUD</h2>

        <div class="summary-row">
          <span>Subtotal Produk</span>
          <span>Rp {{ number_format($subtotal ?? 0, 0, ',', '.') }}</span>
        </div>

        <div class="summary-row">
          <span>Biaya Dukungan Fasilitas Lab BLUD</span>
          <span>Rp {{ number_format($bludFee ?? 2500, 0, ',', '.') }}</span>
        </div>

        <div class="summary-row total">
          <span>Total Pembayaran</span>
          <span style="color:#16A34A;">Rp {{ number_format($grandTotal ?? 0, 0, ',', '.') }}</span>
        </div>

        <div style="margin-top: 24px;">
          @if(count($cart) > 0)
            <a href="{{ route('smexamall.checkout') }}" class="btn btn-orange" style="width:100%; text-align:center; display:block; padding:12px; font-weight:800; font-size:0.9375rem;">
              Lanjut ke Pembayaran Midtrans
            </a>
          @else
            <a href="{{ route('smexamall.index') }}" class="btn btn-outline-navy" style="width:100%; text-align:center; display:block;">
              Cari Produk Terlebih Dahulu
            </a>
          @endif
        </div>
      </div>
    </div>

  </div>
</div>
@endsection