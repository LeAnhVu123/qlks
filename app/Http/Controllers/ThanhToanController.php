<?php

namespace App\Http\Controllers;

use App\Thanhtoan;
use App\Dondat;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $reg)
    {
        $tt = Thanhtoan::all();
       if($reg['gui'] == "1")
       {
        $tt = Thanhtoan::all()->where('thanhtoan',1);
       }
       if($reg['gui'] == "2")
       {
        $tt = Thanhtoan::all()->where('thanhtoan',0);
       }
       if($reg['day'])
       {
         $tt = Thanhtoan::all()->where('matt',$reg['day']);
       }
        return view('Admin.Allthanhtoan',compact('tt'));
    }
    public function getviewthemtt()
    {
        return view('Admin.Them.Themtt');
    }
    public function postthemtt(Request $reg)
    {
		$this->validate($reg,[
			'madon' => 'required|unique:thanhtoans,madon',
		],[
      'madon.required' => 'Bạn chưa nhập mã đơn',
      'madon.unique' => 'Đơn này đã tồn tại trong thanh toán',
    ]);
      $t = $reg['madon'];
      $check = Dondat::all()->where('madon',$t)->first();
      if(!$check)
      {
        return back()->with('thanhcong','Đơn đặt không tồn tại');
      }
      else{
        Thanhtoan::create([
          'madon' => $reg['madon'],
          'thanhtoan' => $reg['tt'],
        ]);    
        return redirect(route('thanhtoan'))->with('thanhcong','Tạo thanh toán thành công');
      }
    }
    public function getviewsuatt($id)
    {
		$tt = Thanhtoan::findOrFail($id);
        return view('Admin.Sua.Suatt',compact('tt'));
    }
    public function postsuatt(Request $reg,$id)
    {
		$tt = Thanhtoan::findOrFail($id);
		$tt->update([
			'thanhtoan' => $reg['tt'],
		]);
		return redirect(route('thanhtoan'))->with('thanhcong','Sửa thanh toán thành công');
    }

    public function xoatt(Request $request, $id)
    {
		$tt = Thanhtoan::findOrFail($id)->delete();
		return redirect(route('thanhtoan'))->with('thanhcong','Xóa thanh toán thành công');
    }

}
