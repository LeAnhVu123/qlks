@extends('QuanLy')
@section('content')
<div class="col-9">
	<h4>Sửa thông tin phòng</h4>
	<hr>
	<p class="text-center text-primary h3 mb-4">Thêm</p>	
	<form action="/Admin/QLP/edit/{{$phong->maphong}}" method="POST">
		{{method_field('PATCH')}}
		@csrf
		<div class="row " style="font-size:20px;">
			<div class="offset-1 col-4 my-2">Mã loại </div>
			<div class="col-6 my-2"><input type="text" id="maloai" name="maloai" class="form-control" value="{{$phong->maloai}}"></div>
			<div class="offset-1 col-4 my-2">Mã đơn</div>
			<div class="col-6 my-2"><input type="text" id="madon" name="madon" class="form-control" value="{{$phong->madon}}"></div>
			<div class="offset-1 col-4 my-2">Ghi chú  </div>
			<div class="col-6 my-2"><input type="text" id="ghichu" name="ghichu" class="form-control"  value="{{$phong->ghichu}}"></div>
			<div class="offset-1 col-4 my-2">Trạng thái </div>
			<div class="col-6 my-2"><input type="text" id="trangthai" name="trangthai" class="form-control"  value="{{$phong->trangthai}}"></div>
			<div class="offset-1 col-4 my-2">Số tầng</div>
			<div class="col-6 my-2"><input type="text" id="sotang" name="sotang" class="form-control"  value="{{$phong->sotang}}"></div>		
		</div>
		<div class="text-center mt-4"><button type="submit" class="btn btn-success btn-lg">Update</button></div>
	</form>
</div>
@endsection