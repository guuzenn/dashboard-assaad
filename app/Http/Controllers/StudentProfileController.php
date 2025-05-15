<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    public function index()
    {
    //    $siswa = Auth::user()->siswa;
       $siswa = Siswa::with('kelas')->where('user_id',Auth::id())->first();
        // $siswa = Siswa::first();
        return view('student.profile', compact('siswa'));
    }
}
