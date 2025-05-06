<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPembayaran;
use App\Models\Siswa;
use App\Models\TagihanPembayaran;
use Illuminate\Http\Request;

class TagihanPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tagihan = TagihanPembayaran::get();
        return view('data.pembayaran.index', compact('tagihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $murid = Siswa::all();
        return view('data.pembayaran.create', compact('murid'));
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

        // TagihanPembayaran::create([
        //     'jenis_pembayaran' => $request->jenis_pembayaran,
        //     'nominal' => $request->nominal,
        //     'tanggal_tempo' => $request->tanggal_tempo,
        //     'siswa_id' => $request->siswa_id,
        //     'status_tagihan' => $request->status_tagihan,
        // ]);

        return redirect()->route('data.pembayaran.index')->with('success', 'Tagihan berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tagihan = TagihanPembayaran::with('siswa')->get();
        return view('data.pembayaran.show', compact('tagihan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tagihan = TagihanPembayaran::get($id);
        $murid = TagihanPembayaran::all();
        return view('data.pembayaran.show', compact('tagihan','murid'));
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

        return redirect()->route('data.pembayaran.index')->with('success', 'Tagihan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TagihanPembayaran::get($id)->delete();
        return redirect()->route('data.pembayaran.index')->with('success', 'Tagihan berhasil dihapus');
    }
}
