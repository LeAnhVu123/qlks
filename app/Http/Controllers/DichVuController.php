<?php

namespace App\Http\Controllers;
use App\Dichvu;
use App\Http\ulti\Helpers;
use Helper as GlobalHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $reg)
    {	
      $i = $reg['dv'];
      $arr = explode(',',$i);
      $query = "SELECT * From dichvus where madv in (";
      if($i == NULL)
      {
        $dv = Dichvu::all();
      }else{
        foreach($arr as $key => $val)
        {
          $query .= "$arr[$key],";    
        }
        $query = substr($query,0,-1);
        $query .=")";
        // echo $query;die;
        $dv = DB::select($query);
      }
     
        return view("Admin.QLDV",compact('dv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getviewthemdv()
    {
        return view("Admin.Them.Themdichvu");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postthemdv(Request $reg)
    {
      $this->validate($reg,[
          'gia'=> 'required|regex:/^[0-9]+$/',
      ],[
        'gia.required'=>'Bạn chưa nhập giá',
        'gia.regex'=>'Giá vui lòng nhập số thôi',
      ]);
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
      $this->validate($reg,[
        'gia'=> 'required|regex:/^[0-9]+$/',
    ],[
      'gia.required'=>'Bạn chưa nhập giá',
      'gia.regex'=>'Giá vui lòng nhập số thôi',
    ]);
		// dd(date("Y/m/d h:i:s"));
		Dichvu::findOrFail($madv)->update([
			'tendv' => $reg['tendv'],
			'gia' => $reg['gia'],
			'updated_at' => date("Y/m/d h:i:s")
		]);
		return redirect(route('dichvu'))->with('thanhcong','Sửa thành công dịch vụ');
	}
	
    public function xoadv($id)
    {
		Helpers::truncateTable(Dichvu::class,$id);
		// Dichvu::findOrFail($id)->delete();
		return redirect(route('dichvu'))->with('thanhcong','Xóa thành công dịch vụ');
    }
}
