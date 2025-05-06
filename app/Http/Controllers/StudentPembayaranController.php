<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPembayaranController extends Controller
{
    public function index()
    {
        $tagihan = [
            [
                'id' => 1,
                'jenis' => 'SPP',
                'nominal' => 500000,
                'due_date' => '2024-07-10',
                'status' => 'Belum Bayar',
            ],
            [
                'id' => 2,
                'jenis' => 'Daftar Ulang',
                'nominal' => 1000000,
                'due_date' => '2024-08-01',
                'status' => 'Cicilan',
            ],
            [
                'id' => 3,
                'jenis' => 'SPP',
                'nominal' => 500000,
                'due_date' => '2024-06-10',
                'status' => 'Lunas',
            ],
        ];

        return view('student.pembayaran.index', compact('tagihan'));
    }
}
