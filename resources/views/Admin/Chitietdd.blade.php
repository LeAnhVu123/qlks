@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;padding-left:0px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Chi Tiết Đơn Đặt Phòng</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm Chi tiết đơn hàng</span><a href="{{route('get-themct')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
                <div class="col-12 mt-1">@if(session('thanhcong'))
                <div class="alert alert-info">
                    {{session('thanhcong')}}
                </div>
                @endif</div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mã CT</th>
                            <th>Mã Đơn</th>                            
                            <th>SL Phòng</th>
                            <th>Số lượng</th>
                            <th>Ngày Đến</th>
                            <th>Ngày Đi</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                   @foreach($ct as $value)
                        <tr>
                            <td>{{$value->mact}}</td>
                            <td>{{$value->madon}}</td>
                            <td>{{$value->slphong}}</td>
                            <td>{{$value->soluong}}</td>
                            <td>{{$value->ngayden}}</td>
                            <td>{{$value->ngaydi}}</td>
                            <td><a href="{{route('get-suact',$value->mact)}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="{{route('get-xoact',$value->mact)}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
       
@endsection
