<?php

namespace App\Http\Middleware;
use App\Nhanvien;
use Closure;
use Illuminate\Support\Facades\Cookie;
class CHeckRole
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
        $checkrole = Cookie::get('account');
        $role = json_decode($checkrole)->role;
        if($role == 1 or $role == 2){
            return $next($request);// tiep tuc qua controller
        }else{ 
            return back()->with('thanhcong','khong co quyen');
        }
       
    }
}
