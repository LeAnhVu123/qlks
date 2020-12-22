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

class ThongKeController extends Controller
{
    //
    public function viewchon(request $reg)
    {
        $i = 1;
        $q = $reg['makh'];
        $dd = Dondat::all();
        $t = 0;
        if($reg['gui'])
        {
            if($q)
            {   
                $zz = Dondat::all()->where('makh',$q)->first(); 
                if($zz)
                {
                    $dd = Dondat::all()->where('makh',$q);
                    foreach($dd as $val)
                    {
                        $t += $val->tongtien;
                    }
                    return view('Admin.Thongkephong',compact('q','dd','i','t'));
                }
                else{
                    return redirect('Admin/TheoPhong')->with('thanhcong','Khách hàng này không có đơn đặt nào');
                }
            }  
        }else{
            foreach($dd as $val)
            {
                $t += $val->tongtien;
            }
            return view('Admin.Thongkephong',compact('q','dd','i','t'));
        }
            foreach($dd as $val)
            {
                $t += $val->tongtien;
            }
            return view('Admin.Thongkephong',compact('q','dd','i','t'));
    }
}