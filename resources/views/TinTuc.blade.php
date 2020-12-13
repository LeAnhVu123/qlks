@extends('MasterTimkiem')
@section('abc')
<head><title>Tin Tức</title></head>
<div class="col-9 mt-3" style="padding-left:70px;">
    <div class="row">
        <div class="col-4"><img src="img/thuvien/2.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">Quan cảnh Ninh Thuận</div>
                    <div class="col-12" style="height:37px;"><a href="{{route('qcNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12"><hr></div>
      
        <div class="col-4"><img src="img/thuvien/4.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">Du lịch Ninh Thuận</div>
                    <div class="col-12" style="height:37px;"><a href="{{route('dlNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12"><hr></div>
      
        <div class="col-4"><img src="img/thuvien/3.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">Đường biển Ninh Thuận</div>
                    <div class="col-12" style="height:37px;"><a href="{{route('dbNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12"><hr></div>
      
        <div class="col-4"><img src="img/thuvien/1.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">Đặc sản Ninh Thuận</div>
                    <div class="col-12" style="height:37px;"><a href="{{route('dsNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12"><hr></div>
      
        
    </div>
          
</div> 
@endsection