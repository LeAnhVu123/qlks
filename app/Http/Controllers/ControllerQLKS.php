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
use App\Khuyenmai;
use App\Dondat;
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
			$l = '';
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
		$arr = [];
		// foreach($itemCart as $value){
		// 	// dd($value)."<br>";
		// 	$abc = Loaiphong::where('maloai',$value['maloai'])->first();
		// 	dd($abc->lvap);
		// }
        $dv = Dichvu::all();
        $o = Cookie::get('dangnhap');
        return view('PhongDaDat',compact('data1','path','itemCart','dv','o'));
    }
  
	public function showall(Request $reg){
		$dvs = json_decode($reg['madichvu']);
		$mps = json_decode($reg['maphong']);
		$ml = $reg['ml'];
		$stringDV = '';
		$stringMP ='';
		foreach($dvs as $dv){
			$stringDV .= $dv.',';
		}
		foreach($mps as $mp){
			$stringMP .= $mp.',';
		}
		$arr['sophong'] =$reg['sophong'];
		$arr['songuoi'] =$reg['songuoi'];
		$arr['maphong'] = $stringMP;
		$arr['madv'] = $stringDV;
		$arr['ml'] = $ml;
		$arr['ngayden'] = $reg['ngayden'];
		$arr['ngaydi'] = $reg['ngaydi'];
		$arr['tongtien'] = $reg['tongtien'];
		$arr['key'] = $reg['key'];
		Session::forget('datphong');
		Session::push('datphong',$arr);
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
		// dd('123');
		$o = Cookie::get('dangnhap');
        if($o)
        {
            $z = json_decode($o);
        }
        else{
			// $z=''; 
			return back()->with('thanhcong','Vui lòng đăng nhập trước khi đặt phòng.');
		}	

		$dd = Session::get('datphong');
		$sophong = $dd[0]['sophong'];
		$songuoi = $dd[0]['songuoi'];
		$madv = $dd[0]['madv'];
		$maphong = $dd[0]['maphong'];
		$arrMaDV = explode(',',$madv);
		$arrMaP = explode(',',$maphong);
		// dd(session::all());
		$arrUni = array_unique($arrMaP);
		if(count($arrMaP) > count($arrUni)){
			return redirect(route('phongdadat'))->with('thanhcong','Ban khong dc chon ma phong');
		}
		$ngayden = $dd[0]['ngayden'];
		$ngaydi = $dd[0]['ngaydi'];
		array_pop($arrMaDV);
		array_pop($arrMaP);
		$dv = Dichvu::whereIn('madv',$arrMaDV)->get();
		$km = Khuyenmai::all();
		foreach($km as $value){
			if($ngayden >= $value['ngaybd'] && $ngayden <= $value['ngaykt']){
				$makm = $value;
			}
		}
		if(!isset($makm)){
            $makm = '';
            $tongtien = $dd[0]['tongtien'];
        }else{ 
            $uu = $makm['giagiam'];
            if($uu == 0)
            {
                $tongtien = $dd[0]['tongtien'];
            }
            else{
            $tongtien = $dd[0]['tongtien'] - ($dd[0]['tongtien'] / $makm['giagiam']);
        }
        }
        return view('Xacnhan',compact('o','z','dd','dv','arrMaP','ngayden','ngaydi','tongtien','makm','sophong','songuoi'));
	}
	
	public function addDD(){
		$dd = Session::get('datphong');
		$getSS = Session::get('itemCart');
		Session::forget('itemCart.'.$dd[0]['key']);
		$all = Session::get('itemCart');
		Session::forget('itemCart');
		if(!empty($all)){
			foreach($all as $item){
				Session::push('itemCart',$item);
			}
		}
		$kh = Cookie::get('dangnhap');
		$json = json_decode($kh);
		$substrDV = substr($dd[0]['madv'],0,strlen($dd[0]['madv']) -1);
		$substrMP = substr($dd[0]['maphong'],0,strlen($dd[0]['maphong']) -1);
		$km = Khuyenmai::all();
		foreach($km as $value){
			if($dd[0]['ngayden'] >= $value['ngaybd'] && $dd[0]['ngayden']  <= $value['ngaykt']){
				$makm = $value;
			}		
		}
		// if(!isset($makm)){
		// 	$makm = null;
		// }
        $giagiam =  isset($makm) ? $makm['giagiam'] : 1 ;
        if($giagiam == 0)
        {
            $aa = $dd[0]['tongtien'];
            $tongtien = $dd[0]['tongtien'];
        }
        else{
            $aa = (float)($dd[0]['tongtien'] / $giagiam);
            $tongtien = $dd[0]['tongtien'] - ($dd[0]['tongtien'] / $giagiam);
        }
       
		Dondat::create([
			'makh' => $json->makh,
			'maphong' => $substrMP,
			'manv' => 1,
			'makm' => isset($makm) ? $makm['makm'] : null,
			'madv' =>$substrDV,
			'tongtien' => $tongtien,
			'ngaylap' => date("Y/n/d"),
		]);
		$madon = Dondat::latest()->first()->madon;
		Chitiet::create([
			'madon' => $madon,
			'ngayden' => $dd[0]['ngayden'],
			'ngaydi' =>  $dd[0]['ngaydi'],
			'slphong' => $dd[0]['sophong'],
			'soluong' => $dd[0]['songuoi'],
        ]);
		return redirect(route('phongdadat'))->with('thanhcong','Bạn đã đặt phòng thành công');
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
        public function xemdon()
        {
            $o = Cookie::get('dangnhap');
            $l = json_decode($o)->makh;
            $ddd = Dondat::where('makh',$l)->first();
            $dd = Dondat::where('makh',$l)->get();
            if(!$ddd)
            {
               return redirect(route('phongdadat'))->with('thanhcong','Vui lòng đặt phòng trước khi Xem Đơn');
            }
            else{
                // $sql = "SELECT * FROM phongs Where maphong in (";
                // $sql1 = "SELECT * FROM loaiphongs Where maloai in (";
                //     foreach($dd as $key => $value)
                //     {
                //         $s = explode(',',$value->maphong);  
                //         foreach($s as $val)
                //         {
                //             $sql .= "$val,";
                //         } 
                //     }
                //     $sql = substr($sql,0,-1);
                //     $sql .= ")";
                //     $ph = DB::select($sql);
                $arrMP = [];
                $arrLP =[];   
                $arr = [];          
                foreach($dd as $key => $value)
                    {
                        $s = explode(',',$value->maphong);  
                        $ph = Phong::where('maphong',$s[0])->first()->pval;
                        array_push($arr,$ph);

                    }
                    // dd($arr);
                    $zz = Loaiphong::all();
                return view('XemDon',compact('zz','o','dd','arr','k'));          
            }
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
            // for($i = $explode[count($explode)-1]+1; $i <= $daynt;$i++){
            //     $test .= $i.',';
            // }
			
		

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
