@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Loại Phòng</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('get-themlp')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
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
                            <th>Mã Loại </th>
                            <th>Tên Loại</th>
                            <th>Sức Chứa</th>
                            <th>Mô Tả</th>
                            <th>Hình Ảnh</th>
                            <th>Giá</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($lp as $value)
                        <tr>
                        <td>{{$value->maloai}}</td>
                            <td>{{$value->tenloai}}</td>
                            <td>{{$value->succhua}}</td>
                            <td>{{$value->mota}}</td>
                            <td>{{$value->hinhanh}}</td>
                            <td>{{$value->gia}}</td>
                            <td><a href="Sua/Sualoaiphong/{{$value->maloai}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="XoaLoaiPhong/{{$value->maloai}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach  
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
  
@endsection
