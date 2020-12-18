<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	/* display: flex;
		vertical-align: middle;
		justify-content: center; */
	body {
		min-height: 500px;
		display: flex;
		align-items: center;
		justify-content: center;
		/* background: linear-gradient(120deg,blue,red); */
		background-color: #e4ebea;
	}

	.login {
		background-color: white;
		box-shadow: 0 0 10px darkblue;
		width: 500px;
		/* height: 450px; */
		height: 350px;
	}
</style>

<body>

	
	<div class="container login">
		<h3 class="text-center my-4">Login</h3>
		<form action="{{Route('xetdangnhap')}}" method="POST">
			@csrf
			<div class="row p-4">				
				<div class="col-3 mt-1 mb-3">Tài Khoản</div>
				<div class="col-8 mb-3"> <input type="text" name="ttk" id="" class="form-control" autocomplete="off"> </div>
				<div class="col-3 mt-1 mb-3">Mật Khẩu</div>
				<div class="col-8 mb-3"> <input type="password" name="matkhau" id="" class="form-control" autocomplete="off"> </div>				
				<div class="col-12 mt-4 text-center">
					<button type="submit" class="btn btn-success">Đăng Nhập</button>					
				</div>
				<div class="col-12" style="text-align:center;">@include('notice')</div>
				
			</div>
		</form>
		
		<!-- <div class="row px-4">
			<div class="col-12">Nếu không có tài khoản hãy <a href="#">Đăng ký</a>/Quên mật khẩu hãy <a href="#">Click vào đây</a></div>
			<div class="col-12 text-center"><h4>Đăng nhập bằng</h4></div>
			<div class="col-12 text-center p-2">
				<a href="#"><button class="mx-5" style="width:100px;height:40px"><i class="fa fa-google mx-2" style="font-size:24px;color:red"></i>Gmail</button></a>
				<a href="#"><button class="mx-5" style="width:110px;height:40px"><i class="fa fa-facebook mx-1" style="font-size:24px;color:blue"></i>Facebook</button></a>
			</div>
			
		</div> -->
<!-- </div> -->
	</div>
</body>

</html>