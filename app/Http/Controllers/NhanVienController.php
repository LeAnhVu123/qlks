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
class NhanVienController extends Controller
{
    //
    /* Them nhan vien */
	public function getviewnv()
	{
		$nv = Nhanvien::all();
		return view('Admin/QLTKNV',compact('nv'));
	}
	/* view  them tai khoan nhan vien*/
	public function getviewthemnv()
	{
		return view('Admin/Them/ThemTKNV');
	}
	/* Them tai khoan nhan vien */
	public function postthemnv(request $reg)
	{
		$nv = new Nhanvien; 
		$nv->taikhoan=$reg['taikhoan'];
		$nv->role=$reg['role'];
		$nv->matkhau=$reg['matkhau'];
		$nv->sdt=$reg['sdt'];
		$nv->cmnd=$reg['cmnd'];
		$nv->hoten=$reg['hoten'];
		$nv->email=$reg['email'];
		$nv->save();
		return redirect('Admin/Them/ThemTKNV')->with('thanhcong','Bạn thêm thành công');	
	}
	/* view  sua tai khoan nhan vien*/
	public function getviewsuanv($manv)
	{
		$manv = Nhanvien::find($manv);
		return view('Admin/Sua/SuaTKNV',compact('manv'));
	}
	/* Post sua tai khoan nhan vien  */
	public function postsuanv(request $reg,$manv)
	{
			$nv = Nhanvien::find($manv);
			$nv->taikhoan=$reg['taikhoan'];
			$nv->role=$reg['role'];
			$nv->matkhau=$reg['matkhau'];
			$nv->sdt=$reg['sdt'];
			$nv->cmnd=$reg['cmnd'];
			$nv->hoten=$reg['hoten'];
			$nv->email=$reg['email'];
			$nv->save();
			return redirect('Admin/QLTKNV')->with('thanhcong','Bạn thêm thành công');	
	}
}
