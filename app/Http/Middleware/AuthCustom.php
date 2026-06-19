<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCustom
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('id_usuario')) {
            return redirect('/?vista=login')->with('error', 'Debes iniciar sesión para acceder.');
        }

        return $next($request);
    }
}