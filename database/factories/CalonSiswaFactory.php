<?php

namespace Database\Factories;

use App\Models\CalonSiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalonSiswaFactory extends Factory
{
    protected $model = CalonSiswa::class;

    public function definition()
    {
        return [
            'user_id' => 19, // Adjust as needed
            'nama_lengkap' => $this->faker->name,
            'nama_panggilan' => $this->faker->firstName,
            'jenjang_kelas' => 'SD',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2018-07-01'),
            'usia' => '6',
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen']),
            'anak_ke' => 1,
            'status_dalam_keluarga' => 'Anak Kandung',
            'jumlah_saudara' => 1,
            'provinsi' => 'Jawa Barat',
            'kabupaten_kota' => 'Bogor',
            'kecamatan' => 'Cileungsi',
            'desa_kelurahan' => 'Cileungsi',
            'alamat_lengkap' => 'Jl. Raya Cileungsi No. 123',
            'latitude' => '-6.402484',
            'longitude' => '106.979420',
            'kk' => null,
            'akta_lahir' => null,
            'ktp_ortu' => null,
            'penyakit_bawaan' => null,
            'alergi' => null,
            'pengawasan_medis' => null,
            'cedera_serius' => null,
            'nama_ibu' => $this->faker->name('female'),
            'no_hp_ibu' => '081234567890',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'nama_ayah' => $this->faker->name('male'),
            'no_hp_ayah' => '081234567891',
            'pekerjaan_ayah' => 'Karyawan Swasta',
            'status' => 'menunggu',
        ];
    }
}
