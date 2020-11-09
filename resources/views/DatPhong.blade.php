@extends('Masterlayout')
@section('content')
    <div class="container-fluid mt-2 khung">
        <div class="container tieude">
            <div class="row"> 
            <div id="col2" class="col-12" style="font-weight: bolder;padding-top:5px">
            <h3>TÌM PHÒNG TRỐNG</h3>
            </div>
            </div> 
        </div>
    <!-- ------ -->
        <div class="container timkiem">
            <div class="row"> 
            <div id="col3" class="col-md-2 col-ms-6 col-12">
            Ngày đến <input class="nut" type="text"></input>
            </div>
            <div id="col3" class="col-md-2 col-ms-6 col-12">
            Ngày đi  <input class="nut" type="text" ></input>
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


    <div class="container-fluid sanpham">
        <div class="row"> 
        
          <div class="col-2 qc" style="padding-left:0px">
              <img src="img\km\165804643720.png" alt="" style="width:100%;height:418px;padding-top:8px">
              <img src="img\km\165804643720.png" alt="" style="width:100%;height:418px;padding-top:8px">
              <img src="img\km\165804643720.png" alt="" style="width:100%;height:418px;padding-top:8px">
          </div>
          <div class="col-8" >
            <div class="row">
            <!-- @foreach($data2 as $value)
                <div id="cola" class="col-md-5 col-ms-3 col-12 mt-3">              
                   
                </div>
                <div id="colb" class="col-md-7 col-ms-3 col-12 mt-3">              
                    {{$value->Mota}}
                </div> 
              </div>                
              @endforeach  -->
              @foreach($data2 as $value)
              <div id="cola" class="col-md-5 mt-2">
              <a href=""><img src="{{$path}}{{$value->HinhAnh}}" width="100%" height="200px" alt="" class="img"></a>
              </div>
              <div id="colb" class="col-md-7 mt-2">
                  <div class="row">
                      <div class="col-md-12" style="height:60px;width:auto;padding-top:15px; padding-left:30px"> 
                         - Mô Tả : <span class="mota">{{$value->MoTa}}</span> 
                      </div><br>
                      <div class="col-md-12 " style="height:35px;width:100%;padding-top:10px; padding-left:30px"> 
                         - Sức Chứa : <span class="succhua">{{$value->SucChua}}</span>
                      </div>
                      <div class="col-md-12 " style="height:25px;width:100%;padding-top:0px; padding-left:30px;"> 
                    - Giá : <span class="gia">{{$value->Gia}} </span> VND/Ngày
                      </div>
                      <div class="col-md-12 " style="height:25px;width:100%;padding-top:0px; padding-left:30px;"> 
                    - Loại : <span class="loai">{{$value->TenLoai}}</span>
                      </div>
                      <div class="col-md-12 " style="height:50px;width:100%;padding-top:10px;"> 
                        <!-- <a href="{{route('phongdadat')}}">
                         <button  type="button" class="btn btn-primary datphong" data-toggle="button" aria-pressed="false" autocomplete="off" style="float:right;margin-left:10px">
                                Đặt Phòng
                          </button>
                          </a> -->
                          <form action="{{route('getid')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$value->MaLoai}}" name="id" >
                              <button type="submit" class="btn btn-primary datphong">Datphong</button>
                          </form>
                          <a href="" style="color:blue;font-weight: bolder;padding-left:25px;">Xem Chi Tiết</a>
                      </div>
                  </div>
              </div>
              @endforeach
            </div> 
          </div>        
            <div class="col-2 qc" style="padding-right:0px">
            <img src="img\km\165804643720.png" alt="" style="width:100%;height:418px;padding-top:8px">
              <img src="img\km\165804643720.png" alt="" style="width:100%;height:418px;padding-top:8px">
              <img src="img\km\165804643720.png" alt="" style="width:100%;height:418px;padding-top:8px">
            </div>
           
        </div>
    </div> 
  

   
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