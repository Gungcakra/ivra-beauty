<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {

            if ($request->is('guest/*')) {
                return redirect()->route('guest.login');
            }

            if ($request->is('admin/*')) {
                return redirect()->route('guest.login');
            }

            return redirect()->route('guest.login');
        }

        return $next($request);
    }
}
