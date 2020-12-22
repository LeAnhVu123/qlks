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
    <title>Đăng Kí</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding-top:10px;padding-left:70px;"><a href="{{route('trangchu')}}" style="text-decoration: none;"><span style="font-size:30px;font-weight:bolder;" ><span class="fa fa-home"></span> ROYAL HOTEL</span ></a><span style="font-size:20px;padding-left:20px;"> Đăng Kí</span></div>
        <div class="col-12 mt-3" style="background-image: url('img/hinhnen/e1.jpg');height:530px;width:100%;">
            <div class="row" style="padding-top:20px;">
                <div class="col-5"></div>
                <div class="col-3">@include('notice')</div>
                <div class="col-3" style="background-color:white;border-radius:5px;padding-left:15px;">
               
                    <form action="{{route('post-dk')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12" style="padding-top:20px;"><span style="font-size:20px;">Đăng Kí</span> </div>
                        <div class="col-12" style="padding-top:20px;"><input class="form-control" name="taikhoan" autocomplete="off" type="text" placeholder="Email/Tên đăng nhập"></div>
                        <div class="col-12" style="padding-top:20px;"><input class="form-control" name="matkhau" autocomplete="off" type="password" placeholder="Mật khẩu"></div>
                        <div class="col-12" style="padding-top:20px;"><input class="form-control" name="cmnd" autocomplete="off" type="text" placeholder="CMND"></div>
                        <div class="col-12" style="padding-top:20px;"><input class="form-control" name="hoten" autocomplete="off" type="text" placeholder="Họ Tên"></div>
                        <div class="col-12" style="padding-top:20px;"><input class="form-control" name="sdt" autocomplete="off" type="text" placeholder="Số điện thoại"></div>
                        <div class="col-12" style="padding-top:20px;"><input class="form-control" name="email" autocomplete="off" type="email" placeholder="Gmail"></div>
                        <div class="col-12" style="padding-top:20px;padding-bottom:30px;"><button class="btn btn-danger" style="width:100%;" type="submit">Đăng Kí</button></div>
                    </form>  
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
   
</body>
</html>