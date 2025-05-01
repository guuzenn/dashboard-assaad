<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CicilanController extends Controller
{
    public function index()
    {
        $cicilan = [
            [
                'id' => 1,
                'siswa' => 'Alya Zahra',
                'jenis_tagihan' => 'SPP Juli',
                'nominal' => 150000,
                'jumlah_termin' => 3,
                'catatan' => 'Orang tua sedang ada kebutuhan mendesak.',
                'status' => 'Pending',
            ],
            [
                'id' => 2,
                'siswa' => 'Rafi Maulana',
                'jenis_tagihan' => 'Daftar Ulang',
                'nominal' => 250000,
                'jumlah_termin' => 2,
                'catatan' => 'Meminta keringanan karena baru pindah.',
                'status' => 'Disetujui',
            ],
            [
                'id' => 3,
                'siswa' => 'Nabila Aisyah',
                'jenis_tagihan' => 'Seragam',
                'nominal' => 200000,
                'jumlah_termin' => 4,
                'catatan' => 'Penghasilan orang tua tidak tetap.',
                'status' => 'Ditolak',
            ],
        ];

        return view('pembayaran.cicilan.index', compact('cicilan'));
    }

    public function show($id)
    {

        $cicilan = [
            'id' => $id,
            'siswa' => 'Rafi Maulana',
            'jenis_tagihan' => 'Daftar Ulang',
            'total_tagihan' => 250000,
            'jumlah_termin' => 2,
            'status' => 'Disetujui',
        ];

        // Dummy termin cicilan
        $termin = [
            [
                'termin_ke' => 1,
                'nominal' => 125000,
                'jatuh_tempo' => '2024-07-15',
                'status' => 'Lunas',
                'tanggal_bayar' => '2024-07-10',
                'metode' => 'Cash',
            ],
            [
                'termin_ke' => 2,
                'nominal' => 125000,
                'jatuh_tempo' => '2024-08-15',
                'status' => 'Belum Bayar',
                'tanggal_bayar' => null,
                'metode' => null,
            ],
        ];

        return view('pembayaran.cicilan.show', compact('cicilan', 'termin'));
    }

}
