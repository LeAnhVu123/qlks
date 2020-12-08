<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Khachhang;
use  App\Phong;
use  App\Loaiphong;
use  App\Dondat;
use  App\Thanhtoan;
use  App\Nhanvien;
use  App\Khuyenmai;
use  App\Chitiet;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Cookie;

class ControllerAdmin extends Controller
{
	public function quanly()
	{		
		return view('Admin.QuanLy');
	}
	/* View Show QLKH */
	// public  function getkh()
	// {
	// 	$kh = Khachhang::All();
	// 	return view('Admin.QLTKKH', compact('kh'));
	// }
	// /* View them tai khoan */
	// public function getthemtk()
	// {	
	// 	return view('Admin.Them.ThemTKKH');
	// }
	// /* Hàm them tai khoan */
	// public function postthemtk(request $reg)
	// {
	// 	$this->validate($reg,
	// 	[
	// 		'taikhoan'=> 'required|regex:/^[a-zA-Z0-9]+$/|unique:khachhangs,taikhoan|min:3|max:100',
	// 		'matkhau' => 'regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
	// 		// 'makh' => 'required|regex:/^[0-9]+$/|unique:khachhangs,makh|min:3|max:9',
	// 		'hoten' => 'required|min:3|max:100',
	// 		'sdt' => 'required|regex:/^[0-9]+$/|min:3|max:12',
	// 		'cmnd'=> 'required|regex:/^[0-9]+$/|min:9|max:10',
	// 	],
	// 	[
	// 		'taikhoan.required'=>'Chưa nhập tài khoản khách hàng',
	// 		'taikhoan.regex'=>'Tài khoản sai font',
	// 		'taikhoan.unique'=>'Tài khoản đã tồn tại',
	// 		'taikhoan.min'=>'Độ dài tài khoản từ 3-100 ký tự',
	// 		'taikhoan.max'=>'Độ dài tài khoản từ 3-100 ký tự',
	// 		'matkhau.required'=>'Chưa nhập mật khẩu khách hàng',
	// 		'matkhau.regex'=>'Mật khẩu sai font',	
	// 		'matkhau.min'=>'Độ dài mật khẩu từ 3-100 ký tự',
	// 		'matkhau.max'=>'Độ dài mật khẩu từ 3-100 ký tự',
	// 		// 'makh.required'=>'Chưa nhập mã khách hàng',
	// 		// 'makh.regex'=>'CMND chỉ được là số',
	// 		// 'makh.unique'=>'CMND đã tồn tại',
	// 		// 'makh.min'=>'Độ dài CMND khách hàng từ 3-9 ký tự',
	// 		// 'makh.max'=>'Độ dài CMND khách hàng từ 3-9 ký tự',
	// 		'hoten.required'=>'Chưa nhập họ tên khách hàng',
	// 		'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
	// 		'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
	// 		'sdt.required'=>'Chưa nhập sdt khách hàng',
	// 		'sdt.regex'=>'SDT chỉ được là số',
	// 		'sdt.min'=>'Độ dài sdt từ 3-12 ký tự',
	// 		'sdt.max'=>'Độ dài sdt từ 3-12 ký tự',
	// 		'cmnd.required'=>'Chưa nhập CMND khách hàng',
	// 		'cmnd.regex'=>'CMND chỉ được là số',
	// 		'cmnd.min'=>'Độ dài CMND từ 9-10 ký tự',
	// 		'cmnd.max'=>'Độ dài CMND từ 9-10 ký tự',
	// 	]);
	// 	$kh = new Khachhang;
	// 	$kh->cmnd = $reg['cmnd'];
	// 	$kh->matkhau = $reg['matkhau'];
	// 	// $kh->makh = $reg['makh'];
	// 	$kh->hoten = $reg['hoten'];
	// 	$kh->sdt = $reg['sdt'];
	// 	$kh->taikhoan = $reg['taikhoan'];
	// 	$kh->email = $reg['email'];
	// 	$kh->save();
	// 	return redirect(route('get-themtk'))->with('thanhcong','Bạn đã thêm tài khoản thành công');
	// }
	// /* View sua tai khoan */
	// public function getsuatk($makh)
	// {	
	// 	$kh = Khachhang::find($makh);
	// 	return view('Admin.Sua.SuaTKKH',compact('kh'));
	// }
	// /* Hàm sua tai khoan */
	// public function postsuatk(request $reg,$makh)
	// {	
	// 	$kh = Khachhang::find($makh);
	// 	$this->validate($reg,
	// 	[
	// 		'matkhau' => 'regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
	// 		'hoten' => 'required|min:3|max:100',
	// 		'sdt' => 'required|regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
	// 		'cmnd'=> 'required|regex:/^[0-9]+$/|min:9|max:10',
	// 	],
	// 	[
	// 		'matkhau.required'=>'Chưa nhập mật khẩu khách hàng',
	// 		'matkhau.regex'=>'Mật khẩu sai font',		
	// 		'matkhau.min'=>'Độ dài mật khẩu từ 3-100 ký tự',
	// 		'matkhau.max'=>'Độ dài mật khẩu từ 3-100 ký tự',
	// 		'hoten.required'=>'Chưa nhập họ tên khách hàng',
	// 		'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
	// 		'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
	// 		'sdt.required'=>'Chưa nhập sdt khách hàng',
	// 		'sdt.regex'=>'SDT chỉ được là số',
	// 		'sdt.min'=>'Độ dài sdt từ 3-100 ký tự',
	// 		'sdt.max'=>'Độ dài sdt từ 3-100 ký tự',
	// 		'cmnd.required'=>'Chưa nhập CMND khách hàng',
	// 		'cmnd.regex'=>'CMND chỉ được là số',
	// 		'cmnd.min'=>'Độ dài CMND từ 9-10 ký tự',
	// 		'cmnd.max'=>'Độ dài CMND từ 9-10 ký tự',
	// 	]);
	// 	$kh->cmnd = $reg['cmnd'];
	// 	$kh->matkhau = $reg['matkhau'];
	// 	$kh->hoten = $reg['hoten'];
	// 	$kh->sdt = $reg['sdt'];
	// 	$kh->email = $reg['email'];
	// 	$kh->save();
	// 	// return redirect('Admin/Sua/SuaTKKH/'.$makh)->with('thanhcong','Bạn đã sửa tài khoản thành công');
	// 	return redirect(route('qltk'))->with('thanhcong','Bạn đã sửa tài khoản thành công');
	// }
	// /* Xoa tai khoan khach hang */
	// public function getxoa($makh)
	// {
	// 	$kh = Khachhang::find($makh);
	// 	$a = Dondat::Where('makh',$makh)->first();
	// 	if(!$a)
	// 	{
	// 		$kh->delete();
	// 		return redirect(route('qltk'))->with('thanhcong','Bạn đã xóa tài khoản thành công');
	// 	}
	// 	else
	// 	{
	// 		return redirect(route('qltk'))->with('thanhcong','Vẫn còn mã khách hàng trang đơn đặt');
	// 	}
		
	// }
	/* End TKKH */
	// /* View Phong */
	// public function getp(){
	// 	$p = Phong::All();
	// 	return view('Admin.Phong',compact('p'));
	// }
	// /* View them phong */
	// public function getthemp(){
	// 	$lp = Loaiphong::All();
	// 	return view('Admin.Them.Themphong',compact('lp'));
	// }
	// public function postthemp(request $reg){
	// 	$this->validate($reg,[
	// 		'maphong' => 'required|regex:/^[0-9]+$/|max:10|unique:phongs,maphong',
	// 		'sotang'=>'required|regex:/^[0-9]+$/|max:10',
	// 		'ghichu' => 'required|min:2|max:100',
	// 		'trangthai' => 'required|min:2|max:100',
	// 		'maloai'=>'required',
			
	// 	],
	// 	[
	// 		'maphong.required'=> 'Bạn chưa nhập mã phòng',
	// 		'maphong.regex'=> 'Mã phòng chỉ được nhập số',
	// 		'maphong.max'=>'Tối đa 10 kí tự',
	// 		'maphong.unique'=>'Phòng đã tồn tại',
	// 		'sotang.required'=> 'Bạn chưa nhập số tầng',
	// 		'sotang.regex'=> 'Tầng chỉ được nhập số',
	// 		'sotang.max'=>'Tối đa 10 kí tự',
	// 		'ghichu.required'=> 'Bạn chưa nhập ghi chú',
	// 		'ghichu.min'=>'Tối thiểu 2 kí tự',
	// 		'ghichu.max'=>'Tối đa 100 kí tự',
	// 		'trangthai.required'=> 'Bạn chưa nhập trạng thái',	
	// 		'trangthai.min'=>'Tối thiểu 2 kí tự',
	// 		'trangthai.max'=>'Tối đa 100 kí tự',
	// 		'maloai.required'=>'Chưa chọn mã loại'
	// 	]);
	// 	$p = new Phong;
	// 	$p->maphong = $reg['maphong'];		
	// 	$p->sotang = $reg['sotang'];
	// 	$p->ghichu = $reg['ghichu'];
	// 	$p->trangthai = $reg['trangthai'];
	// 	$pl = Loaiphong::Where('maloai',$reg['maloai'])->first();
	// 	if($pl)
	// 	{
	// 		$p->maloai = $reg['maloai'];
	// 		$p->save();
	// 		return redirect(route('get-themp'))->with('thanhcong','Bạn đã thêm phòng thành công');
	// 	}
	// 	else{
	// 		return redirect(route('get-themp'))->with('thanhcong','Không tồn tại loại phòng này');
	// 	}
	// }
	// /* Sua Phong */
	// public function getsuaphong($maphong){
	// 	$mp = Phong::find($maphong);
	// 	$lp = Loaiphong::all();
	// 	return view('Admin.Sua.Suaphong',compact('mp','lp'));
	// }
	// public function postsuaphong(request $reg,$maphong){
	// 	$mp = Phong::find($maphong);
		
	// 	$this->validate($reg,[
	// 		'ghichu' => 'required|min:2|max:100',
	// 		'trangthai' => 'required|min:2|max:100',
	// 		'maloai'=>'required',
		
			
	// 	],
	// 	[
	// 		'ghichu.required'=> 'Bạn chưa nhập ghi chú',
	// 		'ghichu.min'=>'Tối đa 100 kí tự',
	// 		'ghichu.max'=>'Tối đa 100 kí tự',
	// 		'trangthai.required'=> 'Bạn chưa nhập trạng thái',	
	// 		'trangthai.min'=>'Tối đa 100 kí tự',
	// 		'trangthai.max'=>'Tối đa 100 kí tự',
	// 		'maloai.required'=>'Chưa chọn tên loại phòng',
	// 	]);
	// 	$mp->ghichu = $reg['ghichu'];
	// 	$mp->trangthai = $reg['trangthai'];
	// 	$p = Loaiphong::Where('maloai',$reg['maloai'])->first();
	// 	$a = Dondat::Where('madon',$reg['madon'])->first();
	// 	if($p)
	// 	{
	// 		$mp->maloai = $reg['maloai'];
	// 			if($reg['madon']==NULL)
	// 				{
	// 					$mp->madon = $reg['madon'];
	// 				}
	// 			else
	// 			{
	// 				if($a)
	// 				{
	// 					$mp->madon = $reg['madon'];
	// 				}
	// 				else{
	// 					return redirect('Admin/Sua/Suaphong/'.$maphong)->with('thanhcong','Không tồn tại mã đơn này');
	// 				}
	// 			}
	// 		$mp->save();
	// 		return redirect(route('phong'))->with('thanhcong','Bạn đã sửa phòng thành công');
	// 	}
	// 	else{
	// 		return redirect('Admin/Sua/Suaphong/'.$maphong)->with('thanhcong','Không tồn tại loại phòng này');
	// 	}
	// }
	// /* xoa phong */
	// public function xoaphong($maphong)
	// {
	// 	$mp = Phong::find($maphong);
	// 	$ct = Chitiet::Where('maphong',$maphong)->first();
	// 	if(!$ct)
	// 	{
	// 		$mp->delete();
	// 		return redirect(route('phong'))->with('thanhcong','Bạn đã xóa phòng thành công');
	// 	}
	// 	else{
	// 		return redirect(route('phong'))->with('thanhcong','Vẫn tồn tại phòng ở chi tiết phòng');
	// 	}
		
	// }
	// /* ViewLoaiPhong */
	// public function getlp(){
	// 	$lp = Loaiphong::All();
	// 	// dd($lp);die;
	// 	return view('Admin.Loaiphong',compact('lp'));
	// }
	// /* Sua loai phong */
	// public function getsualoaiphong($maloai)
	// {
	// 	$lp = Loaiphong::find($maloai);
	// 	return view('Admin/Sua/Sualoaiphong',compact('lp'));
	// }
	// public function postsualoaiphong(request $reg,$maloai)
	// {
	// 	$lp = Loaiphong::find($maloai);
	// 	$this->validate($reg,[
	// 		'tenloai' => 'required|min:3|max:100',
	// 		'succhua' => 'required|regex:/^[0-9]+$/|min:1|max:10',
	// 		'gia'=>'required|regex:/^[0-9]+$/|min:1|max:10',
	// 		'mota'=>'required|min:3|max:50',
	// 	],[
	// 		'tenloai.required'=> 'Bạn chưa nhập tên loại',
	// 		'tenloai.min'=>'Sức chứa chỉ được nhập 3-100 ký tự',
	// 		'tenloai.max'=>'Sức chứa chỉ được nhập 3-100 ký tự',
	// 		'succhua.required'=> 'Bạn chưa nhập sức chứa',
	// 		'succhua.regex'=>'Chỉ được nhập số sức chứa',
	// 		'succhua.min'=>'Sức chứa chỉ được nhập 1-10 ký tự',
	// 		'succhua.max'=>'Sức chứa chỉ được nhập 1-10 ký tự',
	// 		'gia.required'=> 'Bạn chưa nhập giá',
	// 		'gia.regex'=>'Chỉ được nhập số giá',
	// 		'gia.min'=>'Giá chỉ được nhập 1-10 ký tự',
	// 		'gia.max'=>'Giá chỉ được nhập 1-10 ký tự',
	// 		'mota.required'=> 'Bạn chưa nhập mô tả',
	// 		'mota.min'=>'Mô tả nhập từ 3-50 kí tự',
	// 		'mota.max'=>'Mô tả nhập từ 3-50 kí tự',
	// 	]);
	// 	$lp->tenloai = $reg['tenloai'];
	// 	$lp->succhua = $reg['succhua'];
	// 	$lp->gia = $reg['gia'];
	// 	$lp->mota = $reg['mota'];
	// 	if($reg['hinhanh'] != NULL)
	// 	{
	// 		$name = $reg['hinhanh']->getClientOriginalName();//lay ten hinh
	// 		$a = substr("$name",-4);
	// 		$b = 'KS-'.rand(1,1000).$a;
	// 		if($a == '.jpg' || $a == '.png')
	// 		{
	// 			$path = public_path().'/img';
	// 			$reg['hinhanh']->move($path,$b);
	// 			$lp->hinhanh = $b;
	// 		}	
	// 		else
	// 		{
	// 			return redirect('Admin/Sua/Sualoaiphong/'.$maloai)->with('thanhcong','Vui lòng upload file hình có đuôi jpg hoặc png');
	// 		}	
	// 	}
		
	// 	$lp->save();
	// 	return redirect(route('lphong'))->with('thanhcong','Bạn đã sửa loại phòng thành công');
	// }
	// /* Xoa loai Phong */
	// public function xoaloaiphong($maloai){
	// 	$lp = Loaiphong::find($maloai);
	// 	$lp1 = Loaiphong::find($maloai)->maloai;
	// 	$p = Phong::where('maloai',$maloai)->first();
	// 	if(!$p){
	// 		$lp->delete();
	// 		return redirect(route('lphong'))->with('thanhcong','Bạn đã xóa loại phòng thành công');
	// 	}else{
	// 		return redirect(route('lphong'))->with('thanhcong','Không thể xóa vì còn tồn tại loại phòng này trong trang phòng');
	// 	}
	// }
	// /* View them loai phong */
	// public function getthemlp(request $reg){
	// 	return view('Admin.Them.Themloaiphong');
	// }
	// /* post them loai phong */
	// public function postthemlp(request $reg){
	// 	$this->validate($reg,[
	// 		'tenloai' => 'required|min:3|max:100',
	// 		'succhua' => 'required|regex:/^[0-9]+$/|min:1|max:10',
	// 		'gia'=>'required|regex:/^[0-9]+$/|min:1|max:10',
	// 		'mota'=>'required|min:3|max:50',
	// 		'hinhanh'=>'required',
	// 	],[
	// 		'tenloai.required'=> 'Bạn chưa nhập tên loại',
	// 		// 'tenloai.regex'=>'Tên loại sai kiểu',
	// 		'tenloai.min'=>'Tên loại chỉ được nhập 3-100 ký tự',
	// 		'tenloai.max'=>'Tên loại chỉ được nhập 3-100 ký tự',
	// 		'succhua.required'=> 'Bạn chưa nhập sức chứa',
	// 		'succhua.regex'=>'Chỉ được nhập số sức chứa',
	// 		'succhua.min'=>'Sức chứa chỉ được nhập 1-10 ký tự',
	// 		'succhua.max'=>'Sức chứa chỉ được nhập 1-10 ký tự',
	// 		'gia.required'=> 'Bạn chưa nhập giá',
	// 		'gia.regex'=>'Chỉ được nhập số giá',
	// 		'gia.min'=>'Giá chỉ được nhập 1-10 ký tự',
	// 		'gia.max'=>'Giá chỉ được nhập 1-10 ký tự',
	// 		'mota.required'=> 'Bạn chưa nhập mô tả',
	// 		'mota.min'=>'Mô tả nhập từ 3-50 kí tự',
	// 		'mota.max'=>'Mô tả nhập từ 3-50 kí tự',
	// 		'hinhanh.required'=> 'Bạn chưa chọn hình ảnh',
	// 	]);
	// 	$lp = new Loaiphong;
	// 	$lp->tenloai = $reg['tenloai'];
	// 	$lp->succhua = $reg['succhua'];
	// 	$lp->gia = $reg['gia'];
	// 	$lp->mota = $reg['mota'];
	// 	$name = $reg['hinhanh']->getClientOriginalName();//lay ten hinh
	// 	$a = substr("$name",-4);
	// 	$b = 'KS-'.rand(1,1000).$a;
	// 	if($a == '.jpg' || $a == '.png')
	// 	{
	// 		$path = public_path().'/img';
	// 		$reg['hinhanh']->move($path,$b);//$reg['hinhanh'] tmp_name, noi luu tru tam thoi cai hinh anh
	// 		$lp->hinhanh = $b;
	// 	}	
	// 	else
	// 	{
	// 		return redirect(route('get-themlp'))->with('thanhcong','Vui lòng upload file hình có đuôi jpg hoặc png');
	// 	}	
	// 	$lp->save();
	// 	return redirect(route('get-themlp'))->with('thanhcong','Bạn đã thêm loại phòng thành công');
	// }
	// /* Xem tat ca don dat phong */
	// public function getalldondat(){
	// 	$dd = Dondat::All();
	// 	return view('Admin.Alldondat',compact('dd'));
	// }
	// /* them don dat */
	// public function getthemdd()
	// {
	// 	return view('Admin.Them.Themdondat');
	// }
	// public function postthemdd(request $reg){
	// 	$this->validate($reg,[
	// 		'ngaylap'=>'required',
	// 		'tongtien'=>'required|regex:/^[0-9]+$/',
	// 		'trangthai'=>'required',
	// 	],[
	// 		'ngaylap.required'=>'Bạn chưa chọn ngày lập đơn đặt phòng',
	// 		'tongtien.required'=>'Bạn chưa nhập tổng tiền',
	// 		'tongtien.regex'=>'Tổng tiền phải là số',
	// 		'trangthai.required'=>'Bạn chưa nhập trạng thái',
	// 	]);
	// 	$dd = new Dondat;
	// 	$nv = Nhanvien::Where('manv',$reg['manv'])->first();
	// 	$kh = Khachhang::Where('makh',$reg['makh'])->first();
	// 	$tt = Thanhtoan::Where('matt',$reg['matt'])->first();
	// 	$km = Khuyenmai::Where('makm',$reg['makm'])->first();
	// 		if($nv)
	// 		{
	// 			$dd->manv = $reg['manv'];
	// 		}
	// 		else
	// 		{
	// 			return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã nhân viên không tồn tại');
	// 		}
	// 		if($kh)
	// 		{
	// 			$dd->makh = $reg['makh'];
	// 		}
	// 		else
	// 		{
	// 			return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã khách hàng không tồn tại');
	// 		}
	// 		if($reg['matt'] != NULL)
	// 		{
	// 			if($tt)
	// 			{
	// 				$dd->matt = $reg['matt'];
	// 			}
	// 			else
	// 			{
	// 				return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã thanh toán không tồn tại');
	// 			}
	// 		}
			
	// 		if($reg['makm'] != NULL)
	// 		{	
	// 			if($km)
	// 			{
	// 				$dd->makm = $reg['makm'];
	// 			}
	// 			else
	// 			{
	// 			return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã khuyến mãi không tồn tại');
	// 			}
	// 		}	
	// 	$dd->ngaylap = $reg['ngaylap'];
	// 	$dd->tongtien = $reg['tongtien'];
	// 	$dd->trangthai = $reg['trangthai'];
	// 	$dd->save();
	// 	return redirect('Admin/Them/Themdondat')->with('thanhcong','Bạn đã thêm đơn đặt phòng thành công');
	// }
	// /* Sua Don Dat  */
	// public function getsuadondat($madon)
	// {
	// 	$dd = Dondat::find($madon);
	// 	return view('Admin.Sua.Suadondat',compact('dd'));
	// }
	// public function postsuadondat(request $reg,$madon)
	// {
	// 	$this->validate($reg,[
	// 		'ngaylap'=>'required',
	// 		'tongtien'=>'required|regex:/^[0-9]+$/',
	// 		'trangthai'=>'required',
	// 	],[
	// 		'ngaylap.required'=>'Bạn chưa chọn ngày lập đơn đặt phòng',
	// 		'tongtien.required'=>'Bạn chưa nhập tổng tiền',
	// 		'tongtien.regex'=>'Tổng tiền phải là số',
	// 		'trangthai.required'=>'Bạn chưa nhập trạng thái',
	// 	]);
	// 	$dd = Dondat::find($madon);
	// 	$nv = Nhanvien::Where('manv',$reg['manv'])->first();
	// 	$kh = Khachhang::Where('makh',$reg['makh'])->first();
	// 	$tt = Thanhtoan::Where('matt',$reg['matt'])->first();
	// 	$km = Khuyenmai::Where('makm',$reg['makm'])->first();
	// 		if($nv)
	// 		{
	// 			$dd->manv = $reg['manv'];
	// 		}
	// 		else
	// 		{
	// 			return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã nhân viên không tồn tại');
	// 		}
	// 		if($kh)
	// 		{
	// 			$dd->makh = $reg['makh'];
	// 		}
	// 		else
	// 		{
	// 			return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã khách hàng không tồn tại');
	// 		}
	// 		if($reg['matt'] != NULL)
	// 		{
	// 			if($tt)
	// 			{
	// 				$dd->matt = $reg['matt'];
	// 			}
	// 			else
	// 			{
	// 				return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã thanh toán không tồn tại');
	// 			}
	// 		}
			
	// 		if($reg['makm'] != NULL)
	// 		{	
	// 			if($km)
	// 			{
	// 				$dd->makm = $reg['makm'];
	// 			}
	// 			else
	// 			{
	// 			return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã khuyến mãi không tồn tại');
	// 			}
	// 		}	
	// 	$dd->ngaylap = $reg['ngaylap'];
	// 	$dd->tongtien = $reg['tongtien'];
	// 	$dd->trangthai = $reg['trangthai'];
	// 	$dd->save();
	// 	return redirect('Admin/AllDonDat')->with('thanhcong','Bạn đã sửa đơn đặt phòng thành công');
	// }
	// /* Xoa  Don Dat*/
	// public function xoadondat($madon)
	// {
	// 	$dd = Dondat::find($madon);
	// 	$ct = Chitiet::Where('madon',$madon)->first();
	// 	if(!$ct)
	// 	{
	// 		$dd->delete();
	// 		return redirect('Admin/AllDonDat')->with('thanhcong','Bạn đã xóa đơn đặt phòng thành công');
	// 	}
	// 	else{
	// 		return redirect('Admin/AllDonDat')->with('thanhcong','Vẫn còn tồn tại chi tiết của đơn đặt');
	// 	}
		
	// }
	// /* View chi tiet don dat */
	// public function getchitietdd(){
	// 	$ct = Chitiet::all();
	// 	return view('Admin.Chitietdd',compact('ct'));
	// }
	// /* get view them chi tiet don dat */
	// public function getviewthemct(){
	// 	return view('Admin/Them/Themchitiet');
	// }
	// public function postthemct(request $reg)
	// {
	// 	$this->validate($reg,[
	// 		'slphong'=>'required|regex:/^[0-9]+$/|min:1|max:3',
	// 		'nguoilon'=>'required|regex:/^[0-9]+$/|min:1|max:3',
	// 		'treem'=>'required|regex:/^[0-9]+$/|min:1|max:3',
	// 		'ngayden'=>'required',
	// 		'ngaydi'=>'required',
	// 	],[
	// 		'slphong.required'=>'Vui lòng nhập số lượng phòng muốn đặt',
	// 		'slphong.regex'=>'Số lượng phòng chỉ được nhập số',
	// 		'slphong.min'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
	// 		'slphong.max'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
	// 		'nguoilon.required'=>'Vui lòng nhập số lượng người lớn',
	// 		'nguoilon.regex'=>'Số lượng người lớn chỉ được nhập số',
	// 		'nguoilon.min'=>'SL người lớn nhất 1 số và nhiều nhất 3 số',
	// 		'nguoilon.max'=>'SL người lớn ít nhất 1 số và nhiều nhất 3 số',
	// 		'treem.required'=>'Vui lòng nhập số lượng trẻ em',
	// 		'treem.regex'=>'Số lượng trẻ em chỉ được nhập số',
	// 		'treem.min'=>'SL trẻ em ít nhất 1 số và nhiều nhất 3 số',
	// 		'treem.max'=>'SL trẻ em ít nhất 1 số và nhiều nhất 3 số',
	// 		'ngayden.required'=>'Vui lòng chọn ngày đến',
	// 		'ngaydi.required'=>'Vui lòng chọn ngày đến',
	// 	]);
	// 	$ct = new Chitiet;
	// 	$md = Dondat::Where('madon',$reg['madon'])->first();
	// 	if($md)
	// 	{
	// 		$ct->madon = $reg['madon'];
	// 	}
	// 	else{
	// 		return redirect('Admin/Them/Themchitiet')->with('thanhcong','Không tồn tại mã đơn này');
	// 	}
	// 	$ct->slphong=$reg['slphong'];
	// 	$ct->nguoilon=$reg['nguoilon'];
	// 	$ct->treem=$reg['treem'];
	// 	$ct->ngayden=$reg['ngayden'];
	// 	$ct->ngaydi=$reg['ngaydi'];
	// 	$ct->save();
	// 	return redirect('Admin/Them/Themchitiet')->with('thanhcong','Bạn thêm chi tiết đơn đặt phòng thành công');		
	// }
	// /* Sua chi tiet don dat */
	// public function getsuact($mact){
	// 	$ct = Chitiet::find($mact);
	// 	return view('Admin/Sua/Suachitiet',compact('ct'));

	// }
	// public function postsuact(request $reg,$mact){
	// 	$this->validate($reg,[
	// 		'slphong'=>'required|regex:/^[0-9]+$/|min:1|max:3',
	// 		'nguoilon'=>'required|regex:/^[0-9]+$/|min:1|max:3',
	// 		'treem'=>'required|regex:/^[0-9]+$/|min:1|max:3',
	// 		'ngayden'=>'required',
	// 		'ngaydi'=>'required',
	// 	],[
	// 		'slphong.required'=>'Vui lòng nhập số lượng phòng muốn đặt',
	// 		'slphong.regex'=>'Số lượng phòng chỉ được nhập số',
	// 		'slphong.min'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
	// 		'slphong.max'=>'SL phòng ít nhất 1 số và nhiều nhất 3 số',
	// 		'nguoilon.required'=>'Vui lòng nhập số lượng người lớn',
	// 		'nguoilon.regex'=>'Số lượng người lớn chỉ được nhập số',
	// 		'nguoilon.min'=>'SL người lớn nhất 1 số và nhiều nhất 3 số',
	// 		'nguoilon.max'=>'SL người lớn ít nhất 1 số và nhiều nhất 3 số',
	// 		'treem.required'=>'Vui lòng nhập số lượng trẻ em',
	// 		'treem.regex'=>'Số lượng trẻ em chỉ được nhập số',
	// 		'treem.min'=>'SL trẻ em ít nhất 1 số và nhiều nhất 3 số',
	// 		'treem.max'=>'SL trẻ em ít nhất 1 số và nhiều nhất 3 số',
	// 		'ngayden.required'=>'Vui lòng chọn ngày đến',
	// 		'ngaydi.required'=>'Vui lòng chọn ngày đến',
	// 	]);
	// 	$ct = Chitiet::find($mact)->first();
	// 	$md = Dondat::Where('madon',$reg['madon'])->first();
	// 	if($md)
	// 	{
	// 		$ct->madon = $reg['madon'];
	// 	}
	// 	else{
	// 		return redirect('Admin/Sua/Suachitiet/'.$mact)->with('thanhcong','Không tồn tại mã đơn này');
	// 	}
	// 	$ct->slphong=$reg['slphong'];
	// 	$ct->nguoilon=$reg['nguoilon'];
	// 	$ct->treem=$reg['treem'];
	// 	$ct->ngayden=$reg['ngayden'];
	// 	$ct->ngaydi=$reg['ngaydi'];
	// 	$ct->save();
	// 	return redirect('Admin/Chitietdondat')->with('thanhcong','Sửa chi tiết đơn đặt phòng thành công');		
	// }
	// /* Xoa chi tiet don dat */
	// public function getxoact($mact)
	// {
	// 	$ct = Chitiet::find($mact);
	// 	$ct->delete();
		
	// 	return redirect('Admin/Chitietdondat')->with('thanhcong','Xóa chi tiết đơn đặt phòng thành công');	
	// }
	// /* Them nhan vien */
	// public function getviewnv()
	// {
	// 	$nv = Nhanvien::all();
	// 	return view('Admin/QLTKNV',compact('nv'));
	// }
	// /* view  them tai khoan nhan vien*/
	// public function getviewthemnv()
	// {
	// 	return view('Admin/Them/ThemTKNV');
	// }
	// /* Them tai khoan nhan vien */
	// public function postthemnv(request $reg)
	// {
	// 	$nv = new Nhanvien; 
	// 	$nv->taikhoan=$reg['taikhoan'];
	// 	$nv->role=$reg['role'];
	// 	$nv->matkhau=$reg['matkhau'];
	// 	$nv->sdt=$reg['sdt'];
	// 	$nv->cmnd=$reg['cmnd'];
	// 	$nv->hoten=$reg['hoten'];
	// 	$nv->email=$reg['email'];
	// 	$nv->save();
	// 	return redirect('Admin/Them/ThemTKNV')->with('thanhcong','Bạn thêm thành công');	
	// }
	// /* view  sua tai khoan nhan vien*/
	// public function getviewsuanv($manv)
	// {
	// 	$manv = Nhanvien::find($manv);
	// 	return view('Admin/Sua/SuaTKNV',compact('manv'));
	// }
	// /* Post sua tai khoan nhan vien  */
	// public function postsuanv(request $reg,$manv)
	// {
	// 	$role = Cookie::get('account')->role;
	// 	if($role == 1 || $role == 2){
	// 		$nv = Nhanvien::find($manv);
	// 		$nv->taikhoan=$reg['taikhoan'];
	// 		$nv->role=$reg['role'];
	// 		$nv->matkhau=$reg['matkhau'];
	// 		$nv->sdt=$reg['sdt'];
	// 		$nv->cmnd=$reg['cmnd'];
	// 		$nv->hoten=$reg['hoten'];
	// 		$nv->email=$reg['email'];
	// 		$nv->save();
	// 		return redirect('Admin/QLTKNV')->with('thanhcong','Bạn thêm thành công');	
	// 	}else{
	// 		return back();
	// 	}
	// }
}		
