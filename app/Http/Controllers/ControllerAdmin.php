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

class ControllerAdmin extends Controller
{
	public function quanly()
	{
		return view('Admin.QuanLy');
	}
	/* View Show QLKH */
	public  function getkh()
	{
		$kh = Khachhang::All();
		return view('Admin.QLTKKH', compact('kh'));
	}
	/* View them tai khoan */
	public function getthemtk()
	{	
		return view('Admin.Them.ThemTKKH');
	}
	/* Hàm them tai khoan */
	public function postthemtk(request $reg)
	{
		$this->validate($reg,
		[
			'taikhoan'=> 'required|regex:/^[a-zA-Z0-9]+$/|unique:khachhangs,taikhoan|min:3|max:100',
			'matkhau' => 'regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
			'makh' => 'required|regex:/^[0-9]+$/|unique:khachhangs,makh|min:3|max:9',
			'hoten' => 'required|min:3|max:100',
			'sdt' => 'required|regex:/^[0-9]+$/|min:3|max:12',
		],
		[
			'taikhoan.required'=>'Chưa nhập tài khoản khách hàng',
			'taikhoan.regex'=>'Tài khoản sai font',
			'taikhoan.unique'=>'Tài khoản đã tồn tại',
			'taikhoan.min'=>'Độ dài tài khoản từ 3-100 ký tự',
			'taikhoan.max'=>'Độ dài tài khoản từ 3-100 ký tự',
			'matkhau.required'=>'Chưa nhập mật khẩu khách hàng',
			'matkhau.regex'=>'Mật khẩu sai font',	
			'matkhau.min'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'matkhau.max'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'makh.required'=>'Chưa nhập mã khách hàng',
			'makh.regex'=>'CMND chỉ được là số',
			'makh.unique'=>'CMND đã tồn tại',
			'makh.min'=>'Độ dài CMND khách hàng từ 3-9 ký tự',
			'makh.max'=>'Độ dài CMND khách hàng từ 3-9 ký tự',
			'hoten.required'=>'Chưa nhập họ tên khách hàng',
			'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
			'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
			'sdt.required'=>'Chưa nhập sdt khách hàng',
			'sdt.regex'=>'SDT chỉ được là số',
			'sdt.min'=>'Độ dài sdt từ 3-12 ký tự',
			'sdt.max'=>'Độ dài sdt từ 3-12 ký tự',
		]);
		$kh = new Khachhang;
		$kh->matkhau = $reg['matkhau'];
		$kh->makh = $reg['makh'];
		$kh->hoten = $reg['hoten'];
		$kh->sdt = $reg['sdt'];
		$kh->taikhoan = $reg['taikhoan'];
		$kh->email = $reg['email'];
		$kh->save();
		return redirect(route('get-themtk'))->with('thanhcong','Bạn đã thêm tài khoản thành công');
	}
	/* View sua tai khoan */
	public function getsuatk($makh)
	{	
		$kh = Khachhang::find($makh);
		return view('Admin.Sua.SuaTKKH',compact('kh'));
	}
	/* Hàm sua tai khoan */
	public function postsuatk(request $reg,$makh)
	{	
		$kh = Khachhang::find($makh);
		$this->validate($reg,
		[
			'matkhau' => 'regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
			'hoten' => 'required|min:3|max:100',
			'sdt' => 'required|regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
		],
		[
			'matkhau.required'=>'Chưa nhập mật khẩu khách hàng',
			'matkhau.regex'=>'Mật khẩu sai font',		
			'matkhau.min'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'matkhau.max'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'hoten.required'=>'Chưa nhập họ tên khách hàng',
			'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
			'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
			'sdt.required'=>'Chưa nhập sdt khách hàng',
			'sdt.regex'=>'SDT chỉ được là số',
			'sdt.min'=>'Độ dài sdt từ 3-100 ký tự',
			'sdt.max'=>'Độ dài sdt từ 3-100 ký tự',
		]);
		$kh->matkhau = $reg['matkhau'];
		$kh->hoten = $reg['hoten'];
		$kh->sdt = $reg['sdt'];
		$kh->email = $reg['email'];
		$kh->save();
		// return redirect('Admin/Sua/SuaTKKH/'.$makh)->with('thanhcong','Bạn đã sửa tài khoản thành công');
		return redirect(route('qltk'))->with('thanhcong','Bạn đã sửa tài khoản thành công');
	}
	/* Xoa tai khoan khach hang */
	public function getxoa($makh)
	{
		$kh = Khachhang::find($makh);
		$a = Dondat::Where('makh',$makh)->first();
		if(!$a)
		{
			$kh->delete();
			return redirect(route('qltk'))->with('thanhcong','Bạn đã xóa tài khoản thành công');
		}
		else
		{
			return redirect(route('qltk'))->with('thanhcong','Vẫn còn mã khách hàng trang đơn đặt');
		}
		
	}
	/* End TKKH */
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
	/* Xóa Phòng */
	public function xoaphong($maphong)
	{
		$mp = Phong::find($maphong);
		$mp->delete();
		return redirect(route('phong'))->with('thanhcong','Bạn đã xóa phòng thành công');
	}
	/* ViewLoaiPhong */
	public function getlp(){
		$lp = Loaiphong::All();
		// dd($lp);die;
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
			'tenloai' => 'required|regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
			'succhua' => 'required|regex:/^[0-9]+$/|min:1|max:10',
			'gia'=>'required|regex:/^[0-9]+$/|min:1|max:10',
			'mota'=>'required',
		],[
			'tenloai.required'=> 'Bạn chưa nhập tên loại',
			'tenloai.regex'=>'Tên loại sai kiểu',
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
		return view('Admin.Them.Themloaiphong');
	}
	/* post them loai phong */
	public function postthemlp(request $reg){
		$this->validate($reg,[
			'tenloai' => 'required|regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
			'succhua' => 'required|regex:/^[0-9]+$/|min:1|max:10',
			'gia'=>'required|regex:/^[0-9]+$/|min:1|max:10',
			'mota'=>'required',
			'hinhanh'=>'required',
		],[
			'tenloai.required'=> 'Bạn chưa nhập tên loại',
			'tenloai.regex'=>'Tên loại sai kiểu',
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
			$reg['hinhanh']->move($path,$b);
			$lp->hinhanh = $b;
		}	
		else
		{
			return redirect(route('get-themlp'))->with('thanhcong','Vui lòng upload file hình có đuôi jpg hoặc png');
		}	
		$lp->save();
		return redirect(route('get-themlp'))->with('thanhcong','Bạn đã thêm loại phòng thành công');
	}
	/* Xem tat ca don dat phong */
	public function getalldondat(){
		$dd = Dondat::All();
		return view('Admin.Alldondat',compact('dd'));
	}
	public function getthemdd()
	{
		return view('Admin.Them.Themdondat');
	}
	public function postthemdd(request $reg){
		$this->validate($reg,[
			'ngaylap'=>'required',
			'tongtien'=>'required|regex:/^[0-9]+$/',
			'trangthai'=>'required',
		],[
			'ngaylap.required'=>'Bạn chưa chọn ngày lập đơn đặt phòng',
			'tongtien.required'=>'Bạn chưa nhập tổng tiền',
			'tongtien.regex'=>'Tổng tiền phải là số',
			'trangthai.required'=>'Bạn chưa nhập trạng thái',
		]);
		$dd = new Dondat;
		$nv = Nhanvien::Where('manv',$reg['manv'])->first();
		$kh = Khachhang::Where('makh',$reg['makh'])->first();
		$tt = Thanhtoan::Where('matt',$reg['matt'])->first();
		$km = Khuyenmai::Where('makm',$reg['makm'])->first();
			if($nv)
			{
				$dd->manv = $reg['manv'];
			}
			else
			{
				return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã nhân viên không tồn tại');
			}
			if($kh)
			{
				$dd->makh = $reg['makh'];
			}
			else
			{
				return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã khách hàng không tồn tại');
			}
			if($tt)
			{
				$dd->matt = $reg['matt'];
			}
			else
			{
				return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã thanh toán không tồn tại');
			}
			if($reg['makm'] != NULL)
			{	
				if($km)
				{
					$dd->makm = $reg['makm'];
				}
				else
				{
				return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã khuyến mãi không tồn tại');
				}
			}	
		$dd->ngaylap = $reg['ngaylap'];
		$dd->tongtien = $reg['tongtien'];
		$dd->trangthai = $reg['trangthai'];
		$dd->save();
		return redirect('Admin/Them/Themdondat')->with('thanhcong','Bạn đã thêm đơn đặt phòng thành công');
	}
	/* Sua Don Dat  */
	/* Xoa  Don Dat*/
	/* View chi tiet don dat */
	public function getchitietdd(){
		$ct = Chitiet::all();
		return view('Admin.Chitietdd',compact('ct'));
	}
	/*  */
}		
