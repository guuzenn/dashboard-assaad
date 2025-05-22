<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPembayaran;
use App\Models\Siswa;
use App\Models\TagihanPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $jenis = ['SPP Bulanan', 'Daftar Ulang', 'Seragam','Uang Pangkal'];
        return view('pembayaran.create', compact('murid','jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $request->validate([
            'judul' => 'required|string',
            'nominal' => 'required|integer',
            'tanggal_tempo' => 'nullable|date',
            'siswa_id' => 'nullable',
            'deskripsi' => 'nullable|string',
            // 'status_tagihan' => 'nullable|in:aktif,non-aktif'
        ]);

        $tagihan=TagihanPembayaran::create([
            'judul' => $request->judul,
            'nominal' => $request->nominal,
            'tanggal_tempo' => $request->tanggal_tempo,
            'siswa_id' => $request->siswa_id,
            'deskripsi' => $request->deskripsi,
            // 'status_tagihan' => $request->status_tagihan,
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
                    'siswa_id' => $siswa->id,
                    'tagihan_id' => $tagihan->id,
                    'status' => 'unpaid',
                ]);
            }
        }

        return redirect()->route('pembayaran.index')->with('success', 'Tagihan berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tagihan = TagihanPembayaran::with('siswa')->first();
        return view('pembayaran.show', compact('tagihan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
       $tagihan = TagihanPembayaran::findOrFail($id);
        $murid = Siswa::all();
        $jenis = ['SPP Bulanan', 'Daftar Ulang', 'Seragam','Uang Pangkal'];
        return view('pembayaran.edit', compact('tagihan', 'murid', 'jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'nominal' => 'required|integer',
            'tanggal_tempo' => 'nullable|date',
            'siswa_id' => 'nullable',
            'deskripsi' => 'nullable|string',
        ]);

        $tagihan = TagihanPembayaran::findOrFail($id);

        // Update data tagihan
        $tagihan->update([
            'judul' => $request->judul,
            'nominal' => $request->nominal,
            'tanggal_tempo' => $request->tanggal_tempo,
            'siswa_id' => $request->siswa_id,
            'deskripsi' => $request->deskripsi,
        ]);

        // Hapus semua riwayat pembayaran lama terkait tagihan ini
        RiwayatPembayaran::where('tagihan_id', $tagihan->id)->delete();

        if ($request->siswa_id) {
            // Hanya untuk satu siswa
            RiwayatPembayaran::create([
                'siswa_id' => $request->siswa_id,
                'tagihan_id' => $tagihan->id,
                'status' => 'unpaid',
            ]);
        } else {
            // Untuk semua siswa
            $siswa = Siswa::all();
            foreach ($siswa as $s) {
                RiwayatPembayaran::create([
                    'siswa_id' => $s->id,
                    'tagihan_id' => $tagihan->id,
                    'status' => 'unpaid',
                ]);
            }
        }

        return redirect()->route('pembayaran.index')->with('success', 'Tagihan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tagihan = TagihanPembayaran::findOrFail($id);

        // Hapus semua riwayat pembayaran terkait
        RiwayatPembayaran::where('tagihan_id', $tagihan->id)->delete();

        // Hapus tagihan
        $tagihan->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Tagihan berhasil dihapus');
    }

    public function riwayat()
    {
        $riwayat= RiwayatPembayaran::with('siswa','tagihan')->get();
        return view('pembayaran.riwayat', compact('riwayat'));
    }

}
