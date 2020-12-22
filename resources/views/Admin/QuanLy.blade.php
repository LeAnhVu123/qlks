<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Quan Ly</title>
</head>
<body>
<style>
.row a{
    text-decoration: none;
    color:black;
}
.row a:hover{
    color:blue;
    
}
.del{
                color:blue;
            }
            .del:hover{
                color:red;
            }
body{
    /* overflow-x: hidden; */
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="background-color: #EEEEEE;height:50px;border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;">
        <h3 style="padding-top:7px;float:left">Admin - Royal Hotel</h3>
        <a href="{{route('dangxuat')}}"><button class="btn btn-secondary float-right" style="margin-top:5px;">Đăng Xuất</button></a>
        </div>
        <div class="col-2" style="background-color: #EEEEEE;height:585px;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;">
            <div class="row">
                <div class="col-12" style="border-bottom: 1px solid #ddd;text-align:center;font-size:18px;padding-top:5px;padding-bottom:5px;">
                    <span style="font-weight: bolder;">MeNu</span>
                </div>
                <div class="nv">    
                        <div class="col-12" style="padding-top:10px;">
                            <a href="{{route('qltk')}}" class="qlkh"><i class="fa fa-home"></i> QL Tài Khoản KH</a>
                        </div>
                        <div class="col-12 mt-1">
                            <a href="{{route('phong')}}"><i class="fa fa-home"></i> QL Phòng</a>
                        </div>
                        <div class="col-12 mt-1">
                            <a href="{{route('lphong')}}"><i class="fa fa-home"></i> QL Loại Phòng</a>
                        </div>
                        <div class="col-12 mt-1" style="height:auto;">
                            <a href="{{route('alldondat')}}"><i class="fa fa-home"></i> QL Đơn Đặt</a>
                        </div>
                        <div class="col-12 mt-1">
                            <a href="{{route('ctdondat')}}"><i class="fa fa-home"></i> QL CT Đơn Đặt</a>
                        </div>  
                        <div class="col-12 mt-1">
                            <a href="{{route('dichvu')}}"><i class="fa fa-home"></i> QL Dịch Vụ</a>
                        </div>
                        <div class="col-12 mt-1">
                            <a href="{{route('thanhtoan')}}"><i class="fa fa-home"></i> QL Thanh Toán</a>
                        </div>
                </div>
                <div class="ql">                 
                        <div class="col-12 mt-1">
							<a href="{{route('khuyenmai')}}"><i class="fa fa-home"></i> QL Khuyến Mãi</a>
                        </div>
                        <div class="col-12 mt-1">
                            <a href="{{route('nv')}}"><i class="fa fa-home"></i> QL Tài Khoản NV</a>
                        </div>
                        <div class="col-12 mt-1">
                            <a class="ff" style="cursor:pointer;"><i class="fa fa-home"></i> Thống Kê Báo Cáo</a>
                        </div>
                        <!-- <div class="col-12 mt-1 hide" style="padding-left:40px;padding-top:0px;">
                            <a href="">1. Phòng</a>
                        </div>
                        <div class="col-12 mt-1 hide" style="padding-left:40px;padding-top:0px;">
                            <a href="">2. Thời gian</a>
                        </div> -->
                        <div class="col-12 mt-1 hide" style="padding-left:40px;padding-top:0px;">
                            <a href="{{route('doanhthu')}}">1. Doanh thu</a>
                        </div>
                        <div class="col-12 mt-1 hide" style="padding-left:40px;padding-top:0px;">
                            <a href="{{route('viewchon')}}">2. Khách hàng</a>
                        </div>
                </div>   
            </div>
        </div>
        @yield('content') 
       
    </div>
   
</div>



<!--  -->


<script>
$(document).ready(function(){
    $('#example').DataTable();
    $('.hide').hide();
    $('.ff').click(function(){
        $('.hide').show();
    })
 });
</script> 

</body>
</html>