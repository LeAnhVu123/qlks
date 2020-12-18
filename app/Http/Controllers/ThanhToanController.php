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
        return view('Admin.Allthanhtoan',compact('tt'));
    }
    public function getviewthemtt()
    {
        return view('Admin.Them.Themtt');
    }
    public function postthemtt(Request $reg)
    {
		$this->validate($reg,[
			'madon' => 'required',
		],[
			'madon.required' => 'Bạn chưa nhập mã đơn',
    ]);
    $s = Dondat::all()->where('madon',$reg['madon'])->first();
    if($s)
    {
      $a = $reg['madon'];
    }
    else{
      return redirect(route('get-themtt'))->with('thanhcong','Mã đơn này không tồn tại');
    }
        Thanhtoan::create([
			'madon' => $a,
			'thanhtoan' => $reg['tt'],
		]);
		return redirect(route('thanhtoan'))->with('thanhcong','Tạo thanh toán thành công');
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
