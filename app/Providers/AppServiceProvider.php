<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('database.default') === 'sqlite') {
            try {
                \Illuminate\Support\Facades\DB::statement('PRAGMA journal_mode = WAL;');
                \Illuminate\Support\Facades\DB::statement('PRAGMA synchronous = NORMAL;');
                \Illuminate\Support\Facades\DB::statement('PRAGMA foreign_keys = ON;');
                \Illuminate\Support\Facades\DB::statement('PRAGMA busy_timeout = 5000;');
            } catch (\Throwable $e) {
                // Ignore if in console or memory
            }
        }

        // 1. Rate Limiting Proteksi Brute-Force Form Login (Maks 5 percobaan / menit per IP & Email)
        \Illuminate\Support\Facades\RateLimiter::for('login', function (\Illuminate\Http\Request $request) {
            $throttleKey = strtolower((string) $request->input('email')) . '|' . $request->ip();
            return \Illuminate\Cache\RateLimiting\Limit::perMinute(5)->by($throttleKey)->response(function () {
                return back()->withInput()->with('error', 'Terlalu banyak percobaan login gagal (Deteksi Brute-force). Silakan tunggu 1 menit sebelum mencoba kembali.');
            });
        });

        // 2. Rate Limiting Proteksi Spam Pendaftaran PPDB (Maks 10 pendaftaran / menit per IP)
        \Illuminate\Support\Facades\RateLimiter::for('ppdb', function (\Illuminate\Http\Request $request) {
            return \Illuminate\Cache\RateLimiting\Limit::perMinute(10)->by($request->ip())->response(function () {
                return back()->withInput()->with('error', 'Trafik pendaftaran terlalu padat dari IP Anda. Mohon tunggu beberapa saat demi keamanan server.');
            });
        });

        // 3. Rate Limiting Proteksi Spam Checkout SMEXAMALL (Maks 15 pesanan / menit per IP)
        \Illuminate\Support\Facades\RateLimiter::for('checkout', function (\Illuminate\Http\Request $request) {
            return \Illuminate\Cache\RateLimiting\Limit::perMinute(15)->by($request->ip())->response(function () {
                return back()->withInput()->with('error', 'Permintaan transaksi terlalu sering. Mohon tunggu 1 menit sebelum memesan kembali.');
            });
        });
    }
}
