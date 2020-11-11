<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Loaiphong;
use  App\Phong;
use  App\Khachhang;
use  App\Nhanvien;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ControllerQLKS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tindex(){
        return view('test');
    }
    public function index(Loaiphong $data)// return trang chu
    {
       
        $data = Loaiphong::select(['HinhAnh','MoTa',])->take(3)->get();
        $path =  'img\km\\'; 
        $km = Loaiphong::select(['HinhAnh','MoTa','Gia'])->Where('MaLoai','>',3)->Where('MaLoai','<=',7)->get();
        $pv = Loaiphong::select(['HinhAnh','MoTa','Gia'])->Where('MaLoai','>',7)->Where('MaLoai','<=',11)->get();
        $dv = Loaiphong::select(['HinhAnh','MoTa','Gia'])->Where('MaLoai','>',11)->Where('MaLoai','<=',15)->get();
        return view('TrangChu',compact('data','path','km','pv','dv'));//compact(biến) đưa dữ liệu sang trang html
    }
    public function phongdadat(Loaiphong $data1){
        $data1 = Loaiphong::select(['HinhAnh'])->Where('MaLoai','>',3)->Where('MaLoai','<=',6)->get();
        $path =  'img\km\\';
        $itemCart = Session::get('itemCart');
        return view('PhongDaDat',compact('data1','path','itemCart'));
    }


    public function datphong(Loaiphong $data)
    {
        $data = Loaiphong::select(['HinhAnh','MoTa','MaLoai',])->take(3)->get();
        $test = Loaiphong::select(['HinhAnh','MoTa','MaLoai'])->take(3)->get();
        $data1 = Loaiphong::select(['HinhAnh'])->Where('MaLoai','>',3)->Where('MaLoai','<=',6)->get();//take gioi han luot xuat cua foreach
        $data2= Loaiphong::Where('MaLoai','>',3)->Where('MaLoai','<=',9)->get();
        $path =  'img\km\\';
        return view('DatPhong',compact('data','path','data1','data2','test'));
    }
    public function click(Request $reg)
    {
       $name = $reg['hinhanh']->getClientOriginalName();//ten hinh
       $b=substr("$name", 0, -4); 
        $a=$b.rand().'.png'; 
       $path =  public_path().'/img/km/';
       $reg['hinhanh']->move($path,$a); //t die cho nay thi oke roi, nhung sao cai duoi no k insert dc
       Loaiphong::create(
           ['HinhAnh'=>$a]);
           //viet theo dang create,nay lam roi van k dc 
    }
    
    public function getid(Request $reg){
        $id = $reg['id'];
        $phong = Phong::where('MaPhong',$id)->first();
        $session = Session::get('itemCart');
        if($session){
        foreach($session as $value){
            if($value['MaLoai'] == $id){
                return redirect(route('phongdadat'));
            }
        }
    }
        Session::push('itemCart', $phong->pval);       
        
		return redirect(route('phongdadat'));
    }
    
    public function getval(Request $reg){
        $value = $reg['val'];
        $getsession = Session::get('itemCart');
        foreach($getsession as $key => $val){
            if($val['MaLoai'] == $value){
            Session::forget('itemCart.'.$key);
        }
        }
        //print_r(Session::get('itemCart'));
    }
    





    public function dangnhapadmin(){
        return view('DangNhapADMin');
    }
    public function quanly(){
        //$data = Khachhang::get();
        return view('quanly');
    }
    public function ktid(Request $reg)
    {
        $message = new MessageBag();
        $id = $reg['id'];
        $pass = $reg['pass'];
        $slid = Nhanvien::select(['MaNV','PassWordNV'])->get();
        foreach($slid as $key => $value){
           $a = $value['MaNV'];
           $b = $value['PassWordNV'];
           if($a == $id)
           {
               if($b == $pass)
               {                
                return redirect(route('quanly'))/*->with('thanhcong','Ban da dang nhap thanh cong')*/;
               }
           }
        }
        $message->add('thatbai','Dang Nhap That Bai');
        return redirect(route('dangnhap'))->withErrors($message);
    }
   
    /* public function gui(Request $reg)
    {
        $gui = $reg['gui'];//cai nay la click nut gui 
        $ten = $reg['ten'];
        $gmail = $reg['gmail'];
        $vande = $reg['vande'];
        $noidung = $reg['noidung'];
       /*  TTLienHe::create(            
            ['Ten'=>$ten,'Gmail'=>$gmail,'VanDe'=>$vande,'NoiDung'=>$noidung]
        ); */
       /*  TTLienHe::where('Ten','Phuoc')-> update(
            ['Ten'=>$ten]
        ); */
            /* TTLienHe::where('Ten',$ten)->delete();     */          
    /* } */
   //sao thay m van goi DB ma inser controler
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
