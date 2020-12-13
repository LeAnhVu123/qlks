<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/DatPhong.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Đăng Nhập</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding-top:10px;padding-left:70px;"><a href="{{route('trangchu')}}" style="text-decoration: none;"><span style="font-size:30px;font-weight:bolder;" ><span class="fa fa-home"></span> ROYAL HOTEL</span ></a><span style="font-size:20px;padding-left:20px;"> Đăng Nhập</span></div>
        <div class="col-12 mt-3" style="background-image: url('img/hinhnen/e1.jpg');height:530px;width:100%;">
            <div class="row" style="padding-top:50px;">
                <div class="col-8"></div>
                <div class="col-3" style="background-color:white;border-radius:5px;padding-left:15px;">
                @include('notice')
                <form action="{{route('post-dn')}}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-12" style="padding-top:20px;"><span style="font-size:20px;">Đăng Nhập</span> </div>
                        <div class="col-12" style="padding-top:30px;"><input class="form-control" name="taikhoan" autocomplete="off" type="text" placeholder="Email/Số điện thoại/Tên đăng nhập"></div>
                        <div class="col-12" style="padding-top:30px;"><input class="form-control" name="matkhau" autocomplete="off" type="password" placeholder="Mật khẩu"></div>
                        <div class="col-12" style="padding-top:30px;"><button class="btn btn-danger" style="width:100%;" type="submit">Đăng Nhập</button></div>
                        <div class="col-6" style="padding-top:10px;"><a href="" style="text-decoration: none;font-size:14px;">Quên mật khẩu</a></div>
                        <div class="col-6" style="padding-top:10px;"><a href="" style="float:right;text-decoration: none;font-size:14px;">Cần trợ giúp.?</a></div>
                        <div class="col-6" style="padding-top:10px;" ><button style="width:100%;height:40px;background-color:#0099FF;padding-left:0px;color:#FFFFFF;border: 0;border-radius:5px;"><span>Facebook</span></button></div>
                        <div class="col-6" style="padding-top:10px;" ><button style="width:100%;height:40px;background-color:#0099FF;padding-left:0px;color:#FFFFFF;border: 0;border-radius:5px;"><span>Gmail</span></button></div>
                        <div class="col-5" style="padding-top:10px;"><hr></div>
                        <div class="col-2" style="padding-top:10px;padding-left:5px;opacity: 0.5;">HOẶC</div>
                        <div class="col-5" style="padding-top:10px;"><hr></div>
                        <div class="col-12" style="padding-top:10px;padding-bottom:50px;text-align:center;"><span style="opacity: 0.5;">Nếu bạn chưa có tài khoản.?</span>  <span><a href="{{route('dk')}}" style="text-decoration: none;">Đăng Kí</a></span></div>
                        <!-- <div class="col-12" style="padding-top:10px;padding-bottom:50px;"><a href="">Đăng Kí</a></div> -->
                        </form>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
   
</body>
</html>