@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Khuyến mãi</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm khuyến mãi</span><a href="{{route('get-themkm')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
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
                            <th>Mã KM</th>
                            <th>Tên KM</th>
                            <th>Giá giảm </th>
                            <th>Ngày BD</th>
							<th>Ngày KT</th>
							<th>Update</th>
							<th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                   @foreach($km as $value)
                        <tr>
                            <td>{{$value->makm}}</td>
                            <td>{{$value->tenkm}}</td>
                            <td>{{$value->giagiam}}</td>
                            <td>{{$value->ngaybd}}</td>
							<td>{{$value->ngaykt}}</td>
                            <td><a href="{{route('get-suakm',$value->makm)}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="{{route('get-xoakm',$value->makm)}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
       
@endsection
