<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Khachhang;
use  App\Phong;
use  App\Loaiphong;
use  App\Http\Ulti\Helper;
use Illuminate\Support\MessageBag;

class ControllerAdmin extends Controller
{
	//index QLKH
	public function qlkh()
	{
		$kh = Khachhang::all();
		return view('Admin.indexQLKH', compact('kh'));
	}

	//index insert QLKH
	public function insertqlkh()
	{
		$kh = Khachhang::all();
		return view('Admin.insertQLKH', compact('kh'));
	}

	//insert QLKH
	public function postinsertqlkh(Request $reg)
	{
		Khachhang::create([
			'makh' => $reg['makh'],
			'username' => $reg['ttk'],
			'password' => $reg['mk'],
			'hoten' => $reg['hoten'],
			'email' => $reg['email'],
			'sdt' => $reg['sdt'],
		]);
		return redirect(route('khachhang'));
	}
	//edit QLKH
	public function editqlkh($makh)
	{
		$kh = Khachhang::where('makh', $makh)->first();
		return view('Admin.editQLKH', compact('kh'));
	}
	//update QLKH
	public function updateqlkh(Request $reg, $makh)
	{
		$kh = Khachhang::findOrFail($makh);
		$kh->password = $reg['mk'];
		$kh->sdt = $reg['sdt'];
		$kh->email = $reg['email'];
		$kh->hoten = $reg['hoten'];
		$kh->save();
		return redirect(route('khachhang'))->with('thanhcong', 'Update thanh cong');
	}
	//delete QLKH
	public function deleteqlkh($makh)
	{
		Khachhang::findOrFail($makh)->delete();
		return redirect(route('khachhang'));
	}
	//index QLP
	public  function qllp()
	{
		$lp = Loaiphong::All();
		return view('Admin.indexQLLP', compact('lp'));
	}

	//index insert QLLP
	public function insertqllp()
	{
		return view('Admin.insertQLLP');
	}
	//insert QLLP
	public function postinsertqllp(Request $reg)
	{
		// $name = $reg['hinhanh']->getClientOriginalName(); //ten hinh
		// $b = substr("$name", 0, -4);
		// $a = rand(0,100) . $b . rand(0,100) . '.jpg';		;
		// $path =  public_path() . '/img/km/';
		// $reg['hinhanh']->move($path, $a); //t die cho nay thi oke roi, nhung sao cai duoi no k insert dc
		$imgText = Helper::moveImg($reg['hinhanh'], '/img/km/');
		Loaiphong::create([
			'tenloai' => $reg['tenloai'],
			'succhua' => $reg['succhua'],
			'mota' => $reg['mota'],
			'hinhanh' => $imgText,
			'gia' => $reg['gia'],
		]);
		return redirect(route('loaiphong'));
	}
	//edit QLKH
	public function editqllp($malp)
	{
		$lp = Loaiphong::where('maloai', $malp)->first();
		return view('Admin.editQLLP', compact('lp'));
	}

	//update QLLP
	public function updateqllp(Request $reg, $malp)
	{

		$kh = Loaiphong::findOrFail($malp);
		if ($reg['hinhanh']) {
			Helper::removeImg($kh->hinhanh, '/img/km/');
			$imgText = Helper::moveImg($reg['hinhanh'], '/img/km/');
			$kh->hinhanh = $imgText;
		}
		$kh->tenloai = $reg['tenloai'];
		$kh->succhua = $reg['succhua'];
		$kh->mota = $reg['mota'];
		$kh->gia = $reg['gia'];
		$kh->save();
		return redirect(route('loaiphong'))->with('thanhcong', 'Update thanh cong');
	}
	//delete QLLP
	public function deleteqllp($malp)
	{
		$a = Loaiphong::findOrFail($malp);
		Helper::removeImg($a->hinhanh, '/img/km/');
		$a->delete();
		return redirect(route('loaiphong'));
	}

	//index QLP
	public  function qlp()
	{
		$ph = Phong::All();
		return view('Admin.indexQLP', compact('ph'));
	}
	//insert index QLP
	public function insertqlp()
	{
		return view('Admin.insertQLP');
	}
	// insert QLP
	public function postinsertqlp(Request $reg)
	{
		$phong = new Phong();
		$phong->maphong = $reg['maphong'];
		if (!empty($reg['maloai'])) {
			$phong->maloai = $reg['maloai'];
		}
		if (!empty($reg['madon'])) {
			$phong->madon = $reg['madon'];
		}
		$phong->ghichu = $reg['ghichu'];
		$phong->trangthai = $reg['trangthai'];
		$phong->sotang = $reg['sotang'];
		$phong->save();
		return redirect(route('phong'));
	}
	//edit QLP
	public function editqlp(Request $reg,$map){
		$phong = Phong::findOrFail($map)->first();
		return view('Admin.editqlp',compact('phong'));
	}
	//update QLP
	public function updateqlp(Request $reg, $map)
	{
		$phong = Phong::findOrFail($map);
		if(!empty($reg['maloai'])){
			$phong->maloai = $reg['maloai'];
		}
		if(!empty($reg['maloai'])){
			$phong->madon = $reg['madon'];
		}		
		$phong->ghichu = $reg['ghichu'];
		$phong->trangthai = $reg['trangthai'];
		$phong->sotang = $reg['sotang'];
		$phong->save();
		return redirect(route('phong'))->with('thanhcong', 'Update thanh cong');
	}
	//delete QLLP
	public function deleteqlp($map)
	{
		Phong::findOrFail($map)->delete();
		return redirect(route('phong'));
	}
}
