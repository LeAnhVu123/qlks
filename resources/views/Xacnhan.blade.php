@extends('Masterlayout')
@section('content')
<head><title>Xác Nhận</title></head>
<div class="col-12" style="text-align:center;padding-top:20px;"><h3>Chi tiết đơn đặt phòng</h3></div>
<div class="col-12"><hr></div>
<div class="col-12">
    <div class="row">
        <div class="col-5">
            <div class="row" style="padding-left:150px;">
                <div class="col-12" style="font-weight:bolder;">Thông Tin KH</div>
                <div class="col-12">Tài khoản : .......................</div>
                <div class="col-12">Số điện thoại : ...</div>
                <div class="col-12">Số CMND : ...</div>
                <div class="col-12">Email : ...</div>
            </div>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col-12" style="font-weight:bolder;">Thông Tin Dịch Vụ</div>
                <div class="col-12">Dịch Vụ massag1232312321312e</div>
                <div class="col-12">Dịch Vụ massage</div>
                <div class="col-12">Dịch Vụ massage</div>
                <div class="col-12">Dịch Vụ massage</div>
                <div class="col-12">Dịch Vụ massage</div>
                <div class="col-12">Dịch Vụ massage</div>
                <div class="col-12">Dịch Vụ massage</div>
               
            </div>
        </div>


        <div class="col-3">
            <div class="row">
                <div class="col-12" style="font-weight:bolder;">Thông Tin Đơn Đặt</div>
                <div class="col-12">Ngày đặt</div>
                <div class="col-12">Khuyến mãi : ...</div>
                <div class="col-12">Tổng tiền : ...</div>
            </div>
        </div>
        <div class="col-12"><hr></div>
        <div class="col-6"><span style="float:right;font-weight:bolder;">Chọn hình thức thanh toán</span></div>
        <div class="col-6"><input type="radio" name="tt" id=""> Chuyển khoản</div>
        <div class="col-6"></div>
        <div class="col-6"><input type="radio" name="tt" id=""> Thanh toán trực tiếp</div>
<!-- 
        <div class="col-2">
            <div class="row" style="float:right;">
                <div class="col-12"><button class="btn btn-primary">Thanh Toán</button></div>
            </div>
        </div> -->
    </div>
</div>
	

@endsection