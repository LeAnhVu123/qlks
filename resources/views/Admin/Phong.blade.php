@extends('Admin.QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Tài Khoản Khách Hàng</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('get-themp')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
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
                            <th>Mã Phòng </th>
                            <th>Mã Loại</th>
                            <th>Mã Đơn</th>
                            <th>Số Tầng</th>
                            <th>Ghi Chú</th>
                            <th>Trạng Thái</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($p as $value)
                        <tr>
                            <td>{{$value->maphong}}</td>
                            <td>{{$value->maloai}}</td>
                            <td>{{$value->madon}}</td>
                            <td>{{$value->sotang}}</td>
                            <td>{{$value->ghichu}}</td>
                            <td>{{$value->trangthai}}</td>
                            <td><a href="Sua/Suaphong/{{$value->maphong}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="XoaPhong/{{$value->maphong}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach  
                    </tbody>
                </table>
                </div>
            </div>
		</div>
       
       
@endsection
