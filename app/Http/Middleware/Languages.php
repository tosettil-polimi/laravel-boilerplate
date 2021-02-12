<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Languages
{
    /**
     * The availables languages
     *
     * @array languages
     */
    public static  $languages = ['it'];

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (!Session::has('locale')) {
            Session::put('locale', self::$languages[0]);
        }

        app()->setLocale(Session::get('locale'));
        return $next($request);
    }
}
