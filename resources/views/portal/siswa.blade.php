@extends('layouts.app')

@section('title', 'Portal Layanan Siswa & Calon Siswa - SMKN 1 Probolinggo')

@push('styles')
<style>
  .portal-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 36px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }

  .portal-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Portal Header */
  .portal-header {
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
    gap: 18px;
  }

  .portal-user-meta {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .portal-avatar-circle {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--navy-header), #0A3A8A);
    color: #FFFFFF;
    font-size: 1.125rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 2px 6px rgba(0, 37, 101, 0.15);
  }

  .portal-header-title {
    font-size: 1.375rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 4px;
    line-height: 1.2;
  }

  .portal-header-sub {
    font-size: 0.8125rem;
    color: #64748B;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .portal-header-actions {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  /* Grid Layout */
  .portal-grid {
    display: grid;
    grid-template-columns: 1.25fr 0.75fr;
    gap: 24px;
    align-items: start;
  }

  /* Card Base */
  .credential-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    overflow: hidden;
  }

  .card-topbar {
    padding: 16px 24px;
    background: #FFFFFF;
    border-bottom: 1px solid #F1F5F9;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .card-topbar-title {
    font-size: 1rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0;
  }

  .badge-verified-clean {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 9999px;
    background: #DCFCE7;
    color: #15803D;
  }

  .badge-pending-clean {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 9999px;
    background: #FEF3C7;
    color: #B45309;
  }

  .credential-body {
    padding: 24px;
  }

  .credential-fields-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px 24px;
    margin-bottom: 22px;
  }

  .field-label {
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    margin-bottom: 4px;
  }

  .field-value {
    font-size: 0.9375rem;
    font-weight: 700;
    color: #0F172A;
  }

  .field-value-primary {
    color: var(--navy-header);
    font-size: 1.0625rem;
  }

  .instruction-box {
    background: #F8FAFC;
    border: 1px solid #E2E8F0;
    border-radius: 10px;
    padding: 14px 16px;
    margin-bottom: 22px;
    display: flex;
    gap: 12px;
    align-items: flex-start;
  }

  .instruction-icon {
    color: #0284C7;
    flex-shrink: 0;
    margin-top: 1px;
  }

  .instruction-text {
    font-size: 0.8125rem;
    color: #334155;
    line-height: 1.5;
  }

  .btn-print-card {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 11px;
    font-size: 0.875rem;
    font-weight: 700;
    background: var(--navy-header);
    color: #FFFFFF;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.15s ease;
  }
  .btn-print-card:hover {
    background: #0A3A8A;
  }

  /* Right Column Orders */
  .order-item-card {
    border: 1px solid #E2E8F0;
    border-radius: 10px;
    padding: 14px 16px;
    background: #F8FAFC;
    margin-bottom: 12px;
    transition: border-color 0.15s ease;
  }
  .order-item-card:hover {
    border-color: #CBD5E1;
  }

  .order-item-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.75rem;
    color: #64748B;
    margin-bottom: 6px;
  }

  .order-title {
    font-size: 0.875rem;
    font-weight: 700;
    color: var(--navy-header);
    margin-bottom: 4px;
  }

  .order-price {
    font-size: 0.8125rem;
    font-weight: 700;
    color: #0284C7;
  }

  @media (max-width: 900px) {
    .portal-grid {
      grid-template-columns: 1fr;
    }
    .portal-container {
      padding: 0 16px;
    }
    .portal-header {
      padding: 18px 16px;
    }
    .credential-fields-grid {
      grid-template-columns: 1fr;
      gap: 14px;
    }
  }
</style>
@endpush

@section('content')
<div class="portal-page">
  <div class="portal-container">

    @if(session('success'))
      <div style="background:#DCFCE7; border:1px solid #86EFAC; color:#15803D; padding:14px 20px; border-radius:10px; margin-bottom:20px; font-weight:700; font-size:0.875rem;">
        {{ session('success') }}
      </div>
    @endif

    <!-- PORTAL HEADER (Centered & Balanced) -->
    <div class="portal-header">
      <div class="portal-user-meta">
        <div class="portal-avatar-circle">
          {{ strtoupper(substr($applicant->name ?? 'M', 0, 1)) }}
        </div>
        <div>
          <h1 class="portal-header-title">Portal Pendaftaran &amp; Layanan Siswa</h1>
          <div class="portal-header-sub">
            <span style="width: 8px; height: 8px; border-radius: 50%; background: {{ ($applicant->status ?? '') === 'Terverifikasi' ? '#16A34A' : '#D97706' }}; display: inline-block;"></span>
            <span>Selamat datang, <strong>{{ $applicant->name ?? 'Muhammad Rizky Pratama' }}</strong> • NISN: {{ $applicant->nisn ?? '0089234121' }}</span>
          </div>
        </div>
      </div>

      <div class="portal-header-actions">
        <a href="{{ route('ppdb') }}" class="btn btn-sm btn-outline-navy">Info PPDB 2026</a>
        <a href="{{ route('smexamall.index') }}" class="btn btn-sm btn-orange">Belanja di SMEXAMALL</a>
      </div>
    </div>

    <!-- DUAL COLUMN WORKSPACE -->
    <div class="portal-grid">

      <!-- LEFT COLUMN: KARTU BUKTI PENDAFTARAN PPDB -->
      <div class="credential-card">
        <div class="card-topbar">
          <h2 class="card-topbar-title">Kartu Bukti Pendaftaran PPDB 2026</h2>
          @if(($applicant->status ?? 'Terverifikasi') === 'Terverifikasi')
            <span class="badge-verified-clean">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
              Terverifikasi Panitia
            </span>
          @else
            <span class="badge-pending-clean">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><circle cx="12" cy="12" r="10"/></svg>
              Menunggu Verifikasi Posko
            </span>
          @endif
        </div>

        <div class="credential-body">
          <div class="credential-fields-grid">
            <div>
              <div class="field-label">Nomor Registrasi</div>
              <div class="field-value field-value-primary" style="font-family: monospace;">{{ $applicant->registration_no ?? 'REG-2026-001' }}</div>
            </div>

            <div>
              <div class="field-label">Jalur Seleksi Masuk</div>
              <div class="field-value">{{ $applicant->selection_path ?? 'Prestasi Nilai Rapor (Umum)' }}</div>
            </div>

            <div>
              <div class="field-label">Pilihan Konsentrasi Keahlian</div>
              <div class="field-value" style="color: #0369A1;">{{ $applicant->major_choice ?? 'Rekayasa Perangkat Lunak (RPL)' }}</div>
            </div>

            <div>
              <div class="field-label">Nilai Rapor Rata-rata (Sem 1-5)</div>
              <div class="field-value" style="color: #16A34A; font-size: 1.0625rem;">{{ $applicant->avg_score ?? 89.4 }} / 100</div>
            </div>

            <div>
              <div class="field-label">Asal Sekolah</div>
              <div class="field-value">{{ $applicant->school_origin ?? 'SMP Negeri 1 Probolinggo' }}</div>
            </div>

            <div>
              <div class="field-label">Jadwal Daftar Ulang Fisik</div>
              <div class="field-value" style="color: #C2410C;">01 - 02 Juli 2026</div>
            </div>
          </div>

          <div class="instruction-box">
            <svg class="instruction-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            <div class="instruction-text">
              <strong>Petunjuk Panitia:</strong> {{ $applicant->notes ?? 'Harap mengunduh kartu ini dan membawanya bersama berkas fotokopi rapor yang telah dilegalisir serta surat keterangan sehat saat verifikasi fisik di Posko Kampus SMKN 1 Probolinggo.' }}
            </div>
          </div>

          <button type="button" onclick="window.print()" class="btn-print-card">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            Cetak / Unduh Kartu Tanda Peserta Resmi (PDF)
          </button>
        </div>
      </div>

      <!-- RIGHT COLUMN: PESANAN SMEXAMALL & LAYANAN (Real SQLite Orders) -->
      <div class="credential-card">
        <div class="card-topbar">
          <h2 class="card-topbar-title">Pesanan Produk SMEXAMALL</h2>
          <span style="font-size: 0.75rem; font-weight: 700; color: #64748B;">{{ isset($orders) ? $orders->count() : 0 }} Transaksi</span>
        </div>

        <div class="credential-body">
          @if(isset($orders) && $orders->count() > 0)
            @foreach($orders as $o)
              <div class="order-item-card">
                <div class="order-item-header">
                  <span>{{ $o->order_code }} • {{ $o->created_at->format('d M Y, H:i') }}</span>
                  @if($o->status === 'completed')
                    <span style="font-weight: 800; color: #16A34A; background: #DCFCE7; padding: 2px 7px; border-radius: 4px;">SELESAI</span>
                  @elseif($o->status === 'ready_for_pickup')
                    <span style="font-weight: 800; color: #0284C7; background: #E0F2FE; padding: 2px 7px; border-radius: 4px;">SIAP DIAMBIL</span>
                  @else
                    <span style="font-weight: 800; color: #B45309; background: #FEF3C7; padding: 2px 7px; border-radius: 4px;">DIPROSES</span>
                  @endif
                </div>
                <div class="order-title">
                  @if($o->items->count() > 0)
                    {{ $o->items->first()->product_name }}
                    @if($o->items->count() > 1)
                      <span style="font-size:0.75rem; color:#64748B; font-weight:normal;">+ {{ $o->items->count() - 1 }} item lainnya</span>
                    @endif
                  @else
                    Produk Siswa SMEXAMALL
                  @endif
                </div>
                <div class="order-price">Rp {{ number_format($o->total_amount, 0, ',', '.') }} ({{ $o->payment_method }})</div>
              </div>
            @endforeach
          @else
            <div style="text-align:center; padding: 24px 0; color:#64748B; font-size:0.875rem;">
              Belum ada riwayat pesanan.
            </div>
          @endif

          <div style="margin-top: 20px;">
            <a href="{{ route('smexamall.index') }}" class="btn btn-sm btn-outline-navy" style="width: 100%; text-align: center; display: block; padding: 9px; font-weight: 700;">
              Jelajahi Produk Teaching Factory Lainnya
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
@endsection
