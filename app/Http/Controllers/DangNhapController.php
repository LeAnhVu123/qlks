<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khachhang;
use Illuminate\Support\Facades\Cookie;
class DangNhapController extends Controller
{
    //
    public function dangnhap(request $reg)
    {
        $dn = Khachhang::all()->where('taikhoan',$reg['taikhoan'])->where('matkhau',$reg['matkhau'])->first();
        if($dn)
        {
            $cookie = Cookie('dangnhap',$dn,4000);
            return redirect(route('trangchu'))->withCookie($cookie);
        }
        else
        {
            return redirect(route('dn'))->with('thanhcong','Đăng nhập thất bại');
        }
    }
    public function dangxuat(){
        Cookie::queue(Cookie::forget('dangnhap'));
        return redirect(route('trangchu'));
    }
}
