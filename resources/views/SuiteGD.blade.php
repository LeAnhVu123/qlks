@extends('MasterTimkiem')
@section('abc')
<head><title>Phòng Suite Gia Đình</title></head>
<div class="col-9 mt-3" style="padding-left:70px;">
    <div class="row">
       <div class="col-12"><img src="img/KS-667.jpg" style="width:100%;" alt=""></div>
       <div class="col-12" style="padding:10px 0px 10px 15px">
        <img class="zoom" src="img/KS-800.jpg" style="width:19.5%;height:100px;" alt="">
        <img class="zoom" src="img/KS-682.png" style="width:19.5%;height:100px;" alt="">
        <img class="zoom" src="img/KS-32.jpg" style="width:19.5%;height:100px;" alt="">
        <img class="zoom" src="img/KS-504.png" style="width:19.5%;height:100px;" alt="">
        <img class="zoom" src="img/KS-767.jpg" style="width:19.5%;height:100px;float:right;padding-right:15px;" alt="">
       </div>
       
       <div class="col-12 mt-3 alert alert-secondary" style="padding: 10px 5px 10px 0px;"><span style="padding-left:15px;">Mô tả : Phòng Superior Giường đôi với quang cảnh thành phố có TV 43 inches, tiện nghi cao cấp và giường lớn, thoải mái.</span> </div> 
      
    </div>    
</div> 
<style>
.zoom:hover{
    transform: scale(1.1);
}
</style>
@endsection