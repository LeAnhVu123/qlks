<?php

namespace App\Http\Controllers;
use  App\Phong;
use  App\Loaiphong;
use  App\Dondat;
use  App\Chitiet;
use Illuminate\Http\Request;

class PhongController extends Controller
{
    //
    /* View Phong */
	public function getp(){
		$p = Phong::All();
		return view('Admin.Phong',compact('p'));
	}
	/* View them phong */
	public function getthemp(){
		$lp = Loaiphong::All();
		return view('Admin.Them.Themphong',compact('lp'));
	}
	public function postthemp(request $reg){
		$this->validate($reg,[
			'maphong' => 'required|regex:/^[0-9]+$/|max:10|unique:phongs,maphong',
			'sotang'=>'required|regex:/^[0-9]+$/|max:10',
			'ghichu' => 'required|min:2|max:100',
			'trangthai' => 'required|min:2|max:100',
			'maloai'=>'required',
			
		],
		[
			'maphong.required'=> 'Bạn chưa nhập mã phòng',
			'maphong.regex'=> 'Mã phòng chỉ được nhập số',
			'maphong.max'=>'Tối đa 10 kí tự',
			'maphong.unique'=>'Phòng đã tồn tại',
			'sotang.required'=> 'Bạn chưa nhập số tầng',
			'sotang.regex'=> 'Tầng chỉ được nhập số',
			'sotang.max'=>'Tối đa 10 kí tự',
			'ghichu.required'=> 'Bạn chưa nhập ghi chú',
			'ghichu.min'=>'Tối thiểu 2 kí tự',
			'ghichu.max'=>'Tối đa 100 kí tự',
			'trangthai.required'=> 'Bạn chưa nhập trạng thái',	
			'trangthai.min'=>'Tối thiểu 2 kí tự',
			'trangthai.max'=>'Tối đa 100 kí tự',
			'maloai.required'=>'Chưa chọn mã loại'
		]);
		$p = new Phong;
		$p->maphong = $reg['maphong'];		
		$p->sotang = $reg['sotang'];
		$p->ghichu = $reg['ghichu'];
		$p->trangthai = $reg['trangthai'];
		$pl = Loaiphong::Where('maloai',$reg['maloai'])->first();
		if($pl)
		{
			$p->maloai = $reg['maloai'];
			$p->save();
			return redirect(route('get-themp'))->with('thanhcong','Bạn đã thêm phòng thành công');
		}
		else{
			return redirect(route('get-themp'))->with('thanhcong','Không tồn tại loại phòng này');
		}
	}
	/* Sua Phong */
	public function getsuaphong($maphong){
		$mp = Phong::find($maphong);
		$lp = Loaiphong::all();
		return view('Admin.Sua.Suaphong',compact('mp','lp'));
	}
	public function postsuaphong(request $reg,$maphong){
		$mp = Phong::find($maphong);
		
		$this->validate($reg,[
			'ghichu' => 'required|min:2|max:100',
			'trangthai' => 'required|min:2|max:100',
			'maloai'=>'required',
		
			
		],
		[
			'ghichu.required'=> 'Bạn chưa nhập ghi chú',
			'ghichu.min'=>'Tối đa 100 kí tự',
			'ghichu.max'=>'Tối đa 100 kí tự',
			'trangthai.required'=> 'Bạn chưa nhập trạng thái',	
			'trangthai.min'=>'Tối đa 100 kí tự',
			'trangthai.max'=>'Tối đa 100 kí tự',
			'maloai.required'=>'Chưa chọn tên loại phòng',
		]);
		$mp->ghichu = $reg['ghichu'];
		$mp->trangthai = $reg['trangthai'];
		$p = Loaiphong::Where('maloai',$reg['maloai'])->first();
		$a = Dondat::Where('madon',$reg['madon'])->first();
		if($p)
		{
			$mp->maloai = $reg['maloai'];
				if($reg['madon']==NULL)
					{
						$mp->madon = $reg['madon'];
					}
				else
				{
					if($a)
					{
						$mp->madon = $reg['madon'];
					}
					else{
						return redirect('Admin/Sua/Suaphong/'.$maphong)->with('thanhcong','Không tồn tại mã đơn này');
					}
				}
			$mp->save();
			return redirect(route('phong'))->with('thanhcong','Bạn đã sửa phòng thành công');
		}
		else{
			return redirect('Admin/Sua/Suaphong/'.$maphong)->with('thanhcong','Không tồn tại loại phòng này');
		}
	}
	/* xoa phong */
	public function xoaphong($maphong)
	{
		$mp = Phong::find($maphong);
		// $ct = Chitiet::Where('maphong',$maphong)->first();
		// if(!$ct)
		// {
			$mp->delete();
			return redirect(route('phong'))->with('thanhcong','Bạn đã xóa phòng thành công');
		// }
		// else{
		// 	return redirect(route('phong'))->with('thanhcong','Vẫn tồn tại phòng ở chi tiết phòng');
		// }
		
	}
}