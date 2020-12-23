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
	<!-- <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"> -->
	<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <title>ROYAL HOTEL</title> -->
</head>

<body>
<style>
.ii .gtd {
  text-decoration: none;
  font-weight: bolder;
  color: royalblue;
}
.ii .gtd:hover{
  color: blue;
}
</style>
<div class="container-fluid mt-1 search ">
    <div class="row">
      <div class="col-md-3 col-ms-6 col-12">
         <h3 class="ro"><a class="ry" href="TrangChu">ROYAL HOTEL</a></h3>
      </div> 
      <div class="col-md-6 col-ms-6 col-12 cot">
        <a href="{{route('gt')}}" class="gt">Giới Thiệu</a>
        <a href="DatPhong" class="gtd">Đặt Phòng Nhanh</a>
        <a href="PhongDaDat" class="gtd">Đặt Phòng</a>
      </div>
      @if(!$o)
      <div class="col-md-3 col-ms-6 col-12">
          <a href="{{route('dk')}}"><button class="btn btn-info tki">Đăng Ký</button></a>
          <a href="{{route('dn')}}"><button class="btn btn-info tki">Đăng Nhập</button></a>
      </div>
      @endif
      @if($o) 
      <div class="col-md-3 col-ms-6 col-12 mt-2 ii">
        <a href="{{route('xemdon')}}" class="gtd">Xem Đơn</a>
        <a href="{{route('dx')}}"><button class="btn btn-info tki" style="margin-top:0px;">Đăng Xuất</button></a>
      </div>
      @endif
    </div>
    
  </div>
<div class="contaier-fluid mt-1 header" style="background-color:#000080;">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMucTC" href="TrangChu">Trang Chủ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMucTT" href="{{route('tint')}}">Tin Tức</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="{{route('km')}}">Khuyến Mãi</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="{{route('dv')}}">Dịch Vụ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="{{route('lienhe')}}">Liên Hệ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="{{route('hd')}}">Hướng Dẫn</a>
            </div>
         
         
        </div>
           

    </div>
    <!-- Hinh Nen Dong -->
  <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/KS-230.jpg" class="d-block w-100" height="420px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/KS-419.jpg" class="d-block w-100" height="420px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/KS-833.jpg" class="d-block w-100"  height="420px" alt="...">
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
</div> -->

    <!-- End Hinh Nen Dong -->

    @yield('content') 
            <div class="contaier mt-5 diachilienhe" style="background-color:#000080;padding-bottom:0px;">
                <div class="row" style="background-color:#000080;padding-bottom:0px;">
                        <div class="col-md-6 col-12" style="background-color:#000080;">
                                <div class="diachi"><h2 class="dc">Địa Chỉ</h2>
                                35 Nguyễn Văn Bảo, Phường 4, Phước Mỹ, TP.Phan Rang - Tháp Chàm  <br>

                                            Gmail: royalhotel@gmail.com
                                            <br>
                                            Số điện thoại: (+84) 985220501
                                            <br>
                                            Fax: (+84) 985220501<br>
                                </div>
                                <div class="" style="padding: 10px 10px 0 70px;">
                                      <a href="https://www.facebook.com/vu.leanh.144/" style="color:white;"><i class="fa fa-facebook"></i></a>
                                      <a href="https://twitter.com/SalaDanangBeach" style="color:white;padding-left:20px;"><i class="fa fa-twitter"></i></a>
                                      <a href="https://www.youtube.com/" style="color:white;padding-left:20px;"><i class="fa fa-youtube"></i></a>
                                      <a href="https://business.instagram.com/getting-started?locale=vi_VN" style="color:white;padding-left:20px;"><i class="fa fa-instagram"></i></a>
                                      <a href="https://www.tripadvisor.com.vn/" style="color:white;padding-left:20px;"><i class="fa fa-tripadvisor"></i></a>
                                </div>
                        </div> 
                <div class="col-md-6 col-12">
        <div class="lienhe" style="padding: 5px 0 5px 0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15634.002630685518!2d109.02780480202358!3d11.587611047356917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170cf9758f74a37%3A0xbcc94f46b4909c03!2zQsOjaSBiaeG7g24gTmluaCBDaOG7rw!5e0!3m2!1svi!2s!4v1607318853415!5m2!1svi!2s" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
 </div>
  </div>
 
   
</div> 
<script src="js/trangchu.js"></script>

</body>
</html>