@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
            <div class="row">
                <div class="col-7" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Phòng</span></div>
				<div class="col-5" style="padding-top:20px;padding-left:40px;display:float-right"><span style="font-size: 20px;">Thêm loại phòng</span><a href="{{route('insert-qllp')}}"><button class="btn btn-success mx-1">insert</button></a></div>
				<div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display">
                    <thead>
                        <tr>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th>Sức Chứa</th>
                            <th>Mô Tả</th>
                            <th>Hình Ảnh</th>
                            <th>Giá</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lp as $value)
                        <tr>
                            <td>{{$value->MaLoai}}</td>
                            <td>{{$value->TenLoai}}</td>
                            <td>{{$value->SucChua}}</td>
                            <td>{{$value->MoTa}}</td>
                            <td>{{$value->HinhAnh}}</td>
                            <td>{{$value->Gia}}</td>
                            <td>
								<button class="btn btn-danger">Update</button>
								<button class="btn btn-success">Delete</button>
							</td>
                        </tr>
                    @endforeach
                         </tbody>
                
                </table>
   
                </div>
            </div>
        </div>
       
@endsection
