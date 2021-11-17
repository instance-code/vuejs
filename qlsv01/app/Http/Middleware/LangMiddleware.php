<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Closure;
use Illuminate\Http\Request;

class LangMiddleware
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
        if (session('lang')) {
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
