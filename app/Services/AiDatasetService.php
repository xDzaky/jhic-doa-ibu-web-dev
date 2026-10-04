<?php

namespace App\Services;

use App\Models\Major;
use App\Models\Product;
use App\Models\PpdbApplicant;

class AiDatasetService
{
    /**
     * Data master profil dan pengetahuan resmi SMKN 1 Probolinggo
     */
    public static function getSchoolDataset(): array
    {
        return [
            'identitas' => [
                'nama' => 'SMK Negeri 1 Probolinggo',
                'singkatan' => 'SMEXA (dahulu SMEA Probolinggo)',
                'npsn' => '20539719',
                'status' => 'Negeri - SMK Pusat Keunggulan (SMK PK) & BLUD (Badan Layanan Umum Daerah)',
                'akreditasi' => 'A Unggul (BAN-SM)',
                'kepala_sekolah' => 'Dwi Anggraeni, S.Pd., M.Pd.',
                'alamat' => 'Jl. Mastrip No. 357, Kel. Kanigaran, Kec. Kanigaran, Kota Probolinggo, Jawa Timur 67219',
                'telepon' => '(0335) 421121 / (0335) 421537',
                'email' => 'info@smkn1probolinggo.sch.id',
                'website' => 'https://smkn1probolinggo.sch.id',
                'jam_layanan' => 'Senin - Jumat: 07.00 - 15.30 WIB',
                'visi' => 'Terwujudnya tamatan yang berakhlak mulia, kompeten, berjiwa wirausaha, dan berdaya saing global.',
            ],
            'jurusan' => [
                'RPL' => [
                    'nama' => 'Rekayasa Perangkat Lunak (RPL)',
                    'tagline' => 'Software Engineering, Web Development & AI Architecture',
                    'kuota' => 108,
                    'rombel' => 3,
                    'kaprog' => 'Ir. Muhammad Arif, S.Kom., M.T.',
                    'fokus' => 'Pemrograman web modern (Laravel, React, Vue), aplikasi mobile Android/iOS (Flutter), database SQL & cloud compute, fundamental machine learning / AI engineering.',
                    'fasilitas' => 'Lab Software Engineering ber-AC dengan PC Core i7, koneksi fiber optic dedicated 1 Gbps, server mini data-center.',
                    'mitra_industri' => 'Jagoan Hosting Cloud, Hummasoft IT, PT Axioo Sentra Digital (Axioo Smart Classroom), SEAMEO SEAMOLEC.',
                    'tefa' => 'Jasa Pembuatan Website Profil & E-Commerce, Software Custom, Pemeliharaan Jaringan & IT Support.',
                    'prospek_kerja' => 'Frontend Developer, Backend Engineer, Mobile App Developer, Software QA Tester, Database Administrator, Tech Entrepreneur.',
                ],
                'BD' => [
                    'nama' => 'Bisnis Digital (BD)',
                    'tagline' => 'Digital Marketing, E-Commerce Strategy & Modern Retail',
                    'kuota' => 108,
                    'rombel' => 3,
                    'kaprog' => 'Dra. Endang Sulistyowati, M.M.',
                    'fokus' => 'Digital marketing, SEO/SEM, manajemen e-commerce & marketplace, social media management, live stream shopping, modern retail operations.',
                    'fasilitas' => 'Studio Live Shopping & Podcast lengkap dengan ring light, smartphone multi-angle tripod & green screen, Lab Mini Retail Alfamart Class.',
                    'mitra_industri' => 'PT Sumber Alfaria Trijaya (Alfamart Class), Indomaret Group, Yamaha Retail, AGMARI (Asosiasi Guru Marketing).',
                    'tefa' => 'SMEXAMALL Mart, Live Selling Agency, Jasa Digital Ads & Pengelolaan Toko Online UMKM.',
                    'prospek_kerja' => 'Digital Marketer, Social Media Specialist, E-Commerce Store Specialist, Content Creator, Live Streamer Host, Retail Store Supervisor.',
                ],
                'MPLB' => [
                    'nama' => 'Manajemen Perkantoran & Layanan Bisnis (MPLB)',
                    'tagline' => 'Modern Office Automation, Public Relations & Digital Archiving',
                    'kuota' => 72,
                    'rombel' => 2,
                    'kaprog' => 'Dra. Siti Rahmah, M.Pd.',
                    'fokus' => 'Administrasi perkantoran digital, korespondensi bilingual (Inggris-Indonesia), e-filing & kearsipan digital, protokoler, public relations, dan otomatisasi tata kelola perkantoran.',
                    'fasilitas' => 'Lab Simulasi Perkantoran Modern, Ruang Rapat Eksekutif, Mesin Penghancur Kertas & Scanner Arsip Digital.',
                    'mitra_industri' => 'PT Pelindo (Pelabuhan Indonesia), Sekretariat Daerah Kota Probolinggo, BKN Kantor Regional II.',
                    'tefa' => 'Layanan Jasa Pengetikan & Format Dokumen Resmi, Event Organizer (EO) Acara Sekolah, Layanan Humas & Keprotokolan.',
                    'prospek_kerja' => 'Sekretaris Eksekutif, Staff Administrasi Kantor, Arsiparis Digital, Customer Relations Officer, Staff Humas Pemerintahan/Swasta.',
                ],
                'AKL' => [
                    'nama' => 'Akuntansi & Keuangan Lembaga (AKL)',
                    'tagline' => 'Financial Auditing, Computerized Accounting & Tax Advisory',
                    'kuota' => 72,
                    'rombel' => 2,
                    'kaprog' => 'Bambang Irawan, S.E., Ak., M.Ak.',
                    'fokus' => 'Komputer akuntansi (MYOB, Accurate, Spreadsheet), perpajakan terapan Brevet A/B (PPh, PPN), penyusunan laporan keuangan standar SAK ETAP, audit keuangan dasar.',
                    'fasilitas' => 'Lab Komputer Akuntansi dengan software berlisensi Accurate & MYOB, Bank Mini Sekolah.',
                    'mitra_industri' => 'Ikatan Akuntan Indonesia (IAI), Kantor Akuntan Publik (KAP) Sugeng & Rekan, Bank Jatim.',
                    'tefa' => 'Klinik Pembukuan & Laporan Keuangan UMKM Probolinggo, Jasa Asistensi Pelaporan SPT Pajak.',
                    'prospek_kerja' => 'Junior Accountant, Staff Keuangan, Tax Officer, Internal Auditor Assistant, Staff Payroll / Pembukuan Perusahaan.',
                ],
                'LPB' => [
                    'nama' => 'Layanan Perbankan (LPB)',
                    'tagline' => 'Core Banking Operations, Micro-Fintech & Cashiership',
                    'kuota' => 72,
                    'rombel' => 2,
                    'kaprog' => 'Nurul Hidayati, S.E., M.Si.',
                    'fokus' => 'Operasional kasir teller, customer service perbankan konvensional & syariah, kliring cek & warkat, money counter & deteksi uang palsu, simulasi sistem core banking.',
                    'fasilitas' => 'Loket Mini Bank SMEXA dengan mesin antrian digital display, mesin hitung uang otomatis, loket setor-tarik tunai simulasi.',
                    'mitra_industri' => 'PT Bank Pembangunan Daerah Jawa Timur (Bank Jatim), PT Bank Negara Indonesia (BNI), Bank Syariah Indonesia (BSI).',
                    'tefa' => 'Mini Bank Siswa SMEXA (Tabungan SimPel, transaksi pembayaran non-tunai di kantin dan koperasi sekolah).',
                    'prospek_kerja' => 'Teller Bank, Customer Service Perbankan, Microfinance Officer, Petugas Administrasi Kredit, Staf Operasional Lembaga Keuangan Mikro.',
                ],
            ],
            'ppdb_2026' => [
                'total_kuota' => 432,
                'total_rombel' => 12,
                'jalur_pendaftaran' => [
                    'Jalur Afirmasi (15% / ~65 siswa)' => 'Diperuntukkan bagi siswa dari keluarga ekonomi tidak mampu (pemegang KIP, PKH, KIS) dan penyandang disabilitas.',
                    'Jalur Pindah Tugas Orang Tua/Wali (5% / ~22 siswa)' => 'Bagi calon siswa yang orang tuanya pindah tugas (ASN, TNI, Polri, BUMN) atau anak guru/tenaga kependidikan.',
                    'Jalur Prestasi Hasil Lomba (5% / ~22 siswa)' => 'Bagi pemenang kejuaraan akademik maupun non-akademik (olahraga, seni, keagamaan, sains) minimal tingkat kota/kabupaten hingga internasional.',
                    'Jalur Prestasi Nilai Rapor (75% / ~323 siswa)' => 'Berdasarkan rata-rata nilai rapor semester 1 sampai 5 untuk mata pelajaran Bhs. Indonesia, Bhs. Inggris, Matematika, dan IPA, ditambah bobot akreditasi sekolah asal.',
                ],
                'syarat_umum' => [
                    'Lulus SMP / MTs / Sederajat atau Program Paket B.',
                    'Berusia setinggi-tingginya 21 tahun pada tanggal 1 Juli 2026.',
                    'Memiliki Ijazah / SKL (Surat Keterangan Lulus) serta buku Rapor asli semester 1 s.d. 5.',
                    'Kartu Keluarga (KK) asli yang diterbitkan minimal 1 (satu) tahun sebelum pendaftaran.',
                    'Akta Kelahiran asli & pas foto berwarna terbaru (3x4 cm latar biru/merah).',
                    'Surat Keterangan Sehat dan Tidak Buta Warna dari dokter puskesmas/klinik (khusus jurusan RPL dan praktikum visual).',
                ],
                'dokumen_unduhan' => 'Formulir Pendaftaran PPDB Resmi 2026 berformat PDF siap cetak dapat diunduh langsung di portal web pada link /docs/Formulir_Pendaftaran_PPDB_Resmi.pdf',
                'cara_daftar' => '1. Unduh & cetak formulir atau isi formulir online di menu PPDB. 2. Bawa berkas ke loket verifikasi SMKN 1 Probolinggo. 3. Pantau status seleksi dengan memasukkan Kode Pendaftaran di halaman /ppdb/check.',
            ],
            'mitra_dudi' => [
                'Intel AI Youth' => 'Program kurikulum kecerdasan buatan & AI for Youth',
                'Hummasoft IT' => 'Sinkronisasi kurikulum software engineering & magang industri',
                'Jagoan Hosting Cloud' => 'Dukungan server cloud, VPS infrastructure & web hosting sertifikasi',
                'Axioo Smart Classroom' => 'Kelas industri Axioo Class Program untuk RPL',
                'Indomaret Group' => 'Penyaluran kerja alumni & retail training',
                'Bank Jatim' => 'Dukungan operasional Mini Bank sekolah & literasi keuangan',
                'Alfamart Class' => 'Kelas industri Bisnis Digital & laboratorium kasir ritel',
                'PT Pelindo' => 'Magang kesekretariatan & logistik untuk jurusan MPLB',
                'Yamaha Music & Retail' => 'Pelatihan merchandising & kewirausahaan retail',
                'Maspion IT' => 'Peralatan teknologi & perakitan perangkat cerdas',
                'AGMARI' => 'Asosiasi Guru Marketing Indonesia untuk standar kompetensi pemasaran digital',
                'Technopark TDI' => 'Inkubator bisnis dan riset teknologi terapan',
                'PT UBIG' => 'Kerjasama pengembangan platform digital dan IoT',
                'SEAMEO SEAMOLEC' => 'Pengembangan konten open learning & materi vokasi digital',
            ],
            'smexamall' => [
                'deskripsi' => 'Platform marketplace Teaching Factory resmi berbasis BLUD SMKN 1 Probolinggo. Memamerkan dan menjual produk nyata karya siswa serta layanan jasa keahlian.',
                'kategori' => 'Software & Web Dev, Produk Kreatif & Merchandise, Jasa Administrasi Perkantoran, Jasa Konsultasi Pajak UMKM, Produk Retail Makanan/Minuman.',
                'fitur' => 'Katalog produk real-time, keranjang belanja session, simulasi pembayaran Midtrans, dashboard Seller Centre untuk wirausaha siswa, dan Approval Panel Guru BLUD.',
            ],
            'bkk' => [
                'nama' => 'Bursa Kerja Khusus (BKK) SMKN 1 Probolinggo',
                'fungsi' => 'Layanan resmi penyaluran tenaga kerja bagi lulusan dan koordinasi Praktik Kerja Lapangan (PKL) 6 bulan ke perusahaan mitra nasional.',
                'tingkat_serapan' => 'Tingkat keterserapan alumni di dunia kerja dan wirausaha mencapai lebih dari 85%.',
            ],
        ];
    }

    /**
     * Membangun system prompt yang sangat kaya, presisi, dan natural untuk LLM
     */
    public static function buildSystemPrompt(): string
    {
        $dataset = self::getSchoolDataset();
        $identitas = $dataset['identitas'];
        $majors = $dataset['jurusan'];
        $ppdb = $dataset['ppdb_2026'];

        // Ambil data dinamis terkini dari database jika tersedia
        $dbMajorsCount = Major::count();
        $dbProductsCount = Product::count();
        $dbPpdbCount = PpdbApplicant::count();

        $prompt = "Kamu adalah 'Asisten Pintar SMEXA', asisten virtual dan AI resmi dari {$identitas['nama']} ({$identitas['singkatan']}).\n\n";
        $prompt .= "Karakter dan Gaya Bicara:\n";
        $prompt .= "- Ramah, sopan, antusias, komunikatif, dan berwawasan pendidikan vokasi Indonesia modern.\n";
        $prompt .= "- Gunakan Bahasa Indonesia yang natural, rapi, dan mudah dipahami oleh calon siswa SMP, orang tua wali, siswa aktif, maupun alumni.\n";
        $prompt .= "- Jawaban harus padat, faktual, informatif, dan tidak berbelit-belit. Gunakan bullet points atau penomoran jika menerangkan langkah atau daftar.\n";
        $prompt .= "- Berikan tautan markdown yang relevan jika sesuai, seperti: [Halaman PPDB 2026](/ppdb), [Unduh Formulir Resmi PDF](/docs/Formulir_Pendaftaran_PPDB_Resmi.pdf), [Cek Status PPDB](/ppdb/check), [Katalog SMEXAMALL](/smexamall), [Portal BKK & Karir](/bkk).\n\n";

        $prompt .= "PROFIL SEKOLAH:\n";
        $prompt .= "- Nama: {$identitas['nama']} ({$identitas['singkatan']})\n";
        $prompt .= "- Status: {$identitas['status']}\n";
        $prompt .= "- Akreditasi: {$identitas['akreditasi']}\n";
        $prompt .= "- Kepala Sekolah: {$identitas['kepala_sekolah']}\n";
        $prompt .= "- Alamat: {$identitas['alamat']}\n";
        $prompt .= "- Kontak: Telp {$identitas['telepon']} | Email {$identitas['email']}\n";
        $prompt .= "- Jam Buka: {$identitas['jam_layanan']}\n\n";

        $prompt .= "5 PROGRAM KEAHLIAN UNGGULAN (JURUSAN):\n";
        foreach ($majors as $code => $m) {
            $prompt .= "1. [{$code}] {$m['nama']}:\n";
            $prompt .= "   - Tagline: {$m['tagline']}\n";
            $prompt .= "   - Kuota: {$m['kuota']} kursi ({$m['rombel']} rombel)\n";
            $prompt .= "   - Kepala Program: {$m['kaprog']}\n";
            $prompt .= "   - Kompetensi Inti: {$m['fokus']}\n";
            $prompt .= "   - Fasilitas: {$m['fasilitas']}\n";
            $prompt .= "   - Mitra DUDI: {$m['mitra_industri']}\n";
            $prompt .= "   - TEFA & Prospek Kerja: {$m['tefa']} -> {$m['prospek_kerja']}\n\n";
        }

        $prompt .= "INFORMASI PPDB 2026:\n";
        $prompt .= "- Total Kuota: {$ppdb['total_kuota']} siswa ({$ppdb['total_rombel']} rombel)\n";
        $prompt .= "- Jalur Seleksi:\n";
        foreach ($ppdb['jalur_pendaftaran'] as $jalur => $desc) {
            $prompt .= "  * {$jalur}: {$desc}\n";
        }
        $prompt .= "- Syarat Dokumen:\n";
        foreach ($ppdb['syarat_umum'] as $s) {
            $prompt .= "  * {$s}\n";
        }
        $prompt .= "- Formulir PDF Resmi: Dapat diunduh di [Unduh Formulir PPDB Resmi](/docs/Formulir_Pendaftaran_PPDB_Resmi.pdf)\n";
        $prompt .= "- Jumlah Pendaftar Terdata di Sistem Saat Ini: {$dbPpdbCount} calon siswa.\n\n";

        $prompt .= "SMEXAMALL & PRODUK TEFA:\n";
        $prompt .= "- SMEXAMALL adalah platform e-commerce Teaching Factory BLUD dengan {$dbProductsCount} produk karya siswa aktif siap beli.\n";
        $prompt .= "- Siswa mempraktikkan wirausaha nyata (Seller Centre), dinilai dan diapprove oleh guru pembimbing.\n\n";

        $prompt .= "BURSA KERJA KHUSUS (BKK) & MITRA INDUSTRI:\n";
        $prompt .= "- Menyalurkan lulusan ke 14 mitra industri ternama seperti Intel, Hummasoft, Jagoan Hosting Cloud, Axioo, Indomaret, Bank Jatim, Alfamart, Pelindo, Yamaha, Maspion IT, SEAMEO.\n";
        $prompt .= "- Keterserapan kerja & wirausaha mencapai > 85%.\n\n";

        $prompt .= "PANDUAN MENJAWAB:\n";
        $prompt .= "- Jika ditanya rekomendasi jurusan: Tanyakan minat pengguna (apakah suka coding/komputer -> RPL, suka jualan online/sosmed -> BD, suka administrasi kantor/humas -> MPLB, suka hitung uang/pajak -> AKL, atau suka perbankan/teller kasir -> LPB).\n";
        $prompt .= "- Jika pengguna menyapa (halo/pagi): Sambut hangat dan sebutkan hal yang bisa dibantu (PPDB 2026, 5 Jurusan, SMEXAMALL, atau BKK).\n";
        $prompt .= "- Jangan mengarang data di luar konteks sekolah SMKN 1 Probolinggo. Jika tidak tahu, arahkan dengan sopan untuk menghubungi pihak sekolah via telepon (0335) 421121.";

        return $prompt;
    }

    /**
     * Fallback cerdas berbasis pencocokan intent & dataset jika API Cloudflare belum diisi atau error
     */
    public static function getFallbackResponse(string $query): array
    {
        $q = mb_strtolower(trim($query));
        $dataset = self::getSchoolDataset();

        // 1. PPDB & Pendaftaran
        if (str_contains($q, 'ppdb') || str_contains($q, 'daftar') || str_contains($q, 'syarat') || str_contains($q, 'kuota') || str_contains($q, 'jadwal')) {
            $total = $dataset['ppdb_2026']['total_kuota'];
            $reply = "📋 **Penerimaan Peserta Didik Baru (PPDB) 2026** di SMKN 1 Probolinggo memiliki total kuota **{$total} siswa (12 Rombel)**.\n\n";
            $reply .= "Tersedia **4 Jalur Seleksi Resmi**:\n";
            $reply .= "1. **Jalur Prestasi Nilai Rapor (75%)** - Rata-rata semester 1-5 mapel pokok.\n";
            $reply .= "2. **Jalur Afirmasi (15%)** - Pemegang KIP / PKH / KIS & disabilitas.\n";
            $reply .= "3. **Jalur Prestasi Hasil Lomba (5%)** - Piagam kejuaraan akademik / non-akademik.\n";
            $reply .= "4. **Jalur Pindah Tugas Orang Tua (5%)** - Anak ASN/TNI/Polri/BUMN/guru.\n\n";
            $reply .= "📄 Silakan unduh dokumen resmi: [Unduh Formulir PPDB Resmi (PDF)](/docs/Formulir_Pendaftaran_PPDB_Resmi.pdf) atau langsung daftar di halaman [Pendaftaran PPDB](/ppdb). Jika sudah mendaftar, kamu bisa [Cek Status Pendaftaran](/ppdb/check).";
            
            return [
                'reply' => $reply,
                'suggestions' => ['Syarat Masuk RPL', 'Jalur Afirmasi', 'Unduh Formulir PDF', 'Cek Status PPDB']
            ];
        }

        // 2. Rekomendasi Jurusan / Bingung
        if (str_contains($q, 'rekomendasi') || str_contains($q, 'bingung') || str_contains($q, 'pilih jurusan') || str_contains($q, 'bagus mana')) {
            $reply = "🎓 Untuk menentukan jurusan yang paling cocok di SMKN 1 Probolinggo, kamu bisa sesuaikan dengan minat terbesarmu:\n\n";
            $reply .= "• 💻 **Suka ngoding, komputer & aplikasi?** Pilih **RPL** (Rekayasa Perangkat Lunak).\n";
            $reply .= "• 📱 **Suka jualan online, live stream & sosmed?** Pilih **Bisnis Digital (BD)**.\n";
            $reply .= "• 📂 **Suka administrasi kantor modern & humas?** Pilih **MPLB** (Manajemen Perkantoran).\n";
            $reply .= "• 📊 **Suka pembukuan, hitung keuangan & pajak?** Pilih **AKL** (Akuntansi & Keuangan Lembaga).\n";
            $reply .= "• 🏦 **Tertarik jadi teller bank atau frontliner perbankan?** Pilih **LPB** (Layanan Perbankan).\n\n";
            $reply .= "Kamu paling tertarik di bidang mana?";
            
            return [
                'reply' => $reply,
                'suggestions' => ['Jurusan RPL', 'Jurusan Bisnis Digital', 'Jurusan MPLB', 'Jurusan AKL', 'Jurusan LPB']
            ];
        }

        // 3. Jurusan RPL
        if (str_contains($q, 'rpl') || str_contains($q, 'software') || str_contains($q, 'coding') || str_contains($q, 'komputer')) {
            $rpl = $dataset['jurusan']['RPL'];
            $reply = "💻 **Jurusan {$rpl['nama']}**\n";
            $reply .= "Tagline: _{$rpl['tagline']}_\n\n";
            $reply .= "• **Kuota:** {$rpl['kuota']} siswa ({$rpl['rombel']} rombel)\n";
            $reply .= "• **Kepala Program:** {$rpl['kaprog']}\n";
            $reply .= "• **Fokus Pembelajaran:** {$rpl['fokus']}\n";
            $reply .= "• **Mitra Industri:** {$rpl['mitra_industri']}\n";
            $reply .= "• **Teaching Factory:** {$rpl['tefa']}\n";
            $reply .= "• **Peluang Karir:** {$rpl['prospek_kerja']}\n\n";
            $reply .= "Pelajari lebih lanjut atau daftar langsung di [Portal PPDB 2026](/ppdb).";

            return [
                'reply' => $reply,
                'suggestions' => ['Mitra Jagoan Hosting', 'Fasilitas Lab RPL', 'Info PPDB 2026']
            ];
        }

        // 4. Jurusan Bisnis Digital (BD)
        if (str_contains($q, 'bd') || str_contains($q, 'bisnis digital') || str_contains($q, 'marketing') || str_contains($q, 'retail') || str_contains($q, 'alfamart')) {
            $bd = $dataset['jurusan']['BD'];
            $reply = "📱 **Jurusan {$bd['nama']}**\n";
            $reply .= "Tagline: _{$bd['tagline']}_\n\n";
            $reply .= "• **Kuota:** {$bd['kuota']} siswa ({$bd['rombel']} rombel)\n";
            $reply .= "• **Kepala Program:** {$bd['kaprog']}\n";
            $reply .= "• **Fokus Pembelajaran:** {$bd['fokus']}\n";
            $reply .= "• **Fasilitas Unggulan:** {$bd['fasilitas']}\n";
            $reply .= "• **Mitra Industri:** {$bd['mitra_industri']}\n";
            $reply .= "• **Prospek Karir:** {$bd['prospek_kerja']}\n\n";
            $reply .= "Kunjungi karya siswa di [Katalog SMEXAMALL](/smexamall)!";

            return [
                'reply' => $reply,
                'suggestions' => ['Studio Live Shopping', 'Alfamart Class', 'Info PPDB 2026']
            ];
        }

        // 5. Jurusan MPLB
        if (str_contains($q, 'mplb') || str_contains($q, 'perkantoran') || str_contains($q, 'administrasi') || str_contains($q, 'sekretaris')) {
            $mplb = $dataset['jurusan']['MPLB'];
            $reply = "📂 **Jurusan {$mplb['nama']}**\n";
            $reply .= "Tagline: _{$mplb['tagline']}_\n\n";
            $reply .= "• **Kuota:** {$mplb['kuota']} siswa ({$mplb['rombel']} rombel)\n";
            $reply .= "• **Kepala Program:** {$mplb['kaprog']}\n";
            $reply .= "• **Fokus Pembelajaran:** {$mplb['fokus']}\n";
            $reply .= "• **Mitra Industri:** {$mplb['mitra_industri']}\n";
            $reply .= "• **Prospek Karir:** {$mplb['prospek_kerja']}";

            return [
                'reply' => $reply,
                'suggestions' => ['Lab Perkantoran', 'Mitra Pelindo', 'Syarat Masuk MPLB']
            ];
        }

        // 6. Jurusan AKL
        if (str_contains($q, 'akl') || str_contains($q, 'akuntansi') || str_contains($q, 'keuangan') || str_contains($q, 'pajak')) {
            $akl = $dataset['jurusan']['AKL'];
            $reply = "📊 **Jurusan {$akl['nama']}**\n";
            $reply .= "Tagline: _{$akl['tagline']}_\n\n";
            $reply .= "• **Kuota:** {$akl['kuota']} siswa ({$akl['rombel']} rombel)\n";
            $reply .= "• **Kepala Program:** {$akl['kaprog']}\n";
            $reply .= "• **Kompetensi:** {$akl['fokus']}\n";
            $reply .= "• **Software Praktik:** MYOB & Accurate Accounting, Spreadsheet.\n";
            $reply .= "• **Mitra:** {$akl['mitra_industri']}\n";
            $reply .= "• **Prospek Karir:** {$akl['prospek_kerja']}";

            return [
                'reply' => $reply,
                'suggestions' => ['Sertifikasi MYOB', 'Mitra Bank Jatim', 'Daftar AKL']
            ];
        }

        // 7. Jurusan LPB
        if (str_contains($q, 'lpb') || str_contains($q, 'bank') || str_contains($q, 'perbankan') || str_contains($q, 'teller')) {
            $lpb = $dataset['jurusan']['LPB'];
            $reply = "🏦 **Jurusan {$lpb['nama']}**\n";
            $reply .= "Tagline: _{$lpb['tagline']}_\n\n";
            $reply .= "• **Kuota:** {$lpb['kuota']} siswa ({$lpb['rombel']} rombel)\n";
            $reply .= "• **Kepala Program:** {$lpb['kaprog']}\n";
            $reply .= "• **Fasilitas:** {$lpb['fasilitas']}\n";
            $reply .= "• **Mitra Industri:** {$lpb['mitra_industri']}\n";
            $reply .= "• **Prospek Karir:** {$lpb['prospek_kerja']}";

            return [
                'reply' => $reply,
                'suggestions' => ['Mini Bank Sekolah', 'Peluang Kerja Teller', 'Daftar LPB']
            ];
        }

        // 8. SMEXAMALL & Produk Siswa
        if (str_contains($q, 'mall') || str_contains($q, 'produk') || str_contains($q, 'beli') || str_contains($q, 'tefa') || str_contains($q, 'karya')) {
            $reply = "🛍️ **SMEXAMALL** adalah unit Teaching Factory (TEFA) berstatus BLUD di SMKN 1 Probolinggo.\n\n";
            $reply .= "Di platform ini, kamu bisa membeli karya nyata siswa dan layanan keahlian:\n";
            $reply .= "• Jasa Website & Software (RPL)\n";
            $reply .= "• Live Shopping Agency & Produk Retail (Bisnis Digital)\n";
            $reply .= "• Jasa Administrasi & Desain Dokumen (MPLB)\n";
            $reply .= "• Asistensi Pembukuan & SPT Pajak (AKL)\n";
            $reply .= "• Layanan Tabungan Siswa Mini Bank (LPB)\n\n";
            $reply .= "Yuk jelajahi langsung di [Katalog SMEXAMALL BLUD](/smexamall)!";

            return [
                'reply' => $reply,
                'suggestions' => ['Buka Katalog Mall', 'Cara Order Produk', 'Info BLUD']
            ];
        }

        // 9. Bursa Kerja Khusus (BKK), PKL, Magang, Karir
        if (str_contains($q, 'kerja') || str_contains($q, 'bkk') || str_contains($q, 'lowongan') || str_contains($q, 'pkl') || str_contains($q, 'magang')) {
            $reply = "💼 **Bursa Kerja Khusus (BKK) & Program PKL SMKN 1 Probolinggo**\n\n";
            $reply .= "BKK SMEXA menjembatani siswa & alumni dengan 14 mitra industri ternama. Tingkat serapan kerja alumni mencapai **> 85%**!\n\n";
            $reply .= "• Program PKL (Praktik Kerja Lapangan) berlangsung selama **6 bulan** di industri terverifikasi.\n";
            $reply .= "• Mitra aktif: Jagoan Hosting, Axioo, Alfamart, Indomaret, Bank Jatim, PT Pelindo, Hummasoft, Maspion IT, Yamaha.\n\n";
            $reply .= "Cek lowongan kerja dan panduan PKL di [Portal Resmi BKK](/bkk).";

            return [
                'reply' => $reply,
                'suggestions' => ['Daftar Lowongan BKK', 'Mitra Industri', 'Program PKL 6 Bulan']
            ];
        }

        // 10. Profil, Lokasi, Kontak, Kepala Sekolah
        if (str_contains($q, 'alamat') || str_contains($q, 'lokasi') || str_contains($q, 'kontak') || str_contains($q, 'telepon') || str_contains($q, 'kepala sekolah') || str_contains($q, 'kepsek')) {
            $id = $dataset['identitas'];
            $reply = "🏫 **Profil Resmi {$id['nama']} ({$id['singkatan']})**\n\n";
            $reply .= "• **Status:** {$id['status']}\n";
            $reply .= "• **Akreditasi:** {$id['akreditasi']}\n";
            $reply .= "• **Kepala Sekolah:** {$id['kepala_sekolah']}\n";
            $reply .= "• **Alamat:** {$id['alamat']}\n";
            $reply .= "• **Telepon:** {$id['telepon']}\n";
            $reply .= "• **Email:** {$id['email']}\n";
            $reply .= "• **Jam Pelayanan:** {$id['jam_layanan']}";

            return [
                'reply' => $reply,
                'suggestions' => ['Info PPDB 2026', '5 Jurusan Keahlian', 'Lokasi Google Maps']
            ];
        }

        // 11. Sapaan Ramah Default
        if (str_contains($q, 'halo') || str_contains($q, 'hai') || str_contains($q, 'pagi') || str_contains($q, 'siang') || str_contains($q, 'sore') || str_contains($q, 'malam') || str_contains($q, 'assalamualaikum')) {
            $reply = "Halo! Selamat datang di portal resmi **SMKN 1 Probolinggo (SMEXA)**. 👋\n\n";
            $reply .= "Saya adalah **Asisten Pintar SMEXA**. Ada yang bisa saya bantu hari ini? Kamu bisa menanyakan seputar:\n";
            $reply .= "1. 📋 **PPDB 2026** (Kuota, 4 Jalur Seleksi, Syarat, Unduh Formulir PDF)\n";
            $reply .= "2. 🎓 **5 Jurusan Unggulan** (RPL, Bisnis Digital, MPLB, AKL, Layanan Perbankan)\n";
            $reply .= "3. 🛍️ **SMEXAMALL** (Produk Teaching Factory & Jasa Keahlian Siswa)\n";
            $reply .= "4. 💼 **Bursa Kerja Khusus (BKK)** & Peluang Kerja Industri";

            return [
                'reply' => $reply,
                'suggestions' => ['Info PPDB 2026', 'Rekomendasi Jurusan', 'Jurusan RPL', 'SMEXAMALL']
            ];
        }

        // Default response
        $reply = "Terima kasih atas pertanyaanmu! Sebagai Asisten Pintar SMEXA, saya siap membantu memberikan informasi seputar **PPDB 2026, 5 Program Keahlian, Produk SMEXAMALL, maupun Karir BKK** di SMKN 1 Probolinggo.\n\n";
        $reply .= "Bila ada pertanyaan spesifik lainnya atau butuh panduan langsung, kamu juga dapat menghubungi panitia di **(0335) 421121** atau mengunjungi [Halaman PPDB 2026](/ppdb).";

        return [
            'reply' => $reply,
            'suggestions' => ['Info PPDB 2026', '5 Jurusan Resmi', 'Unduh Formulir PDF', 'SMEXAMALL']
        ];
    }
}
