@extends('MasterTimkiem')
@section('abc')
<head><title>Xem Đơn</title></head>
<div class="col-9 mt-3">
    <div class="row">
                <div class="col-5">
                    <div class="row" style="padding-left:45px;">
                    @foreach($arr as $value)
                        <div class="col-12">
                            <img src="img/{{$value->hinhanh}}" style="width:100%;height:200px;" alt="">    
                        </div>
                        <div class="col-12" style="padding-right:0px;"><hr></div>
                    @endforeach
                    </div>
                </div>

                <div class="col-7">
                    <div class="row">
                    @foreach($dd as $key => $val)
                    
                        <div class="col-12" style="height:200px;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4"><span>Ngày Nhận Phòng :</span></div>
                                        <div class="col-8"><span>{{$val->donvachitiet['ngayden']}}</span></div>
                                        <div class="col-4"><span>Ngày Trả Phòng : </span></div>
                                        <div class="col-8"><span>{{$val->donvachitiet['ngaydi']}}</span></div>
                                        <div class="col-4"><span>Số lượng phòng : </span></div>
                                        <div class="col-8"><span>{{$val->donvachitiet['slphong']}} Phòng</span></div>
                                        <div class="col-4"><span>Số lượng người : </span></div>
                                        <div class="col-8"><span>{{$val->donvachitiet['soluong']}} Người</span></div>
                                        <div class="col-4"><span>Khuyến mãi : </span></div>
                                        <div class="col-8"><span>Giảm {{$val->ddvakm['giagiam']}}%</span></div>
                                        <div class="col-4"><span>Tổng tiền : </span></div>
                                        <div class="col-8"><span>{{$val->tongtien}}.000 VND</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="padding-left:0px;"><hr ></div>
                    @endforeach
                    </div>
                </div>









    </div>   
</div> 
@endsection