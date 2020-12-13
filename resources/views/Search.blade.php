@extends('MasterTimkiem')
@section('abc')
<head><title>Đặt Phòng</title></head>

<div class="col-9 mt-3" style="padding-left:70px;">
                <div class="row all" >
                                     
                </div>
              <a class="xemthem" style="font-size:20px;text-decoration: none; font-weight: bolder;cursor:pointer;">Xem Thêm</a>
            </div>
<style>
  .tintuc{
    
    color: black;
  }
</style>
<script>
$(document).ready(function(){
  var d = new Date();
      var day = d.getDate();
      var month = d.getMonth()+1;
      var year = d.getFullYear();
      var date = month + "/" + day + "/" + year;
      var z = "Ngày nhận phòng";
      var t = "Ngày trả phòng";
      $('.nut1').val(z);
      $('.nut2').val(t);
      $('.nut1').datepicker({
          dateFormat: "yy-mm-dd",
          minDate : new Date(),
      });
      $('.nut2').datepicker({
          dateFormat: "yy-mm-dd",
          minDate : new Date(),
      });
    var aa = @php echo json_encode($p) @endphp;
    var count = 3;
    countall(count,aa);
    $('.xemthem').click(function(){
      $('.all').html('');
      count = count + 3;
      countall(count,aa);
    })
  })
  function countall(count,aa){
    for(var i = 0; i < count ;i++){
       $('.all').append(
       '<div class="col-5" style="padding-left:0px;">  <img src="img/'+aa[i].hinhanh+'" style="width:300;height:200px;" alt="" class="img">  </div>' +
         '<div class="col-7" style="padding-left:0px;">'+
           '<div class="row">'+
              ' <div class="col-12"> '+
              ' <h3 style="color:	#0066FF;">'+aa[i].tenloai+'</h3>'+
              ' </div>'+
              ' <div class="col-12 mt-3">'+
              ' <span style="font-size:20px;">Giới hạn :</span> <span style="font-size:20px;padding-left:20px;" class="succhua">'+aa[i].succhua+' Người</span> '+
              ' </div>'+
              ' <div class="col-12 mt-3">'+
              ' <span style="font-size:20px;">Giá :</span> <span style="font-size:20px;padding-left:65px;color:#FFCC33; font-weight: bolder;"> '+aa[i].gia+'đ</span>  '+
              ' </div>'+
              ' <div class="col-12 mt-4">'+
              '     <button class="btn btn-primary">Đặt phòng</button>'+
              ' </div>'+
           '</div>'+
        ' </div>'+
         '<div class="col-12" style="padding-top:30px;padding-left:0px;padding-right:0px;">'+
          '   <hr>'+
         '</div>  ')
      }
  }
</script>
@endsection