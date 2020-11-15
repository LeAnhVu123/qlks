<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Khachhang;
use  App\Phong;
use  App\Loaiphong;   
class ControllerAdmin extends Controller
{
    public  function qltk(){
        $kh = Khachhang::All();
        // dd($kh);
        return view('Admin.indexQLKH',compact('kh'));
    }
    public  function qlp(){
        $ph = Phong::All();
        // dd($kh);
        return view('Admin.indexQLP',compact('ph'));
    }
    public  function qllp(){
        $lp = Loaiphong::All();
        // dd($kh);
        return view('Admin.indexQLLP',compact('lp'));
    }
    //
}
