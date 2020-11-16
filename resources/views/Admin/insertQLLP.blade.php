@extends('QuanLy')
@section('content')
<div class="col-9">
	<h4>Thêm loại phòng</h4>
	<hr>
	<p class="text-center text-primary h3 mb-4">Thêm</p>
	<form action="{{route('post.insert-qllp')}}" method="post">
		@csrf
		<div class="row " style="font-size:20px;">
			<div class="offset-1 col-4 my-2">Tên loại</div>
			<div class="col-6 my-2"><input type="text" id="tenloai" name="tenloai" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Sức chứa</div>
			<div class="col-6 my-2"><input type="text" id="succhua" name="succhua" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Mô tả </div>
			<div class="col-6 my-2"><input type="text" id="mota" name="mota" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Hình ảnh </div>
			<div class="col-6 my-2"><input type="text" id="hinhanh" name="hinhanh" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Giá</div>
			<div class="col-6 my-2"><input type="text" id="gia" name="gia" class="form-control"></div>		
		</div>
		<div class="text-center mt-4"><button type="submit" class="btn btn-success btn-lg">Insert</button></div>
	</form>
</div>
@endsection