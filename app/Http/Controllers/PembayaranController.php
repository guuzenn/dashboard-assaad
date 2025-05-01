<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $tagihan = [
            [
                'id' => 1,
                'siswa' => 'Aisyah Nurul',
                'jenis' => 'SPP Bulanan',
                'nominal' => 200000,
                'due_date' => '2024-05-31',
                'status' => 'Belum Bayar',
            ],
            [
                'id' => 2,
                'siswa' => 'Fahri Ahmad',
                'jenis' => 'Daftar Ulang',
                'nominal' => 500000,
                'due_date' => '2024-06-15',
                'status' => 'Lunas',
            ],
        ];

        return view('pembayaran.index', compact('tagihan'));
    }

    public function create()
    {
        $siswa = ['Aisyah Nurul', 'Fahri Ahmad', 'Intan Zahra'];
        $jenis = ['SPP Bulanan', 'Daftar Ulang', 'Buku'];

        return view('pembayaran.create', compact('siswa', 'jenis'));
    }

    public function riwayat()
    {
        $riwayat = [
            [
                'siswa' => 'Alya Zahra',
                'jenis' => 'SPP Juli',
                'nominal' => 150000,
                'metode' => 'Cash',
                'tanggal' => '2024-07-05',
                'status' => 'Lunas',
            ],
            [
                'siswa' => 'Rafi Maulana',
                'jenis' => 'Daftar Ulang',
                'nominal' => 125000,
                'metode' => 'Transfer',
                'tanggal' => '2024-07-10',
                'status' => 'Cicilan',
            ],
            [
                'siswa' => 'Nabila Aisyah',
                'jenis' => 'Seragam',
                'nominal' => 0,
                'metode' => '-',
                'tanggal' => '-',
                'status' => 'Belum',
            ],
        ];

        return view('pembayaran.riwayat', compact('riwayat'));
    }


    public function show($id)
    {
        $pembayaran = [
            'id' => $id,
            'siswa' => 'Alya Zahra',
            'jenis' => 'SPP Juli',
            'nominal' => 150000,
            'metode' => 'Cash',
            'tanggal' => '2024-07-05',
            'status' => 'Lunas',
        ];

        return view('pembayaran.show', compact('pembayaran'));
    }

    public function edit($id)
    {
        $pembayaran = [
            'id' => $id,
            'siswa' => 'Alya Zahra',
            'jenis' => 'SPP Juli',
            'nominal' => 150000,
            'metode' => 'Cash',
            'tanggal' => '2024-07-05',
            'status' => 'Lunas',
        ];

        $daftar_metode = ['Cash', 'Transfer', 'QRIS'];
        $daftar_status = ['Belum', 'Cicilan', 'Lunas'];

        return view('pembayaran.edit', compact('pembayaran', 'daftar_metode', 'daftar_status'));
    }


}

