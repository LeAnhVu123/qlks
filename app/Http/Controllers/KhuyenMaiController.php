<?php

namespace App\Http\Controllers;

use App\Khuyenmai;
use App\Dondat;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $reg)
    {
      $i = $reg['km'];
      if($i == NULL)
      {
        $km = Khuyenmai::all();
      }else{
        $km = Khuyenmai::all()->where('makm',$i);
      }
		
        return view('Admin.Allkhuyenmai',compact('km'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getviewthemkm()
    {
        return view('Admin.Them.Themkhuyenmai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postthemkm(Request $reg)
    {
      $this->validate($reg,[
        'tenkm'=>'required|unique:khuyenmais,tenkm',
        'giagiam'=>'required|regex:/^[0-9]+$/',
        'ngaybd'=>'required',
        'ngaykt'=>'required',
      ],[
        'tenkm.required'=>'Vui lòng nhập tên khuyến mãi',
        'tenkm.unique'=>'Tên khuyến mãi bị trùng',
        'giagiam.regex'=>'Vui lòng nhập số',
        'giagiam.required'=>'Vui lòng nhập giá giảm',
        'ngaybd.required'=>'Vui lòng nhập ngày bắt đầu',
        'ngaykt.required'=>'Vui lòng nhập ngày kết thúc',
      ]);
        Khuyenmai::create([
			'tenkm' => $reg['tenkm'],
			'giagiam' => $reg['giagiam'],
			'ngaybd' => $reg['ngaybd'],
			'ngaykt' => $reg['ngaykt'],
		]);
		return redirect(route('khuyenmai'))->with('thanhcong','Thêm khuyến mãi thành công'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getviewsuakm($id)
    {
		$km = Khuyenmai::findOrFail($id);
        return view('Admin.Sua.Suakhuyenmai',compact('km'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postsuakm(Request $reg,$id)
    {
      $this->validate($reg,[
        'tenkm'=>'required',
        'giagiam'=>'required|regex:/^[0-9]+$/',
        'ngaybd'=>'required',
        'ngaykt'=>'required',
      ],[
        'tenkm.required'=>'Vui lòng nhập tên khuyến mãi',
        'giagiam.regex'=>'Vui lòng nhập số',
        'giagiam.required'=>'Vui lòng nhập giá giảm',
        'ngaybd.required'=>'Vui lòng nhập ngày bắt đầu',
        'ngaykt.required'=>'Vui lòng nhập ngày kết thúc',
      ]);
		$km = Khuyenmai::findOrFail($id);
		$km->update([
			'tenkm' => $reg['tenkm'],
			'giagiam' => $reg['giagiam'],
			'ngaybd' => $reg['ngaybd'],
			'ngaykt' => $reg['ngaykt'],
		]);
		return redirect(route('khuyenmai'))->with('thanhcong','Sửa khuyến mãi thành công'); 
    }

    public function xoakm($id)
    {
    $z = Khuyenmai::find($id);
    $dd = Dondat::all()->Where('makm',$id)->first();
    if(!$dd)
    {
      $z->delete();
      return redirect(route('khuyenmai'))->with('thanhcong','Xóa khuyến mãi thành công'); 
    }
    else{
      return redirect(route('khuyenmai'))->with('thanhcong','Vẫn còn tồn tại khuyến mãi ở đơn đặt');
    }
		
    }
}
