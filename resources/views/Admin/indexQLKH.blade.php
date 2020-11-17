@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
            <div class="row">
				<div class="col-7" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Tài Khoản Khách Hàng</span> </div>
				<div class="col-5" style="padding-top:20px;padding-left:40px;display:float-right"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('insert-qlkh')}}"><button class="btn btn-success ml-1">insert</button></a></div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PassWord</th>
                            <th>Họ Tên</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($kh as $value)
                        <tr>
                            <td>{{$value->makh}}</td>
                            <td>{{$value->password}}</td>
                            <td>{{$value->hoten}}</td>
                            <td>{{$value->sdt}}</td>
                            <td>{{$value->email}}</td>
							<td>		
								<a href="QLKH/edit/{{$value->makh}}"><button class="btn btn-danger float-left">Update</button></a>
								<div class="float-left mx-3">													
									<form action="/Admin/QLKH/delete/{{$value->makh}}" method="POST" >
										{{method_field('Delete')}}
										@csrf																
										<button type="submit" class="btn btn-danger">Delete</button	>	
									</form>
								</div>
							</td>
                        </tr>
                    @endforeach  
                    </tbody>
                </table>
                </div>
            </div>
		</div>
		@if(Session::get('thanhcong'))
			@include('message');
		@endif
		
<script>
		$(document).ready(function(){
			// if("{{Session('thanhcong')}}"){
			// 	alert("{{Session('thanhcong')}}");
			// }
			// $('#message').html(message);
			$('#messageModal').modal();
		})
</script>
@endsection
