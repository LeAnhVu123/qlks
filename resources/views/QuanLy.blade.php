<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="background-color: #EEEEEE;height:50px;border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;"><h3 style="padding-top:7px;">Admin - Anh Vũ</h3></div>
        <div class="col-2" style="background-color: #EEEEEE;height:585px;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;">
            <div class="row">
                <div class="col-12" style="border-bottom: 1px solid #ddd;text-align:center;font-size:18px;padding-top:5px;padding-bottom:5px;">
                    <span>MeNu</span>
                </div>
                <div class="col-12" style="padding-top:10px;">
                    <a href="{{route('khachhang')}}">- QL Tài Khoản KH</a>
                </div>
                <div class="col-12 mt-1">
                    <a href="{{route('phong')}}">- QL Phòng</a>
                </div>
                <div class="col-12 mt-1">
                    <a href="">- QL Loại Phòng</a>
                </div>
                <div class="col-12 mt-1">
                    <a href="">- QL Đơn Đặt Phòng</a>
                </div>
                <div class="col-12 mt-1">
                    <a href="">- QL Chi Tiết Đặt Phòng</a>
                </div>
                <div class="col-12 mt-1">
                    <a href="">- Thống Kê Báo Cáo</a>
                </div>
            </div>
        </div>
        @yield('content') 
       
    </div>
   
</div>


<!--  -->


    <script>$(document).ready(function(){
    $('#example').DataTable();
    });
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
</body>
</html>