<?php

namespace App\Http\Controllers;
use  App\Khachhang;
use  App\Dondat;
use  App\Thanhtoan;
use  App\Nhanvien;
use  App\Khuyenmai;
use  App\Chitiet;
use  App\Dichvu;

use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class DoanhThuController extends Controller
{
    //
    public function doanhthu(request $reg)
    {
        $tn = $reg['tungay'];
        $dn = $reg['denngay'];
        $i = 1;
        $s = 0;
        $e = 0;
        $f = 0;
        $dd = Dondat::all();
        if($reg['gui'])
        {
            if($tn && $dn)
            {
                $dd = Dondat::all()->where('ngaylap','>=',$tn)->where('ngaylap','<=',$dn);
            }
            elseif($tn && !$dn)
            {
                $dd = Dondat::all()->where('ngaylap','=',$tn);
            }
        }
        foreach($dd as $val)
        {
            $s += $val->tongtien;
            $v = $val->ddvatt['thanhtoan'];
            if($v == 1)
            {
                $e += $val->tongtien;
            }
            if($v == 0)
            {
                $f += $val->tongtien;
            }
        }
        return view('Admin.Doanhthu',compact('i','dd','s','e','f','tn','dn'));
    }
}
