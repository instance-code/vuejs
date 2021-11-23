<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class langMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $avai = ['vi', 'en'];
        $locale = session('APP_LOCALE');
        $locale = in_array($locale,$avai) ? $locale: config('app.locate');
        app()->setLocale($locale);
        return $next($request);
    }
}
