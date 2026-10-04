@extends('layouts.app')

@section('title', 'Pusat Kendali Administrasi & BLUD - SMKN 1 Probolinggo')

@push('styles')
<style>
  .admin-page {
    background-color: #F8FAFC;
    min-height: calc(100vh - 68px);
    padding: 32px 0 64px;
    font-family: 'Satoshi', sans-serif;
  }

  .admin-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Admin Header */
  .admin-header {
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

  .admin-header-title {
    font-size: 1.625rem;
    font-weight: 800;
    color: var(--navy-header);
    letter-spacing: -0.02em;
    margin: 0 0 6px;
    line-height: 1.2;
  }

  .admin-header-sub {
    font-size: 0.875rem;
    color: #64748B;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .status-dot-active {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #16A34A;
    display: inline-block;
    box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.2);
  }

  .workspace-switcher {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #F1F5F9;
    padding: 4px;
    border-radius: 10px;
    border: 1px solid #E2E8F0;
  }

  .workspace-label {
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    padding: 0 8px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }

  .workspace-tab {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    font-size: 0.8125rem;
    font-weight: 700;
    color: #475569;
    text-decoration: none;
    border-radius: 7px;
    transition: all 0.15s ease;
  }

  .workspace-tab:hover {
    color: var(--navy-header);
    background: #FFFFFF;
    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
  }

  .workspace-tab.active {
    background: #FFFFFF;
    color: var(--navy-header);
    box-shadow: 0 1px 4px rgba(0, 37, 101, 0.08);
  }

  /* Executive Metrics Ribbon */
  .metrics-ribbon {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    margin-bottom: 28px;
    overflow: hidden;
  }

  .metric-cell {
    padding: 20px 24px;
    border-right: 1px solid #F1F5F9;
    position: relative;
    transition: background 0.15s ease;
  }

  .metric-cell:last-child {
    border-right: none;
  }

  .metric-cell:hover {
    background: #FAFBFD;
  }

  .metric-label {
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 6px;
  }

  .metric-number {
    font-size: 1.875rem;
    font-weight: 800;
    color: var(--navy-header);
    line-height: 1.15;
    margin-bottom: 6px;
    letter-spacing: -0.02em;
  }

  .metric-detail {
    font-size: 0.8125rem;
    color: #475569;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .metric-accent-green { color: #16A34A; font-weight: 700; }
  .metric-accent-orange { color: #EA580C; font-weight: 700; }
  .metric-accent-blue { color: #0284C7; font-weight: 700; }

  /* Workspace Navigation Tabs */
  .nav-tabs-wrapper {
    display: flex;
    gap: 8px;
    margin-bottom: 20px;
    border-bottom: 1px solid #E2E8F0;
    padding-bottom: 1px;
  }

  .nav-tab-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    font-size: 0.875rem;
    font-weight: 700;
    color: #64748B;
    background: transparent;
    border: none;
    border-bottom: 2px solid transparent;
    cursor: pointer;
    transition: all 0.15s ease;
    border-radius: 6px 6px 0 0;
  }

  .nav-tab-btn:hover {
    color: var(--navy-header);
    background: rgba(0, 37, 101, 0.03);
  }

  .nav-tab-btn.active {
    color: var(--navy-header);
    border-bottom-color: var(--gold);
    background: #FFFFFF;
    box-shadow: 0 -2px 6px rgba(0,0,0,0.02);
  }

  .tab-counter {
    background: #F1F5F9;
    color: #475569;
    font-size: 0.6875rem;
    font-weight: 800;
    padding: 2px 7px;
    border-radius: 9999px;
  }

  .nav-tab-btn.active .tab-counter {
    background: #E0E7FF;
    color: #1E3A8A;
  }

  /* Workspace Card */
  .workspace-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(0, 37, 101, 0.03);
    overflow: hidden;
  }

  .workspace-toolbar {
    padding: 18px 24px;
    background: #FFFFFF;
    border-bottom: 1px solid #F1F5F9;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 14px;
  }

  .toolbar-search {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #F8FAFC;
    border: 1px solid #CBD5E1;
    border-radius: 8px;
    padding: 6px 12px;
    width: 320px;
    transition: border-color 0.15s ease;
  }

  .toolbar-search:focus-within {
    border-color: var(--navy-header);
    background: #FFFFFF;
    box-shadow: 0 0 0 3px rgba(0, 37, 101, 0.08);
  }

  .toolbar-search input {
    border: none;
    background: transparent;
    outline: none;
    font-size: 0.8125rem;
    color: #0F172A;
    width: 100%;
    font-family: inherit;
  }

  .toolbar-filters {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
  }

  .filter-select {
    padding: 7px 12px;
    font-size: 0.8125rem;
    font-weight: 600;
    color: #334155;
    background: #FFFFFF;
    border: 1px solid #CBD5E1;
    border-radius: 8px;
    outline: none;
    cursor: pointer;
  }

  .filter-select:focus {
    border-color: var(--navy-header);
  }

  /* Data Table */
  .data-table-container {
    overflow-x: auto;
  }

  .admin-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.875rem;
    text-align: left;
  }

  .admin-table thead tr {
    background: #F8FAFC;
    border-bottom: 1px solid #E2E8F0;
  }

  .admin-table th {
    padding: 12px 18px;
    font-size: 0.75rem;
    font-weight: 700;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    white-space: nowrap;
  }

  .admin-table td {
    padding: 14px 18px;
    border-bottom: 1px solid #F1F5F9;
    color: #1E293B;
    vertical-align: middle;
  }

  .admin-table tbody tr:hover {
    background: #FAFAFB;
  }

  /* Applicant Identity */
  .applicant-id-tag {
    font-weight: 700;
    color: var(--navy-header);
    background: #F1F5F9;
    padding: 3px 8px;
    border-radius: 5px;
    font-size: 0.8125rem;
  }

  .applicant-name {
    font-weight: 700;
    color: #0F172A;
    line-height: 1.25;
  }

  .applicant-nisn {
    font-size: 0.75rem;
    color: #64748B;
    margin-top: 2px;
  }

  /* Status Badges */
  .badge-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 9999px;
    white-space: nowrap;
  }

  .badge-status-approved {
    background: #DCFCE7;
    color: #15803D;
  }

  .badge-status-pending {
    background: #FEF3C7;
    color: #B45309;
  }

  .status-dot-inner {
    width: 6px;
    height: 6px;
    border-radius: 50%;
  }

  .badge-status-approved .status-dot-inner { background-color: #16A34A; }
  .badge-status-pending .status-dot-inner { background-color: #D97706; }

  /* Table Action Buttons */
  .action-group {
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .btn-action {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 5px 10px;
    font-size: 0.75rem;
    font-weight: 700;
    border-radius: 6px;
    cursor: pointer;
    border: 1px solid transparent;
    transition: all 0.15s ease;
    text-decoration: none;
  }

  .btn-action-verify {
    background: #DCFCE7;
    border-color: #86EFAC;
    color: #15803D;
  }
  .btn-action-verify:hover {
    background: #16A34A;
    color: #FFFFFF;
    border-color: #16A34A;
  }

  .btn-action-reject {
    background: #FFFFFF;
    border-color: #CBD5E1;
    color: #64748B;
  }
  .btn-action-reject:hover {
    background: #FEF2F2;
    border-color: #FCA5A5;
    color: #DC2626;
  }

  .btn-action-detail {
    background: #F1F5F9;
    border-color: #CBD5E1;
    color: #334155;
  }
  .btn-action-detail:hover {
    background: #E2E8F0;
    color: var(--navy-header);
  }

  /* User Table Elements */
  .user-cell-flex {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .user-avatar-circle {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: #002565;
    color: #FFFFFF;
    font-weight: 800;
    font-size: 0.8125rem;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .role-tag-clean {
    font-size: 0.75rem;
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 6px;
    display: inline-block;
  }

  .role-admin { background: #E0E7FF; color: #1E3A8A; }
  .role-teacher { background: #E0F2FE; color: #0369A1; }
  .role-seller { background: #FFEDD5; color: #C2410C; }
  .role-student { background: #DCFCE7; color: #15803D; }

  /* Modal Details */
  .modal-backdrop-custom {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(4px);
    z-index: 2000;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .modal-backdrop-custom.show {
    display: flex;
  }

  .modal-dialog-custom {
    background: #FFFFFF;
    border-radius: 16px;
    max-width: 580px;
    width: 100%;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    animation: modalSlide 0.2s ease-out forwards;
  }

  @keyframes modalSlide {
    from { opacity: 0; transform: scale(0.96); }
    to { opacity: 1; transform: scale(1); }
  }

  .modal-header-custom {
    padding: 20px 24px;
    background: #F8FAFC;
    border-bottom: 1px solid #E2E8F0;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .modal-body-custom {
    padding: 24px;
  }

  .detail-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 20px;
  }

  .detail-field-label {
    font-size: 0.75rem;
    color: #64748B;
    font-weight: 600;
    text-transform: uppercase;
  }

  .detail-field-value {
    font-size: 0.9375rem;
    font-weight: 700;
    color: #0F172A;
    margin-top: 2px;
  }

  /* Toast Notification */
  .toast-container {
    position: fixed;
    top: 84px;
    right: 24px;
    z-index: 3000;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .toast-item {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 8px;
    padding: 12px 18px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    font-size: 0.875rem;
    font-weight: 700;
    color: #0F172A;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: toastIn 0.25s ease-out forwards;
  }

  @keyframes toastIn {
    from { opacity: 0; transform: translateX(20px); }
    to { opacity: 1; transform: translateX(0); }
  }

  @media (max-width: 992px) {
    .metrics-ribbon {
      grid-template-columns: repeat(2, 1fr);
    }
    .metric-cell:nth-child(2) {
      border-right: none;
    }
  }

  @media (max-width: 640px) {
    .metrics-ribbon {
      grid-template-columns: 1fr;
    }
    .metric-cell {
      border-right: none;
      border-bottom: 1px solid #F1F5F9;
    }
  }
</style>
@endpush

@section('content')
<div class="admin-page">
  <div class="admin-container">

    <!-- ADMIN COMMAND BAR -->
    <div class="admin-header">
      <div>
        <h1 class="admin-header-title">Pusat Kendali Administrasi &amp; BLUD</h1>
        <div class="admin-header-sub">
          <span class="status-dot-active"></span>
          <span>SMK Negeri 1 Probolinggo • Sesi Terverifikasi: <strong>Bambang Sudarmono, S.Kom</strong></span>
        </div>
      </div>

      <!-- Quick Role Preview Switcher -->
      <div class="workspace-switcher">
        <span class="workspace-label">Pratinjau Peran:</span>
        <a href="{{ route('teacher.index') }}" class="workspace-tab">Guru TEFA</a>
        <a href="{{ route('seller.index') }}" class="workspace-tab">Siswa Seller</a>
        <a href="{{ route('portal.siswa') }}" class="workspace-tab">Calon Siswa</a>
      </div>
    </div>

    <!-- EXECUTIVE METRICS RIBBON (Cohesive & Clean) -->
    <div class="metrics-ribbon">
      <div class="metric-cell">
        <div class="metric-label">Total Siswa Aktif</div>
        <div class="metric-number">{{ $stats['total_students'] }}</div>
        <div class="metric-detail metric-accent-green">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          5 Konsentrasi Keahlian Resmi
        </div>
      </div>

      <div class="metric-cell">
        <div class="metric-label">Pendaftar PPDB 2026</div>
        <div class="metric-number">{{ $stats['ppdb_registered'] }} <span style="font-size: 1rem; color: #64748B; font-weight: 600;">/ {{ $stats['ppdb_quota'] }}</span></div>
        <div class="metric-detail metric-accent-orange">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          Kuota 12 Rombel (89.8% Terisi)
        </div>
      </div>

      <div class="metric-cell">
        <div class="metric-label">Katalog Produk TEFA</div>
        <div class="metric-number">{{ $stats['tefa_products'] }}</div>
        <div class="metric-detail metric-accent-blue">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          Tayang di SMEXAMALL BLUD
        </div>
      </div>

      <div class="metric-cell">
        <div class="metric-label">Akumulasi Omzet BLUD</div>
        <div class="metric-number" style="color: #16A34A;">{{ $stats['blud_revenue'] }}</div>
        <div class="metric-detail">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          Kas BLUD SMK Negeri 1 Probolinggo
        </div>
      </div>
    </div>

    <!-- WORKSPACE TABS -->
    <div class="nav-tabs-wrapper">
      <button class="nav-tab-btn active" onclick="switchAdminTab('tab-ppdb', this)">
        <span>Verifikasi Calon Siswa PPDB</span>
        <span class="tab-counter">{{ count($ppdbApplicants) }}</span>
      </button>
      <button class="nav-tab-btn" onclick="switchAdminTab('tab-users', this)">
        <span>Manajemen Pengguna &amp; Hak Akses</span>
        <span class="tab-counter">{{ count($users) }}</span>
      </button>
    </div>

    <!-- TAB PANE 1: VERIFIKASI PPDB -->
    <div id="tab-ppdb" class="workspace-card">
      <div class="workspace-toolbar">
        <div class="toolbar-search">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <input type="text" id="ppdbSearchInput" placeholder="Cari nama siswa, NISN, atau asal sekolah..." onkeyup="filterPpdbTable()">
        </div>

        <div class="toolbar-filters">
          <select id="ppdbMajorFilter" class="filter-select" onchange="filterPpdbTable()">
            <option value="">Semua Jurusan</option>
            <option value="Rekayasa Perangkat Lunak">RPL (Axioo)</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
            <option value="Manajemen Perkantoran">MPLB</option>
            <option value="Akuntansi">Akuntansi (AKL)</option>
            <option value="Layanan Perbankan">Perbankan (LPB)</option>
          </select>

          <select id="ppdbStatusFilter" class="filter-select" onchange="filterPpdbTable()">
            <option value="">Semua Status</option>
            <option value="TERVERIFIKASI">Terverifikasi</option>
            <option value="MENUNGGU">Menunggu</option>
          </select>

          <a href="{{ route('ppdb') }}" target="_blank" class="btn btn-sm btn-outline-navy" style="font-size: 0.8125rem;">
            Lihat Laman PPDB Publik
          </a>
        </div>
      </div>

      <div class="data-table-container">
        <table class="admin-table" id="ppdbTable">
          <thead>
            <tr>
              <th>ID Registrasi</th>
              <th>Nama Calon Siswa</th>
              <th>Asal Sekolah</th>
              <th>Pilihan Jurusan</th>
              <th>Rata-rata Rapor</th>
              <th>Status</th>
              <th style="text-align: right;">Tindakan</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ppdbApplicants as $applicant)
            <tr data-id="{{ $applicant['id'] }}" data-major="{{ $applicant['major_choice'] }}" data-status="{{ strtoupper($applicant['status']) }}">
              <td>
                <span class="applicant-id-tag">{{ $applicant['id'] }}</span>
              </td>
              <td>
                <div class="applicant-name">{{ $applicant['name'] }}</div>
                <div class="applicant-nisn">NISN: {{ $applicant['nisn'] }}</div>
              </td>
              <td>{{ $applicant['school_origin'] }}</td>
              <td style="font-weight: 700; color: var(--navy-header);">{{ $applicant['major_choice'] }}</td>
              <td>
                <span style="font-weight: 800; color: #0369A1;">{{ $applicant['avg_score'] }}</span>
              </td>
              <td>
                @if($applicant['status'] === 'Terverifikasi')
                  <span class="badge-status badge-status-approved">
                    <span class="status-dot-inner"></span> Terverifikasi
                  </span>
                @else
                  <span class="badge-status badge-status-pending">
                    <span class="status-dot-inner"></span> Menunggu
                  </span>
                @endif
              </td>
              <td style="text-align: right;">
                <div class="action-group">
                  <button type="button" class="btn-action btn-action-detail" onclick="showApplicantDetail('{{ $applicant['id'] }}', '{{ addslashes($applicant['name']) }}', '{{ $applicant['nisn'] }}', '{{ addslashes($applicant['school_origin']) }}', '{{ addslashes($applicant['major_choice']) }}', '{{ $applicant['avg_score'] }}', '{{ $applicant['status'] }}')">
                    Detail
                  </button>
                  @if($applicant['status'] !== 'Terverifikasi')
                    <button type="button" class="btn-action btn-action-verify" onclick="inlineVerify('{{ $applicant['id'] }}', this)">
                      Verifikasi
                    </button>
                  @endif
                  <button type="button" class="btn-action btn-action-reject" onclick="inlineReject('{{ $applicant['id'] }}', this)">
                    Tolak
                  </button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <!-- TAB PANE 2: MANAJEMEN PENGGUNA -->
    <div id="tab-users" class="workspace-card" style="display: none;">
      <div class="workspace-toolbar">
        <div>
          <div style="font-weight: 800; font-size: 0.9375rem; color: #0F172A;">Daftar Akun Pengguna Terdaftar</div>
          <div style="font-size: 0.8125rem; color: #64748B;">4 Peran Operasional Ekosistem SMKN 1 Probolinggo</div>
        </div>
        <div style="font-size: 0.8125rem; font-weight: 700; color: #475569;">
          {{ count($users) }} Akun Aktif
        </div>
      </div>

      <div class="data-table-container">
        <table class="admin-table">
          <thead>
            <tr>
              <th>Pengguna</th>
              <th>Email Akun</th>
              <th>Peran Hak Akses</th>
              <th>Status Akun</th>
              <th>Aktivitas Terakhir</th>
              <th style="text-align: right;">Beralih Peran</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $u)
            <tr>
              <td>
                <div class="user-cell-flex">
                  <div class="user-avatar-circle" style="background: {{ $u['role_code'] == 'admin' ? '#002565' : ($u['role_code'] == 'teacher' ? '#0284C7' : ($u['role_code'] == 'seller' ? '#EA580C' : '#16A34A')) }};">
                    {{ strtoupper(substr($u['name'], 0, 1)) }}
                  </div>
                  <div>
                    <div style="font-weight: 700; color: #0F172A;">{{ $u['name'] }}</div>
                  </div>
                </div>
              </td>
              <td style="color: #475569; font-size: 0.8125rem;">{{ $u['email'] }}</td>
              <td>
                <span class="role-tag-clean role-{{ $u['role_code'] }}">
                  {{ $u['role'] }}
                </span>
              </td>
              <td>
                <span style="font-size: 0.75rem; font-weight: 700; color: #16A34A; display: inline-flex; align-items: center; gap: 5px;">
                  <span style="width: 6px; height: 6px; border-radius: 50%; background: #16A34A;"></span>
                  {{ $u['status'] }}
                </span>
              </td>
              <td style="font-size: 0.8125rem; color: #64748B;">{{ $u['last_login'] }}</td>
              <td style="text-align: right;">
                <span style="font-size: 0.75rem; font-weight: 700; color: #0284C7; background: #F0F9FF; border: 1px solid #BAE6FD; padding: 4px 10px; border-radius: 6px;">
                  Terverifikasi SSO
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

<!-- MODAL DETAIL APPLICANT -->
<div class="modal-backdrop-custom" id="detailModal">
  <div class="modal-dialog-custom">
    <div class="modal-header-custom">
      <div>
        <div style="font-size: 1.0625rem; font-weight: 800; color: var(--navy-header);" id="modalName">-</div>
        <div style="font-size: 0.75rem; color: #64748B;" id="modalId">-</div>
      </div>
      <button type="button" onclick="closeApplicantModal()" style="border: none; background: transparent; font-size: 1.25rem; cursor: pointer; color: #64748B;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="modal-body-custom">
      <div class="detail-grid">
        <div>
          <div class="detail-field-label">NISN Siswa</div>
          <div class="detail-field-value" id="modalNisn">-</div>
        </div>
        <div>
          <div class="detail-field-label">Asal Sekolah</div>
          <div class="detail-field-value" id="modalOrigin">-</div>
        </div>
        <div>
          <div class="detail-field-label">Pilihan Jurusan</div>
          <div class="detail-field-value" id="modalMajor" style="color: #0369A1;">-</div>
        </div>
        <div>
          <div class="detail-field-label">Rata-rata Rapor (Sem 1-5)</div>
          <div class="detail-field-value" id="modalScore">-</div>
        </div>
      </div>

      <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 14px; margin-bottom: 20px;">
        <div style="font-size: 0.75rem; font-weight: 700; color: #475569; margin-bottom: 6px;">Berkas Terlampir:</div>
        <div style="font-size: 0.8125rem; color: #16A34A; display: flex; flex-direction: column; gap: 4px;">
          <div>Salinan Rapor Semester 1 - 5 (Terlegalisir Kepala SMP/MTs)</div>
          <div>Surat Keterangan Lulus / Kartu Ujian</div>
          <div>Surat Pernyataan Minat Bakat Jurusan &amp; Kesiapan PKL Industri</div>
        </div>
      </div>

      <div style="display: flex; justify-content: flex-end; gap: 10px;">
        <button type="button" class="btn btn-sm btn-outline-navy" onclick="closeApplicantModal()">Tutup</button>
        <button type="button" class="btn btn-sm btn-green" id="modalApproveBtn">Verifikasi Sekarang</button>
      </div>
    </div>
  </div>
</div>

<!-- TOAST CONTAINER -->
<div class="toast-container" id="toastContainer"></div>
@endsection

@push('scripts')
<script>
  function switchAdminTab(tabId, btn) {
    document.querySelectorAll('.workspace-card').forEach(card => card.style.display = 'none');
    document.querySelectorAll('.nav-tab-btn').forEach(b => b.classList.remove('active'));
    
    document.getElementById(tabId).style.display = 'block';
    btn.classList.add('active');
  }

  function filterPpdbTable() {
    const search = document.getElementById('ppdbSearchInput').value.toLowerCase();
    const major = document.getElementById('ppdbMajorFilter').value.toLowerCase();
    const status = document.getElementById('ppdbStatusFilter').value;

    const rows = document.querySelectorAll('#ppdbTable tbody tr');
    rows.forEach(row => {
      const text = row.innerText.toLowerCase();
      const rowMajor = (row.getAttribute('data-major') || '').toLowerCase();
      const rowStatus = row.getAttribute('data-status') || '';

      const matchSearch = text.includes(search);
      const matchMajor = !major || rowMajor.includes(major);
      const matchStatus = !status || rowStatus === status;

      row.style.display = (matchSearch && matchMajor && matchStatus) ? '' : 'none';
    });
  }

  function showApplicantDetail(id, name, nisn, origin, major, score, status) {
    document.getElementById('modalId').innerText = id;
    document.getElementById('modalName').innerText = name;
    document.getElementById('modalNisn').innerText = nisn;
    document.getElementById('modalOrigin').innerText = origin;
    document.getElementById('modalMajor').innerText = major;
    document.getElementById('modalScore').innerText = score;

    const approveBtn = document.getElementById('modalApproveBtn');
    if (status === 'Terverifikasi') {
      approveBtn.style.display = 'none';
    } else {
      approveBtn.style.display = 'inline-block';
      approveBtn.onclick = function() {
        const row = document.querySelector(`tr[data-id="${id}"]`);
        if (row) {
          const btn = row.querySelector('.btn-action-verify');
          inlineVerify(id, btn);
        }
        closeApplicantModal();
      };
    }

    document.getElementById('detailModal').classList.add('show');
  }

  function closeApplicantModal() {
    document.getElementById('detailModal').classList.remove('show');
  }

  function inlineVerify(id, btn) {
    fetch(`/admin/ppdb/verify/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ action: 'approve' })
    })
    .then(res => res.json())
    .then(data => {
      const row = document.querySelector(`tr[data-id="${id}"]`);
      if (row) {
        const statusCell = row.cells[5];
        statusCell.innerHTML = '<span class="badge-status badge-status-approved"><span class="status-dot-inner"></span> Terverifikasi</span>';
        row.setAttribute('data-status', 'TERVERIFIKASI');
        if (btn) btn.remove();
        showToast(data.message);
      }
    })
    .catch(err => {
      showToast('Gagal memverifikasi di server.');
    });
  }

  function inlineReject(id, btn) {
    if (confirm(`Yakin ingin menolak verifikasi ${id}? Status akan diubah menjadi Menunggu.`)) {
      fetch(`/admin/ppdb/verify/${id}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ action: 'reject' })
      })
      .then(res => res.json())
      .then(data => {
        const row = document.querySelector(`tr[data-id="${id}"]`);
        if (row) {
          const statusCell = row.cells[5];
          statusCell.innerHTML = '<span class="badge-status badge-status-pending"><span class="status-dot-inner"></span> Menunggu</span>';
          row.setAttribute('data-status', 'MENUNGGU');
          showToast(data.message);
        }
      })
      .catch(err => {
        showToast('Gagal mengubah status di server.');
      });
    }
  }

  function showToast(message) {
    const container = document.getElementById('toastContainer');
    const toast = document.createElement('div');
    toast.className = 'toast-item';
    toast.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> <span>${message}</span>`;
    container.appendChild(toast);
    setTimeout(() => {
      toast.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
      toast.style.opacity = '0';
      toast.style.transform = 'translateX(20px)';
      setTimeout(() => toast.remove(), 300);
    }, 3200);
  }
</script>
@endpush
