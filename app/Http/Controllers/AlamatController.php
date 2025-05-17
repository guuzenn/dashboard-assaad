<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;

class AlamatController extends Controller
{
    public function getKabupaten($provinsi_id)
    {
        $kabupaten = Kabupaten::where('provinsi_id', $provinsi_id)->get();
        return response()->json($kabupaten);
    }

    public function getKecamatan($kabupaten_id)
    {
        $kecamatan = Kecamatan::where('kabupaten_id', $kabupaten_id)->get();
        return response()->json($kecamatan);
    }

    public function getDesa($kecamatan_id)
    {
        $desa = Desa::where('kecamatan_id', $kecamatan_id)->get();
        return response()->json($desa);
    }
}
