<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanHarian;
use Illuminate\Support\Facades\Auth;

class StudentLaporanHarianController extends Controller
{
    public function index()
    {
        $laporan = [
            (object)[
                'id' => 1,
                'judul' => 'Belajar Matematika',
                'tanggal' => '2024-06-20',
                'kelas' => (object)['nama' => 'X IPA 1'],
                'foto' => 'https://via.placeholder.com/100'
            ],
            (object)[
                'id' => 2,
                'judul' => 'Praktek Kimia',
                'tanggal' => '2024-06-19',
                'kelas' => (object)['nama' => 'X IPA 1'],
                'foto' => 'https://via.placeholder.com/100'
            ],
        ];

        $kelas_list = [
            (object)['id' => 1, 'nama' => 'X IPA 1'],
            (object)['id' => 2, 'nama' => 'X IPS 1'],
        ];

        return view('student.laporan_harian.index', compact('laporan', 'kelas_list'));
    }

    public function show($id)
    {
        $laporan = (object) [
            'id' => $id,
            'judul' => 'Kegiatan Bersih-Bersih Kelas',
            'tanggal' => '2024-06-15',
            'deskripsi' => 'Siswa membersihkan ruang kelas bersama-sama, termasuk menyapu, mengepel, dan merapikan meja kursi.',
            'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Kegiatan',
            'kelas' => (object) [
                'nama' => 'Kelas 10 IPA 1'
            ]
        ];

        return view('student.laporan_harian.show', compact('laporan'));
    }


}
