<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalonSiswa;

class CalonSiswaSeeder extends Seeder
{
    public function run()
    {
        // Create 2 CalonSiswa in Cileungsi, Jawa Barat
        \App\Models\CalonSiswa::factory()->count(1)->create([
            'provinsi' => 'Jawa Barat',
            'kabupaten_kota' => 'Bogor',
            'kecamatan' => 'Cileungsi',
            'desa_kelurahan' => 'Cileungsi',
            'alamat_lengkap' => 'Jl. Raya Cileungsi No. 123',
            'latitude' => '-6.402484',
            'longitude' => '106.979420',
        ]);
    }
}
