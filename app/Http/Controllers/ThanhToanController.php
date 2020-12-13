<?php

namespace App\Http\Controllers;

use App\Thanhtoan;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$tt = Thanhtoan::all();
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
			'madon.unique' => 'Bạn đã có mã đơn trong đây',
		]);
        Thanhtoan::create([
			'madon' => $reg['madon'],
			'thanhtoan' => $reg['tt'],
		]);
		return redirect(route('thanhtoan'))->with(['thanhcong','Tạo thanh toán thành công']);
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
		return redirect(route('thanhtoan'));
    }

    public function xoatt(Request $request, $id)
    {
		$tt = Thanhtoan::findOrFail($id)->delete();
		return redirect(route('thanhtoan'));
    }

}
