<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Lienhe;
use  App\Nhanvien;
use Mail;
use Illuminate\Support\Facades\Cookie;
class LienHeController extends Controller
{
    //
    public function lienhe()
    {
        $lh = Lienhe::all();
        return view('Admin.LienHe',compact('lh'));
    }
    public function getviewlh(request $reg,$malh)
    {
        $a = Lienhe::find($malh);
        return view('Admin.Sua.Rep',compact('a'));
    }
    public function postviewlh(request $reg,$malh)
    {
        $ck = Cookie::get('account');
        $json = json_decode($ck)->manv;
        $lh = Lienhe::find($malh);
        $lh->manv = $json;
        $lh->save();
        
        $z = $reg['email'];
        $ht = $reg['hoten'];
        $nd = $reg['traloi'];
        $lh = $reg['malh'];
        // $data =[
        //     'noidung'=>$nd,
        // ];
        // Mail::send('test',$data,function($message) use($z,$ht){
        //         $message->from('leanh19931995@gmail.com','Royal Hotel');
        //         $message->to($z,$ht);
        //         $message->subject('Hỗ trợ khách hàng');
        // });
        return back()->with('thanhcong','Gửi gmail thành công');
    }
    public function getxoalh($malh)
    {
        $lh = Lienhe::find($malh);
        if($lh->manv == NULL)
        {
            return back()->with('thanhcong','Hỗ trợ này chưa được xử lý nên không thể xóa');
        }
        $lh->delete();
        return back()->with('thanhcong','Xóa liên hệ thành công');
    }

}
