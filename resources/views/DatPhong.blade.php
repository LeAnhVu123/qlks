@extends('Masterlayout')
@section('content')
    <div class="container-fluid mt-5">
          <div class="row"> 
            <div class="col-8">
                <h4 style="padding-left:70px;">KHÁCH SẠN NINH THUẬN (TP.PHAN RANG-THÁP CHÀM) </h4>
            </div>
            <div class="col-4">
                <h4 style="padding-left:150px;">TÌM PHÒNG </h4>
            </div>
            <div class="col-12" style="padding-left:85px;padding-right:45px;"><hr></div>
            
            <div class="col-8 mt-3" style="padding-left:100px;">
                <div class="row" >
                  @foreach($p as $key => $value)
                  @if($key == 4)
                  @break
                  @endif
                        <div class="col-5" style="padding-left:0px;">
                              <img src="img/{{$value->hinhanh}}" style="width:300;height:200px;" alt="">
                        </div>
                        <div class="col-7" style="padding-left:0px;">
                          <div class="row">
                              <div class="col-12">
                              <h3 style="color:	#0066FF;">{{$value->tenloai}}</h3>
                              </div>
                              <div class="col-12 mt-3">
                              <span style="font-size:20px;">Giới hạn :</span> <span style="font-size:20px;padding-left:20px;"> {{$value->succhua}} người</span> 
                              </div>
                              <div class="col-12 mt-3">
                              <span style="font-size:20px;">Giá :</span> <span style="font-size:20px;padding-left:65px;color:#FFCC33; font-weight: bolder;"> {{$value->gia}} đ</span>  
                              </div>
                              <div class="col-12 mt-4">
                                  <button class="btn btn-primary">Đặt phòng</button>
                              </div>
                          </div>
                        </div>
                        <div class="col-12" style="padding-top:30px;padding-left:0px;padding-right:0px;">
                            <hr>
                        </div>
                        @endforeach
              </div>
            </div>
            <div class="col-4 mt-2" >
                <div class="row" style="font-size:17px;background:#6666CC;color:white;margin-left:70px;margin-right:30px;">
                  <div class="col-12" style="font-weight: bolder;text-align:center; font-size:20px; padding-top:20px;">Chọn Tiêu Chí</div>
                  <div class="col-12" style="padding-top:20px;"><input type="text" style="margin-left:30px;" name="" id="" placeholder="Ngày nhận phòng"></div>
                  <div class="col-12" style="padding-top:20px;"><input type="text" style="margin-left:30px;" name="" id="" placeholder="Ngày trả phòng"></div>
                  <div class="col-12" style="padding-top:20px;"><input type="text" style="margin-left:30px;" name="" id="" placeholder="Số lượng người"></div>
                  <div class="col-12" style="padding-top:20px;padding-bottom:40px;"><button class="btn btn-dark" style="margin-left:30px; width:80%" type="submit">Tìm kiếm</button></div>
                </div>
            </div>
          </div> 
    </div>
    <!-- ------ -->
       
<!-- End Tim Kiem -->


<!-- End Noi Dung -->

<script>
$(document).ready(function(){
      var d = new Date();
      var month = d.getMonth()+1;
      var day = d.getDate();
      if(day.toString().length == 1){
        day = '0'+day;
      }
      var year = d.getFullYear();
      var date = month + "/" + day + "/" + year;
      // var test = <i class='fa fa-calendar'></i>;
      $('.nut').val(date);
      $('.nut').datepicker();
      var item = [];
     /*  console.log(item); */
      // $('.datphong').each(function(index,value){
      //     $(this).click(function(){
      //       var mota = $('.mota').eq(index).text();
      //       var gia = $('.gia').eq(index).text();
      //       var succhua = $('.succhua').eq(index).text();
      //       var loai = $('.loai').eq(index).text();
      //       var img = $('.img').eq(index).attr('src');
      //       item.push({
      //           mota : mota,
      //           gia : gia,
      //           succhua : succhua,
      //           loai : loai,
      //           img : img
      //         })
      //       sessionStorage.setItem('session',JSON.stringify(item));            
      //     })
      // })      
  })
</script>
@endsection
</body>
</html>