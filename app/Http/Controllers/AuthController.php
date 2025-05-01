<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // file resources/views/auth/login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email === 'admin@email.com' && $request->password === 'admin123') {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Email atau password salah!');
        }
    }


    public function dashboard()
    {
        return view('dashboard.index'); // tampilkan halaman dashboard
    }
}