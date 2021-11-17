<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

        $lang=session('lang')?session('lang'):config('app.locale');
        switch($lang){
        case "vi":
            $lang="vi";
            break;
        default:
            $lang="en";
            break;
        }
        App::setLocale($lang);
        return $next($request);
    }
}
