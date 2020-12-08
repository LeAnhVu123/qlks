<?php

namespace App\Http\Controllers;
use  App\Khachhang;
use  App\Dondat;
use  App\Thanhtoan;
use  App\Nhanvien;
use  App\Khuyenmai;
use  App\Chitiet;
use Illuminate\Http\Request;

class DonDatController extends Controller
{
    //
    /* Xem tat ca don dat phong */
	public function getalldondat(){
		$dd = Dondat::All();
		return view('Admin.Alldondat',compact('dd'));
	}
	/* them don dat */
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
			if($reg['matt'] != NULL)
			{
				if($tt)
				{
					$dd->matt = $reg['matt'];
				}
				else
				{
					return redirect('Admin/Them/Themdondat')->with('thanhcong','Mã thanh toán không tồn tại');
				}
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
	public function getsuadondat($madon)
	{
		$dd = Dondat::find($madon);
		return view('Admin.Sua.Suadondat',compact('dd'));
	}
	public function postsuadondat(request $reg,$madon)
	{
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
		$dd = Dondat::find($madon);
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
				return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã nhân viên không tồn tại');
			}
			if($kh)
			{
				$dd->makh = $reg['makh'];
			}
			else
			{
				return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã khách hàng không tồn tại');
			}
			if($reg['matt'] != NULL)
			{
				if($tt)
				{
					$dd->matt = $reg['matt'];
				}
				else
				{
					return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã thanh toán không tồn tại');
				}
			}
			
			if($reg['makm'] != NULL)
			{	
				if($km)
				{
					$dd->makm = $reg['makm'];
				}
				else
				{
				return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã khuyến mãi không tồn tại');
				}
			}	
		$dd->ngaylap = $reg['ngaylap'];
		$dd->tongtien = $reg['tongtien'];
		$dd->trangthai = $reg['trangthai'];
		$dd->save();
		return redirect('Admin/AllDonDat')->with('thanhcong','Bạn đã sửa đơn đặt phòng thành công');
	}
	/* Xoa  Don Dat*/
	public function xoadondat($madon)
	{
		$dd = Dondat::find($madon);
		$ct = Chitiet::Where('madon',$madon)->first();
		if(!$ct)
		{
			$dd->delete();
			return redirect('Admin/AllDonDat')->with('thanhcong','Bạn đã xóa đơn đặt phòng thành công');
		}
		else{
			return redirect('Admin/AllDonDat')->with('thanhcong','Vẫn còn tồn tại chi tiết của đơn đặt');
		}
		
	}
}
