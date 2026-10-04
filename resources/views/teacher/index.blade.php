@extends('layouts.app')

@section('title', 'Panel Guru Pembina TEFA & Asesmen PKWU - SMKN 1 Probolinggo')
@section('meta_description', 'Panel Guru Pembina TEFA SMEXAMALL — Approval produk siswa, quality control, asesmen PKWU, dan monitoring Teaching Factory BLUD SMKN 1 Probolinggo.')

@push('styles')
<style>
  .teacher-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 32px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }

  .teacher-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Header */
  .teacher-header {
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

  .teacher-header-title {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--navy-header);
    margin: 0 0 4px;
    line-height: 1.2;
  }

  .teacher-header-sub {
    font-size: 0.8125rem;
    color: #64748B;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .badge-role-teacher {
    background: #E0F2FE;
    color: #0369A1;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
  }

  /* Academic & Quality Control Ledger Ribbon */
  .teacher-ledger-ribbon {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(11, 27, 61, 0.03);
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    margin-bottom: 24px;
    overflow: hidden;
  }

  .teacher-ledger-item {
    padding: 20px 26px;
    border-right: 1px solid #F1F5F9;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: background 0.15s ease;
  }

  .teacher-ledger-item:last-child {
    border-right: none;
  }

  .teacher-ledger-item:hover {
    background: #FAFBFD;
  }

  .teacher-ledger-label {
    font-family: var(--font-heading);
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 6px;
  }

  .teacher-ledger-val {
    font-family: var(--font-heading);
    font-size: 1.6rem;
    font-weight: 800;
    color: var(--navy-header);
    line-height: 1.15;
    margin-bottom: 4px;
    font-variant-numeric: tabular-nums;
    letter-spacing: -0.02em;
  }

  .teacher-ledger-sub {
    font-family: var(--font-body);
    font-size: 0.8125rem;
    font-weight: 600;
    color: #475569;
  }

  @media (max-width: 768px) {
    .teacher-ledger-ribbon {
      grid-template-columns: 1fr;
    }
    .teacher-ledger-item {
      border-right: none;
      border-bottom: 1px solid #F1F5F9;
    }
  }

  /* Navigation Tabs */
  .teacher-nav-tabs {
    display: flex;
    gap: 4px;
    border-bottom: 2px solid #E2E8F0;
    margin-bottom: 24px;
  }

  .tab-btn-teacher {
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
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
  }

  .tab-btn-teacher:hover {
    color: var(--navy-header);
    background: rgba(0, 37, 101, 0.03);
  }

  .tab-btn-teacher.active {
    color: var(--navy-header);
    border-bottom-color: var(--gold);
    background: #FFFFFF;
    box-shadow: 0 -2px 6px rgba(0,0,0,0.02);
  }

  .teacher-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    overflow: hidden;
  }

  .teacher-card-toolbar {
    padding: 18px 24px;
    border-bottom: 1px solid #F1F5F9;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .teacher-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.875rem;
    text-align: left;
  }

  .teacher-table th {
    padding: 12px 18px;
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    background: #F8FAFC;
    border-bottom: 1px solid #E2E8F0;
  }

  .teacher-table td {
    padding: 14px 18px;
    border-bottom: 1px solid #F1F5F9;
    color: #334155;
    vertical-align: middle;
  }

  .teacher-table tbody tr:hover {
    background-color: #FAFCFF;
  }

  .badge-verified-clean {
    background: #DCFCE7;
    color: #15803D;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 4px;
    display: inline-block;
  }

  .badge-pending-clean {
    background: #FEF3C7;
    color: #B45309;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 4px;
    display: inline-block;
  }

  .btn-approve {
    background: #16A34A;
    color: #FFFFFF;
    border: none;
    border-radius: 6px;
    padding: 6px 12px;
    font-size: 0.75rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.15s ease;
  }
  .btn-approve:hover { background: #15803D; }

  .btn-reject {
    background: #FEE2E2;
    color: #B91C1C;
    border: 1px solid #FCA5A5;
    border-radius: 6px;
    padding: 5px 10px;
    font-size: 0.75rem;
    font-weight: 700;
    cursor: pointer;
    margin-left: 6px;
    transition: all 0.15s ease;
  }
  .btn-reject:hover { background: #EF4444; color: #FFFFFF; }

  @media (max-width: 768px) {
    .teacher-stats-grid { grid-template-columns: 1fr; }
    .teacher-nav-tabs { flex-wrap: wrap; }
  }
</style>
@endpush

@section('content')
<div class="teacher-page">
  <div class="teacher-container">

    @if(session('success'))
      <div style="background:#DCFCE7; border:1px solid #86EFAC; color:#15803D; padding:14px 20px; border-radius:10px; margin-bottom:20px; font-weight:700; font-size:0.875rem;">
        {{ session('success') }}
      </div>
    @endif

    <!-- Header Panel Guru -->
    <div class="teacher-header">
      <div>
        <h1 class="teacher-header-title">Panel Pembina TEFA &amp; Kurasi PKWU</h1>
        <div class="teacher-header-sub">
          <span class="badge-role-teacher">Pengawas Teaching Factory &amp; BLUD</span>
          <span>Dra. Sri Wahyuni, M.Pd • Koordinator Kewirausahaan Vokasi</span>
        </div>
      </div>

      <button type="button" class="btn btn-sm btn-outline-navy" onclick="window.print()">
        Export Laporan Asesmen (PDF)
      </button>
    </div>

    <!-- Academic & Quality Control Ledger (Real Database SQLite) -->
    <div class="teacher-ledger-ribbon">
      <div class="teacher-ledger-item">
        <span class="teacher-ledger-label">Total Omzet BLUD</span>
        <span class="teacher-ledger-val">Rp {{ number_format($stats['blud_revenue'] ?? 0, 0, ',', '.') }}</span>
        <span class="teacher-ledger-sub">Akumulasi transaksi riil siswa</span>
      </div>
      <div class="teacher-ledger-item">
        <span class="teacher-ledger-label">Wirausaha Terbina</span>
        <span class="teacher-ledger-val">{{ $stats['active_students'] ?? 38 }} <small style="font-size: 0.875rem; font-weight: 600; color: #64748B;">siswa</small></span>
        <span class="teacher-ledger-sub">Lulus asesmen HPP &amp; HACCP</span>
      </div>
      <div class="teacher-ledger-item">
        <span class="teacher-ledger-label">Antrean QC Kurikulum</span>
        <span class="teacher-ledger-val" style="color: {{ ($stats['pending_count'] ?? 0) > 0 ? '#D97706' : '#16A34A' }};">
          {{ $stats['pending_count'] ?? 0 }} <small style="font-size: 0.875rem; font-weight: 600; color: #64748B;">produk</small>
        </span>
        <span class="teacher-ledger-sub">Review kurasi sebelum tayang publik</span>
      </div>
    </div>

    <!-- Tab Navigasi Fokus -->
    <div class="teacher-nav-tabs">
      <button class="tab-btn-teacher active" onclick="switchTeacherTab('tabApproval', this)">
        Antrean Kurasi Produk ({{ isset($pendingProducts) ? $pendingProducts->count() : 0 }})
      </button>
      <button class="tab-btn-teacher" onclick="switchTeacherTab('tabCompetency', this)">
        Rubrik Asesmen PKWU &amp; DUDI
      </button>
      <button class="tab-btn-teacher" onclick="switchTeacherTab('tabRecap', this)">
        Katalog Tayang Aktif ({{ isset($approvedProducts) ? $approvedProducts->count() : 0 }})
      </button>
    </div>

    <!-- TAB 1: ANTREAN KURASI PRODUK (Real SQLite DB) -->
    <div id="tabApproval" class="teacher-card">
      <div class="teacher-card-toolbar">
        <div>
          <h2 style="font-size: 1rem; font-weight: 800; color: var(--navy-header); margin: 0 0 4px;">
            Antrean Persetujuan Produk Siswa (Quality Control)
          </h2>
          <p style="font-size: 0.8125rem; color: #64748B; margin: 0;">
            Guru pembimbing memverifikasi kewajaran penetapan harga (HPP) dan kesesuaian modul praktik sebelum produk tayang di SMEXAMALL.
          </p>
        </div>
      </div>

      <div style="overflow-x: auto;">
        <table class="teacher-table">
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>HPP / Jual</th>
              <th>Margin Laba</th>
              <th>Status</th>
              <th>Aksi Guru</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($pendingProducts) && $pendingProducts->count() > 0)
              @foreach($pendingProducts as $p)
                @php
                  $margin = max(0, $p->price - ($p->hpp_cost ?? 0));
                @endphp
                <tr id="row-prod-{{ $p->id }}">
                  <td>
                    <strong>{{ $p->name }}</strong>
                    <div style="font-size: 0.75rem; color: #64748B;">Stok: {{ $p->stock }} unit</div>
                  </td>
                  <td>{{ $p->category }}</td>
                  <td>Rp {{ number_format($p->hpp_cost ?? 0, 0, ',', '.') }} / <strong>Rp {{ number_format($p->price, 0, ',', '.') }}</strong></td>
                  <td><span style="color: #16A34A; font-weight: 700;">+Rp {{ number_format($margin, 0, ',', '.') }}</span></td>
                  <td><span class="badge-pending-clean">Menunggu Verifikasi</span></td>
                  <td>
                    <button type="button" class="btn-approve" onclick="approveRealProduct({{ $p->id }}, '{{ addslashes($p->name) }}', this)">
                      Setujui &amp; Tayangkan
                    </button>
                    <button type="button" class="btn-reject" onclick="rejectRealProduct({{ $p->id }}, this)">
                      Minta Revisi
                    </button>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="6" style="text-align: center; padding: 24px; color: #16A34A; font-weight: 700;">
                  Seluruh produk siswa telah diverifikasi. Tidak ada antrean kurasi tertunda!
                </td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>

    <!-- TAB 2: RUBRIK ASESMEN KOMPETENSI PKWU -->
    <div id="tabCompetency" class="teacher-card" style="display: none; padding: 24px;">
      <div style="background: #F0FDF4; border: 1px solid #86EFAC; border-radius: 12px; padding: 20px; margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
          <h3 style="margin: 0; font-size: 1.125rem; font-weight: 800; color: #166534;">
            Asesmen Kelayakan Portofolio PKWU Berbasis BLUD
          </h3>
          <span style="background: #16A34A; color: #FFFFFF; font-size: 0.75rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
            Status: Terverifikasi
          </span>
        </div>
        <p style="margin: 0; font-size: 0.875rem; color: #15803D; line-height: 1.5;">
          Peserta didik yang memenuhi standar kompetensi HPP, standar higienitas, dan pencatatan transaksi marketplace nyata secara otomatis diprioritaskan dalam program <strong>Praktik Kerja Lapangan (PKL) 6 Bulan di Mitra DUDI Terkemuka</strong>.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
        <div style="border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px;">
          <div style="font-weight: 800; font-size: 0.875rem; color: #16A34A; margin-bottom: 6px;">1. Penetapan HPP &amp; Food Costing</div>
          <div style="font-size: 0.75rem; color: #64748B; line-height: 1.5;">
            Nilai: <strong>95 / 100 (Sangat Baik)</strong>. Alokasi bahan mentah dan perhitungan laba bersih transparan.
          </div>
        </div>
        <div style="border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px;">
          <div style="font-weight: 800; font-size: 0.875rem; color: #16A34A; margin-bottom: 6px;">2. Standar QC &amp; Packaging</div>
          <div style="font-size: 0.75rem; color: #64748B; line-height: 1.5;">
            Nilai: <strong>92 / 100 (Sangat Baik)</strong>. Kemasan produk memenuhi standar dan bergaransi resmi lab TEFA.
          </div>
        </div>
        <div style="border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px;">
          <div style="font-weight: 800; font-size: 0.875rem; color: #16A34A; margin-bottom: 6px;">3. CRM &amp; Transaksi Nyata</div>
          <div style="font-size: 0.75rem; color: #64748B; line-height: 1.5;">
            Nilai: <strong>98 / 100 (Unggul)</strong>. Penyelesaian pesanan tepat waktu dan manajemen kas marketplace teruji.
          </div>
        </div>
      </div>
    </div>

    <!-- TAB 3: KATALOG TAYANG AKTIF (Real SQLite DB) -->
    <div id="tabRecap" class="teacher-card" style="display: none;">
      <div class="teacher-card-toolbar">
        <div>
          <h2 style="font-size: 1rem; font-weight: 800; color: var(--navy-header); margin: 0 0 4px;">
            Daftar Produk Siswa Tayang Aktif di SMEXAMALL
          </h2>
          <p style="font-size: 0.8125rem; color: #64748B; margin: 0;">
            Produk-produk ini telah lulus verifikasi dan dapat langsung dibeli oleh masyarakat dan industri.
          </p>
        </div>
      </div>

      <div style="overflow-x: auto;">
        <table class="teacher-table">
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Harga Jual</th>
              <th>Stok</th>
              <th>Status</th>
              <th>Tautan Publik</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($approvedProducts) && $approvedProducts->count() > 0)
              @foreach($approvedProducts as $ap)
                <tr>
                  <td><strong>{{ $ap->name }}</strong></td>
                  <td>{{ $ap->category }}</td>
                  <td style="font-weight: 700; color: #16A34A;">Rp {{ number_format($ap->price, 0, ',', '.') }}</td>
                  <td>{{ $ap->stock }} unit</td>
                  <td><span class="badge-verified-clean">Aktif Tayang</span></td>
                  <td>
                    <a href="{{ route('smexamall.product', $ap->id) }}" style="color: #0284C7; font-weight: 700; text-decoration: none;">
                      Buka di SMEXAMALL
                    </a>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="6" style="text-align: center; padding: 24px; color: #64748B;">Belum ada produk tayang aktif.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script>
  function switchTeacherTab(tabId, btn) {
    document.querySelectorAll('.teacher-card').forEach(c => c.style.display = 'none');
    document.querySelectorAll('.tab-btn-teacher').forEach(b => b.classList.remove('active'));
    document.getElementById(tabId).style.display = 'block';
    btn.classList.add('active');
  }

  function approveRealProduct(productId, name, btn) {
    fetch(`/teacher/approve/${productId}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        const row = document.getElementById('row-prod-' + productId);
        if (row) {
          row.cells[4].innerHTML = '<span class="badge-verified-clean">Disetujui Tayang</span>';
          row.cells[5].innerHTML = '<span style="font-size: 0.75rem; font-weight: 700; color: #16A34A;">Kini Aktif di SMEXAMALL!</span>';
        }
        alert(`Produk "${name}" berhasil diverifikasi dan langsung tayang di etalase SMEXAMALL!`);
      }
    })
    .catch(err => {
      alert('Gagal menyetujui produk di server.');
    });
  }

  function rejectRealProduct(productId, btn) {
    const note = prompt('Tuliskan catatan revisi kurikulum untuk siswa:', 'Tolong perbaiki foto produk dan sertakan kalkulasi HPP lebih detail.');
    if (!note) return;

    fetch(`/teacher/reject/${productId}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ note: note })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        const row = document.getElementById('row-prod-' + productId);
        if (row) {
          row.cells[4].innerHTML = '<span class="badge-pending-clean" style="background:#FEE2E2; color:#B91C1C;">Perlu Revisi</span>';
          row.cells[5].innerHTML = '<span style="font-size: 0.75rem; color: #64748B;">Revisi terkirim</span>';
        }
      }
    })
    .catch(err => {
      alert('Gagal mengirim revisi.');
    });
  }
</script>
@endpush