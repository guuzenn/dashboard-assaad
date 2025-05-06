<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPpdbSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle($request, Closure $next){
    //     $session = PpdbSession::where('is_active', true)
    //         ->where('start_date', '<=', now())
    //         ->where('end_date', '>=', now())
    //         ->first();

    //     if (!$session) {
    //         return response()->json(['message' => 'Pendaftaran belum dibuka atau sudah ditutup.'], 403);
    //     }

    //     return $next($request);
    // }
}
