@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px; padding-left:0px;padding-right:0px;">
@include('notice')
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Tài Khoản Nhân Viên</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('get-themnv')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
					<tr>
                            <th>Mã KH</th>
                            <th>Tài Khoản</th>
                            <th>CMND</th>
                            <th>Số DT</th>
                            <th>Email</th>
                            <th>Họ Tên</th>
                            <th>Role</th>                            
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($nv as $value)
                        <tr>
                            <td>{{$value->manv}}</td>
                            <td>{{$value->taikhoan}}</td>
                            <td>{{$value->cmnd}}</td>
                            <td>{{$value->sdt}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->hoten}}</td>
                            <td>{{$value->role}}</td>
                          
                           
                            <td><a href="Sua/SuaTKNV/{{$value->manv}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="XoaNhanVien/{{$value->manv}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach  
                    </tbody>
                </table>
                </div>                
            </div>
		</div>
       

@endsection
