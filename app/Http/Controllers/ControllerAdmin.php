<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Khachhang;
use  App\Phong;
use  App\Loaiphong;
use Illuminate\Support\MessageBag;

class ControllerAdmin extends Controller
{
	public  function qltk()
	{
		$kh = Khachhang::All();
		return view('Admin.indexQLKH', compact('kh'));
	}
	public  function qlp()
	{
		$ph = Phong::All();
		// dd($kh);
		return view('Admin.indexQLP', compact('ph'));
	}
	public  function qllp()
	{
		$lp = Loaiphong::All();
		// dd($kh);
		return view('Admin.indexQLLP', compact('lp'));
	}

	public function insertqlkh()
	{
		$kh = Khachhang::all();
		return view('Admin.insertQLKH', compact('kh'));
	}

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

	public function editqlkh($makh)
	{
		$kh = Khachhang::where('makh', $makh)->first();
		return view('Admin.editQLKH', compact('kh'));
	}
	public function posteditqlkh(Request $reg, $makh)
	{
		$kh = Khachhang::findOrFail($makh);
		$kh->password = $reg['mk'];
		$kh->sdt = $reg['sdt'];
		$kh->email = $reg['email'];
		$kh->hoten = $reg['hoten'];
		$kh->save();
		return redirect(route('khachhang'))->with('thanhcong','Update thanh cong');
	}
	public function deleteqlkh($makh){
		Khachhang::findOrFail($makh)->delete();
		return redirect(route('khachhang'));
	}
	public function instqllp()
	{
		return view('Admin.insertQLLP');
	}

	public function postinsertqllp(Request $reg)
	{
		Loaiphong::create([
			'maphong' => $reg['maphong'],
			'tenloai' => $reg['tenloai'],
			'succhua' => $reg['succhua'],
			'mota' => $reg['mota'],
			'hinhanh' => $reg['hinhanh'],
			'gia' => $reg['gia'],
		]);
		return redirect(route('loaiphong'));
	}
	public function insertqlp()
	{
		return view('Admin.insertQLP');
	}

	public function postinsertqlp(Request $reg)
	{
		Phong::create([
			'maphong' => $reg['maphong'],
			'maloai' => $reg['maloai'],
			'madon' => $reg['madon'],
			'ghichu' => $reg['ghichu'],
			'trangthai' => $reg['trangthai'],
			'sotang' => $reg['sotang'],
		]);
		return redirect(route('phong'));
	}
	//
}
