@extends('layouts.app')

@section('title', 'Login Sistem Informasi Terpadu - SMKN 1 Probolinggo')

@section('content')
<div class="auth-wrapper" style="min-height: calc(100vh - 72px); background: linear-gradient(135deg, #F8FAFC 0%, #EFF6FF 100%); padding: 48px 0; display: flex; align-items: center;">
  <div class="container" style="max-width: 1040px; margin: 0 auto; padding: 0 16px;">
    
    @if(session('error'))
      <div style="background: #FEE2E2; border: 1px solid #FCA5A5; color: #991B1B; padding: 14px 18px; border-radius: 8px; margin-bottom: 24px; font-size: 0.875rem; font-weight: 600;">
        {{ session('error') }}
      </div>
    @endif

    @if(session('info'))
      <div style="background: #E0F2FE; border: 1px solid #BAE6FD; color: #075985; padding: 14px 18px; border-radius: 8px; margin-bottom: 24px; font-size: 0.875rem; font-weight: 600;">
        {{ session('info') }}
      </div>
    @endif

    <div style="max-width: 520px; margin: 0 auto;">
      
      <!-- FORM LOGIN RESMI -->
      <div style="background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 16px; padding: 36px; box-shadow: 0 10px 30px rgba(0, 37, 101, 0.06);">
        <div style="text-align: center; margin-bottom: 24px;">
          <img src="{{ asset('images/logo_smkn1.webp') }}" alt="Logo SMKN 1 Probolinggo" style="height: 56px; width: auto; object-fit: contain; margin-bottom: 12px;">
          <h2 style="font-size: 1.375rem; font-weight: 900; color: #0F2A4A; margin: 0; line-height: 1.2;">Portal SSO Terpadu</h2>
          <span style="font-size: 0.8125rem; color: #64748B; font-weight: 600;">SMK Negeri 1 Probolinggo</span>
        </div>

        <form action="{{ route('login.post') }}" method="POST">
          @csrf
          <div style="margin-bottom: 18px;">
            <label for="email" style="display: block; font-size: 0.8125rem; font-weight: 700; color: #1E293B; margin-bottom: 6px;">Alamat Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="nama@smkn1probolinggo.sch.id" style="width: 100%; padding: 12px 14px; border: 1.5px solid #CBD5E1; border-radius: 8px; font-size: 0.875rem; outline: none; transition: border-color 0.2s; box-sizing: border-box;">
          </div>

          <div style="margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 6px;">
              <label for="password" style="font-size: 0.8125rem; font-weight: 700; color: #1E293B;">Password</label>
            </div>
            <input type="password" name="password" id="password" required placeholder="••••••••" style="width: 100%; padding: 12px 14px; border: 1.5px solid #CBD5E1; border-radius: 8px; font-size: 0.875rem; outline: none; transition: border-color 0.2s; box-sizing: border-box;">
          </div>

          <button type="submit" class="btn btn-orange" style="width: 100%; padding: 12px; font-size: 0.9375rem; font-weight: 800; border-radius: 8px; box-shadow: 0 4px 12px rgba(230, 81, 0, 0.25); background: #EA580C; color: #FFF; border: none; cursor: pointer;">
            Masuk ke Sistem
          </button>
        </form>

        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #E2E8F0; text-align: center; font-size: 0.75rem; color: #64748B; line-height: 1.5;">
          Belum memiliki akun atau butuh bantuan akses? Hubungi Tim IT / Helpdesk Kampus di Posko SMEXA.
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
