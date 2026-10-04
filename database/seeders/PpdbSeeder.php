<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PpdbApplicant;

class PpdbSeeder extends Seeder
{
    public function run(): void
    {
        if (PpdbApplicant::count() > 0) {
            return;
        }

        $applicants = [
            [
                'registration_no' => 'REG-2026-001',
                'nisn' => '0089234121',
                'name' => 'Muhammad Rizky Pratama',
                'email' => 'calon.siswa@gmail.com',
                'phone' => '081234567891',
                'school_origin' => 'SMP Negeri 1 Probolinggo',
                'major_choice' => 'Rekayasa Perangkat Lunak (Axioo Smart Classroom)',
                'avg_score' => 89.4,
                'selection_path' => 'Prestasi Nilai Rapor (Umum)',
                'status' => 'Terverifikasi',
                'notes' => 'Berkas rapor fisik dan piagam telah diverifikasi panitia di Aula Graha Kampus 1.'
            ],
            [
                'registration_no' => 'REG-2026-002',
                'nisn' => '0087123984',
                'name' => 'Aulia Rahmadani',
                'email' => 'aulia.rahma@gmail.com',
                'phone' => '081234567892',
                'school_origin' => 'SMP Negeri 3 Probolinggo',
                'major_choice' => 'Bisnis Digital (Alfamart Class)',
                'avg_score' => 86.8,
                'selection_path' => 'Prestasi Nilai Rapor (Umum)',
                'status' => 'Menunggu',
                'notes' => 'Menunggu verifikasi nilai rapor semester 5.'
            ],
            [
                'registration_no' => 'REG-2026-003',
                'nisn' => '0086543219',
                'name' => 'Dimas Arya Pangestu',
                'email' => 'dimas.arya@gmail.com',
                'phone' => '081234567893',
                'school_origin' => 'SMP Negeri 5 Probolinggo',
                'major_choice' => 'Manajemen Perkantoran & Layanan Bisnis (MPLB)',
                'avg_score' => 84.2,
                'selection_path' => 'Prestasi Nilai Rapor (Umum)',
                'status' => 'Menunggu',
                'notes' => 'Menunggu unggahan surat keterangan sehat.'
            ],
            [
                'registration_no' => 'REG-2026-004',
                'nisn' => '0085432108',
                'name' => 'Siti Nur Aisyah',
                'email' => 'siti.aisyah@gmail.com',
                'phone' => '081234567894',
                'school_origin' => 'MTs Negeri 1 Probolinggo',
                'major_choice' => 'Akuntansi & Keuangan Lembaga (AKL)',
                'avg_score' => 91.0,
                'selection_path' => 'Prestasi Hasil Lomba (Kabupaten)',
                'status' => 'Terverifikasi',
                'notes' => 'Juara 2 Olimpiade Matematika MTs se-Kota Probolinggo.'
            ],
            [
                'registration_no' => 'REG-2026-005',
                'nisn' => '0084321097',
                'name' => 'Bagus Kurniawan',
                'email' => 'bagus.k@gmail.com',
                'phone' => '081234567895',
                'school_origin' => 'SMP Negeri 2 Dringu',
                'major_choice' => 'Layanan Perbankan (Bank Jatim)',
                'avg_score' => 85.5,
                'selection_path' => 'Prestasi Nilai Rapor (Umum)',
                'status' => 'Terverifikasi',
                'notes' => 'Berkas lengkap dan lolos uji bakat minat perbankan.'
            ],
        ];

        foreach ($applicants as $app) {
            PpdbApplicant::create($app);
        }
    }
}
