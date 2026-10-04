<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbApplicant;
use App\Models\Order;

class PortalController extends Controller
{
    /**
     * Tampilkan Portal Siswa (Real Data: Kartu Bukti PPDB & Riwayat Transaksi)
     */
    public function siswa()
    {
        // 1. Ambil data calon siswa dari sesi pendaftaran terbaru atau record pertama di database
        $applicant = null;

        if (session()->has('registered_applicant_id')) {
            $applicant = PpdbApplicant::find(session('registered_applicant_id'));
        }

        if (!$applicant) {
            $applicant = PpdbApplicant::first();
        }

        // 2. Ambil riwayat pesanan nyata dari database
        $orders = Order::with('items')->latest()->take(5)->get();

        return view('portal.siswa', compact('applicant', 'orders'));
    }
}
