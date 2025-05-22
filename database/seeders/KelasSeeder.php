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
