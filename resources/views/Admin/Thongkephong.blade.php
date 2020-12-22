@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px; padding-left:0px;padding-right:0px;">
            <div class="row">
            <div class="col-12 mt-3" style="padding-left:40px;">
               <form action="" method="get">
               @csrf
                  <input type="text" placeholder="Nhập mã khách hàng" name="makh">
                  <input type="submit" value="Xem" name="gui"><p>
               </form>
               </div>
               <div class="col-12 mt-1">@if(session('thanhcong'))
                <div class="alert alert-info">
                    {{session('thanhcong')}}
                </div>
                @endif</div>
               @if($dd)
               <div class="col-12" style="padding-left:40px;">
                  <span >Khách hàng :</span> {{$q}}
               </div>
               <div class="col-12" style="padding-left:40px;padding-top:5px;"> <span >Tổng tiền : </span>{{$t}} VND </div>
				<!-- <div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Tài Khoản Khách Hàng</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('get-themtk')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div> -->
                
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                        <th>STT</th>
                            <th>Mã Đơn</th>
                            <th>Ngày đặt</th>
                            <th>Ngày đến</th>
                            <th>Ngày đi</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                
                    <tbody>
                 @foreach($dd as $val)
                        <tr>
                           <td>{{$i++}}</td>
                           <td>
                                <form action="{{route('alldondat')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="dua" id="" value="{{$val->madon}}">
                                    <div class="md" style="cursor:pointer;">{{$val->madon}}</div>
                                    <input type="submit" value="gui" class="hd">
                                </form>
                            </td>
                            <td>{{$val->ngaylap}}</td>
                            <td>{{$val->donvachitiet['ngayden']}}</td>
                            <td>{{$val->donvachitiet['ngaydi']}}</td>
                            <td>{{$val->tongtien}}</td>  
                        </tr>
                   @endforeach
                    </tbody>
                </table>
                </div>
                @endif
            </div>
            
		</div>
  <script>
  $(document).ready(function(){
    $('.hd').hide();
        $('.md').click(function(){
            $(this).next().click();
        });
  });
  </script>     
       
@endsection
