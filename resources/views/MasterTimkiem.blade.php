@extends('Masterlayout')
@section('content')
    <div class="container-fluid mt-5">
          <div class="row"> 
            <div class="col-8">
                <h4 style="padding-left:50px;padding-right:0px;">KHÁCH SẠN ROYAL HOTEL NINH THUẬN</h4>
            </div>
            <div class="col-4">
                <h4 style="padding-left:170px;">TÌM PHÒNG </h4>
            </div>
            
            <div class="col-12" style="padding-left:60px;padding-right:25px;"><hr></div>
            @yield('abc')
            <div class="col-3 mt-2" >
                <div class="row" style="font-size:17px;background:#003366;color:white;margin-left:5px;margin-right:10px;">
                  <div class="col-12" style="font-weight: bolder;text-align:center; font-size:20px; padding-top:20px;">Chọn Tiêu Chí</div>
                  <div class="col-12" style="padding-top:20px;"><input type="text" class="nut1" style="margin-left:20px;width:205px;" name="" id="" placeholder="Ngày nhận phòng"></div>
                  <div class="col-12" style="padding-top:20px;"><input type="text" class="nut2" style="margin-left:20px;width:205px;" name="" id="" placeholder="Ngày trả phòng"></div>
                  <div class="col-12" style="padding-top:20px;"><input type="text" style="margin-left:20px;width:205px;" name="" id="" placeholder="Số lượng người"></div>
                  <div class="col-12" style="padding-top:20px;padding-bottom:40px;"><button class="btn btn-warning" style="margin-left:20px; width:85%" type="submit">Tìm kiếm</button></div>            
                </div>
                <div class="row mt-4" style="margin-left:0px;margin-right:0px;">
                      <div class="col-3"><hr style="height:2px;"></div>
                      <div class="col-6" style="padding-left:15px;font-weight: bolder;font-size:20px;">Bài viết mới</div>
                      <div class="col-3" style="padding-left:5px;"><hr style="height:2px;"></div>
                      
                      <div class="col-3" style="padding-top:5px;"><img src="img/thuvien/2.jpg" width="60px;" height="40px;" alt=""></div>
                      <div class="col-9"><a href="" class="tintuc" style="text-decoration: none;">5 lý do bạn nên chọn Ninh Thuận du lịch</a> </div>
                      <div class="col-12"><hr></div>

                      <div class="col-3" style="padding-top:5px;" style="text-decoration: none;"><img src="img/thuvien/4.jpg" width="60px;" height="40px;" alt=""></div>
                      <div class="col-9"><a href="" class="tintuc" style="text-decoration: none;">Vùng biễn đẹp - khu du lịch Bình Hưng</a> </div>
                      <div class="col-12"><hr></div>

                      <div class="col-3" style="padding-top:5px;"><img src="img/thuvien/3.jpg" width="60px;" height="40px;" alt=""></div>
                      <div class="col-9"><a href="" class="tintuc" style="text-decoration: none;">Quan cảnh đường ven biển du lịch</a></div>
                      <div class="col-12"><hr></div>
                      
                      <div class="col-3" style="padding-top:5px;"><img src="img/thuvien/1.jpg" width="60px;" height="40px;" alt=""></div>
                      <div class="col-9"><a href="" class="tintuc" style="text-decoration: none;">Những món ăn đặc sắc tại Ninh Thuận</a> </div>
                      <div class="col-12"><hr></div>
                </div>
            </div>
          </div> 
    </div>
    <!-- ------ -->
     
<!-- End Tim Kiem -->


<!-- End Noi Dung -->
<style>
  .tintuc{
    
    color: black;
  }
</style>
<script>
$(document).ready(function(){
      // var d = new Date();
      // var day = d.getDate();
      // var month = d.getMonth()+1;
      // var year = d.getFullYear();
      // var date = month + "/" + day + "/" + year;
      var z = "Ngày nhận phòng";
      var t = "Ngày trả phòng";
      $('.nut1').val(z);
      $('.nut2').val(t);
      $('.nut1').datepicker();
      $('.nut2').datepicker();
      // if(day.toString().length == 1){
      //   day = '0'+day;
      // }
      // var year = d.getFullYear();
      // var date = month + "/" + day + "/" + year;
      // $('.nut').val(date);
      // $('.nut').datepicker();
  });
</script>
@endsection
