<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CekLevel
{
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (Auth::check() && in_array(Auth::user()->level, $levels)) {
            return $next($request);
        }

        return redirect('/'); // Bisa redirect ke halaman lain atau tampilkan error 403
    }
}
