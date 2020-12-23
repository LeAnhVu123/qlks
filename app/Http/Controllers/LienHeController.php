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
        if($a->manv == NULL)
        {
            return view('Admin.Sua.Rep',compact('a'));
        }
        else{
            return back()->with('thanhcong','Hỗ trợ này đã được xử lí');
        }
    }
    public function postviewlh(request $reg,$malh)
    {
        $ck = Cookie::get('account');
        $json = json_decode($ck)->manv;
        $lh = Lienhe::find($malh);
        $lh->manv = $json;
        $lh->traloi = $reg['traloi'];
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
        return redirect(route('lienhenv'))->with('thanhcong','Gửi gmail thành công');
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
    public function goidt($malh)
    {
        $ck = Cookie::get('account');
        $json = json_decode($ck)->manv;
        $lh = Lienhe::find($malh);
        if($lh->manv == NULL)
        {
            $lh->manv = $json;
            $lh->save();
            return redirect(route('lienhenv'))->with('thanhcong','Xác nhận thành công đã gọi điện thoại trả lời khách hàng');
        }
        else{
            return redirect(route('lienhenv'))->with('thanhcong','Đã hỗ trợ khách hàng này rồi');
        }
       
    }

}
