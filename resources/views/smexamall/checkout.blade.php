@extends('layouts.app')

@section('title', 'Checkout Pembayaran - SMEXAMALL SMKN 1 Probolinggo')

@push('styles')
<style>
  .checkout-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 36px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }
  .checkout-container {
    max-width: 1040px;
    margin: 0 auto;
    padding: 0 32px;
  }
  .checkout-layout {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 24px;
    align-items: start;
  }
  .checkout-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    margin-bottom: 20px;
  }
  .checkout-card-title {
    font-size: 1.125rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 16px;
    border-bottom: 1px solid #F1F5F9;
    padding-bottom: 12px;
  }
  .checkout-field-group {
    margin-bottom: 14px;
  }
  .checkout-field-group label {
    display: block;
    font-size: 0.75rem;
    font-weight: 700;
    color: #475569;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    margin-bottom: 6px;
  }
  .checkout-input {
    width: 100%;
    padding: 10px 14px;
    border: 1.5px solid #CBD5E1;
    border-radius: 8px;
    font-size: 0.875rem;
    font-family: inherit;
    box-sizing: border-box;
    outline: none;
    transition: all 0.15s ease;
  }
  .checkout-input:focus {
    border-color: var(--navy-header);
    box-shadow: 0 0 0 3px rgba(0, 37, 101, 0.08);
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
    .checkout-container { padding: 0 16px; }
    .checkout-layout { grid-template-columns: 1fr; }
    .checkout-card { padding: 18px 16px; border-radius: 12px; }
  }
</style>
@endpush

@section('content')
<div class="checkout-page">
  <div class="checkout-container">

    <div style="margin-bottom: 20px;">
      <a href="{{ route('smexamall.cart') }}" style="font-size:0.875rem; font-weight:700; color:var(--navy-header); text-decoration:none;">
        Kembali ke Keranjang
      </a>
      <h1 style="font-size:1.5rem; font-weight:800; color:var(--navy-header); margin:8px 0 0;">
        Penyelesaian Transaksi SMEXAMALL
      </h1>
    </div>

    <form action="{{ route('smexamall.checkout.process') }}" method="POST">
      @csrf
      <div class="checkout-layout">

        <!-- Left: Buyer & Delivery Details -->
        <div>
          <div class="checkout-card">
            <h2 class="checkout-card-title">1. Data Pemesan &amp; Pembeli</h2>

            <div class="checkout-field-group">
              <label>Nama Lengkap Pemesan</label>
              <input type="text" name="buyer_name" class="checkout-input" value="{{ $authUser['name'] ?? '' }}" placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:14px;">
              <div class="checkout-field-group">
                <label>Nomor WhatsApp</label>
                <input type="text" name="buyer_phone" class="checkout-input" value="{{ $authUser['phone'] ?? '' }}" placeholder="08xxxxxxxxxx" required>
              </div>

              <div class="checkout-field-group">
                <label>Email Pemesan</label>
                <input type="email" name="buyer_email" class="checkout-input" value="{{ $authUser['email'] ?? '' }}" placeholder="email@domain.com">
              </div>
            </div>
          </div>

          <div class="checkout-card">
            <h2 class="checkout-card-title">2. Metode Pengambilan &amp; Pengiriman</h2>

            <div class="checkout-field-group">
              <label>Pilihan Pengambilan</label>
              <select name="delivery_method" class="checkout-input">
                <option value="Ambil di Posko TEFA Lab SMKN 1 Probolinggo">Ambil Mandiri di Posko TEFA SMKN 1 Probolinggo (Gratis)</option>
                <option value="Kurir Siswa SMEXA Express (Antar Langsung)">Kurir Siswa SMEXA Express (Antar Langsung di Lingkungan Kampus)</option>
                <option value="Ambil di Kasir Mini Bank Sekolah">Ambil di Kasir Mini Bank BLUD Sekolah</option>
              </select>
            </div>

            <div class="checkout-field-group">
              <label>Alamat / Catatan Pengiriman</label>
              <textarea name="buyer_address" class="checkout-input" rows="2" placeholder="Ruang kelas, laboratorium, atau catatan khusus penjemputan...">Kampus SMKN 1 Probolinggo, Jl. Mastrip No. 357</textarea>
            </div>
          </div>

          <div class="checkout-card">
            <h2 class="checkout-card-title">3. Metode Pembayaran Resmi Midtrans</h2>

            <div class="checkout-field-group">
              <label>Kanal Pembayaran</label>
              <select name="payment_method" class="checkout-input">
                <option value="QRIS Instant Midtrans">QRIS Instant Midtrans (GoPay, OVO, ShopeePay, Dana, BCA)</option>
                <option value="BCA Virtual Account">BCA Virtual Account (Otomatis)</option>
                <option value="Mandiri Virtual Account">Mandiri Virtual Account</option>
                <option value="Tunai Kasir Mini Bank">Tunai di Kasir Mini Bank BLUD Sekolah</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Right: Order Summary -->
        <div>
          <div class="checkout-card">
            <h2 class="checkout-card-title">Rincian Pembelian</h2>

            @foreach($cart as $item)
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px; font-size:0.875rem; gap:12px;">
                <div style="display:flex; align-items:center; gap:10px;">
                  <img src="{{ asset($item['image_url'] ?? 'images/products/tefa_rpl.webp') }}" alt="{{ $item['name'] }}" style="width:40px; height:40px; border-radius:8px; object-fit:cover; border:1px solid #E2E8F0; flex-shrink:0;">
                  <div>
                    <div><strong style="color:var(--navy-header);">{{ $item['qty'] }}x</strong> {{ $item['name'] }}</div>
                    <div style="font-size:0.75rem; color:#64748B;">{{ $item['category'] }}</div>
                  </div>
                </div>
                <div style="font-weight:700; color:#0F172A; white-space:nowrap;">
                  Rp {{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}
                </div>
              </div>
            @endforeach

            <div class="summary-row" style="margin-top:16px; border-top:1px solid #F1F5F9; padding-top:12px;">
              <span>Subtotal Produk</span>
              <span>Rp {{ number_format($subtotal ?? 0, 0, ',', '.') }}</span>
            </div>

            <div class="summary-row">
              <span>Dukungan BLUD Sekolah</span>
              <span>Rp {{ number_format($bludFee ?? 2500, 0, ',', '.') }}</span>
            </div>

            <div class="summary-row total">
              <span>Total Tagihan</span>
              <span style="color:#16A34A;">Rp {{ number_format($grandTotal ?? 0, 0, ',', '.') }}</span>
            </div>

            <div style="margin-top:24px;">
              <button type="submit" class="btn btn-orange" style="width:100%; padding:14px; font-size:1rem; font-weight:800;">
                Bayar &amp; Konfirmasi Pesanan
              </button>
            </div>

            <div style="margin-top:14px; font-size:0.75rem; color:#64748B; text-align:center; line-height:1.4;">
              Transaksi aman &amp; tercatat resmi di Buku Kas BLUD SMKN 1 Probolinggo.
            </div>
          </div>
        </div>

      </div>
    </form>

  </div>
</div>
@endsection