@extends('Masterlayout')
@section('content')
<head><title>Xác Nhận</title></head>
<div class="col-12" style="text-align:center;padding-top:20px;"><h3>Chi tiết đơn đặt phòng</h3></div>
<div class="col-12"><hr></div>
<div class="col-12">
    <div class="row">
        <div class="col-3">
            <div class="row" style="">
                <div class="col-12" style="font-weight:bolder;">Thông Tin KH</div>
                <div class="col-4">Tài khoản : </div><div class="col-8">{{$z->taikhoan}}</div>
                <div class="col-4">SDT : </div><div class="col-8">{{$z->sdt}}</div>
                <div class="col-4">Số CMND : </div><div class="col-8">{{$z->cmnd}}</div>
                <div class="col-4">Email : </div><div class="col-8">{{$z->email}}</div>
            </div>
        </div>

        <div class="col-2">
            <div class="row">
                <div class="col-12" style="font-weight:bolder;">Thông Tin Dịch Vụ</div>
				@foreach($dv as $valueDV)
                <div class="col-12">Dichvu : {{$valueDV->tendv}}</div>
				@endforeach
            </div>
		</div>
		
        <div class="col-2">
            <div class="row">
                <div class="col-12" style="font-weight:bolder;">Mã phòng đã đặt</div>
				@foreach($arrMaP as $maphong)
                	<div class="col-12">Mã Phòng : {{$maphong}}</div>
				@endforeach
            </div>
        </div>


        <div class="offset-1 col-3">
            <div class="row">
                <div class="col-12" style="font-weight:bolder;">Thông Tin Đơn Đặt</div>
                <div class="col-12">Ngày đến: {{$ngayden}}</div>
				<div class="col-12">Ngày đi : {{$ngaydi}}</div>
				<div class="col-12">Số phòng : {{$sophong}}</div>
				<div class="col-12">Số người : {{$songuoi}}</div>				
				@if(!empty($makm))
                <div class="col-12">Khuyến mãi :{{$makm->tenkm}} ( {{$makm->giagiam}} )</div>
				@endif
                <div class="col-12">Tổng tiền : <span>{{$tongtien}}</span><span>.000VND</span></div>
                
            </div>
        </div>
        <div class="col-12"><hr></div>
        <div class="col-6"><span style="float:right;font-weight:bolder;">Chọn hình thức thanh toán</span></div>
        <div class="col-6"><input type="radio" name="tt" id=""> Chuyển khoản</div>
        <div class="col-6"></div>
        <div class="col-6"><input type="radio" name="tt" id=""> Thanh toán trực tiếp</div>
        <div class="col-6"></div>
        <div class="col-6">
			<a href="{{route('addDD')}}"><button class="btn btn-success">Thanh toan</button></a>
		</div>
    </div>
</div>
	

@endsection