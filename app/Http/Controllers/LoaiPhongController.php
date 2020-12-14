<?php

namespace App\Http\Controllers;
use  App\Loaiphong;
use  App\Phong;
use Illuminate\Http\Request;

class LoaiPhongController extends Controller
{
    //
    /* ViewLoaiPhong */
	public function getlp(Request $reg){
		
		$id = $reg['maloai'];
		if($id == null){
			$lp = Loaiphong::All();
		}else{
			$lp = Loaiphong::where('maloai',$id)->get();
		}
		return view('Admin.Loaiphong',compact('lp'));
	}
	/* Sua loai phong */
	public function getsualoaiphong($maloai)
	{
		$lp = Loaiphong::find($maloai);
		return view('Admin/Sua/Sualoaiphong',compact('lp'));
	}
	public function postsualoaiphong(request $reg,$maloai)
	{
		$lp = Loaiphong::find($maloai);
		$this->validate($reg,[
			'tenloai' => 'required|min:3|max:100',
			'succhua' => 'required|regex:/^[0-9]+$/|min:1|max:10',
			'gia'=>'required|regex:/^[0-9]+$/|min:1|max:10',
			'mota'=>'required|min:3|max:50',
		],[
			'tenloai.required'=> 'Bạn chưa nhập tên loại',
			'tenloai.min'=>'Sức chứa chỉ được nhập 3-100 ký tự',
			'tenloai.max'=>'Sức chứa chỉ được nhập 3-100 ký tự',
			'succhua.required'=> 'Bạn chưa nhập sức chứa',
			'succhua.regex'=>'Chỉ được nhập số sức chứa',
			'succhua.min'=>'Sức chứa chỉ được nhập 1-10 ký tự',
			'succhua.max'=>'Sức chứa chỉ được nhập 1-10 ký tự',
			'gia.required'=> 'Bạn chưa nhập giá',
			'gia.regex'=>'Chỉ được nhập số giá',
			'gia.min'=>'Giá chỉ được nhập 1-10 ký tự',
			'gia.max'=>'Giá chỉ được nhập 1-10 ký tự',
			'mota.required'=> 'Bạn chưa nhập mô tả',
			'mota.min'=>'Mô tả nhập từ 3-50 kí tự',
			'mota.max'=>'Mô tả nhập từ 3-50 kí tự',
		]);
		$lp->tenloai = $reg['tenloai'];
		$lp->succhua = $reg['succhua'];
		$lp->gia = $reg['gia'];
		$lp->mota = $reg['mota'];
		if($reg['hinhanh'] != NULL)
		{
			$name = $reg['hinhanh']->getClientOriginalName();//lay ten hinh
			$a = substr("$name",-4);
			$b = 'KS-'.rand(1,1000).$a;
			if($a == '.jpg' || $a == '.png')
			{
				$path = public_path().'/img';
				$reg['hinhanh']->move($path,$b);
				$lp->hinhanh = $b;
			}	
			else
			{
				return redirect('Admin/Sua/Sualoaiphong/'.$maloai)->with('thanhcong','Vui lòng upload file hình có đuôi jpg hoặc png');
			}	
		}
		
		$lp->save();
		return redirect(route('lphong'))->with('thanhcong','Bạn đã sửa loại phòng thành công');
	}
	/* Xoa loai Phong */
	public function xoaloaiphong($maloai){
		$lp = Loaiphong::find($maloai);
		$lp1 = Loaiphong::find($maloai)->maloai;
		$p = Phong::where('maloai',$maloai)->first();
		if(!$p){
			$lp->delete();
			return redirect(route('lphong'))->with('thanhcong','Bạn đã xóa loại phòng thành công');
		}else{
			return redirect(route('lphong'))->with('thanhcong','Không thể xóa vì còn tồn tại loại phòng này trong trang phòng');
		}
	}
	/* View them loai phong */
	public function getthemlp(request $reg){
		$lp = Loaiphong::all();
		return view('Admin.Them.Themloaiphong',compact('lp'));
	}
	/* post them loai phong */
	public function postthemlp(request $reg){
		$this->validate($reg,[
			'tenloai' => 'required|min:3|max:100',
			'succhua' => 'required|regex:/^[0-9]+$/|min:1|max:10',
			'gia'=>'required|regex:/^[0-9]+$/|min:1|max:10',
			'mota'=>'required|min:3|max:50',
			'hinhanh'=>'required',
		],[
			'tenloai.required'=> 'Bạn chưa nhập tên loại',
			// 'tenloai.regex'=>'Tên loại sai kiểu',
			'tenloai.min'=>'Tên loại chỉ được nhập 3-100 ký tự',
			'tenloai.max'=>'Tên loại chỉ được nhập 3-100 ký tự',
			'succhua.required'=> 'Bạn chưa nhập sức chứa',
			'succhua.regex'=>'Chỉ được nhập số sức chứa',
			'succhua.min'=>'Sức chứa chỉ được nhập 1-10 ký tự',
			'succhua.max'=>'Sức chứa chỉ được nhập 1-10 ký tự',
			'gia.required'=> 'Bạn chưa nhập giá',
			'gia.regex'=>'Chỉ được nhập số giá',
			'gia.min'=>'Giá chỉ được nhập 1-10 ký tự',
			'gia.max'=>'Giá chỉ được nhập 1-10 ký tự',
			'mota.required'=> 'Bạn chưa nhập mô tả',
			'mota.min'=>'Mô tả nhập từ 3-50 kí tự',
			'mota.max'=>'Mô tả nhập từ 3-50 kí tự',
			'hinhanh.required'=> 'Bạn chưa chọn hình ảnh',
		]);
		$lp = new Loaiphong;
		$lp->tenloai = $reg['tenloai'];
		$lp->succhua = $reg['succhua'];
		$lp->gia = $reg['gia'];
		$lp->mota = $reg['mota'];
		$name = $reg['hinhanh']->getClientOriginalName();//lay ten hinh
		$a = substr("$name",-4);
		$b = 'KS-'.rand(1,1000).$a;
		if($a == '.jpg' || $a == '.png')
		{
			$path = public_path().'/img';
			$reg['hinhanh']->move($path,$b);//$reg['hinhanh'] tmp_name, noi luu tru tam thoi cai hinh anh
			$lp->hinhanh = $b;
		}	
		else
		{
			return redirect(route('get-themlp'))->with('thanhcong','Vui lòng upload file hình có đuôi jpg hoặc png');
		}	
		$lp->save();
		return redirect(route('get-themlp'))->with('thanhcong','Bạn đã thêm loại phòng thành công');
	}
}
