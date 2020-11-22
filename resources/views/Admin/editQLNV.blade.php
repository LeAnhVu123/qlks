@extends('QuanLy')
@section('content')
<div class="col-9">
	<h4>Sửa thông tin loại phòng</h4>
	<hr>
	<p class="text-center text-primary h3 mb-4">Thêm</p>	
	<form action="{{route('update.nv',$nv->manv)}}" method="POST" enctype="multipart/form-data">
		{{method_field('PATCH')}}
		@csrf
		<div class="row " style="font-size:20px;">
			<div class="offset-1 col-4 my-2">username</div>
			<div class="col-6 my-2"><input type="text" id="ttk" name="ttk" class="form-control" value="{{$nv->username}}" readonly></div>
			<div class="offset-1 col-4 my-2">password</div>
			<div class="col-6 my-2"><input type="text" id="mk" name="mk" class="form-control" value="{{$nv->password}}"></div>
			<div class="offset-1 col-4 my-2">Họ tên  </div>
			<div class="col-6 my-2"><input type="text" id="hoten" name="hoten" class="form-control"  value="{{$nv->hoten}}"></div>
			<div class="offset-1 col-4 my-2">Số điện thoại </div>
			<div class="col-6 my-2"><input type="text" id="sdt" name="sdt" class="form-control" value="{{$nv->sdt}}"></div>
			<div class="offset-1 col-4 my-2">email</div>
			<div class="col-6 my-2"><input type="text" id="email" name="email" class="form-control"  value="{{$nv->email}}"></div>		
			<div class="offset-1 col-4 my-2">Chức vụ</div>		
			<div class="col-6 my-2"><input type="text" id="chucvu" name="chucvu" class="form-control"  value="{{$nv->chucvu}}"></div>	
		</div>
		<div class="text-center mt-4"><button type="submit" class="btn btn-success btn-lg">Update</button></div>
	</form>
</div>
@endsection