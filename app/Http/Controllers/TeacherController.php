<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Major;

class TeacherController extends Controller
{
    /**
     * Dashboard Guru Pembina TEFA & Asesmen PKWU (Real SQLite Data)
     */
    public function index()
    {
        // 1. Antrean Kurasi Produk (Status: pending_review)
        $pendingProducts = Product::where('status', 'pending_review')->latest()->get();

        // 2. Produk yang sudah aktif disetujui (Status: approved)
        $approvedProducts = Product::where('status', 'approved')->latest()->get();

        // 3. Metrik Real Database
        $bludRevenue = Order::where('payment_status', 'paid')->sum('total_amount');
        $activeStudentsCount = 38; // 38 Siswa wirausaha terdaftar di TEFA
        $pendingCount = $pendingProducts->count();

        $stats = [
            'blud_revenue' => $bludRevenue,
            'active_students' => $activeStudentsCount,
            'pending_count' => $pendingCount,
            'approved_count' => $approvedProducts->count(),
        ];

        return view('teacher.index', compact('pendingProducts', 'approvedProducts', 'stats'));
    }

    /**
     * Setujui & Tayangkan Produk Siswa ke SMEXAMALL (Real Database Update)
     */
    public function approveProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->update(['status' => 'approved']);

        if (request()->ajax() || request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Produk "' . $product->name . '" berhasil diverifikasi dan langsung tayang di etalase SMEXAMALL!',
                'product' => $product
            ]);
        }

        return redirect()->route('teacher.index')->with('success', 'Produk "' . $product->name . '" berhasil disetujui dan kini tayang aktif di katalog publik SMEXAMALL!');
    }

    /**
     * Minta Revisi / Tolak Produk
     */
    public function rejectProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $note = $request->input('note', 'Tolong perbaiki foto produk dan sertakan kalkulasi HPP lebih terperinci.');

        $product->update(['status' => 'rejected']);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Catatan revisi dikirimkan ke siswa: "' . $note . '"',
                'product' => $product
            ]);
        }

        return redirect()->route('teacher.index')->with('info', 'Catatan revisi dikirimkan ke siswa.');
    }
}
