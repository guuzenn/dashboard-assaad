<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataSiswa = [
            [
                'nama_lengkap' => 'Aisyah Putri',
                'tanggal_lahir' => '2019-05-12',
                'tempat_lahir' => 'Jakarta',
                'usia' => 5,
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Melati No. 1',
                'riwayat_penyakit' => 'Tidak Ada',
                'nama_ayah' => 'Ahmad',
                'pekerjaan_ayah' => 'Guru',
                'hp_ayah' => '081234567001',
                'nama_ibu' => 'Siti',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567011',
                'kelas_id' => 1,
            ],
            [
                'nama_lengkap' => 'Budi Santoso',
                'tanggal_lahir' => '2018-10-30',
                'tempat_lahir' => 'Bandung',
                'usia' => 6,
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Kenanga No. 2',
                'riwayat_penyakit' => 'Asma',
                'nama_ayah' => 'Slamet',
                'pekerjaan_ayah' => 'Petani',
                'hp_ayah' => '081234567002',
                'nama_ibu' => 'Dewi',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567012',
                'kelas_id' => 1,
            ],
            [
                'nama_lengkap' => 'Chandra Wijaya',
                'tanggal_lahir' => '2019-03-15',
                'tempat_lahir' => 'Surabaya',
                'usia' => 5,
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Kristen',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Merpati No. 3',
                'riwayat_penyakit' => 'Tidak Ada',
                'nama_ayah' => 'Sudarno',
                'pekerjaan_ayah' => 'Dokter',
                'hp_ayah' => '081234567003',
                'nama_ibu' => 'Lina',
                'pekerjaan_ibu' => 'Perawat',
                'hp_ibu' => '081234567013',
                'kelas_id' => 2,
            ],
            [
                'nama_lengkap' => 'Dina Maharani',
                'tanggal_lahir' => '2018-12-22',
                'tempat_lahir' => 'Malang',
                'usia' => 6,
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Hindu',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Sumber No. 4',
                'riwayat_penyakit' => 'Flu',
                'nama_ayah' => 'Sutrisno',
                'pekerjaan_ayah' => 'Pegawai Negeri',
                'hp_ayah' => '081234567004',
                'nama_ibu' => 'Desi',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567014',
                'kelas_id' => 2,
            ],
            [
                'nama_lengkap' => 'Eka Pratiwi',
                'tanggal_lahir' => '2019-01-25',
                'tempat_lahir' => 'Semarang',
                'usia' => 5,
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Melur No. 5',
                'riwayat_penyakit' => 'Tidak Ada',
                'nama_ayah' => 'Bambang',
                'pekerjaan_ayah' => 'Wiraswasta',
                'hp_ayah' => '081234567005',
                'nama_ibu' => 'Tuti',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567015',
                'kelas_id' => 1,
            ],
            [
                'nama_lengkap' => 'Fahri Alamsyah',
                'tanggal_lahir' => '2018-06-10',
                'tempat_lahir' => 'Yogyakarta',
                'usia' => 6,
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Cempaka No. 6',
                'riwayat_penyakit' => 'Demam',
                'nama_ayah' => 'Rizal',
                'pekerjaan_ayah' => 'Polisi',
                'hp_ayah' => '081234567006',
                'nama_ibu' => 'Amelia',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567016',
                'kelas_id' => 3,
            ],
            [
                'nama_lengkap' => 'Gina Oktaviani',
                'tanggal_lahir' => '2019-09-11',
                'tempat_lahir' => 'Medan',
                'usia' => 5,
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Anggrek No. 7',
                'riwayat_penyakit' => 'Tidak Ada',
                'nama_ayah' => 'Joni',
                'pekerjaan_ayah' => 'Pedagang',
                'hp_ayah' => '081234567007',
                'nama_ibu' => 'Lina',
                'pekerjaan_ibu' => 'Perawat',
                'hp_ibu' => '081234567017',
                'kelas_id' => 2,
            ],
            [
                'nama_lengkap' => 'Hadi Prasetyo',
                'tanggal_lahir' => '2018-11-05',
                'tempat_lahir' => 'Bandung',
                'usia' => 6,
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Mawar No. 8',
                'riwayat_penyakit' => 'Tidak Ada',
                'nama_ayah' => 'Rudi',
                'pekerjaan_ayah' => 'Karyawan Swasta',
                'hp_ayah' => '081234567008',
                'nama_ibu' => 'Yanti',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567018',
                'kelas_id' => 3,
            ],
            [
                'nama_lengkap' => 'Indah Nuraini',
                'tanggal_lahir' => '2019-04-17',
                'tempat_lahir' => 'Solo',
                'usia' => 5,
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Mutiara No. 9',
                'riwayat_penyakit' => 'Tidak Ada',
                'nama_ayah' => 'Anton',
                'pekerjaan_ayah' => 'Wiraswasta',
                'hp_ayah' => '081234567009',
                'nama_ibu' => 'Rina',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567019',
                'kelas_id' => 1,
            ]
        ];

        foreach ($dataSiswa as $index => $siswa) {
            $user = User::factory()->create([
                'name' => $siswa['nama_lengkap'],
                'email' => 'siswa' . ($index + 1) . '@mail.com',
                'password' => Hash::make('siswapassword'),
                'role' => 'siswa', // opsional jika kamu pakai field ini
            ]);

            Siswa::create(array_merge($siswa, [
                'user_id' => $user->id,
            ]));
        }
    }
}
