<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Khachhang;
class DangKiController extends Controller
{
    //
    public function postdk(request $reg)
	{
		$this->validate($reg,
		[
			'taikhoan'=> 'required|regex:/^[a-zA-Z0-9]+$/|unique:khachhangs,taikhoan|min:3|max:100',
			'matkhau' => 'regex:/^[a-zA-Z0-9]+$/|min:3|max:100',
			// 'makh' => 'required|regex:/^[0-9]+$/|unique:khachhangs,makh|min:3|max:9',
			'hoten' => 'required|min:3|max:100',
			'sdt' => 'required|regex:/^[0-9]+$/|min:3|max:12',
			'cmnd'=> 'required|regex:/^[0-9]+$/|min:9|max:10',
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
			// 'makh.required'=>'Chưa nhập mã khách hàng',
			// 'makh.regex'=>'CMND chỉ được là số',
			// 'makh.unique'=>'CMND đã tồn tại',
			// 'makh.min'=>'Độ dài CMND khách hàng từ 3-9 ký tự',
			// 'makh.max'=>'Độ dài CMND khách hàng từ 3-9 ký tự',
			'hoten.required'=>'Chưa nhập họ tên khách hàng',
			'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
			'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
			'sdt.required'=>'Chưa nhập sdt khách hàng',
			'sdt.regex'=>'SDT chỉ được là số',
			'sdt.min'=>'Độ dài sdt từ 3-12 ký tự',
			'sdt.max'=>'Độ dài sdt từ 3-12 ký tự',
			'cmnd.required'=>'Chưa nhập CMND khách hàng',
			'cmnd.regex'=>'CMND chỉ được là số',
			'cmnd.min'=>'Độ dài CMND từ 9-10 ký tự',
			'cmnd.max'=>'Độ dài CMND từ 9-10 ký tự',
		]);
		$kh = new Khachhang;
		$kh->cmnd = $reg['cmnd'];
		$kh->matkhau = $reg['matkhau'];
		// $kh->makh = $reg['makh'];
		$kh->hoten = $reg['hoten'];
		$kh->sdt = $reg['sdt'];
		$kh->taikhoan = $reg['taikhoan'];
		$kh->email = $reg['email'];
		$kh->save();
		return redirect(route('dk'))->with('thanhcong','Bạn đã thêm tài khoản thành công');
	}
}
