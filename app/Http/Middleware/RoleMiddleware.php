<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        if (!in_array($user->role, $roles)) {
            Auth::logout();
            return redirect()->route('login')->withErrors(['email' => 'Akses tidak diizinkan.']);
        }

        return $next($request);
    }
}
