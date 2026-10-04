<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Super Admin
        User::updateOrCreate(
            ['email' => 'admin@smkn1probolinggo.sch.id'],
            [
                'name'     => 'Bambang Sudarmono, S.Kom',
                'email'    => 'admin@smkn1probolinggo.sch.id',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
            ]
        );

        // Guru TEFA
        User::updateOrCreate(
            ['email' => 'guru.tefa@smkn1probolinggo.sch.id'],
            [
                'name'     => 'Dra. Sri Wahyuni, M.Pd',
                'email'    => 'guru.tefa@smkn1probolinggo.sch.id',
                'password' => Hash::make('guru123'),
                'role'     => 'teacher',
            ]
        );

        // Siswa Seller
        User::updateOrCreate(
            ['email' => 'siswa.rpl@smkn1probolinggo.sch.id'],
            [
                'name'     => 'Ahmad Fadhil (XII RPL 1)',
                'email'    => 'siswa.rpl@smkn1probolinggo.sch.id',
                'password' => Hash::make('siswa123'),
                'role'     => 'seller',
            ]
        );

        // Calon Siswa / User Publik
        User::updateOrCreate(
            ['email' => 'calon.siswa@gmail.com'],
            [
                'name'     => 'Muhammad Rizky Pratama',
                'email'    => 'calon.siswa@gmail.com',
                'password' => Hash::make('siswa123'),
                'role'     => 'student',
            ]
        );

        $this->command->info('✅ 4 user accounts seeded successfully.');
        $this->call([
            PpdbSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
