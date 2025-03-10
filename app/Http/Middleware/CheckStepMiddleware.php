<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckStepMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('step1_completed')) {
            return redirect()->route('welcome')->with('error', 'يجب إكمال الخطوة الأولى أولاً.');
        }

        return $next($request);
    }
}
