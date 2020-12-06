<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
class CheckAccount
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
        $checkcookie = Cookie::get('account');
        if($checkcookie)
        {
            return $next($request);
        }
        else
        {
            return redirect(route('dangnhap'));
        }
      
    }
}
