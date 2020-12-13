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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang Chủ</title>
   
</head>
<body>

<div class="container-fluid mt-1 search ">
    <div class="row">
      <div class="col-md-3 col-ms-6 col-12">
         <h3 class="ro"><a class="ry" href="TrangChu">ROYAL HOTEL</a></h3>
      </div> 
      <div class="col-md-6 col-ms-6 col-12 cot">
        <a href="{{route('gt')}}" class="gt">Giới Thiệu</a>
        <a href="DatPhong" class="gtd">Đặt Phòng Nhanh</a>
        <a href="PhongDaDat" class="gtd">Phòng Đã Đặt</a>
      </div>
      <div class="col-md-3 col-ms-6 col-12">
      <a href="{{route('dk')}}"><button class="btn btn-info tki">Đăng Ký</button></a>
      <a href="{{route('dn')}}"><button class="btn btn-info tki">Đăng Nhập</button></a>
      </div>
    </div>

  </div>



<div class="contaier-fluid mt-1 header" style="background-color:#000080;color:white;">
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
              <a class="DanhMuc" href="#">Liên Hệ</a>
            </div>

            <div class="col-md-2 col-sm-6 col-12 cl">
              <a class="DanhMuc" href="{{route('hd')}}">Hướng Dẫn</a>
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
                          <p class="card-text" style="text-align:center;padding-top:20px;font-weight: bolder;"><a href="" style="text-decoration: none;">{{$value->tenloai}}</a></p>
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
          @foreach($s as $k => $a)
            @if($k == 8)
              @break;            
            @endif
              <div class="col-md-3 col-sm-6 col-12" style="padding: 5px 5px 0 0">
                  <img src="img/thuvien/{{$a}}" height="200" width="300" alt="">
              </div> 
              
          @endforeach             
          </div>
    </div>
        
    <!-- End Phong Vip -->
   
    <!-- Dich Vu An Uong -->
    
   
    <div class="container-fluid mt-1 hinhanh">
    <h3 class="hinh" style="padding:50px 0 40px 0;">KHÁM PHÁ NINH THUẬN</h3>
        <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card mb-3">
                      <a href="{{route('qcNT')}}"><img src="img/thuvien/2.jpg"  class="card-img-top" alt=""></a>
                        <div class="card-body" style="padding-top:5px;">
                          <p class="card-text" style="text-align:center;padding-top:20px;font-size:17px;font-weight: bolder;"><a href="{{route('qcNT')}}" style="text-decoration: none;">Quan cảnh thành phố</a></p>
                        </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card mb-3">
                      <a href="{{route('dlNT')}}"><img src="img/thuvien/4.jpg"  class="card-img-top" alt=""></a>
                        <div class="card-body" style="padding-top:5px;">
                          <p class="card-text" style="text-align:center;padding-top:20px;font-size:17px;font-weight: bolder;"><a href="{{route('dlNT')}}" style="text-decoration: none;">Điểm du lịch nỗi tiếng</a></p>
                        </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card mb-3">
                      <a href="{{route('dbNT')}}"><img src="img/thuvien/3.jpg"  class="card-img-top" alt=""></a>
                        <div class="card-body" style="padding-top:5px;">
                          <p class="card-text" style="text-align:center;padding-top:20px;font-size:17px;font-weight: bolder;"><a href="{{route('dbNT')}}" style="text-decoration: none;">Phong cảnh đường biển</a></p>
                        </div>
                  </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
                  <div class="card mb-3">
                      <a href="{{route('dsNT')}}"><img src="img/thuvien/1.jpg"  class="card-img-top" alt=""></a>
                        <div class="card-body" style="padding-top:5px;">
                          <p class="card-text" style="text-align:center;padding-top:20px;font-size:17px;font-weight: bolder;"><a href="{{route('dsNT')}}" style="text-decoration: none;">Đặc sản Ninh Thuận</a></p>
                        </div>
                  </div>
        </div>
    </div>
</div>

<!-- Dia Chi Lien HE -->

<div class="container-fluid mt-2 diachilienhe" style="background-color:#000080;">
     <div class="row">
                        <div class="col-md-6 col-12 "  >
                                <div class="diachi" style="background-color:#000080;color:white;"><h2 class="dc">Địa Chỉ</h2>
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
            <div class="lienhe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15634.002630685518!2d109.02780480202358!3d11.587611047356917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170cf9758f74a37%3A0xbcc94f46b4909c03!2zQsOjaSBiaeG7g24gTmluaCBDaOG7rw!5e0!3m2!1svi!2s!4v1607318853415!5m2!1svi!2s" width="100%" height="250" frameborder="0" style="border:0;padding: 5px 0 0 5px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    </div>
 </div>

</body>
</html>