<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhanvien;
use Illuminate\Support\Facades\Cookie;
class LoginController extends Controller
{
    /* Dang nhap thanh cong thi khoi tao cookie */
    public function xetdangnhap(Request $reg){
        $ttk = Nhanvien::select('taikhoan','role')->where('taikhoan',$reg['ttk'])->where('matkhau',$reg['matkhau'])->first();
        if($ttk){
            $cookie = cookie('account',$ttk,42300);
            return redirect(route('quanly'))->withCookie($cookie);

        }
    }
    /* Neu ton tai cookie thi qua quan ly, chua thi o trang dang nhap */
    public function dangnhap(){
        $ktcookie = Cookie::get('account');
        if($ktcookie)
        {
            return redirect(route('quanly'));
        }
        return view('Admin.Loginadmin');
    }
    /* dang xuat */
    public function dangxuat(){
        $forget = Cookie::forget('account');
        return redirect(route('dangnhap'))->withCookie($forget);
    }


    public function countImg(Request $reg){
            $count = $reg['count'];
            echo($reg['count']);
    }
}
