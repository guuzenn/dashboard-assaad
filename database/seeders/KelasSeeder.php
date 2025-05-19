<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'nama' => 'Kelas A',
                'deskripsi' => 'Kelas untuk siswa tingkat dasar',
                'tingkat' => 'Dasar',
                'tahun_ajar' => '2025/2026',
                'status' => 'aktif',
                'guru_id' => null, // Tidak ada guru yang ditetapkan
            ],
            [
                'nama' => 'Kelas B',
                'deskripsi' => 'Kelas untuk siswa tingkat menengah',
                'tingkat' => 'Menengah',
                'tahun_ajar' => '2025/2026',
                'status' => 'aktif',
                'guru_id' => null, // Tidak ada guru yang ditetapkan
            ],
            [
                'nama' => 'Kelas C',
                'deskripsi' => 'Kelas untuk siswa tingkat lanjut',
                'tingkat' => 'Lanjut',
                'tahun_ajar' => '2025/2026',
                'status' => 'aktif',
                'guru_id' => null, // Tidak ada guru yang ditetapkan
            ],
            [
                'nama' => 'Kelas D',
                'deskripsi' => 'Kelas untuk siswa tingkat dasar',
                'tingkat' => 'Dasar',
                'tahun_ajar' => '2025/2026',
                'status' => 'non-aktif',
                'guru_id' => null, // Tidak ada guru yang ditetapkan
            ],
            [
                'nama' => 'Kelas E',
                'deskripsi' => 'Kelas untuk siswa tingkat menengah',
                'tingkat' => 'Menengah',
                'tahun_ajar' => '2025/2026',
                'status' => 'aktif',
                'guru_id' => null, // Tidak ada guru yang ditetapkan
            ],
        ]);

        DB::table('kelas')->insert([
            [
                'nama' => 'KIDDY A',
                'deskripsi' => 'Kelas untuk siswa usia Kiddy A',
                'tingkat' => 'Kiddy',
                'tahun_ajar' => '2025/2026',
                'status' => 'aktif',
                'guru_id' => null,
            ],
            [
                'nama' => 'TODDLER B',
                'deskripsi' => 'Kelas untuk siswa usia Toddler B',
                'tingkat' => 'Toddler',
                'tahun_ajar' => '2025/2026',
                'status' => 'aktif',
                'guru_id' => null,
            ],
        ]);
    }
}
