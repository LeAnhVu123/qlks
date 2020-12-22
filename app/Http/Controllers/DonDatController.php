<?php

namespace App\Http\Controllers;
use  App\Khachhang;
use  App\Dondat;
use  App\Thanhtoan;
use  App\Nhanvien;
use  App\Khuyenmai;
use  App\Chitiet;
use  App\Dichvu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
class DonDatController extends Controller
{
    //
    /* Xem tat ca don dat phong */
	public function getalldondat(request  $reg){
		$i = $reg['dd'];
		if($i == NULL)
		{
			$dd = Dondat::All();
		}else{
			$dd = Dondat::all()->where('madon',$i);
		}
		$s = $reg['ngay'];
		$z = $reg['toingay'];
		// $today = new DateTime($s);
		// $expireDate = new DateTime($z); //from database
		if($s && $z)
		{
			if($s < $z) { 
				$dd = Dondat::all()->where('ngaylap','>=',$s)->where('ngaylap','<=',$z);
			}
			else{
				return redirect(route('alldondat'))->with('thanhcong','Bạn nhập sai (Từ ngày < Tới ngày)');
			}
		}
		elseif($s && !$z){
			$dd = Dondat::all()->where('ngaylap',$s);
		}
		if($reg['dua'])
		{
			$r = $reg['dua'];
			$dd = Dondat::all()->where('madon',$r);
		}
		return view('Admin.Alldondat',compact('dd'));
	}
	/* them don dat */
	public function getthemdd()
	{
		$dv = Dichvu::all();
		$km = Khuyenmai::all();
		return view('Admin.Them.Themdondat',compact('km','dv'));
	}
	public function postthemdd(request $reg){
		$dd = new Dondat;
		$val = $reg->dv;
		$arr = [];
		// $insert ="";
		if($val)
		{
			foreach($val as $key=>$value){
				array_push($arr,$value);
				// $insert .= "$value,";
			}
			// $insert = substr($insert,0,-1);
			// echo $insert; die;
			$dv = Dichvu::all();
			$implode = implode(',',$arr);//tu array thanh string, explode bien string thanh lai array
			$dd->madv = $implode;
		}
		// foreach($val as $key=>$value){
		// 	array_push($arr,$value);
		// 	// $insert .= "$value,";
		// }
		// // $insert = substr($insert,0,-1);
		// // echo $insert; die;
		// $dv = Dichvu::all();
		// $implode = implode(',',$arr);//tu array thanh string, explode bien string thanh lai array
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
		
		$nv = Nhanvien::Where('manv',$reg['manv'])->first();
		$kh = Khachhang::Where('makh',$reg['makh'])->first();
		// $tt = Thanhtoan::Where('matt',$reg['matt'])->first();
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
		$dd->maphong = $reg['maphong'];
		// $dd->madv = $implode;
		$dd->ngaylap = $reg['ngaylap'];
		$dd->tongtien = $reg['tongtien'];
		$dd->trangthai = $reg['trangthai'];		
		$dd->save();
		return redirect('Admin/Them/Themdondat')->with('thanhcong','Bạn đã thêm đơn đặt phòng thành công');
	}
	/* Sua Don Dat  */
	public function getsuadondat(request $reg,$madon)
	{
		$dv = Dichvu::all();
		$dd = Dondat::find($madon);
		$explode = explode(',',$dd->madv);
		$z = Khuyenmai::all()->where('makm',$dd->makm)->first();
		$km = Khuyenmai::all()->where('makm','<>',$dd->makm);
		return view('Admin.Sua.Suadondat',compact('dd','z','km','dv','explode'));
	}
	/* Post Sua don dat */
	public function postsuadondat(request $reg,$madon)
	{
		$dd = Dondat::find($madon);
		$dd->madv = NULL;
		$val = $reg->dv;
		$arr = [];
		if($val)
		{
			foreach($val as $key=>$value){
				array_push($arr,$value);
			}
			$dv = Dichvu::all();
			$implode = implode(',',$arr);
			$dd->madv = $implode;
		}
		
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
		$km = Khuyenmai::all();
		$nv = Nhanvien::Where('manv',$reg['manv'])->first();
		$kh = Khachhang::Where('makh',$reg['makh'])->first();
		$km = Khuyenmai::Where('makm',$reg['km'])->first();
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
			if($km){		
				$dd->makm = $reg['km'];	
			}else{
				return redirect('Admin/Sua/Suadondat/'.$madon)->with('thanhcong','Mã khuyễn mãi không tồn tại');
			}
		$dd->maphong = $reg['maphong'];
		
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
		$tt = Thanhtoan::all()->where('madon',$madon)->first();
		if(!$tt)
		{
			if(!$ct)
			{
				$dd->delete();
				return redirect('Admin/AllDonDat')->with('thanhcong','Bạn đã xóa đơn đặt phòng thành công');
			}
			else{
				return redirect('Admin/AllDonDat')->with('thanhcong','Vẫn còn tồn tại chi tiết của đơn đặt');
			}
		}
		else{
			return redirect('Admin/AllDonDat')->with('thanhcong','Đơn này đã thanh toán');
		}
	}
}
