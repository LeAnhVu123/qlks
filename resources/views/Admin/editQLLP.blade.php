@extends('QuanLy')
@section('content')
<div class="col-9">
	<h4>Sửa thông tin loại phòng</h4>
	<hr>
	<p class="text-center text-primary h3 mb-4">Thêm</p>	
	<form action="/Admin/QLLP/edit/{{$lp->maloai}}" method="POST" enctype="multipart/form-data">
		{{method_field('PATCH')}}
		@csrf
		<div class="row " style="font-size:20px;">
			<div class="offset-1 col-4 my-2">Tên loại </div>
			<div class="col-6 my-2"><input type="text" id="tenloai" name="tenloai" class="form-control" value="{{$lp->tenloai}}"></div>
			<div class="offset-1 col-4 my-2">Sức chứa</div>
			<div class="col-6 my-2"><input type="text" id="succhua" name="succhua" class="form-control" value="{{$lp->succhua}}"></div>
			<div class="offset-1 col-4 my-2">Mô tả  </div>
			<div class="col-6 my-2"><input type="text" id="mota" name="mota" class="form-control"  value="{{$lp->mota}}"></div>
			<div class="offset-1 col-4 my-2">Hình Ảnh </div>
			<div class="col-6 my-2"><input type="file" id="hinhanh" name="hinhanh"  value="{{$lp->hinhanh}}"></div>
			<div class="offset-1 col-4 my-2">Giá</div>
			<div class="col-6 my-2"><input type="text" id="gia" name="gia" class="form-control"  value="{{$lp->gia}}"></div>		
		</div>
		<div class="text-center mt-4"><button type="submit" class="btn btn-success btn-lg">Update</button></div>
	</form>
</div>
@endsection