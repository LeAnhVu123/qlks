<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhanvien;
class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
		$nv = Nhanvien::all();
		return view('Admin.indexQLNV',compact('nv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.insertQLNV');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $reg)
    {
		Nhanvien::create([
			'manv' => $reg['manv'],
			'username' =>$reg['ttk'],
			'password' =>$reg['mk'],
			'hoten' =>$reg['hoten'],
			'sdt' =>$reg['sdt'],
			'email' =>$reg['email'],
			'chucvu' =>$reg['chucvu'],
		]);
		return redirect(route('nhanvien'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$nv = Nhanvien::findOrFail($id);
        return view('Admin.editQLNV',compact('nv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $reg, $id)
    {
		$nv = Nhanvien::findOrFail($id);
		$nv->password = $reg['mk'];
		$nv->hoten = $reg['hoten'];
		$nv->email = $reg['email'];
		$nv->sdt = $reg['sdt'];
		$nv->chucvu = $reg['chucvu'];
		$nv->save();
		return redirect(route('nhanvien'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$nv = Nhanvien::findOrFail($id)->delete();
		return redirect(route('nhanvien'));
    }
}
