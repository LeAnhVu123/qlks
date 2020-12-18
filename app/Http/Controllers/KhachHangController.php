<?php

namespace App\Http\Controllers;
use  App\Khachhang;
use Illuminate\Http\Request;
use  App\Dondat;
class KhachHangController extends Controller
{
    //
    public  function getkh(request $reg)
	{
		$i = $reg['tkkh'];
		if($i == NULL)
		{
			$kh = Khachhang::All();
		}
		else{
			$kh = Khachhang::All()->where('makh',$i);
		}
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
			'matkhau' => 'required|min:3|max:100',
			// 'makh' => 'required|regex:/^[0-9]+$/|unique:khachhangs,makh|min:3|max:9',regex:/^[a-zA-Z0-9]+$/|
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
			// 'matkhau.regex'=>'Mật khẩu sai font',	
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
			'cmnd'=> 'required|regex:/^[0-9]+$/|min:9|max:10',
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
			'cmnd.required'=>'Chưa nhập CMND khách hàng',
			'cmnd.regex'=>'CMND chỉ được là số',
			'cmnd.min'=>'Độ dài CMND từ 9-10 ký tự',
			'cmnd.max'=>'Độ dài CMND từ 9-10 ký tự',
		]);
		$kh->cmnd = $reg['cmnd'];
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
}
