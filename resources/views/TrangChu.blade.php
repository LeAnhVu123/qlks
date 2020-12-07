<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/TrangChu.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <title>Trang Chu</title>
   
</head>
<body>

<div class="container-fluid mt-1 search ">
    <div class="row">
      <div class="col-md-3 col-ms-6 col-12">
         <h3 class="ro"><a class="ry" href="TrangChu">ROYAL HOTEL</a></h3>
      </div> 
      <div class="col-md-6 col-ms-6 col-12 cot">
        <a href="" class="gt">Giới Thiệu</a>
        <a href="DatPhong" class="gtd">Đặt Phòng Nhanh</a>
        <a href="PhongDaDat" class="gtd">Phòng Đã Đặt</a>
      </div>
      <div class="col-md-3 col-ms-6 col-12">
      <button class="btn btn-info tki">Đăng Ký</button>
      <button class="btn btn-info tki">Đăng Nhập</button> 
      </div>
    </div>

  </div>



<div class="contaier-fluid mt-1 header">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMucTC" href="TrangChu">Trang Chủ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMucTT" href="#">Tin Tức</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="#">Khuyến Mãi</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="#">Dịch Vụ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="#">Liên Hệ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="#">Hướng Dẫn</a>
            </div>
         
         
        </div>
           

    </div>
    <!-- End DieuKhien -->


    <!-- Hinh Nen Dong -->
   

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/KS-886.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/KS-329.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/KS-895.jpg" class="d-block w-100"  height="500px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



 <!--  -->
  </div>
    <!-- End Hinh Nen Dong -->


    <!-- KM -->
      <div class="container-fluid mt-1 sanpham">
        <div class="row1"><h3 class="hinhsp" style="padding:50px 0 20px 0;">LOẠI PHÒNG</h3></div>
      
        <div class="row">
        @foreach($lp as $value)
          <div class="col-md-3 col-sm-6 col-12">
            <div class="card mb-3">
              <a href=""><img src="img/{{$value->hinhanh}}"  class="card-img-top" alt=""></a>
            <div class="card-body" style="padding-top:5px;">
              <p class="card-text" style="text-align:center;padding-top:20px;"><a href="" style="text-decoration: none;">{{$value->tenloai}}</a></p>
            </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    <!-- End KM-->

    <!-- Phong Vip -->
    <div class="container-fluid mt-1 hinhanh" >
        <h3 class="hinh" style="padding:50px 0 40px 0;">THƯ VIỆN ẢNH</h3>
          <div class="row" style="padding-left:0px;">
            <div class="col-md-3 col-sm-6 col-12" style="padding: 5px 0 0 0">
                  <img src="img/KS-187.png" >
              </div>
              <div class="col-md-3 col-sm-6 col-12" style="padding: 5px 0 0 0">
                  <img src="img/KS-187.png" >
              </div>
              <div class="col-md-3 col-sm-6 col-12" style="padding: 5px 0 0 0">
                  <img src="img/KS-187.png" >
              </div>
              <div class="col-md-3 col-sm-6 col-12" style="padding: 5px 0 0 0">
                  <img src="img/KS-187.png" >
              </div>
          </div>
    </div>
        
    <!-- End Phong Vip -->
   
    <!-- Dich Vu An Uong -->
    
   
    <div class="container-fluid mt-1 hinhanh">
      <h2 class="hinh"><a class="p" href="#">DỊCH VỤ</a></h2>
        <div class="row">
         
    </div>
</div>

<!-- Dia Chi Lien HE -->

<div class="container-fluid mt-2 diachilienhe">
     <div class="row">
                        <div class="col-md-6 col-12">
                                <div class="diachi"><h2 class="dc">Địa Chỉ</h2>
                                            35 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, Thành Phố Hồ Chí Minh  <br>

                                            Gmail: royalhotel@gmail.com
                                            <br>
                                            Số điện thoại: (+84) 985220501
                                            <br>
                                            Fax: (+84) 985220501<br>
                                </div>
                        </div> 
      <div class="col-md-6 col-12">
            <div class="lienhe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1849.4572308026559!2d106.68569919660078!3d10.821758783916268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528e540c65eab%3A0x9906c7cb80ebdcd9!2zMzUgTmd1eeG7hW4gVsSDbiBC4bqjbywgUGjGsOG7nW5nIDQsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1601514304633!5m2!1svi!2s" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    </div>
 </div>
  <!-- End dia chi lien he -->
     <script src="js/trangchu.js"></script>
     <!-- <script>
$(document).ready(function(){
      $('.datphong').each(function(index,value){
          $(this).click(function(){
            var mota = $('.mota').eq(index).text();
            var gia = $('.gia').eq(index).text();
            var ghichu = $('.ghichu').eq(index).text();
            var img = $('.img').eq(index).attr('src');
            sessionStorage.setItem('mota', mota);
            sessionStorage.setItem('gia', gia);
            sessionStorage.setItem('ghichu',ghichu);
            sessionStorage.setItem('img',img);
          })
      })
  })
</script> -->
</body>
</html>