@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
            <div class="row">
                <div class="col-12" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Phòng</span></div>
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
                            <th>Delete</th>
                            <th>Update</th>
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
                            <td><i class="fa fa-home"></i><a href=""><span class="del">Delete</span></a></td>
                            <td><i class="fa fa-home"></i><a href=""><span class="del">Update</span></a></td>
                        </tr>
                    @endforeach
                         </tbody>
                
                </table>
   
                </div>
            </div>
        </div>
       
@endsection
