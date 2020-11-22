@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
	<div class="row">
		<div class="col-7" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Phòng</span></div>
		<div class="col-5" style="padding-top:20px;padding-left:40px;display:float-right"><span style="font-size: 20px;">Thêm loại phòng</span><a href="{{route('insert-nv')}}"><button class="btn btn-success mx-1">insert</button></a></div>
		<div class="col-12" style="padding-left:40px;">
			<hr>
		</div>
		<div class="col-12" style="padding-left:40px;">
			<table id="example" class="display">
				<thead>
					<tr>
						<th>Mã nhân viên</th>
						<th>tên tài khoản</th>
						<th>họ tên</th>
						<th>số dt</th>
						<th>email</th>
						<th>chức vụ</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($nv as $value)
					<tr>
						<td>{{$value->manv}}</td>
						<td>{{$value->username}}</td>
						<td>{{$value->hoten}}</td>
						<td>{{$value->sdt}}</td>
						<td>{{$value->email}}</td>
						<td>{{$value->chucvu}}</td>
						<td>
							<a href="{{route('edit.nv',$value->manv)}}"><button class="btn btn-danger float-left">Update</button></a>
							<div class="float-left mx-3">
								<form action="{{route('delete.nv',$value->manv)}}" method="POST">
									{{method_field('Delete')}}
									@csrf
									<button type="submit" class="btn btn-danger">Delete</button>
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

@endsection