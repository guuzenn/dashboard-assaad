<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentCicilanController extends Controller
{
    public function index()
    {
        $cicilan = [
            [
                'id' => 1,
                'jenis_tagihan' => 'SPP April 2024',
                'nominal' => 500000,
                'jumlah_termin' => 2,
                'catatan' => 'Minta termin 2 bulan',
                'status' => 'Disetujui',
            ],
            [
                'id' => 2,
                'jenis_tagihan' => 'SPP Mei 2024',
                'nominal' => 500000,
                'jumlah_termin' => 3,
                'catatan' => 'Orang tua baru ganti pekerjaan',
                'status' => 'Menunggu',
            ],
            [
                'id' => 3,
                'jenis_tagihan' => 'Daftar Ulang 2024',
                'nominal' => 1000000,
                'jumlah_termin' => 4,
                'catatan' => 'Perlu cicilan panjang',
                'status' => 'Ditolak',
            ],
        ];
    
        return view('student.pembayaran.cicilan', compact('cicilan'));
    }

    public function create()
    {
        // Dummy jenis tagihan (biasanya dari database)
        $jenisTagihan = ['SPP', 'Daftar Ulang', 'Buku Tahunan'];

        return view('   student.pembayaran.create_cicilan', compact('jenisTagihan'));
    }

    public function store(Request $request)
    {
        dd('store dipanggil');
    }


}
