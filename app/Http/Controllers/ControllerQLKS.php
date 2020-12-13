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
use  App\Chitiet;
use  App\Http\Ulti\Helpers;
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
      $lp = Loaiphong::All()->take(4);
      $a = "img/thuvien";  
      $file = \scandir($a);
      unset($file[0]);
      unset($file[1]);
      $s = array_reverse($file);//dao nguoc array
      return view('TrangChu',compact('lp','s'));
    }
    public function phongdadat(Loaiphong $data1){
        $data1 = Loaiphong::select(['hinhanh'])->Where('maloai','>',3)->Where('maloai','<=',6)->get();
        $path =  'img\\';
		$itemCart = Session::get('itemCart');
        return view('PhongDaDat',compact('data1','path','itemCart'));
    }


    public function datphong(Loaiphong $data)
    {
        // $p = Loaiphong::paginate(3);
        $p = Loaiphong::all();
        $zz = Loaiphong::all();
        return view('DatPhong',compact('p','zz'));
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
        $id = $reg['maloai'];
        $phong = Phong::where('maphong',$id)->first();
		$session = Session::get('itemCart');
        if($session){
        foreach($session as $value){
            if($value['maloai'] == $id){
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
            if($val['maloai'] == $value){
            Session::forget('itemCart.'.$key);
        }
        
    }
}
    public function gioithieu()
        {
            $zz = Loaiphong::all();
            return view('Gioithieu',compact('zz'));
        }
        public function huongdan()
        {
            $zz = Loaiphong::all();
            return view('Huongdan',compact('zz'));
        }
        public function khuyenmai()
        {
            $zz = Loaiphong::all();
            return view('Khuyenmai',compact('zz'));
        }
        public function dichvu()
        {
            $zz = Loaiphong::all();
            return view('Dichvu',compact('zz'));
        }
        public function mastertimkiem()
        {
            $zz = Loaiphong::all();
            return view('MasterTimKiem',compact('zz'));
        }
        public function quancanhNT()
        {
            $zz = Loaiphong::all();
            return view('QuancanhNT',compact('zz'));
        }
        public function dulichNT()
        {
            $zz = Loaiphong::all();
            return view('DulichNT',compact('zz'));
        }
        public function venbienNT()
        {
            $zz = Loaiphong::all();
            return view('DuongbienNT',compact('zz'));
        }
        public function dacsanNT()
        {
            $zz = Loaiphong::all();
            return view('DacsanNT',compact('zz'));
        }
        public function dangnhap()
        {
            $zz = Loaiphong::all();
            return view('Dangnhap',compact('zz'));
        }
        public function dangki()
        {
            $zz = Loaiphong::all();
            return view('Dangki',compact('zz'));
        }
        public function search(Request $reg)
        {
            $zz = Loaiphong::all();
            $ml = $reg['maloai'];
            $a = $reg['succhua'];
            if($a && $ml != "NULL")//chon so luong va loai phong
            {
                if($a<=4 && $a>0)
                {
                    $p = Loaiphong::Where('succhua','4')->Where('maloai',$ml)->get();
                }
                if($a>4 && $a<=6)
                {
                    $p = Loaiphong::Where('succhua','6')->Where('maloai',$ml)->get();
                }
                if($a>6)
                {
                    $p = Loaiphong::Where('succhua','10')->Where('maloai',$ml)->get();
                }
            }
            if($a && $ml == "NULL")//chon so luong ,khong chon loai phong
            {
                if($a<=4 && $a>0)
                {
                    $p = Loaiphong::Where('succhua','4')->get();
                }
                if($a>4 && $a<=6)
                {
                    $p = Loaiphong::Where('succhua','6')->get();
                }
                if($a>6)
                {
                    $p = Loaiphong::Where('succhua','10')->get();
                }
            }
            if(!$a && $ml != "NULL")//chon loai phong k chon so luong
            {
                    $p = Loaiphong::Where('maloai',$ml)->get();
            }
            // $ngaynhan = $reg['ngaynhan'];
            // $ngaytra = $reg['ngaytra'];
            // $splitngaynhan = Helpers::splitDate($ngaynhan,$namnn,$thangnn,$ngaynn);
            // $splitngaytra = Helpers::splitDate($ngaytra,$namnt,$thangnt,$ngaynt);
            // Chitiet::select('ngayden','ngaydi')->where()
            // if($namnn == $namnt && $thangnn == $thangnt){
            //     $day = $ngaynt - $ngaynn;
            // }
            // dd($day);
            // if()
            // $p = Loaiphong::Where('succhua',$a)->Where('maloai',$ml)->get();
            if($ml == "NULL" && $a == NULL)
            {
                return back();
            }
            return view('Search',compact('p','zz'));
        }


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
