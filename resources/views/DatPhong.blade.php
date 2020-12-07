@extends('Masterlayout')
@section('content')
    <div class="container-fluid mt-2 khung" style="background-color:#3399FF;">
        <div class="container tieude">
            <div class="row"> 
            <div id="col2" class="col-12" style="font-weight: bolder;padding-top:5px" >
            <h3>TÌM PHÒNG TRỐNG</h3>
            </div>
            </div> 
        </div>
    <!-- ------ -->
        <div class="container timkiem" >
            <div class="row"> 
            <div id="col3" class="col-md-2 col-ms-6 col-12">
            Ngày nhận <input class="nut" type="text"></input>
            </div>
            <div id="col31" class="col-md-2 col-ms-6 col-12">
            Ngày trả  <input class="nut" type="text" ></input>
            </div>
            <div id="col31" class="col-md-2 col-ms-6 col-12">
            Số lượng  <input class="nutbt" type="number" min="1" value=""></input>
            </div>
            <div id="col31" class="col-md-2 col-ms-6 col-12">
            Người lớn <input class="nutbt" type="number" min="1" value=""></input>
            </div>
            <div id="col31" class="col-md-2 col-ms-6 col-12">
            Trẻ em  <input class="nutbt" type="number" min="0" value=""></input>
            </div>
            <div id="col31" class="col-md-2 col-ms-6 col-12">
            <input class="tk" type="submit" value="Tìm kiếm"></input>
            </div>
            </div> 
        </div>
    </div>
<!-- End Tim Kiem -->


<!-- End Noi Dung -->
<script src="js/trangchu.js"></script>
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