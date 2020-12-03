@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px; padding-left:0px;padding-right:0px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Tài Khoản Khách Hàng</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('get-themtk')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
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
                            <th>Mã KH</th>
                            <th>Tài Khoản</th>
                            <th>CMND</th>
                            <th>Số DT</th>
                            <th>Gmail</th>
                            <th>Họ Tên</th>
                            
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($kh as $value)
                        <tr>
                            <td>{{$value->makh}}</td>
                            <td>{{$value->taikhoan}}</td>
                            <td>{{$value->cmnd}}</td>
                            <td>{{$value->sdt}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->hoten}}</td>
                           
                            <td><a href="Sua/SuaTKKH/{{$value->makh}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="Xoa/{{$value->makh}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach  
                    </tbody>
                </table>
                </div>
            </div>
		</div>
       
       
@endsection
