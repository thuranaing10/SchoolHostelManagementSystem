<?php

namespace App\Http\Middleware;

use Closure;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            $locale=Session::get('locale');
        }else{
            $locale='eng';
            Session::put('locale',$locale);   
        }
        App::setLocale($locale);
        return $next($request);
    }
}
