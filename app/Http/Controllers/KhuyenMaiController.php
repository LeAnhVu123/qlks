<?php

namespace App\Http\Controllers;

use App\Khuyenmai;
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
        Khuyenmai::create([
			'tenkm' => $reg['tenkm'],
			'giagiam' => $reg['giagiam'],
			'ngaybd' => $reg['ngaybd'],
			'ngaykt' => $reg['ngaykt'],
		]);
		return redirect(route('khuyenmai'));
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
		$km = Khuyenmai::findOrFail($id);
		$km->update([
			'tenkm' => $reg['tenkm'],
			'giagiam' => $reg['giagiam'],
			'ngaybd' => $reg['ngaybd'],
			'ngaykt' => $reg['ngaykt'],
		]);
		return redirect(route('khuyenmai'));
    }

    public function xoakm($id)
    {
		Khuyenmai::findOrFail($id)->delete();
		return redirect(route('khuyenmai'));
    }
}
