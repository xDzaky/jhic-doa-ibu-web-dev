<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    public function run(): void
    {
        $majors = [
            [
                'code' => 'RPL',
                'name' => 'Rekayasa Perangkat Lunak (RPL)',
                'tagline' => 'Software Engineering, Web Development & AI Architecture',
                'description' => 'Pemrograman web modern (Laravel, React, Vue), aplikasi mobile Android/iOS (Flutter), database SQL & cloud compute, fundamental machine learning / AI engineering.',
                'quota_seats' => 108,
                'rombel_count' => 3,
                'head_of_program' => 'Ir. Muhammad Arif, S.Kom., M.T.',
                'featured_partner' => 'Jagoan Hosting Cloud & Axioo',
            ],
            [
                'code' => 'BD',
                'name' => 'Bisnis Digital (BD)',
                'tagline' => 'Digital Marketing, E-Commerce Strategy & Modern Retail',
                'description' => 'Digital marketing, SEO/SEM, manajemen e-commerce & marketplace, social media management, live stream shopping, modern retail operations.',
                'quota_seats' => 108,
                'rombel_count' => 3,
                'head_of_program' => 'Dra. Endang Sulistyowati, M.M.',
                'featured_partner' => 'Alfamart Class & Indomaret',
            ],
            [
                'code' => 'MPLB',
                'name' => 'Manajemen Perkantoran & Layanan Bisnis (MPLB)',
                'tagline' => 'Modern Office Automation, Public Relations & Digital Archiving',
                'description' => 'Administrasi perkantoran digital, korespondensi bilingual, e-filing & kearsipan digital, protokoler, public relations, dan otomatisasi tata kelola perkantoran.',
                'quota_seats' => 72,
                'rombel_count' => 2,
                'head_of_program' => 'Dra. Siti Rahmah, M.Pd.',
                'featured_partner' => 'PT Pelindo & BKN Regional II',
            ],
            [
                'code' => 'AKL',
                'name' => 'Akuntansi & Keuangan Lembaga (AKL)',
                'tagline' => 'Financial Auditing, Computerized Accounting & Tax Advisory',
                'description' => 'Komputer akuntansi (MYOB, Accurate, Spreadsheet), perpajakan terapan Brevet A/B, penyusunan laporan keuangan standar SAK ETAP, audit keuangan dasar.',
                'quota_seats' => 72,
                'rombel_count' => 2,
                'head_of_program' => 'Bambang Irawan, S.E., Ak., M.Ak.',
                'featured_partner' => 'IAI & Bank Jatim',
            ],
            [
                'code' => 'LPB',
                'name' => 'Layanan Perbankan (LPB)',
                'tagline' => 'Core Banking Operations, Micro-Fintech & Cashiership',
                'description' => 'Operasional kasir teller, customer service perbankan konvensional & syariah, kliring cek, money counter & deteksi uang palsu, simulasi core banking.',
                'quota_seats' => 72,
                'rombel_count' => 2,
                'head_of_program' => 'Nurul Hidayati, S.E., M.Si.',
                'featured_partner' => 'Bank Jatim & BNI',
            ],
        ];

        foreach ($majors as $data) {
            Major::updateOrCreate(['code' => $data['code']], $data);
        }
    }
}
