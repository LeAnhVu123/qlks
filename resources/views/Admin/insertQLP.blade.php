@extends('QuanLy')
@section('content')
<div class="col-9">
	<h4>Thêm phòng</h4>
	<hr>
	<p class="text-center text-primary h3 mb-4">Thêm</p>
	<form action="{{route('post.insert-qlp')}}" method="post">
		@csrf
		<div class="row" style="font-size:20px;">
		<div class="offset-1 col-4 my-2">Mã phòng</div>
			<div class="col-6 my-2"><input type="text" id="maphong" name="maphong" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Mã loại</div>
			<div class="col-6 my-2"><input type="text" id="maloai" name="maloai" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Mã đơn</div>
			<div class="col-6 my-2"><input type="text" id="madon" name="madon" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Ghi chú </div>
			<div class="col-6 my-2"><input type="text" id="ghichu" name="ghichu" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Trạng thái </div>
			<div class="col-6 my-2"><input type="text" id="trangthai" name="trangthai" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Số tầng</div>
			<div class="col-6 my-2"><input type="text" id="sotang" name="sotang" class="form-control"></div>		
		</div>
		<div class="text-center mt-4"><button type="submit" class="btn btn-success btn-lg">Insert</button></div>
	</form>
</div>
@endsection