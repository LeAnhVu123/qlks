@extends('MasterTimkiem')
@section('abc')
<head><title>Tin Tức</title></head>
<div class="col-9 mt-3" style="padding-left:70px;">
    <div class="row">
        <div class="col-4 mt-2"><img src="img/hinhnen/nt1.jpg" style="width:250px;height:170px;" alt=""></div>
                <div class="col-8" style="height:170px;">
                    <div class="row">
                        <div class="col-12" style="height:133px;">
                        <span style="font-weight:bolder; font-size:17px;color:blue;">Biển đẹp Ninh Thuận</span><p>
                        Bãi biển dài phẳng lặng, nắng ấm quanh năm cùng lượng gió mạnh là điều kiện thuận lợi để Ninh Thuận phát triển các loại hình du lịch thể thao biển. Từ tháng 11 đến tháng 3 hàng năm, những cuộc thi lướt ván diều quốc tế diễn ra sôi nổi tại vùng biển Mỹ Hòa hay Ninh Chữ.
                        </div>
                        <div class="col-12" style="height:37px;"><a href="{{route('dlNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                    </div>
                </div>
        <div class="col-12 mt-2"><hr></div>
      
        <div class="col-4 mt-2"><img src="img/thuvien/4.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">
                    <span style="font-weight:bolder; font-size:17px;color:blue;">Khu du lịch Vĩnh Hy</span><p>
                        Đến với Vĩnh Hy, ngoài việc đi thuyền đáy kính khám phá san hô, du khách có thể tung tăng, đắm mình trên bãi tắm Bà Điên, lặn biển, thưởng thức hải sản tươi ngon tại các nhà bè hoặc trải nghiệm các môn thể thao mạo hiểm như lướt sóng.
                    </div>
                    <div class="col-12" style="height:37px;"><a href="{{route('dlNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12 mt-2"><hr></div>
      
        <div class="col-4 mt-2"><img src="img/thuvien/3.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">
                    <span style="font-weight:bolder; font-size:17px;color:blue;">Đường biển Ninh Thuận</span><p>
                            <span>Từ thành phố Hồ Chí Minh, du khách có thể chọn cung đường ven biển từ Cà Ná - Ninh Chữ để khám phá ngọn Hải đăng trăm tuổi, cồn cát hoang sơ ở Mũi Dinh, trải nghiệm đầy thú vị trên các dòng xe địa hình chinh phục những đồi cát bạt ngàn, đẹp hút hồn với cánh đồng rong biển Từ Thiện, cối xay gió khổng lồ.</span> 
                    </div>
                    <div class="col-12" style="height:37px;"><a href="{{route('dbNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12 mt-2"><hr></div>
      
        <div class="col-4 mt-2"><img src="img/thuvien/1.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;">
                    <span style="font-weight:bolder; font-size:17px;color:blue;">Đặc sản Ninh Thuận</span><p>
                    Đến với Ninh Thuận các bạn sẽ được thưởng thức những món ngon mang đậm chất vùng biễn, Ninh Thuận luôn để lại ấn tướng sâu sắc với khách du lịch đã từng đặt chân tới nới đây.
                    </div>
                    <div class="col-12" style="height:37px;"><a href="{{route('dsNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12 mt-2"><hr></div>

        <div class="col-4 mt-2"><img src="img/thuvien/2.jpg" style="width:250px;height:170px;" alt=""></div>
            <div class="col-8" style="height:170px;">
                <div class="row">
                    <div class="col-12" style="height:133px;"><span style="font-weight:bolder; font-size:17px;color:blue;">Khung cảnh thành phố Ninh Thuận</span><p>
                    Đứng trên tượng đài kháng chiến, bạn có thể nhìn toàn cảnh khu vực quảng trường, công viên 16/4 hòa trong ánh đèn sắc màu pha chiếu huyền ảo dưới lòng hồ. Thi thoảng bạn còn nhận ra một làn gió mang hương vị mặn nồng của biển cả bỗng tạt qua khiến bản thân như chìm vào cảm giác thư thái, miên man.
                    </div>
                    <div class="col-12" style="height:37px;"><a href="{{route('qcNT')}}"><button class="btn btn-primary">Xem Thêm</button></a></div>
                </div>
            </div>
        <div class="col-12 mt-2"><hr></div>
      
        
    </div>
          
</div> 

@endsection