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
use App\Dichvu;
use App\Lienhe;
use  App\Http\Ulti\Helpers;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
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
        $b = Cookie::get('dangnhap');
        if($b){
            $l = json_decode($b)->taikhoan;
        }else{
            $l ='';
        }
      $lp = Loaiphong::All()->take(4);
      $a = "img/thuvien";  
      $file = \scandir($a);
      unset($file[0]);
      unset($file[1]);
      $s = array_reverse($file);//dao nguoc array
      return view('TrangChu',compact('lp','s','b','l'));
    }
    public function phongdadat(Loaiphong $data1){
        $data1 = Loaiphong::select(['hinhanh'])->Where('maloai','>',3)->Where('maloai','<=',6)->get();
        $path =  'img\\';
		$itemCart = Session::get('itemCart');
        $dv = Dichvu::all();
        $o = Cookie::get('dangnhap');
        return view('PhongDaDat',compact('data1','path','itemCart','dv','o'));
    }
  

    public function datphong(Loaiphong $data)
    {
        // $p = Loaiphong::paginate(3);
        $p = Loaiphong::all();
        $zz = Loaiphong::all();
        $o = Cookie::get('dangnhap');
        return view('DatPhong',compact('p','zz','o'));
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
        $lp = Loaiphong::where('maloai',$id)->first();
		$session = Session::get('itemCart');
        if($session){
        foreach($session as $value){
            if($value['maloai'] == $id){
                return redirect(route('phongdadat'));
            }
        }
    }
        Session::push('itemCart', $lp);
        
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
    public function thanhtoan()
    {
        $o = Cookie::get('dangnhap');
        if($o)
        {
            $z = json_decode($o);
        }
        else{
            return back();
        }
        return view('Xacnhan',compact('o','z'));
    }
    public function gioithieu()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('Gioithieu',compact('zz','o'));
        }
        public function huongdan()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('Huongdan',compact('zz','o'));
        }
        public function khuyenmai()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('Khuyenmai',compact('zz','o'));
        }
        public function dichvu()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('Dichvu',compact('zz','o'));
        }
        public function mastertimkiem()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('MasterTimKiem',compact('zz','o'));
        }
        public function quancanhNT()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('QuancanhNT',compact('zz','o'));
        }
        public function dulichNT()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('DulichNT',compact('zz','o'));
        }
        public function venbienNT()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('DuongbienNT',compact('zz','o'));
        }
        public function dacsanNT()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('DacsanNT',compact('zz','o'));
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
        public function tintuc()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('TinTuc',compact('zz','o'));
        }
        public function suitegd()
        {
            $lp = Loaiphong::select('mota')->where('maloai',1)->first();
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('SuiteGD',compact('zz','o','lp'));
        }
        public function lienhe()
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            return view('Lienhe',compact('zz','o'));
        }
        public function guilienhe(request $reg)
        {
            // echo $reg['noidung'];die;
            $this->validate($reg,[
                'sdt'=>'regex:/^[0-9]+$/|min:3|max:12',
                'w3review'=>'required',
                'hoten'=>'required',
                
            ],[
                'sdt.regex'=>'SDT chỉ được là số',
                'sdt.min'=>'Độ dài sdt từ 3-12 ký tự',
                'sdt.max'=>'Độ dài sdt từ 3-12 ký tự',
                'w3review.required'=>'Vui lòng nhập nội dung',
                'hoten.required'=>'Vui lòng nhập họ tên',
            ]);
            $lh = new Lienhe;
            $lh->hoten = $reg['hoten'];
            $lh->email = $reg['email'];
            $lh->sdt = $reg['sdt'];
            $lh->noidung = $reg['w3review'];
            $lh->save();
            return redirect(route('lienhe'))->with('thanhcong','Bạn đã gửi hỗ trợ thành công, sẽ có nhân viên gọi điện thoại hoặc trả lời bạn qua email.');
        }
        public function search(Request $reg)
        {
            $o = Cookie::get('dangnhap');
            $zz = Loaiphong::all();
            $ml = $reg['maloai'];
            $a = $reg['succhua'];
            $nn = $reg['ngaynhan'];
            $nt = $reg['ngaytra'];
            // $ngaynhan = Helpers::splitDate($nn,'/',$yearnn,$monthnn,$daynn);
            // $ngaytra = Helpers::splitDate($nt,'/',$yearnt,$monthnt,$daynt);
            // $monthnn = date('m',strtotime($monthnn));
            // $monthnt = date('m',strtotime($monthnn));
            // $alldaynn = cal_days_in_month(CAL_GREGORIAN,$monthnn,$yearnn);
            // $alldaynt = cal_days_in_month(CAL_GREGORIAN,$monthnt,$yearnt);
            // $abc='';
            // for($i = $daynn;$i <= $daynt;$i++){
            //     $abc .= $i;
            // }  
            // $ngaynn = '';  
            // $ngaynt = '';
            // $ngaynhan = strtotime($nn);
            // $ngaytra = strtotime($nt);
            // $datenn =  date('Y-m-d',$ngaynhan);
            // $datent =  date('Y-m-d',$ngaytra);
            // $yearnd='';
            // $monthnd ='';
            // $daynd = '';
            // $yearndi='';
            // $monthndi ='';
            // $dayndi = '';
            // $allday = '';
            // $chitiet = Chitiet::select('ngayden','ngaydi')->get();
            // foreach($chitiet as $value){
            //     $ngayden = Helpers::splitDate($value['ngayden'],'-',$yearnd,$monthnd,$daynd);
            //     $ngaydi = Helpers::splitDate($value['ngaydi'],'-',$yearndi,$monthndi,$dayndi);
            //     // dd($aa);
            //     // dd($monthdb);
            //     if($monthnd == $monthnn && $monthnd ==$monthnt &&$monthndi == $monthnn && $monthndi ==$monthnt  ){                       
            //         for($i = $daynd ; $i <= $dayndi ; $i++){                       
            //             if($i > $daynn && $i < $daynt){
            //                 $allday .= $i.',';
            //            } 
            //         }
            //     }             
            // }
            // $explode = explode(',',$allday);
            // array_pop($explode);
            // $explode = array_map("unserialize", array_unique(array_map("serialize", $explode))); // cai nay chua tim hiu voi gg ra
            // $test = '';
            // // dd($explode[1]);g
            // for($i = $daynn; $i < $explode[0];$i++){
            //     $test .= $i.',';
            // }
            // for($i = $explode[count($explode)-1] + 1; $i <= $daynt;$i++){
            //     $test .= $i.',';
            // }
            // dd($test);


















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
            return view('Search',compact('p','zz','o'));
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
