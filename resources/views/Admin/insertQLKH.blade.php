@extends('QuanLy')
@section('content')
<div class="col-9">
	<h4>Thêm tài khoản khách hàng</h4>
	<hr>
	<p class="text-center text-primary h3 mb-4">Thêm</p>
	<form action="{{route('post.insert-qlkh')}}" method="post">
		@csrf
		<div class="row " style="font-size:20px;">
			<div class="offset-1 col-4 my-2">Mã KH</div>
			<div class="col-6 my-2"><input type="text" id="makh" name="makh" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Tên tài khoản</div>
			<div class="col-6 my-2"><input type="text" id="ttk" name="ttk" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Mật khẩu </div>
			<div class="col-6 my-2"><input type="text" id="mk" name="mk" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Họ tên </div>
			<div class="col-6 my-2"><input type="text" id="hoten" name="hoten" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Số điện thoại</div>
			<div class="col-6 my-2"><input type="text" id="sdt" name="sdt" class="form-control"></div>
			<div class="offset-1 col-4 my-2">Email</div>
			<div class="col-6 my-2"><input type="text" id="email" name="email" class="form-control"></div>			
		</div>
		<div class="text-center mt-4"><button type="submit" class="btn btn-success btn-lg">Insert</button></div>
	</form>
</div>
@endsection