@extends('MasterTimkiem')
@section('abc')
<head><title>Liên Hệ</title></head>
<style>
span{
    font-weight:bolder;
    font-size:17px;
}
</style>
<div class="col-9 mt-3" style="padding-left:70px;">
<form action="{{route('guilienhe')}}" method="post">
@csrf
        <div class="row">
            <div class="col-12" style="padding-top:10px;"><span>Khách hàng có thể liên hệ trực tiếp tại địa chỉ 35 Nguyễn Văn Bảo, Phường 4, Phước Mỹ, TP.Phan Rang - Tháp Chàm</span></div>
            <div class="col-12" style="padding-top:10px;"><span>Số điện thoại: (+84) 985220501</span></div>
            <div class="col-12" style="padding-top:10px;"><span>Gmail: royalhotel@gmail.com</span></div>
            <div class="col-12" style="padding-top:10px;"><span>Fax: (+84) 985220501</span></div>
            <div class="col-12" style="padding-top:10px;">
                                <div class="" style="padding: 10px 10px 0 0px;font-size:20px;">
                                      <a href="https://www.facebook.com/vu.leanh.144/" style="color:blue;"><i class="fa fa-facebook"></i></a>
                                      <a href="https://twitter.com/SalaDanangBeach" style="color:blue;padding-left:20px;"><i class="fa fa-twitter"></i></a>
                                      <a href="https://www.youtube.com/" style="color:blue;padding-left:20px;"><i class="fa fa-youtube"></i></a>
                                      <a href="https://business.instagram.com/getting-started?locale=vi_VN" style="color:blue;padding-left:20px;"><i class="fa fa-instagram"></i></a>
                                      <a href="https://www.tripadvisor.com.vn/" style="color:blue;padding-left:20px;"><i class="fa fa-tripadvisor"></i></a>
                                </div>
            </div>
            <div class="col-12"><hr></div>
            <div class="col-12" style="padding-left:400px;font-weight:bolder;font-size:20px;padding-top:20px;">Hỗ trợ khách hàng</div>
                    <div class="col-4 mt-4" style="padding-left:200px;">
                        Họ Tên
                    </div>
                    <div class="col-8 mt-4" style="padding-left:0px;">
                        <input class="form-control" type="text" name="hoten" id="" style="width:385px;" required autocomplete="off">
                    </div>
                    <div class="col-4 mt-2" style="padding-left:200px;">
                        SDT
                    </div>
                    <div class="col-8 mt-2" style="padding-left:0px;">
                        <input class="form-control" type="text" name="sdt" id="" style="width:385px;" required autocomplete="off">
                    </div>
                    <div class="col-4 mt-2" style="padding-left:200px;">
                        Email
                    </div>
                    <div class="col-8 mt-2" style="padding-left:0px;">
                        <input class="form-control" type="email" name="email" style="width:385px;" required autocomplete="off">
                    </div>
                    <div class="col-4 mt-2" style="padding-left:200px;">
                        Nội Dung
                    </div>
                    <div class="col-8 mt-2" style="padding-left:0px;">
                        <textarea class="form-control" style="width:385px;" id="w3review" name="w3review" rows="4" cols="50" required autocomplete="off"></textarea>
                    </div>
                    <div class="col-4 mt-2" style="padding-left:200px;">  </div>
                    <div class="col-8 mt-2" style="padding-left:0px;"> <button class="btn btn-primary" style="width:100px;">Gửi</button></div>   
        </div>
        </form> 
        @if(count($errors) > 0)
			<div class="alert alert-danger mt-2">
				@foreach($errors->all() as $err)
				{{$err}}<br>
				@endforeach
			</div>
			@endif
			@if(session('thanhcong'))
			<div class="alert alert-info mt-2">
				{{session('thanhcong')}}
			</div>
			@endif 
</div> 
@endsection