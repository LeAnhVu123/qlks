@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
	<div class="row">
		<div class="col-7" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Phòng</span></div>
		<div class="col-5" style="padding-top:20px;padding-left:40px;display:float-right"><span style="font-size: 20px;">Thêm loại phòng</span><a href="{{route('insert-qllp')}}"><button class="btn btn-success mx-1">insert</button></a></div>
		<div class="col-12" style="padding-left:40px;">
			<hr>
		</div>
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
						<td>{{$value->maloai}}</td>
						<td>{{$value->tenloai}}</td>
						<td>{{$value->succhua}}</td>
						<td>{{$value ->mota}}</td>
						<td>{{$value->hinhanh}}</td>
						<td>{{$value->gia}}</td>
						<td>
							<a href="QLLP/edit/{{$value->maloai}}"><button class="btn btn-danger float-left">Update</button></a>
							<div class="float-left mx-3">
								<form action="/Admin/QLLP/delete/{{$value->maloai}}" method="POST">
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