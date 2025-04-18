<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        $ppdb = [
            (object)[
                'id' => 1,
                'nama_lengkap' => 'Aisyah Putri',
                'tanggal_lahir' => '2018-03-15',
                'tempat_lahir' => 'Jakarta',
                'usia' => 6,
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'status_keluarga' => 'Anak Kandung',
                'alamat' => 'Jl. Melati No. 12',
                'riwayat_penyakit' => null,
                'nama_ayah' => 'Ahmad Fauzi',
                'pekerjaan_ayah' => 'Karyawan Swasta',
                'hp_ayah' => '081234567890',
                'nama_ibu' => 'Siti Rahma',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'hp_ibu' => '081234567891',
                'status_pendaftaran' => 'Diterima',
                'status_pembayaran' => 'Lunas',
                'tanggal_daftar' => '2024-05-01',
            ],
            (object)[
                'id' => 2,
                'nama_lengkap' => 'Budi Santoso',
                'tanggal_lahir' => '2017-10-20',
                'tempat_lahir' => 'Bandung',
                'usia' => 7,
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Kristen',
                'status_keluarga' => 'Anak Angkat',
                'alamat' => 'Jl. Kenanga No. 45',
                'riwayat_penyakit' => 'Asma',
                'nama_ayah' => 'Slamet Riyadi',
                'pekerjaan_ayah' => 'Pedagang',
                'hp_ayah' => '081298765432',
                'nama_ibu' => 'Maya Sari',
                'pekerjaan_ibu' => 'Guru',
                'hp_ibu' => '081298765431',
                'status_pendaftaran' => 'Menunggu',
                'status_pembayaran' => 'Belum Lunas',
                'tanggal_daftar' => '2024-05-10',
            ]
        ];

        return view('ppdb.index', compact('ppdb'));
    }

    public function create()
    {
        return view('ppdb.create');
    }

    public function edit($id)
    {
        $ppdb = (object)[
            'id' => $id,
            'nama_lengkap' => 'Aisyah Putri',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2018-05-12',
            'usia' => 6,
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'status_keluarga' => 'Anak Kandung',
            'alamat' => 'Jl. Merpati No. 17, Bandung',
            'riwayat_penyakit' => 'Asma',
            'nama_ayah' => 'Bapak Joko',
            'pekerjaan_ayah' => 'Karyawan Swasta',
            'hp_ayah' => '081234567890',
            'nama_ibu' => 'Ibu Siti',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'hp_ibu' => '089876543210',
            'status_pendaftaran' => 'Menunggu',
            'status_pembayaran' => 'Belum Lunas',
            'tanggal_daftar' => '2024-06-01',
        ];

        return view('ppdb.edit', compact('ppdb'));
    }


    public function show($id)
    {
        $ppdb = (object)[
            'id' => $id,
            'nama_lengkap' => 'Nabila Putri',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2018-05-20',
            'usia' => 6,
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'status_keluarga' => 'Anak Kandung',
            'alamat' => 'Jl. Merpati No. 10, Bandung',
            'riwayat_penyakit' => null,
            'nama_ayah' => 'Bapak Hadi',
            'pekerjaan_ayah' => 'Pegawai Negeri',
            'hp_ayah' => '08123456789',
            'nama_ibu' => 'Ibu Sari',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'hp_ibu' => '08129876543',
            'status_pendaftaran' => 'Menunggu',
            'status_pembayaran' => 'Belum Lunas',
        ];

        return view('ppdb.show', compact('ppdb'));
    }

}



