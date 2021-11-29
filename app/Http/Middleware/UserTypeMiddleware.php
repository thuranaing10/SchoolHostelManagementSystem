<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserTypeMiddleware
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
        $usertype = Auth::user()->usertype;
        $array = ["MALE", "FEMALE"];

        if (in_array($usertype, $array)) {
            return $next($request);   
        } 

        return redirect(url('admin/user'));
    }
}
