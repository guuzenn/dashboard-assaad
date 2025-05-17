<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComproController extends Controller
{
    
    public function event()
    {
        $events = [
            [
                'id' => 1,
                'title' => 'Outing Class Seru',
                'desc' => 'Belajar sambil bermain di alam terbuka.',
                'img' => '/assets/images/event1.jpg',
                'color' => 'orange'
            ],
            [
                'id' => 2,
                'title' => 'Lomba Hari Anak',
                'desc' => 'Anak-anak menunjukkan bakat mereka!',
                'img' => '/assets/images/event2.jpg',
                'color' => 'green'
            ]
        ];

        return view('compro.event', compact('events'));
    }

    // Menampilkan detail event berdasarkan id
    public function eventDetail($id)
    {
        $events = [
            1 => [
                'title' => 'Outing Class Seru',
                'desc' => 'Kegiatan belajar di luar kelas yang menyenangkan dan edukatif. Anak-anak diajak bermain sambil mengenal alam.',
                'img' => '/assets/images/event1.jpg',
                'color' => 'orange'
            ],
            2 => [
                'title' => 'Lomba Hari Anak',
                'desc' => 'Anak-anak mengikuti berbagai lomba seru untuk mengasah keterampilan dan percaya diri mereka.',
                'img' => '/assets/images/event2.jpg',
                'color' => 'green'
            ]
        ];

        if (!isset($events[$id])) {
            abort(404);
        }

        $event = $events[$id];

        return view('compro.event_detail', compact('event'));
    }
}
