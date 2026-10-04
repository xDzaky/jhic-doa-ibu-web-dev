<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\PpdbApplicant;

class PpdbController extends Controller
{
    /**
     * Tampilkan Halaman Informasi & Formulir PPDB 2026
     */
    public function index()
    {
        $majors = Major::all();
        $totalQuota = $majors->sum('quota_seats');
        $totalRombel = $majors->sum('rombel_count');

        $applicantCount = PpdbApplicant::count();
        $verifiedCount = PpdbApplicant::where('status', 'Terverifikasi')->count();
        $pendingCount = PpdbApplicant::where('status', 'Menunggu')->count();

        return view('ppdb', compact(
            'majors',
            'totalQuota',
            'totalRombel',
            'applicantCount',
            'verifiedCount',
            'pendingCount'
        ));
    }

    /**
     * Proses Pendaftaran Calon Siswa Baru (Real SQLite Database)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|string|max:20',
            'school_origin' => 'required|string|max:255',
            'major_choice' => 'required|string|max:255',
            'avg_score' => 'required|numeric|min:0|max:100',
            'selection_path' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
        ]);

        $regNo = PpdbApplicant::generateRegistrationNo();

        $applicant = PpdbApplicant::create([
            'registration_no' => $regNo,
            'nisn' => $validated['nisn'],
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'school_origin' => $validated['school_origin'],
            'major_choice' => $validated['major_choice'],
            'avg_score' => $validated['avg_score'],
            'selection_path' => $validated['selection_path'] ?? 'Prestasi Nilai Rapor (Umum)',
            'status' => 'Menunggu',
            'notes' => 'Pendaftaran online mandiri. Menunggu verifikasi fisik berkas di Posko SMKN 1 Probolinggo.'
        ]);

        // Simpan sesi calon siswa agar portal langsung memuat datanya
        session([
            'registered_applicant_id' => $applicant->id,
            'auth_user' => [
                'id' => $applicant->id,
                'name' => $applicant->name,
                'email' => $applicant->email ?? ($applicant->nisn . '@ppdb.smkn1'),
                'role' => 'student',
                'role_label' => 'Calon Siswa PPDB 2026',
                'avatar' => 'student_avatar.png',
                'badge' => 'badge-green',
                'redirect' => '/portal-siswa'
            ],
            'auth_role' => 'student'
        ]);

        return redirect()->route('portal.siswa')->with('success', 'Selamat, ' . $applicant->name . '! Formulir pendaftaran Anda berhasil disimpan dengan Nomor Registrasi: ' . $regNo . '.');
    }

    /**
     * Cek Status Pendaftaran PPDB Real-time
     */
    public function checkStatus(Request $request)
    {
        $keyword = trim($request->get('keyword', ''));

        if (empty($keyword)) {
            return response()->json(['success' => false, 'message' => 'Masukkan NISN atau Nomor Registrasi']);
        }

        $applicant = PpdbApplicant::where('registration_no', $keyword)
            ->orWhere('nisn', $keyword)
            ->first();

        if (!$applicant) {
            return response()->json([
                'success' => false,
                'message' => 'Data pendaftar dengan kata kunci "' . $keyword . '" tidak ditemukan. Silakan periksa kembali NISN atau Nomor Registrasi Anda.'
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'registration_no' => $applicant->registration_no,
                'name' => $applicant->name,
                'school_origin' => $applicant->school_origin,
                'major_choice' => $applicant->major_choice,
                'avg_score' => $applicant->avg_score,
                'status' => $applicant->status,
                'created_at' => $applicant->created_at->format('d M Y, H:i')
            ]
        ]);
    }
}
