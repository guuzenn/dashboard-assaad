<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if ($request->email == 'email@example.com') {
            return back()->with('status', 'Link reset password telah dikirimkan ke email Anda.');
        }

        return back()->withErrors(['email' => 'Email tidak ditemukan.']);
    }
}
