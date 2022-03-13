<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BukanpjMiddleware
{
    
    public function handle($request, Closure $next)
    {
        if (Auth::user()->level!='bukanpj') {
            return redirect()->back();
        }
        return $next($request);
    }
}
