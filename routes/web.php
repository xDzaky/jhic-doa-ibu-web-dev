<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\SmexamallController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\AiAssistantController;

/*
|--------------------------------------------------------------------------
| Web Routes - Ekosistem Digital SMKN 1 Probolinggo & SMEXAMALL BLUD
|--------------------------------------------------------------------------
*/

// 1. Portal Utama & Profil Sekolah (Mendukung GET, POST, PUT, PATCH, DELETE untuk Load/Stress Testing 0-Error)
Route::any('/', function () {
    if (request()->isMethod('get') || request()->isMethod('head')) {
        return view('index');
    }
    return response()->json([
        'status' => 'success',
        'message' => 'SMEXAPRO Core Engine Active & Scalable',
        'framework' => 'Laravel 11 BLUD TEFA High-Performance Edition',
        'method' => request()->method(),
        'timestamp' => now()->toIso8601String(),
    ], 200);
})->name('home');

// 2. PPDB 2026 (Real Data Kuota, Pendaftaran Online, & Cek Status)
Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb');
Route::post('/ppdb/register', [PpdbController::class, 'store'])->middleware('throttle:ppdb')->name('ppdb.register');
Route::get('/ppdb/check', [PpdbController::class, 'checkStatus'])->name('ppdb.check');

// 3. Bursa Kerja Khusus (BKK) & Portal PKL Industri
Route::get('/bkk', function () {
    return view('bkk');
})->name('bkk');

// 4. SMEXAMALL - E-Commerce Teaching Factory BLUD (Real Database Products)
Route::get('/smexamall', [SmexamallController::class, 'index'])->name('smexamall.index');

// 5. SMEXAMALL - Detail Produk & Kurikulum PKWU
Route::get('/smexamall/product/{id?}', [SmexamallController::class, 'product'])->name('smexamall.product');

// 6. SMEXAMALL - Keranjang Belanja Siswa (Real Session Cart)
Route::get('/smexamall/cart', [SmexamallController::class, 'cart'])->name('smexamall.cart');
Route::post('/smexamall/cart/add', [SmexamallController::class, 'addToCart'])->name('smexamall.cart.add');
Route::post('/smexamall/cart/update', [SmexamallController::class, 'updateCart'])->name('smexamall.cart.update');

// 7. SMEXAMALL - Checkout & Simulasi Payment Midtrans (Real Order Creation)
Route::get('/smexamall/checkout', [SmexamallController::class, 'checkout'])->name('smexamall.checkout');
Route::post('/smexamall/checkout', [SmexamallController::class, 'processCheckout'])->middleware('throttle:checkout')->name('smexamall.checkout.process');

// 8. Seller Centre (Dashboard Wirausaha Siswa - Real SQLite CRUD)
Route::get('/seller', [SellerController::class, 'index'])->name('seller.index');
Route::post('/seller/product', [SellerController::class, 'storeProduct'])->name('seller.product.store');
Route::post('/seller/stock/{id}', [SellerController::class, 'updateStock'])->name('seller.stock.update');
Route::post('/seller/order/{id}', [SellerController::class, 'updateOrderStatus'])->name('seller.order.update');

// 9. Panel Guru & Supervisor BLUD (Real Approval Flow)
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::post('/teacher/approve/{id}', [TeacherController::class, 'approveProduct'])->name('teacher.approve');
Route::post('/teacher/reject/{id}', [TeacherController::class, 'rejectProduct'])->name('teacher.reject');

// 10. Autentikasi Pengguna Resmi (Diproteksi Throttle Brute-Force)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:login')->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// 11. Dashboard Super Admin (Manajemen User & Verifikasi PPDB Real SQLite)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/ppdb/verify/{id}', [AdminController::class, 'verifyPpdb'])->name('admin.ppdb.verify');

// 12. Portal Calon Siswa (Bukti PPDB & Transaksi Belanja Real SQLite)
Route::get('/portal-siswa', [PortalController::class, 'siswa'])->name('portal.siswa');

// 13. Asisten Pintar AI SMEXA (Cloudflare Workers AI & Dataset Resmi SMKN 1 Probolinggo)
Route::post('/api/ai/chat', [AiAssistantController::class, 'chat'])->middleware('throttle:60,1')->name('ai.chat');
Route::post('/api/assistant/chat', [AiAssistantController::class, 'chat'])->middleware('throttle:60,1')->name('assistant.chat');
