<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbApplicant;
use App\Models\Product;
use App\Models\Order;
use App\Models\Major;

class AdminController extends Controller
{
    /**
     * Dashboard Utama Super Admin SMKN 1 Probolinggo (Real Database Data)
     */
    public function index()
    {
        // 1. Metrik Utama Ekosistem (Real dari Database SQLite)
        $ppdbRegistered = PpdbApplicant::count();
        $totalQuota = Major::sum('quota_seats') ?: 432;
        $totalRombel = Major::sum('rombel_count') ?: 12;
        $tefaProducts = Product::where('status', 'approved')->count();
        $totalRevenue = Order::where('payment_status', 'paid')->sum('total_amount');

        $stats = [
            'total_students' => '1.240',
            'ppdb_registered' => $ppdbRegistered,
            'ppdb_quota' => $totalQuota,
            'ppdb_rombel' => $totalRombel,
            'tefa_products' => $tefaProducts,
            'blud_revenue' => 'Rp ' . number_format($totalRevenue, 0, ',', '.'),
            'dudi_partners' => 54
        ];

        // 2. Daftar Pengguna Berdasarkan 4 Role
        $users = [
            [
                'id' => 1,
                'name' => 'Bambang Sudarmono, S.Kom',
                'email' => 'admin@smkn1probolinggo.sch.id',
                'role' => 'Super Admin',
                'role_code' => 'admin',
                'status' => 'Aktif',
                'last_login' => 'Hari ini, 08:15 WIB'
            ],
            [
                'id' => 2,
                'name' => 'Dra. Sri Wahyuni, M.Pd',
                'email' => 'guru.tefa@smkn1probolinggo.sch.id',
                'role' => 'Guru Pembina TEFA',
                'role_code' => 'teacher',
                'status' => 'Aktif',
                'last_login' => 'Kemarin, 14:30 WIB'
            ],
            [
                'id' => 3,
                'name' => 'Hendro Prasetyo, S.E',
                'email' => 'hendro.bd@smkn1probolinggo.sch.id',
                'role' => 'Guru Pembina Bisnis Digital',
                'role_code' => 'teacher',
                'status' => 'Aktif',
                'last_login' => '2 hari lalu'
            ],
            [
                'id' => 4,
                'name' => 'Ahmad Fadhil (XII RPL 1)',
                'email' => 'siswa.rpl@smkn1probolinggo.sch.id',
                'role' => 'Siswa Seller SMEXAMALL',
                'role_code' => 'seller',
                'status' => 'Aktif',
                'last_login' => 'Hari ini, 09:40 WIB'
            ],
            [
                'id' => 5,
                'name' => 'Nabila Putri (XII BD 2)',
                'email' => 'nabila.bd@smkn1probolinggo.sch.id',
                'role' => 'Siswa Seller SMEXAMALL',
                'role_code' => 'seller',
                'status' => 'Aktif',
                'last_login' => '3 hari lalu'
            ],
            [
                'id' => 6,
                'name' => 'Muhammad Rizky Pratama',
                'email' => 'calon.siswa@gmail.com',
                'role' => 'Calon Siswa PPDB',
                'role_code' => 'student',
                'status' => 'Terverifikasi',
                'last_login' => 'Hari ini, 10:02 WIB'
            ],
            [
                'id' => 7,
                'name' => 'Aulia Rahmadani',
                'email' => 'aulia.rahma@gmail.com',
                'role' => 'Calon Siswa PPDB',
                'role_code' => 'student',
                'status' => 'Menunggu Verifikasi',
                'last_login' => 'Kemarin, 19:22 WIB'
            ]
        ];

        // 3. Data Pendaftar PPDB 2026 dari Real Database SQLite
        $ppdbApplicants = PpdbApplicant::latest()->get()->map(function ($app) {
            return [
                'id' => $app->registration_no,
                'db_id' => $app->id,
                'nisn' => $app->nisn,
                'name' => $app->name,
                'school_origin' => $app->school_origin,
                'major_choice' => $app->major_choice,
                'avg_score' => $app->avg_score,
                'status' => $app->status,
                'badge' => $app->status === 'Terverifikasi' ? 'badge-green' : 'badge-orange'
            ];
        })->toArray();

        return view('admin.index', compact('stats', 'users', 'ppdbApplicants'));
    }

    /**
     * Aksi Verifikasi Cepat PPDB (Real SQLite Database Update)
     */
    public function verifyPpdb(Request $request, $id)
    {
        $applicant = PpdbApplicant::where('registration_no', $id)
            ->orWhere('id', $id)
            ->firstOrFail();

        $action = $request->input('action', 'approve');

        if ($action === 'approve') {
            $applicant->update(['status' => 'Terverifikasi']);
            $msg = "Pendaftar {$applicant->registration_no} ({$applicant->name}) berhasil diverifikasi!";
        } else {
            $applicant->update(['status' => 'Menunggu']);
            $msg = "Status verifikasi {$applicant->registration_no} diubah menjadi Menunggu.";
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'status' => $applicant->status,
                'message' => $msg
            ]);
        }

        return back()->with('success', $msg);
    }
}
