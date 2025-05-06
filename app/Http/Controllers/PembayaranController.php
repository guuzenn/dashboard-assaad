<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPembayaran;
use App\Models\Siswa;
use App\Models\TagihanPembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    // public function index()
    // {
    //     $tagihan = [
    //         [
    //             'id' => 1,
    //             'siswa' => 'Aisyah Nurul',
    //             'jenis' => 'SPP Bulanan',
    //             'nominal' => 200000,
    //             'due_date' => '2024-05-31',
    //             'status' => 'Belum Bayar',
    //         ],
    //         [
    //             'id' => 2,
    //             'siswa' => 'Fahri Ahmad',
    //             'jenis' => 'Daftar Ulang',
    //             'nominal' => 500000,
    //             'due_date' => '2024-06-15',
    //             'status' => 'Lunas',
    //         ],
    //     ];

    //     return view('pembayaran.index', compact('tagihan'));
    // }

    // public function create()
    // {
    //     $siswa = ['Aisyah Nurul', 'Fahri Ahmad', 'Intan Zahra'];
    //     $jenis = ['SPP Bulanan', 'Daftar Ulang', 'Buku'];

    //     return view('pembayaran.create', compact('siswa', 'jenis'));
    // }

    public function index()
    {
        //
        $tagihan = TagihanPembayaran::get();
        return view('pembayaran.index', compact('tagihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $murid = Siswa::all();
        $jenis = ['SPP Bulanan', 'Daftar Ulang', 'Seragam'];
        return view('pembayaran.create', compact('murid','jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $request->validate([
            'jenis_pembayaran' => 'required|string',
            'nominal' => 'required|integer',
            'tanggal_tempo' => 'nullable|date',
            'siswa_id' => 'nullable',
            'status_tagihan' => 'nullable|in:aktif,non-aktif'
        ]);

        $tagihan=TagihanPembayaran::create([
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'nominal' => $request->nominal,
            'tanggal_tempo' => $request->tanggal_tempo,
            'siswa_id' => $request->siswa_id,
            'status_tagihan' => $request->status_tagihan,
        ]);

        if ($request->siswa_id) {
           // Untuk 1 siswa
            RiwayatPembayaran::create([
                'siswa_id' => $request->siswa_id,
                'tagihan_id' => $tagihan->id,
                'status' => 'unpaid',
            ]);
        } else {
            // Untuk semua siswa
            $siswa = Siswa::all();
            foreach ($siswa as $siswa) {
                RiwayatPembayaran::create([
                    'student_id' => $siswa->id,
                    'tagihan_id' => $tagihan->id,
                    'status' => 'unpaid',
                ]);
            }
        }

        return redirect()->route('data.pembayaran.index')->with('success', 'Tagihan berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tagihan = TagihanPembayaran::with('siswa')->get();
        return view('pembayaran.show', compact('tagihan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tagihan = TagihanPembayaran::get($id);
        $murid = Siswa::all();
        return view('pembayaran.show', compact('tagihan','murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis_pembayaran' => 'required|string',
            'nominal' => 'required|integer',
            'tanggal_tempo' => 'nullable|date',
            'siswa_id' => 'nullable',
            'status' => 'required|in:aktif,non-aktif'
        ]);
        $tagihan=TagihanPembayaran::get($id);
        $tagihan->update([
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'nominal' => $request->nominal,
            'tanggal_tempo' => $request->tanggal_tempo,
            'siswa_id' => $request->siswa_id,
            'status' => $request->status,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Tagihan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TagihanPembayaran::get($id)->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Tagihan berhasil dihapus');
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


    // public function showBills()
    // {
    //     $siswa = auth()->user()->siswa;
    //     $bills = RiwayatPembayaran::with('tagihan')->where('siswa_id', $siswa->id)->get();
    //     return view('stupor.bills.index', compact('bills'));
    // }

    public function pay(RiwayatPembayaran $riwayatPembayaran)
{
    $orderId = 'ORD-' . time();

    $params = [
        'transaction_details' => [
            'order_id' => $orderId,
            'gross_amount' => $riwayatPembayaran->tagihan->nominal,
        ],
        'customer_details' => [
            'first_name' => $riwayatPembayaran->siswa->nama_lengkap,
            // 'email' => auth()->user()->email,
        ]
    ];

    $snapToken = \Midtrans\Snap::getSnapToken($params);

    $riwayatPembayaran->update([
        'midtrans_order_id' => $orderId,
    ]);

    return view('stupor.pembayaran.pay', compact('snapToken', 'riwayatPembayaran'));
}
}
