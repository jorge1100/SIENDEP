<?php

namespace App\Http\Middleware;

use Closure;

class AuthCustom
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}