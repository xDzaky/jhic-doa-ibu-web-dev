@extends('layouts.app')

@section('title', 'Seller Centre Siswa - SMEXAMALL SMKN 1 Probolinggo')

@push('styles')
<style>
  .seller-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 32px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }

  .seller-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Store Header Profile */
  .seller-header {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    padding: 24px 28px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    margin-bottom: 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
  }

  .seller-store-info {
    display: flex;
    align-items: center;
    gap: 18px;
  }

  .seller-avatar-badge {
    width: 60px;
    height: 60px;
    border-radius: 14px;
    background: linear-gradient(135deg, #002565 0%, #0040A8 100%);
    color: #FFFFFF;
    font-size: 1.375rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 37, 101, 0.15);
    flex-shrink: 0;
  }

  .seller-store-title {
    font-size: 1.375rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 6px;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
  }

  .seller-badge-verified {
    background: #DCFCE7;
    color: #15803D;
    font-size: 0.6875rem;
    font-weight: 800;
    padding: 4px 10px;
    border-radius: 20px;
    letter-spacing: 0.03em;
    display: inline-flex;
    align-items: center;
    gap: 4px;
  }

  .seller-store-sub {
    font-size: 0.8125rem;
    color: #64748B;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
  }

  .seller-actions-header {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .btn-add-product {
    background: var(--gold, #F59E0B);
    color: #FFFFFF;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 0.875rem;
    font-weight: 700;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.25);
  }

  .btn-add-product:hover {
    background: #D97706;
    transform: translateY(-1px);
    box-shadow: 0 6px 16px rgba(245, 158, 11, 0.35);
  }

  .btn-view-catalog {
    background: #FFFFFF;
    color: var(--navy-header);
    border: 1px solid #CBD5E1;
    padding: 10px 18px;
    border-radius: 8px;
    font-size: 0.875rem;
    font-weight: 700;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
  }

  .btn-view-catalog:hover {
    background: #F8FAFC;
    border-color: #94A3B8;
  }

  /* Executive Financial & Operations Ledger Ribbon */
  .seller-ledger-ribbon {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(11, 27, 61, 0.03);
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    margin-bottom: 24px;
    overflow: hidden;
  }

  .seller-ledger-item {
    padding: 20px 24px;
    border-right: 1px solid #F1F5F9;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: background 0.15s ease;
  }

  .seller-ledger-item:last-child {
    border-right: none;
  }

  .seller-ledger-item:hover {
    background: #FAFBFD;
  }

  .seller-ledger-label {
    font-family: var(--font-heading);
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 6px;
  }

  .seller-ledger-val {
    font-family: var(--font-heading);
    font-size: 1.6rem;
    font-weight: 800;
    color: var(--navy-header);
    line-height: 1.15;
    margin-bottom: 4px;
    font-variant-numeric: tabular-nums;
    letter-spacing: -0.02em;
  }

  .seller-ledger-sub {
    font-family: var(--font-body);
    font-size: 0.8125rem;
    font-weight: 600;
    color: #475569;
  }

  @media (max-width: 900px) {
    .seller-ledger-ribbon {
      grid-template-columns: repeat(2, 1fr);
    }
    .seller-ledger-item:nth-child(2) {
      border-right: none;
    }
    .seller-ledger-item:nth-child(-n+2) {
      border-bottom: 1px solid #F1F5F9;
    }
  }

  @media (max-width: 540px) {
    .seller-ledger-ribbon {
      grid-template-columns: 1fr;
    }
    .seller-ledger-item {
      border-right: none;
      border-bottom: 1px solid #F1F5F9;
    }
  }

  /* Workspace Nav Tabs */
  .seller-nav-tabs {
    display: flex;
    gap: 4px;
    border-bottom: 2px solid #E2E8F0;
    margin-bottom: 20px;
    overflow-x: auto;
  }

  .seller-tab-btn {
    padding: 12px 20px;
    font-size: 0.875rem;
    font-weight: 700;
    color: #64748B;
    background: transparent;
    border: none;
    border-bottom: 3px solid transparent;
    margin-bottom: -2px;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .seller-tab-btn:hover {
    color: var(--navy-header);
    background: rgba(0, 37, 101, 0.02);
  }

  .seller-tab-btn.active {
    color: var(--navy-header);
    border-bottom-color: var(--gold, #F59E0B);
    background: #FFFFFF;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    box-shadow: 0 -2px 6px rgba(0,0,0,0.02);
  }

  .tab-count-pill {
    background: #F1F5F9;
    color: #475569;
    font-size: 0.6875rem;
    font-weight: 800;
    padding: 2px 7px;
    border-radius: 10px;
  }

  .seller-tab-btn.active .tab-count-pill {
    background: #FEF3C7;
    color: #92400E;
  }

  /* Main Card & Tables */
  .seller-panel-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    overflow: hidden;
  }

  .panel-card-toolbar {
    padding: 18px 24px;
    border-bottom: 1px solid #F1F5F9;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
  }

  .filter-pills-row {
    display: flex;
    gap: 8px;
    align-items: center;
    flex-wrap: wrap;
  }

  .filter-pill {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    border: 1px solid #E2E8F0;
    background: #FFFFFF;
    color: #64748B;
    cursor: pointer;
    transition: all 0.15s ease;
  }

  .filter-pill:hover {
    background: #F8FAFC;
    border-color: #CBD5E1;
  }

  .filter-pill.active {
    background: var(--navy-header);
    color: #FFFFFF;
    border-color: var(--navy-header);
  }

  .search-input-clean {
    padding: 7px 14px;
    border-radius: 8px;
    border: 1px solid #CBD5E1;
    font-size: 0.8125rem;
    font-family: inherit;
    outline: none;
    width: 220px;
  }

  .search-input-clean:focus {
    border-color: var(--navy-header);
    box-shadow: 0 0 0 2px rgba(0, 37, 101, 0.1);
  }

  .seller-data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.875rem;
    text-align: left;
  }

  .seller-data-table th {
    padding: 12px 20px;
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    background: #F8FAFC;
    border-bottom: 1px solid #E2E8F0;
  }

  .seller-data-table td {
    padding: 16px 20px;
    border-bottom: 1px solid #F1F5F9;
    color: #334155;
    vertical-align: middle;
  }

  .seller-data-table tbody tr:hover {
    background-color: #FAFCFF;
  }

  .product-thumb-avatar {
    width: 44px;
    height: 44px;
    border-radius: 8px;
    background: #EFF6FF;
    border: 1px solid #DBEAFE;
    color: var(--navy-header);
    font-size: 0.75rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .badge-status {
    padding: 4px 10px;
    border-radius: 6px;
    font-size: 0.75rem;
    font-weight: 700;
    display: inline-block;
  }

  .badge-status.active, .badge-status.approved { background: #DCFCE7; color: #15803D; }
  .badge-status.review, .badge-status.pending { background: #FEF3C7; color: #B45309; }
  .badge-status.low { background: #FEE2E2; color: #B91C1C; }
  .badge-status.done, .badge-status.completed { background: #E0E7FF; color: #3730A3; }

  .btn-action-sm {
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.75rem;
    font-weight: 700;
    cursor: pointer;
    border: 1px solid #CBD5E1;
    background: #FFFFFF;
    color: var(--navy-header);
    transition: all 0.15s ease;
    text-decoration: none;
    display: inline-block;
  }

  .btn-action-sm:hover {
    background: #F1F5F9;
  }

  .btn-action-primary-sm {
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 0.75rem;
    font-weight: 700;
    cursor: pointer;
    border: none;
    background: #16A34A;
    color: #FFFFFF;
    transition: all 0.15s ease;
  }

  .btn-action-primary-sm:hover {
    background: #15803D;
  }

  /* MODAL POPUP */
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(4px);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    padding: 20px;
  }

  .modal-overlay.open {
    display: flex;
  }

  .modal-card {
    background: #FFFFFF;
    border-radius: 16px;
    width: 100%;
    max-width: 640px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
  }

  .modal-header {
    padding: 20px 24px;
    border-bottom: 1px solid #E2E8F0;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .modal-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0;
  }

  .modal-close-btn {
    background: transparent;
    border: none;
    font-size: 1.25rem;
    color: #94A3B8;
    cursor: pointer;
  }

  .modal-body {
    padding: 24px;
  }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 16px;
  }

  .form-group-clean {
    margin-bottom: 16px;
  }

  .form-group-clean label {
    display: block;
    font-size: 0.75rem;
    font-weight: 700;
    color: #475569;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 6px;
  }

  .input-clean {
    width: 100%;
    padding: 9px 14px;
    border: 1px solid #CBD5E1;
    border-radius: 8px;
    font-size: 0.875rem;
    font-family: inherit;
    box-sizing: border-box;
  }

  .input-clean:focus {
    outline: none;
    border-color: var(--navy-header);
    box-shadow: 0 0 0 2px rgba(0, 37, 101, 0.1);
  }

  .pkwu-notice-box {
    background: #F0FDF4;
    border: 1px solid #BBF7D0;
    border-radius: 8px;
    padding: 12px 16px;
    font-size: 0.8125rem;
    color: #166534;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
  }

  .modal-footer {
    padding: 16px 24px;
    border-top: 1px solid #E2E8F0;
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    background: #F8FAFC;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
  }

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

  .toast-alert.show {
    display: flex;
  }

  @media (max-width: 900px) {
    .seller-metrics-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .seller-header {
      flex-direction: column;
      align-items: flex-start;
    }
    .form-row {
      grid-template-columns: 1fr;
    }
  }
</style>
@endpush

@section('content')
<div class="seller-page">
  <div class="seller-container">

    @if(session('success'))
      <div style="background:#DCFCE7; border:1px solid #86EFAC; color:#15803D; padding:14px 20px; border-radius:10px; margin-bottom:20px; font-weight:700; font-size:0.875rem;">
        {{ session('success') }}
      </div>
    @endif

    <!-- Store Profile & Action Header -->
    <div class="seller-header">
      <div class="seller-store-info">
        <div class="seller-avatar-badge">SD</div>
        <div>
          <h1 class="seller-store-title">
            SMEXA Digital Tech &amp; Web Services
            <span class="seller-badge-verified">Wirausaha Mandiri</span>
          </h1>
          <p class="seller-store-sub">
            <span><strong>Pengelola:</strong> Rani Safitri (XII RPL 1 - Axioo Smart Class)</span>
            <span>•</span>
            <span><strong>Unit TEFA:</strong> RPL &amp; Bisnis Digital</span>
            <span>•</span>
            <span><strong>Guru Pembimbing:</strong> Dra. Sri Wahyuni</span>
          </p>
        </div>
      </div>

      <div class="seller-actions-header">
        <button class="btn-add-product" onclick="openAddModal()">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14m-7-7h14"/></svg>
          + Tambah Produk Baru
        </button>
        <a href="{{ route('smexamall.index') }}" class="btn-view-catalog">
          Lihat Etalase Publik
        </a>
      </div>
    </div>

    <!-- Executive Financial & Operations Ledger (Real SQLite Data) -->
    <div class="seller-ledger-ribbon">
      <div class="seller-ledger-item">
        <span class="seller-ledger-label">Total Omzet Siswa</span>
        <span class="seller-ledger-val">Rp {{ number_format($stats['total_omzet'] ?? 0, 0, ',', '.') }}</span>
        <span class="seller-ledger-sub">Pencatatan BLUD SMEXA</span>
      </div>
      <div class="seller-ledger-item">
        <span class="seller-ledger-label">Saldo Siap Ditarik</span>
        <span class="seller-ledger-val">Rp {{ number_format($stats['available_balance'] ?? 0, 0, ',', '.') }}</span>
        <span class="seller-ledger-sub">Rekening Mini Bank</span>
      </div>
      <div class="seller-ledger-item">
        <span class="seller-ledger-label">Pesanan Masuk</span>
        <span class="seller-ledger-val">{{ $stats['pending_orders'] ?? 0 }} <small style="font-size: 0.875rem; font-weight: 600; color: #64748B;">antrean</small></span>
        <span class="seller-ledger-sub">Fulfillment aktif</span>
      </div>
      <div class="seller-ledger-item">
        <span class="seller-ledger-label">Produk Terverifikasi</span>
        <span class="seller-ledger-val">{{ $stats['active_products'] ?? 0 }} <small style="font-size: 0.875rem; font-weight: 600; color: #64748B;">katalog</small></span>
        <span class="seller-ledger-sub">Asesmen Guru Pembina</span>
      </div>
    </div>

    <!-- Tab Workspace Buttons -->
    <div class="seller-nav-tabs">
      <button class="seller-tab-btn active" id="tabBtnProducts" onclick="switchSellerWorkspace('tabProducts', this)">
        <span>Katalog Produk &amp; Stok</span>
        <span class="tab-count-pill" id="tabCountProduct">{{ isset($products) ? $products->count() : 0 }}</span>
      </button>
      <button class="seller-tab-btn" id="tabBtnOrders" onclick="switchSellerWorkspace('tabOrders', this)">
        <span>Pesanan Masuk (Fulfillment)</span>
        <span class="tab-count-pill" style="background:#FEF3C7; color:#92400E;">{{ isset($orders) ? $orders->count() : 0 }}</span>
      </button>
      <button class="seller-tab-btn" id="tabBtnCompetency" onclick="switchSellerWorkspace('tabCompetency', this)">
        <span>Portofolio &amp; Asesmen PKWU</span>
        <span class="tab-count-pill">Lulus</span>
      </button>
      <button class="seller-tab-btn" id="tabBtnWallet" onclick="switchSellerWorkspace('tabWallet', this)">
        <span>Dompet &amp; Keuangan BLUD</span>
        <span class="tab-count-pill">Rp {{ number_format(($stats['available_balance'] ?? 0)/1000000, 2) }} Jt</span>
      </button>
    </div>

    <!-- TAB 1: KATALOG PRODUK & STOK -->
    <div id="tabProducts" class="seller-panel-card">
      <div class="panel-card-toolbar">
        <div class="filter-pills-row">
          <button class="filter-pill active" onclick="filterProductTable('all', this)">Semua ({{ isset($products) ? $products->count() : 0 }})</button>
          <button class="filter-pill" onclick="filterProductTable('approved', this)">Tayang Aktif</button>
          <button class="filter-pill" onclick="filterProductTable('pending_review', this)">Menunggu Review Guru ({{ $stats['pending_products'] ?? 0 }})</button>
          <button class="filter-pill" onclick="filterProductTable('low', this)">Stok Menipis ({{ $stats['low_stock_products'] ?? 0 }})</button>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
          <input type="text" class="search-input-clean" id="searchProductInput" placeholder="Cari produk Anda..." onkeyup="searchSellerProduct(this.value)">
        </div>
      </div>

      <div style="overflow-x: auto;">
        <table class="seller-data-table" id="sellerProductTable">
          <thead>
            <tr>
              <th>Produk</th>
              <th>Kategori TEFA</th>
              <th>HPP / Harga Jual</th>
              <th>Margin Laba</th>
              <th>Stok Tersedia</th>
              <th>Status</th>
              <th>Aksi Pengelolaan</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($products) && $products->count() > 0)
              @foreach($products as $p)
                @php
                  $isLow = $p->stock < 5;
                  $statusClass = $p->status === 'approved' ? ($isLow ? 'low' : 'approved') : 'pending';
                  $margin = max(0, $p->price - ($p->hpp_cost ?? 0));
                @endphp
                <tr data-status="{{ $p->status }}" data-low="{{ $isLow ? '1' : '0' }}">
                  <td>
                    <div style="display: flex; align-items: center; gap: 12px;">
                      <div class="product-thumb-avatar">
                        {{ strtoupper(substr($p->name, 0, 3)) }}
                      </div>
                      <div>
                        <strong>{{ $p->name }}</strong>
                        <div style="font-size: 0.75rem; color: #64748B;">SKU: SMX-PRD-{{ $p->id }}</div>
                      </div>
                    </div>
                  </td>
                  <td>{{ $p->category }}</td>
                  <td>Rp {{ number_format($p->hpp_cost ?? 0, 0, ',', '.') }} / <strong>Rp {{ number_format($p->price, 0, ',', '.') }}</strong></td>
                  <td><span style="color: #16A34A; font-weight: 700;">+Rp {{ number_format($margin, 0, ',', '.') }}</span></td>
                  <td>
                    <div style="display: flex; align-items: center; gap: 6px;">
                      <button type="button" class="btn-action-sm" onclick="adjustRealStock({{ $p->id }}, -1, this)">-</button>
                      <span class="stock-qty" style="font-weight: 800; min-width: 24px; text-align: center; color: {{ $isLow ? '#DC2626' : '#0F172A' }};">{{ $p->stock }}</span>
                      <button type="button" class="btn-action-sm" onclick="adjustRealStock({{ $p->id }}, 1, this)">+</button>
                      <span style="font-size: 0.75rem; color: #64748B;">{{ $p->unit_label ?? 'unit' }}</span>
                    </div>
                  </td>
                  <td>
                    @if($p->status === 'approved')
                      <span class="badge-status approved">Tayang Aktif</span>
                    @elseif($p->status === 'rejected')
                      <span class="badge-status low">Perlu Revisi</span>
                    @else
                      <span class="badge-status pending">Menunggu Review Guru</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('smexamall.product', $p->id) }}" class="btn-action-sm">Lihat di Katalog</a>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="7" style="text-align:center; padding:24px; color:#64748B;">Belum ada produk terdaftar.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>

    <!-- TAB 2: PESANAN MASUK -->
    <div id="tabOrders" class="seller-panel-card" style="display: none;">
      <div class="panel-card-toolbar">
        <div class="filter-pills-row">
          <button class="filter-pill active" onclick="filterOrderTable('all', this)">Semua Pesanan ({{ isset($orders) ? $orders->count() : 0 }})</button>
        </div>
      </div>

      <div style="overflow-x: auto;">
        <table class="seller-data-table" id="sellerOrderTable">
          <thead>
            <tr>
              <th>No. Pesanan &amp; Tanggal</th>
              <th>Pembeli &amp; Pengiriman</th>
              <th>Detail Produk</th>
              <th>Total &amp; Pembayaran</th>
              <th>Status</th>
              <th>Aksi Fulfillment Siswa</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($orders) && $orders->count() > 0)
              @foreach($orders as $o)
                <tr data-status="{{ $o->status }}">
                  <td>
                    <strong>{{ $o->order_code }}</strong>
                    <div style="font-size: 0.75rem; color: #64748B;">{{ $o->created_at->format('d M Y, H:i') }} WIB</div>
                  </td>
                  <td>
                    <strong>{{ $o->buyer_name }}</strong>
                    <div style="font-size: 0.75rem; color: #64748B;">{{ $o->delivery_method }}</div>
                  </td>
                  <td>
                    @if($o->items->count() > 0)
                      {{ $o->items->first()->qty }}x {{ $o->items->first()->product_name }}
                      @if($o->items->count() > 1)
                        <div style="font-size: 0.75rem; color: #64748B;">+ {{ $o->items->count() - 1 }} item lainnya</div>
                      @endif
                    @else
                      Produk Siswa TEFA
                    @endif
                  </td>
                  <td>
                    <strong>Rp {{ number_format($o->total_amount, 0, ',', '.') }}</strong>
                    <div style="font-size: 0.75rem; color: #16A34A; font-weight: 700;">{{ $o->payment_method }} (Lunas)</div>
                  </td>
                  <td>
                    @if($o->status === 'completed')
                      <span class="badge-status active">Selesai</span>
                    @elseif($o->status === 'ready_for_pickup')
                      <span class="badge-status done">Siap Diambil</span>
                    @else
                      <span class="badge-status review">Perlu Diproses</span>
                    @endif
                  </td>
                  <td>
                    @if($o->status !== 'completed' && $o->status !== 'ready_for_pickup')
                      <button class="btn-action-primary-sm" onclick="fulfillRealOrder({{ $o->id }}, 'ready_for_pickup', this)">
                        Tandai Siap Diambil di Lab
                      </button>
                    @else
                      <span style="font-size: 0.75rem; color: #16A34A; font-weight: 700;">Telah Diproses</span>
                    @endif
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="6" style="text-align:center; padding:24px; color:#64748B;">Belum ada pesanan masuk.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>

    <!-- TAB 3: PORTOFOLIO & ASESMEN PKWU -->
    <div id="tabCompetency" class="seller-panel-card" style="display: none; padding: 24px;">
      <div style="background: #F0FDF4; border: 1px solid #86EFAC; border-radius: 12px; padding: 20px; margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
          <h3 style="margin: 0; font-size: 1.125rem; font-weight: 800; color: #166534;">
            Kelayakan Portofolio Kewirausahaan (PKWU / BLUD)
          </h3>
          <span style="background: #16A34A; color: #FFFFFF; font-size: 0.75rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
            TERVERIFIKASI: LULUS
          </span>
        </div>
        <p style="margin: 0; font-size: 0.875rem; color: #15803D; line-height: 1.5;">
          <strong>Rekomendasi Magang DUDI Resmi:</strong> Rani Safitri telah membuktikan kemandirian wirausaha vokasi dengan omzet &gt; Rp 2.000.000 dan kepuasan pelanggan 100%. Direkomendasikan prioritas untuk program Praktik Kerja Lapangan (PKL) 6 Bulan di <strong>Mitra Industri Software House &amp; Axioo Indonesia</strong>.
        </p>
      </div>

      <h4 style="font-size: 0.875rem; font-weight: 800; color: var(--navy-header); margin: 0 0 14px; text-transform: uppercase; letter-spacing: 0.04em;">
        3 Rubrik Capaian Kompetensi Kurikulum Merdeka
      </h4>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
        <div style="border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; background: #FFFFFF;">
          <div style="font-weight: 800; font-size: 0.875rem; color: #16A34A; margin-bottom: 6px;">
            1. Perhitungan HPP &amp; Break-Even Point
          </div>
          <div style="font-size: 0.75rem; color: #64748B; line-height: 1.5;">
            Nilai: <strong>95 / 100 (Sangat Baik)</strong>. Perhitungan biaya bahan baku dan penetapan margin laba bersih dinilai akurat.
          </div>
        </div>

        <div style="border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; background: #FFFFFF;">
          <div style="font-weight: 800; font-size: 0.875rem; color: #16A34A; margin-bottom: 6px;">
            2. Standard Operasional Prosedur TEFA
          </div>
          <div style="font-size: 0.75rem; color: #64748B; line-height: 1.5;">
            Nilai: <strong>92 / 100 (Sangat Baik)</strong>. Standar pengerjaan proyek software rapi dan terdokumentasi dengan baik.
          </div>
        </div>

        <div style="border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; background: #FFFFFF;">
          <div style="font-weight: 800; font-size: 0.875rem; color: #16A34A; margin-bottom: 6px;">
            3. CRM &amp; Pelayanan Transaksi Nyata
          </div>
          <div style="font-size: 0.75rem; color: #64748B; line-height: 1.5;">
            Nilai: <strong>98 / 100 (Unggul)</strong>. Berhasil melayani pesanan secara profesional dengan rekonsiliasi kas Midtrans lunas.
          </div>
        </div>
      </div>
    </div>

    <!-- TAB 4: DOMPET & KEUANGAN BLUD -->
    <div id="tabWallet" class="seller-panel-card" style="display: none; padding: 24px;">
      <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #E2E8F0; padding-bottom: 20px; margin-bottom: 20px; flex-wrap: wrap; gap: 16px;">
        <div>
          <div style="font-size: 0.8125rem; font-weight: 700; color: #64748B; text-transform: uppercase;">Saldo Penjualan Siswa Siap Tarik</div>
          <div style="font-size: 2rem; font-weight: 800; color: var(--navy-header);">Rp {{ number_format($stats['available_balance'] ?? 0, 0, ',', '.') }}</div>
          <div style="font-size: 0.75rem; color: #16A34A; font-weight: 600;">100% Hak Siswa • Rekening Terverifikasi Mini Bank BLUD SMKN 1 Probolinggo</div>
        </div>
        <button class="btn-add-product" style="background:#16A34A;" onclick="alert('Permintaan penarikan Rp {{ number_format($stats['available_balance'] ?? 0, 0, ',', '.') }} diajukan ke Bendahara Mini Bank BLUD Sekolah!');">
          Tarik Tunai di Mini Bank Sekolah
        </button>
      </div>

      <h4 style="font-size: 0.875rem; font-weight: 800; color: var(--navy-header); margin: 0 0 14px; text-transform: uppercase; letter-spacing: 0.04em;">
        Riwayat Mutasi Saldo Terakhir
      </h4>
      <table class="seller-data-table">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Keterangan Transaksi</th>
            <th>Tipe</th>
            <th>Nominal</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hari ini, 14:10</td>
            <td>Penjualan SMEXAMALL #SMX-8821</td>
            <td><span style="color:#16A34A; font-weight:700;">+ Kredit</span></td>
            <td style="font-weight:700; color:#16A34A;">+Rp 150.000</td>
            <td><span class="badge-status approved">Sukses</span></td>
          </tr>
          <tr>
            <td>Hari ini, 11:30</td>
            <td>Penjualan SMEXAMALL #SMX-8822</td>
            <td><span style="color:#16A34A; font-weight:700;">+ Kredit</span></td>
            <td style="font-weight:700; color:#16A34A;">+Rp 350.000</td>
            <td><span class="badge-status approved">Sukses</span></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>

<!-- MODAL POPUP: TAMBAH PRODUK BARU (Real SQLite DB Form) -->
<div class="modal-overlay" id="addProductModal" onclick="handleBackdropClick(event)">
  <div class="modal-card">
    <div class="modal-header">
      <h3 class="modal-title">+ Tambah Produk Teaching Factory Baru</h3>
      <button class="modal-close-btn" onclick="closeAddModal()"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>

    <form action="{{ route('seller.product.store') }}" method="POST">
      @csrf
      <div class="modal-body">
        <div class="pkwu-notice-box">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          <div>
            <strong>Standar Kurikulum Merdeka PKWU:</strong> Produk yang diajukan akan disimpan langsung ke basis data dengan status <em>Pending Review Guru</em> sebelum otomatis tayang di etalase SMEXAMALL.
          </div>
        </div>

        <div class="form-group-clean">
          <label>Nama Produk / Jasa Siswa</label>
          <input type="text" name="name" class="input-clean" id="mProductName" placeholder="Contoh: Kaos Komunitas Angkatan RPL 2026" required>
        </div>

        <div class="form-row">
          <div class="form-group-clean">
            <label>Kategori Teaching Factory</label>
            <select name="category" class="input-clean" id="mProductCat">
              <option value="Jasa IT & Web">Jasa IT &amp; Web (RPL / TKJ)</option>
              <option value="Software & Aplikasi">Software &amp; Aplikasi</option>
              <option value="Kuliner & Pastry">Kuliner &amp; Pastry (Boga / BD)</option>
              <option value="Stationery & Souvenir">Stationery &amp; Souvenir (DKV)</option>
              <option value="Otomotif & Servis">Servis Motor (TBSM AHASS)</option>
            </select>
          </div>
          <div class="form-group-clean">
            <label>Jumlah Stok Awal</label>
            <input type="number" name="stock" class="input-clean" id="mProductStock" placeholder="20" required min="1">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group-clean">
            <label>Harga Pokok Produksi (HPP - Rp)</label>
            <input type="number" name="hpp_cost" class="input-clean" id="mProductHpp" placeholder="40000" required oninput="calcProfitMargin()">
          </div>
          <div class="form-group-clean">
            <label>Harga Jual Konsumen (Rp)</label>
            <input type="number" name="price" class="input-clean" id="mProductPrice" placeholder="65000" required oninput="calcProfitMargin()">
          </div>
        </div>

        <div id="marginPreviewBox" style="background:#F8FAFC; border:1px dashed #CBD5E1; border-radius:8px; padding:10px 14px; margin-bottom:16px; font-size:0.8125rem; color:#475569;">
          Estimasi Laba Siswa per Unit: <strong id="marginProfitVal" style="color:#16A34A;">Rp 0</strong>
        </div>

        <div class="form-group-clean">
          <label>Deskripsi Singkat &amp; Keunggulan Produk</label>
          <textarea name="description" class="input-clean" id="mProductDesc" rows="3" placeholder="Tuliskan spesifikasi karya dan bahan yang digunakan..." required></textarea>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn-action-sm" onclick="closeAddModal()">Batal</button>
        <button type="submit" class="btn-add-product" style="box-shadow:none;">
          Simpan &amp; Ajukan ke Guru Pembimbing
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Toast Feedback -->
<div class="toast-alert" id="sellerToast">
  <span id="toastMsg">Notifikasi</span>
</div>
@endsection

@push('scripts')
<script>
  function switchSellerWorkspace(tabId, btn) {
    document.getElementById('tabProducts').style.display = 'none';
    document.getElementById('tabOrders').style.display = 'none';
    document.getElementById('tabCompetency').style.display = 'none';
    document.getElementById('tabWallet').style.display = 'none';

    document.querySelectorAll('.seller-tab-btn').forEach(b => b.classList.remove('active'));
    document.getElementById(tabId).style.display = 'block';
    btn.classList.add('active');
  }

  function filterProductTable(status, btn) {
    document.querySelectorAll('#tabProducts .filter-pill').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');

    const rows = document.querySelectorAll('#sellerProductTable tbody tr');
    rows.forEach(r => {
      const s = r.getAttribute('data-status');
      const isLow = r.getAttribute('data-low');
      if (status === 'all') {
        r.style.display = '';
      } else if (status === 'low') {
        r.style.display = isLow === '1' ? '' : 'none';
      } else {
        r.style.display = s === status ? '' : 'none';
      }
    });
  }

  function searchSellerProduct(query) {
    const q = query.toLowerCase();
    const rows = document.querySelectorAll('#sellerProductTable tbody tr');
    rows.forEach(r => {
      const text = r.innerText.toLowerCase();
      r.style.display = text.includes(q) ? '' : 'none';
    });
  }

  function adjustRealStock(productId, delta, btn) {
    const qtySpan = btn.parentElement.querySelector('.stock-qty');
    fetch(`/seller/stock/${productId}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ delta: delta })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        qtySpan.innerText = data.new_stock;
        showToast(data.message);
      }
    })
    .catch(err => {
      showToast('Gagal mengubah stok di database.');
    });
  }

  function fulfillRealOrder(orderId, status, btn) {
    fetch(`/seller/order/${orderId}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ status: status })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        btn.innerText = 'Siap Diambil di Lab';
        btn.style.background = '#0284C7';
        btn.disabled = true;
        const row = btn.closest('tr');
        row.querySelector('.badge-status').className = 'badge-status active';
        row.querySelector('.badge-status').innerText = 'Siap Diambil';
        showToast(data.message);
      }
    })
    .catch(err => {
      showToast('Gagal memperbarui status pesanan.');
    });
  }

  function openAddModal() {
    document.getElementById('addProductModal').classList.add('open');
  }

  function closeAddModal() {
    document.getElementById('addProductModal').classList.remove('open');
  }

  function handleBackdropClick(e) {
    if (e.target.id === 'addProductModal') {
      closeAddModal();
    }
  }

  function calcProfitMargin() {
    const hpp = parseFloat(document.getElementById('mProductHpp').value) || 0;
    const price = parseFloat(document.getElementById('mProductPrice').value) || 0;
    const profit = Math.max(0, price - hpp);
    document.getElementById('marginProfitVal').innerText = 'Rp ' + profit.toLocaleString('id-ID');
  }

  function showToast(msg) {
    const toast = document.getElementById('sellerToast');
    document.getElementById('toastMsg').innerText = msg;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 3500);
  }
</script>
@endpush