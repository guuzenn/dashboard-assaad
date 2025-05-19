<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ComproController extends Controller
{

    public function event()
    {
        // $events = [
        //     [
        //         'id' => 1,
        //         'title' => 'Outing Class Seru',
        //         'desc' => 'Belajar sambil bermain di alam terbuka.',
        //         'img' => '/assets/images/event1.jpg',
        //         'color' => 'orange'
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'Lomba Hari Anak',
        //         'desc' => 'Anak-anak menunjukkan bakat mereka!',
        //         'img' => '/assets/images/event2.jpg',
        //         'color' => 'green'
        //     ]
        // ];
        $events = Kegiatan::orderBy('tanggal', 'desc')->get();

        return view('compro.event', compact('events'));
    }

    // Menampilkan detail event berdasarkan id
    public function eventDetail($id)
    {
        $event = \App\Models\Kegiatan::findOrFail($id);
        $otherEvents = \App\Models\Kegiatan::where('id', '!=', $id)->orderBy('tanggal', 'desc')->take(4)->get();
        return view('compro.event-detail', compact('event', 'otherEvents'));
    }

    // public function beranda()
    // {
    //     $visi = VisiMisi::where('judul', 'Visi')->first();
    //     $misi = VisiMisi::where('judul', 'Misi')->first();
    //     return view('compro.beranda', compact('visi', 'misi'));
    // }
}
