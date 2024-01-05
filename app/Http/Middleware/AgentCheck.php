<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgentCheck
{

    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('home');
        }

        if (auth()->check() && auth()->user()->role == 1) {
            return redirect()->route('logo_management');
        }


        return $next($request);

    }
}
