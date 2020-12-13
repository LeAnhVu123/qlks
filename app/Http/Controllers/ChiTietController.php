<?php

namespace App\Http\Controllers;
use  App\Dondat;
use  App\Chitiet;
use Illuminate\Http\Request;

class ChiTietController extends Controller
{
    //
    /* View chi tiet don dat */
	public function getchitietdd(){
		$ct = Chitiet::all();
		return view('Admin.Chitietdd',compact('ct'));
	}
	/* get view them chi tiet don dat */
	public function getviewthemct(){
		return view('Admin/Them/Themchitiet');
	}
	public function postthemct(request $reg)
	{
		$this->validate($reg,[
			'slphong'=>'required|regex:/^[0-9]+$/|min:1|max:3',
			'soluong'=>'required|regex:/^[0-9]+$/|min:1|max:3',
			'ngayden'=>'required',
			'ngaydi'=>'required',
		],[
			'slphong.required'=>'Vui lòng nhập số lượng phòng muốn đặt',
			'slphong.regex'=>'Số lượng phòng chỉ được nhập số',
			'slphong.min'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
			'slphong.max'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
			'soluong.required'=>'Vui lòng nhập số lượng người lớn',
			'soluong.regex'=>'Số lượng người lớn chỉ được nhập số',
			'soluong.min'=>'SL người lớn nhất 1 số và nhiều nhất 3 số',
			'soluong.max'=>'SL người lớn ít nhất 1 số và nhiều nhất 3 số',
			'ngayden.required'=>'Vui lòng chọn ngày đến',
			'ngaydi.required'=>'Vui lòng chọn ngày đến',
		]);
		$ct = new Chitiet;
		$md = Dondat::Where('madon',$reg['madon'])->first();
		if($md)
		{
			$ct->madon = $reg['madon'];
		}
		else{
			return redirect('Admin/Them/Themchitiet')->with('thanhcong','Không tồn tại mã đơn này');
		}
		$ct->slphong=$reg['slphong'];
		$ct->soluong=$reg['soluong'];
		$ct->ngayden=$reg['ngayden'];
		$ct->ngaydi=$reg['ngaydi'];
		$ct->save();
		return redirect(route('chitiet'))->with('thanhcong','Bạn thêm chi tiết đơn đặt phòng thành công');		
	}
	/* Sua chi tiet don dat */
	public function getsuact($mact){
		$ct = Chitiet::find($mact);
		return view('Admin/Sua/Suachitiet',compact('ct'));

	}
	public function postsuact(request $reg,$mact){
		$this->validate($reg,[
			'slphong'=>'required|regex:/^[0-9]+$/|min:1|max:3',
			'soluong'=>'required|regex:/^[0-9]+$/|min:1|max:3',
			'ngayden'=>'required',
			'ngaydi'=>'required',
		],[
			'slphong.required'=>'Vui lòng nhập số lượng phòng muốn đặt',
			'slphong.regex'=>'Số lượng phòng chỉ được nhập số',
			'slphong.min'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
			'slphong.max'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
			'soluong.required'=>'Vui lòng nhập số lượng người lớn',
			'soluong.regex'=>'Số lượng người lớn chỉ được nhập số',
			'soluong.min'=>'SL người lớn nhất 1 số và nhiều nhất 3 số',
			'soluong.max'=>'SL người lớn ít nhất 1 số và nhiều nhất 3 số',
			'ngayden.required'=>'Vui lòng chọn ngày đến',
			'ngaydi.required'=>'Vui lòng chọn ngày đến',
		]);
		$ct = Chitiet::find($mact)->first();
		$md = Dondat::Where('madon',$reg['madon'])->first();
		if($md)
		{
			$ct->madon = $reg['madon'];
		}
		else{
			return redirect('Admin/Sua/Suachitiet/'.$mact)->with('thanhcong','Không tồn tại mã đơn này');
		}
		$ct->slphong=$reg['slphong'];
		$ct->soluong=$reg['soluong'];
		$ct->ngayden=$reg['ngayden'];
		$ct->ngaydi=$reg['ngaydi'];
		$ct->save();
		return redirect('Admin/Chitietdondat')->with('thanhcong','Sửa chi tiết đơn đặt phòng thành công');		
	}
	/* Xoa chi tiet don dat */
	public function getxoact($mact)
	{
		$ct = Chitiet::find($mact);
		$ct->delete();
		
		return redirect('Admin/Chitietdondat')->with('thanhcong','Xóa chi tiết đơn đặt phòng thành công');	
	}
}
