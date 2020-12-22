<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Nhanvien;
use  App\Dondat;
use App\Role;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Cookie;
class NhanVienController extends Controller
{
    //
    /* Them nhan vien */
	public function getviewnv(request $reg)
	{
		$i = $reg['tknv'];
		if($i == NULL)
		{
			$nv = Nhanvien::all()->where('manv','<>',1);
		}else{
			$nv = Nhanvien::all()->where('manv',$i)->where('manv','<>',1);
		}
		return view('Admin/QLTKNV',compact('nv'));
	}
	/* view  them tai khoan nhan vien*/
	public function getviewthemnv()
	{
		$role = Role::all()->where('role_id','<>',1);
		// dd($role);die;
		return view('Admin/Them/ThemTKNV',compact('role'));
	}
	/* Them tai khoan nhan vien */
	public function postthemnv(request $reg)
	{
		$this->validate($reg,[
			'taikhoan'=>'required|regex:/^[a-zA-Z0-9]+$/|unique:nhanviens,taikhoan|min:3|max:100',
			'matkhau'=>'required|min:3|max:100',
			'hoten'=>'required|min:3|max:100',
			'sdt'=>'required|regex:/^[0-9]+$/|min:3|max:12',
			'cmnd'=>'required|regex:/^[0-9]+$/|min:9|max:10',
			'email'=>'required',
		],[
			'taikhoan.required'=>'Chưa nhập tài khoản nhân viên',
			'taikhoan.regex'=>'Tài khoản sai font',
			'taikhoan.unique'=>'Tài khoản đã tồn tại',
			'taikhoan.min'=>'Độ dài tài khoản từ 3-100 ký tự',
			'taikhoan.max'=>'Độ dài tài khoản từ 3-100 ký tự',
			'matkhau.required'=>'Chưa nhập mật khẩu nhân viên',
			'matkhau.min'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'matkhau.max'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'hoten.required'=>'Chưa nhập họ tên nhân viên',
			'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
			'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
			'sdt.required'=>'Chưa nhập sdt nhân viên',
			'sdt.regex'=>'SDT chỉ được là số',
			'sdt.min'=>'Độ dài sdt từ 3-12 ký tự',
			'sdt.max'=>'Độ dài sdt từ 3-12 ký tự',
			'cmnd.required'=>'Chưa nhập CMND nhân viên',
			'cmnd.regex'=>'CMND chỉ được là số',
			'cmnd.min'=>'Độ dài CMND từ 9-10 ký tự',
			'cmnd.max'=>'Độ dài CMND từ 9-10 ký tự',
			'email.required'=>'Chưa nhập email',
		]);
		$nv = new Nhanvien; 
		$nv->taikhoan=$reg['taikhoan'];
		$nv->role=$reg['role'];
		$nv->matkhau=$reg['matkhau'];
		$nv->sdt=$reg['sdt'];
		$nv->cmnd=$reg['cmnd'];
		$nv->hoten=$reg['hoten'];
		$nv->email=$reg['email'];
		$nv->save();
		return redirect('Admin/Them/ThemTKNV')->with('thanhcong','Bạn thêm thành công nhân viên');	
	}
	/* view  sua tai khoan nhan vien*/
	public function getviewsuanv($manv)
	{
		$role = Role::all()->where('role_id','<>',1);
		$manv = Nhanvien::find($manv);
		$ck = Cookie::get('account');
		$json = \json_decode($ck)->role;
		if($json == $manv->role)
			{
				return back()->with('thanhcong','Bạn không có quyền sửa');	
			}
		return view('Admin/Sua/SuaTKNV',compact('manv','role'));
	}
	/* Post sua tai khoan nhan vien  */
	public function postsuanv(request $reg,$manv)
	{
		$this->validate($reg,[
			// 'taikhoan'=>'required|regex:/^[a-zA-Z0-9]+$/|unique:nhanviens,taikhoan|min:3|max:100',
			'matkhau'=>'required|min:3|max:100',
			'hoten'=>'required|min:3|max:100',
			'sdt'=>'required|regex:/^[0-9]+$/|min:3|max:12',
			'cmnd'=>'required|regex:/^[0-9]+$/|min:9|max:10',
			'email'=>'required',
		],[
			// 'taikhoan.required'=>'Chưa nhập tài khoản nhân viên',
			// 'taikhoan.regex'=>'Tài khoản sai font',
			// 'taikhoan.unique'=>'Tài khoản đã tồn tại',
			// 'taikhoan.min'=>'Độ dài tài khoản từ 3-100 ký tự',
			// 'taikhoan.max'=>'Độ dài tài khoản từ 3-100 ký tự',
			'matkhau.required'=>'Chưa nhập mật khẩu nhân viên',
			'matkhau.min'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'matkhau.max'=>'Độ dài mật khẩu từ 3-100 ký tự',
			'hoten.required'=>'Chưa nhập họ tên nhân viên',
			'hoten.min'=>'Độ dài họ tên từ 3-100 ký tự',
			'hoten.max'=>'Độ dài họ tên từ 3-100 ký tự',
			'sdt.required'=>'Chưa nhập sdt nhân viên',
			'sdt.regex'=>'SDT chỉ được là số',
			'sdt.min'=>'Độ dài sdt từ 3-12 ký tự',
			'sdt.max'=>'Độ dài sdt từ 3-12 ký tự',
			'cmnd.required'=>'Chưa nhập CMND nhân viên',
			'cmnd.regex'=>'CMND chỉ được là số',
			'cmnd.min'=>'Độ dài CMND từ 9-10 ký tự',
			'cmnd.max'=>'Độ dài CMND từ 9-10 ký tự',
			'email.required'=>'Chưa nhập email',
		]);
			$nv = Nhanvien::find($manv);
			$nv->taikhoan=$reg['taikhoan'];
			$nv->role=$reg['role'];
			$nv->matkhau=$reg['matkhau'];
			$nv->sdt=$reg['sdt'];
			$nv->cmnd=$reg['cmnd'];
			$nv->hoten=$reg['hoten'];
			$nv->email=$reg['email'];
			$nv->save();
			return redirect('Admin/QLTKNV')->with('thanhcong','Bạn sửa thành công nhân viên');	
	}
	public function getxoanv($manv)
	{
		$nv = Nhanvien::find($manv);
		$a = Dondat::Where('manv',$manv)->first();
		if(!$a)
		{
			$nv->delete();
			return redirect(route('nv'))->with('thanhcong','Bạn đã xóa tài khoản thành công');
		}
		else
		{
			return redirect(route('nv'))->with('thanhcong','Vẫn còn mã nhân viên trang đơn đặt');
		}
    }	
}
