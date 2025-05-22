<?php

namespace App\Http\Controllers;

use App\Models\cicilan;
use App\Models\PengajuanCicilan;
use Illuminate\Http\Request;

class CicilanController extends Controller
{
    public function index()
    {

        $cicilan = PengajuanCicilan::get();
        return view('pembayaran.cicilan.index', compact('cicilan'));
    }

    public function show($id)
    {

        // $cicilan = [
        //     'id' => $id,
        //     'siswa' => 'Rafi Maulana',
        //     'jenis_tagihan' => 'Daftar Ulang',
        //     'total_tagihan' => 250000,
        //     'jumlah_termin' => 2,
        //     'status' => 'Disetujui',
        // ];

        // Dummy termin cicilan
        $cicilan = Cicilan::with('pengajuan')->where('pengajuan_id',$id)->get();
        $pengajuan = PengajuanCicilan::findOrFail($id);
        return view('pembayaran.cicilan.show', compact('cicilan', 'pengajuan'));
    }

    public function create($id)
    {
        $cicilan = PengajuanCicilan::findOrFail($id);
        return view('pembayaran.cicilan.create', compact('cicilan'));
    }

    public function tolak($id)
    {
        $pengajuan = PengajuanCicilan::findOrFail($id);
        $pengajuan->status = 'Ditolak';
        $pengajuan->save();

        return back()->with('error', 'Pengajuan cicilan ditolak.');
    }

   public function setujui(Request $request, $pengajuanId)
    {
        $request->validate([
            'cicilan' => 'required|array',
            'cicilan.*.nominal' => 'required|numeric',
            'cicilan.*.tanggal_tempo' => 'required|date',
        ]);

        $pengajuan = PengajuanCicilan::with('riwayat')->findOrFail($pengajuanId);

        // Tandai pengajuan disetujui
        $pengajuan->status = 'Disetujui';
        $pengajuan->save();

        // Tandai riwayat sebagai memakai cicilan
        $riwayat = $pengajuan->riwayat;
        $riwayat-> status = 'cicilan';
        $riwayat->save();

        // Buat termin cicilan berdasarkan input admin
        foreach ($request->cicilan as $c) {
            Cicilan::create([
                'riwayat_id' => $riwayat->id,
                'pengajuan_id' => $pengajuan->id,
                'nominal' => $c['nominal'],
                'tanggal_tempo' => $c['tanggal_tempo'],
                'status' => 'belum lunas'
            ]);
        }

        return redirect()->route('pembayaran.cicilan.index')->with('success', 'Cicilan berhasil dibuat dan pengajuan disetujui.');
    }

}
