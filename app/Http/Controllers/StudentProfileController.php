<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function index()
    {
        $student = (object) [
            'nama_lengkap' => 'Budi Santoso',
            'tanggal_lahir' => '2006-05-12',
            'agama' => 'Islam',
            'jenis_kelamin' => 'Laki-laki',
            'riwayat_penyakit' => 'Asma',
            'alamat' => 'Jl. Mawar No. 10, Jakarta',
            'nama_ayah' => 'Slamet Santoso',
            'pekerjaan_ayah' => 'Karyawan Swasta',
            'hp_ayah' => '081234567890',
            'nama_ibu' => 'Siti Aminah',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'hp_ibu' => '081298765432',
            'kelas' => (object) [
                'nama' => 'X IPA 1'
            ],
        ];

        return view('student.profile', compact('student'));
    }
}
