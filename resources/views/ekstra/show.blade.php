@extends('layouts.app')

@section('title', $ekstra['title'] . ' - SMKN 1 Probolinggo')
@section('meta_description', 'Detail Ekstrakurikuler ' . $ekstra['title'] . ' SMKN 1 Probolinggo. Informasi jadwal latihan, prestasi, dokumentasi, dan kontak pendaftaran resmi.')

@push('styles')
<style>
  /* Ekstra Detail Page - Modern Clean Design */
  .ekstra-detail-page {
    background-color: #FFFFFF;
    min-height: calc(100vh - 68px);
    font-family: var(--font-body);
    color: #0F172A;
    padding-bottom: 72px;
  }

  /* Two Column Main Grid */
  .ekstra-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 36px 24px 0;
  }

  .ekstra-main-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 340px;
    gap: 48px;
    align-items: start;
  }

  /* Left Column: Article Body */
  .ekstra-article {
    min-width: 0;
  }

  .ekstra-featured-media {
    width: 100%;
    border-radius: 14px;
    overflow: hidden;
    margin-bottom: 24px;
    background-color: #082046;
    box-shadow: 0 4px 20px rgba(8, 32, 70, 0.08);
  }

  .ekstra-featured-img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
  }

  .ekstra-header-title {
    font-family: var(--font-heading);
    font-size: 1.75rem;
    font-weight: 800;
    color: #082046;
    margin: 0 0 12px;
    line-height: 1.3;
    letter-spacing: -0.015em;
  }

  /* Meta Row: Author & Date */
  .ekstra-meta-row {
    display: flex;
    align-items: center;
    gap: 24px;
    padding-bottom: 24px;
    margin-bottom: 28px;
    border-bottom: 1.5px solid #F1F5F9;
    font-size: 0.84375rem;
    color: #64748B;
  }

  .ekstra-meta-item {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
  }

  .ekstra-meta-item svg {
    color: #E11D48;
    flex-shrink: 0;
  }

  /* Article Typography & Formatting */
  .ekstra-content-body {
    line-height: 1.8;
    font-size: 0.96875rem;
    color: #334155;
  }

  .ekstra-h1 {
    font-family: var(--font-heading);
    font-size: 1.625rem;
    font-weight: 800;
    color: #082046;
    line-height: 1.35;
    margin: 0 0 16px;
    letter-spacing: -0.02em;
  }

  .ekstra-h2 {
    font-family: var(--font-heading);
    font-size: 1.375rem;
    font-weight: 800;
    color: #082046;
    margin: 28px 0 14px;
    line-height: 1.3;
  }

  .ekstra-p {
    font-size: 0.953125rem;
    line-height: 1.8;
    color: #334155;
    margin: 0 0 16px;
  }

  .ekstra-p strong {
    color: #0F172A;
    font-weight: 700;
  }

  .ekstra-item {
    font-size: 0.9375rem;
    line-height: 1.75;
    color: #1E293B;
    margin: 0 0 10px;
    display: flex;
    align-items: baseline;
    gap: 8px;
  }

  .ekstra-divider {
    border: none;
    border-top: 1.5px solid #F1F5F9;
    margin: 28px 0;
  }

  /* Bottom Share / Author Row */
  .ekstra-author-bottom {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 36px 0 16px;
    color: #E11D48;
  }

  .ekstra-author-bottom svg {
    width: 20px;
    height: 20px;
  }

  .ekstra-share-bar {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 14px;
    padding-bottom: 32px;
  }

  .share-btn {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    text-decoration: none;
    transition: transform 0.2s ease, opacity 0.2s ease;
  }

  .share-btn:hover {
    transform: translateY(-2px);
    opacity: 0.9;
  }

  .share-fb { background-color: #3B5998; }
  .share-tw { background-color: #1DA1F2; }
  .share-tg { background-color: #26A5E4; }
  .share-wa { background-color: #25D366; }

  /* Right Column: Berita Sidebar */
  .ekstra-sidebar {
    position: sticky;
    top: 88px;
  }

  .sidebar-section-title {
    font-family: var(--font-heading);
    font-size: 1.25rem;
    font-weight: 800;
    color: #082046;
    margin: 0 0 20px;
    line-height: 1.25;
  }

  .sidebar-news-stack {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .sidebar-news-card {
    background: #FFFFFF;
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    display: block;
    border: 1px solid #E2E8F0;
    box-shadow: 0 4px 14px rgba(8, 32, 70, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .sidebar-news-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(8, 32, 70, 0.1);
    border-color: #CBD5E1;
  }

  .sidebar-news-thumb-wrap {
    position: relative;
    width: 100%;
    height: 155px;
    background-color: #0F172A;
    overflow: hidden;
  }

  .sidebar-news-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
  }

  .sidebar-news-card:hover .sidebar-news-thumb {
    transform: scale(1.05);
  }

  .sidebar-news-pill {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #F59E0B;
    color: #FFFFFF;
    font-size: 0.6875rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
  }

  .sidebar-news-pill svg {
    width: 11px;
    height: 11px;
  }

  .sidebar-news-body {
    padding: 14px 16px;
  }

  .sidebar-news-title {
    font-family: var(--font-heading);
    font-size: 0.9375rem;
    font-weight: 700;
    color: #082046;
    margin: 0 0 8px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .sidebar-news-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.6875rem;
    color: #64748B;
    flex-wrap: wrap;
  }

  .sidebar-news-meta-item {
    display: inline-flex;
    align-items: center;
    gap: 4px;
  }

  .sidebar-news-meta-item svg {
    color: #EF4444;
  }

  /* Ekstrakurikuler Lainnya - Horizontal Scroll Section */
  .ekstra-other-section {
    max-width: 1200px;
    margin: 48px auto 0;
    padding: 36px 24px 0;
    border-top: 2px solid #F1F5F9;
  }

  .ekstra-other-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
  }

  .ekstra-other-title {
    font-family: var(--font-heading);
    font-size: 1.375rem;
    font-weight: 800;
    color: #082046;
    margin: 0;
  }

  .ekstra-scroll-nav {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .scroll-nav-btn {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: #F1F5F9;
    border: 1px solid #E2E8F0;
    color: #082046;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .scroll-nav-btn:hover {
    background: #082046;
    color: #FFFFFF;
    border-color: #082046;
  }

  .ekstra-horizontal-scroll {
    overflow-x: auto;
    overflow-y: hidden;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    padding-bottom: 16px;
    margin: 0 -8px;
    padding: 4px 8px 16px;
    scrollbar-width: thin;
    scrollbar-color: #CBD5E1 #F1F5F9;
  }

  .ekstra-horizontal-scroll::-webkit-scrollbar {
    height: 6px;
  }

  .ekstra-horizontal-scroll::-webkit-scrollbar-track {
    background: #F1F5F9;
    border-radius: 6px;
  }

  .ekstra-horizontal-scroll::-webkit-scrollbar-thumb {
    background: #CBD5E1;
    border-radius: 6px;
  }

  .ekstra-horizontal-scroll::-webkit-scrollbar-thumb:hover {
    background: #94A3B8;
  }

  .ekstra-scroll-track {
    display: flex;
    gap: 18px;
    width: max-content;
  }

  .ekstra-card-item {
    width: 250px;
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    box-shadow: 0 2px 10px rgba(8, 32, 70, 0.04);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    display: flex;
    flex-direction: column;
  }

  .ekstra-card-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(8, 32, 70, 0.1);
    border-color: #CBD5E1;
  }

  .ekstra-card-thumb-wrap {
    width: 100%;
    height: 150px;
    background-color: #0F172A;
    overflow: hidden;
  }

  .ekstra-card-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
  }

  .ekstra-card-item:hover .ekstra-card-thumb {
    transform: scale(1.06);
  }

  .ekstra-card-body {
    padding: 14px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .ekstra-card-name {
    font-family: var(--font-heading);
    font-size: 0.9375rem;
    font-weight: 700;
    color: #082046;
    margin: 0 0 6px;
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .ekstra-card-meta {
    font-size: 0.75rem;
    color: #64748B;
  }

  @media (max-width: 991px) {
    .ekstra-main-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }

    .ekstra-sidebar {
      position: static;
    }
  }

  @media (max-width: 640px) {
    .ekstra-container {
      padding: 24px 16px 0;
    }

    .ekstra-header-title {
      font-size: 1.45rem;
    }

    .ekstra-h1 {
      font-size: 1.3rem;
    }

    .ekstra-h2 {
      font-size: 1.15rem;
    }

    .ekstra-card-item {
      width: 220px;
    }
  }
</style>
@endpush

@section('content')
<div class="ekstra-detail-page">
  <div class="ekstra-container">
    <div class="ekstra-main-grid">

      <!-- LEFT COLUMN: Article Content -->
      <article class="ekstra-article">
        
        <!-- Top Featured Banner Image -->
        <div class="ekstra-featured-media">
          <img src="{{ asset('images/' . $ekstra['image']) }}" alt="{{ $ekstra['title'] }}" class="ekstra-featured-img" width="800" height="450" fetchpriority="high">
        </div>

        <!-- Top Title -->
        <h2 class="ekstra-header-title">{{ $ekstra['title'] }}</h2>

        <!-- Author & Date Meta -->
        <div class="ekstra-meta-row">
          <div class="ekstra-meta-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Oleh : {{ $ekstra['author'] ?? 'Admin Humas' }}</span>
          </div>

          <div class="ekstra-meta-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            <span>Tanggal Posting : {{ $ekstra['date'] ?? '30/07/2025' }}</span>
          </div>
        </div>

        <!-- Body Content with Exact Text Formatting -->
        <div class="ekstra-content-body">
          @foreach($ekstra['body'] as $block)
            @if($block['type'] === 'h1')
              <h1 class="ekstra-h1">{{ $block['text'] }}</h1>
            @elseif($block['type'] === 'h2')
              <h2 class="ekstra-h2">{{ $block['text'] }}</h2>
            @elseif($block['type'] === 'p')
              <p class="ekstra-p">{!! $block['text'] !!}</p>
            @elseif($block['type'] === 'item')
              <div class="ekstra-item">{!! $block['text'] !!}</div>
            @elseif($block['type'] === 'divider')
              <hr class="ekstra-divider">
            @endif
          @endforeach
        </div>

        <!-- Bottom Graphic Poster / Image Matching Reference -->
        <div class="ekstra-featured-media" style="margin-top: 28px;">
          <img src="{{ asset('images/' . $ekstra['image']) }}" alt="{{ $ekstra['title'] }}" class="ekstra-featured-img" loading="lazy">
        </div>

        <!-- Author Icon & Social Share -->
        <div class="ekstra-author-bottom">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          </svg>
        </div>

        <div class="ekstra-share-bar">
          <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-fb" aria-label="Share Facebook">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($ekstra['title']) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-tw" aria-label="Share Twitter">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.936 9.936 0 0024 4.59z"/></svg>
          </a>
          <a href="https://t.me/share/url?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($ekstra['title']) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-tg" aria-label="Share Telegram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
          </a>
          <a href="https://wa.me/?text={{ urlencode($ekstra['title'] . ' ' . request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-wa" aria-label="Share WhatsApp">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 0C5.397 0 .013 5.384.013 12.018c0 2.115.553 4.179 1.603 5.998L0 24l6.166-1.616a11.982 11.982 0 005.865 1.517h.005c6.632 0 12.016-5.384 12.016-12.018C24.052 5.384 18.665 0 12.031 0zm-.005 21.802h-.004a9.78 9.78 0 01-4.993-1.373l-.358-.213-3.708.972.99-3.613-.233-.371a9.774 9.774 0 01-1.503-5.186c0-5.404 4.397-9.801 9.809-9.801 2.617 0 5.078 1.02 6.928 2.872a9.748 9.748 0 012.868 6.93c-.001 5.405-4.398 9.803-9.796 9.803zm5.372-7.337c-.295-.148-1.745-.86-2.015-.959-.27-.098-.466-.148-.663.148-.196.295-.761.959-.933 1.156-.172.197-.344.221-.639.074-.294-.148-1.244-.459-2.37-1.463-.877-.782-1.469-1.748-1.641-2.043-.172-.295-.018-.454.13-.601.133-.133.295-.344.442-.516.148-.172.196-.295.295-.491.098-.197.049-.369-.025-.516-.074-.148-.663-1.597-.908-2.188-.239-.575-.482-.497-.663-.506l-.565-.01c-.196 0-.516.074-.786.369-.27.295-1.031 1.008-1.031 2.457 0 1.449 1.056 2.85 1.203 3.047.147.197 2.078 3.173 5.035 4.45.703.304 1.252.486 1.68.622.707.225 1.35.193 1.859.117.567-.085 1.745-.713 1.991-1.401.246-.688.246-1.278.172-1.401-.074-.123-.27-.197-.565-.344z"/></svg>
          </a>
        </div>

      </article>

      <!-- RIGHT COLUMN: Berita Sekolah Sidebar -->
      <aside class="ekstra-sidebar">
        <h3 class="sidebar-section-title">Berita Sekolah</h3>

        <div class="sidebar-news-stack">

          <!-- Card 1: Pendaftaran Calon Dewan Ambalan -->
          <a href="{{ route('berita.show', 1) }}" class="sidebar-news-card">
            <div class="sidebar-news-thumb-wrap">
              <img src="{{ asset('images/berita_ambalan.webp') }}" alt="Pendaftaran Calon Dewan Ambalan" class="sidebar-news-thumb" loading="lazy">
              <div class="sidebar-news-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <span>Senin, 22 Januari 2024</span>
              </div>
            </div>
            <div class="sidebar-news-body">
              <h4 class="sidebar-news-title">Pendaftaran Calon Dewan Ambalan...</h4>
              <div class="sidebar-news-meta">
                <span class="sidebar-news-meta-item">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                  SMK Negeri 1 Probolinggo
                </span>
                <span class="sidebar-news-meta-item">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                  8 - 22 Januari 2024
                </span>
              </div>
            </div>
          </a>

          <!-- Card 2: Peringatan Hari Guru Nasional (With Image and Title) -->
          <a href="{{ route('berita.show', 2) }}" class="sidebar-news-card">
            <div class="sidebar-news-thumb-wrap">
              <img src="{{ asset('images/berita_hari_guru.webp') }}" alt="Peringatan Hari Guru Nasional" class="sidebar-news-thumb" loading="lazy">
              <div class="sidebar-news-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <span>Sabtu, 25 November 2023</span>
              </div>
            </div>
            <div class="sidebar-news-body">
              <h4 class="sidebar-news-title">Peringatan Hari Guru Nasional</h4>
              <div class="sidebar-news-meta">
                <span class="sidebar-news-meta-item">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                  Lapangan SMKN 1 Probolinggo
                </span>
                <span class="sidebar-news-meta-item">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                  25 November 2023
                </span>
              </div>
            </div>
          </a>

        </div>
      </aside>

    </div>
  </div>

  <!-- Ekstrakurikuler Lainnya - Horizontal Scrollable Section -->
  <section class="ekstra-other-section">
    <div class="ekstra-other-header">
      <h3 class="ekstra-other-title">Ekstrakurikuler Lainnya</h3>
      <div class="ekstra-scroll-nav">
        <button type="button" class="scroll-nav-btn" id="scrollLeftBtn" aria-label="Geser Kiri">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <button type="button" class="scroll-nav-btn" id="scrollRightBtn" aria-label="Geser Kanan">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </div>

    <div class="ekstra-horizontal-scroll" id="ekstraScrollArea">
      <div class="ekstra-scroll-track">
        @php
          $currentSlug = $ekstra['slug'];
          $otherList = array_filter($allEkstra ?? \App\Services\EkstraData::all(), function($item) use ($currentSlug) {
              return $item['slug'] !== $currentSlug;
          });
        @endphp

        @foreach($otherList as $item)
          <a href="{{ route('ekstra.show', $item['slug']) }}" class="ekstra-card-item">
            <div class="ekstra-card-thumb-wrap">
              <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" class="ekstra-card-thumb" loading="lazy">
            </div>
            <div class="ekstra-card-body">
              <h4 class="ekstra-card-name">{{ $item['title'] }}</h4>
              <span class="ekstra-card-meta">SMKN 1 Probolinggo</span>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const scrollArea = document.getElementById('ekstraScrollArea');
    const scrollLeftBtn = document.getElementById('scrollLeftBtn');
    const scrollRightBtn = document.getElementById('scrollRightBtn');

    if (scrollArea && scrollLeftBtn && scrollRightBtn) {
      scrollLeftBtn.addEventListener('click', function() {
        scrollArea.scrollBy({ left: -280, behavior: 'smooth' });
      });
      scrollRightBtn.addEventListener('click', function() {
        scrollArea.scrollBy({ left: 280, behavior: 'smooth' });
      });
    }
  });
</script>
@endpush
