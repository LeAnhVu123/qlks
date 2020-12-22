<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Lienhe;
use Mail;
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
        // $data =[];
        // $z = $reg['email'];
        // $ht = $reg['hoten'];
        // $nd = $reg['noidung'];
        // $lh = $reg['malh'];
        // Mail::send('test',$data,function($message) use($z,$ht){
        //         $message->from('leanhvu19931995@gmail.com','Royal Hotel');
        //         $message->to('leanhvu19931995@gmail.com','abc');
        //         $message->subject('Hỗ trợ khách hàng');
        // });
        // echo $reg['malh'];
        // return view('Admin.Sua.Rep');
        return back()->with('thanhcong','Gửi gmail thành công');
    }

}
