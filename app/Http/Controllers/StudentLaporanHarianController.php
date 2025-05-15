<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanHarian;
use Illuminate\Support\Facades\Auth;

class StudentLaporanHarianController extends Controller
{
    public function index()
    {
        $siswa = Auth::user()->siswa;
        $laporan = LaporanHarian::where('siswa_id', $siswa->id)->orderBy('tanggal', 'desc')->get();
        return view('student.laporan_harian.index', compact('laporan'));
    }

    public function show($id)
    {
        $laporan =  LaporanHarian::findOrFail($id);
        return view('student.laporan_harian.show', compact('laporan'));
    }


}
