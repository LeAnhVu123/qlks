<?php

namespace App\Http\Controllers;
use App\Dichvu;
use App\Http\ulti\Helpers;
use Helper as GlobalHelper;
use Illuminate\Http\Request;

class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		$dv = Dichvu::all();
        return view("Admin.QLDV",compact('dv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getviewthemnv()
    {
        return view("Admin.Them.Themdichvu");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postthemnv(Request $reg)
    {
        Dichvu::create([
			'tendv' => $reg['tendv'],
			'gia' => $reg['gia'],
		]);
		// return redirect(route('dichvu'))->with('thanhcong',"Bạn đã thêm dịch vụ thành công");
		return back()->with('thanhcong',"Bạn đã thêm dịch vụ thành công");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getviewsuadv($id)
    {
		$dv = Dichvu::findOrFail($id)->first();
        return view('Admin.Sua.Suadichvu',compact('dv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postsuadv(Request $reg,$madv)
    {
		// dd(date("Y/m/d h:i:s"));
		Dichvu::findOrFail($madv)->update([
			'tendv' => $reg['tendv'],
			'gia' => $reg['gia'],
			'updated_at' => date("Y/m/d h:i:s")
		]);
		return redirect(route('dichvu'));
	}
	
    public function xoadv($id)
    {
		Helpers::truncateTable(Dichvu::class,$id);
		// Dichvu::findOrFail($id)->delete();
		// return redirect(route('dichvu'));
    }
}
