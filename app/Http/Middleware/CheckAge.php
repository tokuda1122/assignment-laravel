<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next)
{
    $age = session('user_age'); // Lấy tuổi từ session

    if (is_numeric($age) && $age >= 18) {
        return $next($request);
    }

    return response("Không được phép truy cập", 403);
}
}
