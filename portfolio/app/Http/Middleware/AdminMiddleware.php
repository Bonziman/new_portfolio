<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $adminEmail = 'eloirdiwi@gmail.com'; // Replace with your admin user's email

        if (auth()->check() && auth()->user()->email === $adminEmail) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
