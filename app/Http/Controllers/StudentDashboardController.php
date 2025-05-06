<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $totalTagihan = 10000000;      
        $totalPembayaran = 7500000;    

        return view('student.dashboard', compact('totalTagihan', 'totalPembayaran'));
    }
}
