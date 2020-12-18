<?php

namespace App\Http\Middleware;
use App\Nhanvien;
use Closure;
use Illuminate\Support\Facades\Cookie;
class CheckAdmin
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
        $check = Cookie::get('account');
        $role = json_decode($check)->role;
        if($role == 1)
        {
            return $next($request);
        }
        else{
            return back()->with('thanhcong','không có quyền');
        }
       
    }
}
