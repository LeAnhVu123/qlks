<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Quan Ly</title>
</head>
<body>
{{session('thanhcong')}}
    <div class="container-fluid mt-1" style="text-align:center;">
        <div class="row">
            <div class="col-12" style="width:100%;height:50px;padding-top: 8px;">
                <span style=" font-weight: bolder; ">Quản Lý Khách Sạn</span>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-2" style="border: 1px solid;height:500px;">
                <div class="row">
                    <div class="col-12" style="font-weight: bolder;padding-left:70px;border-bottom: 0.5px solid; width: 100%;  background-color: cornflowerblue;">
                        <span>Menu</span>
                    </div>

                    <div class="col-12">
                        <span class="a">Quản Lý Đơn Đặt Phòng</span>
                    </div>

                    <div class="col-12">
                        <span class="b">Menu</span>
                    </div>

                    <div class="col-12">
                     <span >Menu</span>
                    </div>

                    <div class="col-12">
                        <span >Menu</span>
                    </div>
                </div>
               
                
            </div>
            <div class="col-10" style="border-right: 1px solid;border-top: 1px solid;border-bottom: 1px solid;height:500px;width:100%;">
                <div class="row xddp" style="display:none;">
                    <div class="col-12" >Xem đơn đặt phòng : 
                        <select name="" id="">
                            <option class="dtt" value="">Đã thanh toán</option>
                            <option class="ctt" value="">Chưa thanh toán</option>
                            <option class="nd" value="">Ngày Đặt</option>
                            <option class="tnn" value="">Từ Ngày -> Ngày</option>
                        </select>
                    </div> 
                </div>
                        <!--     -----------------------------      -->
                <div class="row noidung1" style="display:none;">
                    <div class="col-12" >Xem đơn đặt phòng : 
                        <select name="" id="">
                            <option class="dtt" value="">Đã thanh toán</option>
                            <option class="ctt" value="">Chưa thanh toán</option>
                            <option class="nd" value="">Ngày Đặt</option>
                            <option class="tnn" value="">Từ Ngày -> Ngày</option>
                        </select>
                    </div> 
                </div>
                         <!--     -----------------------------      -->
              <!-- <div class="noidung1" style="display:none;">Nội Dung1</div>  -->
            </div>
           
           
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('.a').each(function(){
            $(this).click(function(){
                $('.xddp').show();
            })
        })
        // $('.b').each(function(){
        //     $(this).click(function(){
        //         $('.noidung1').show();
        //         $('.noidung').hide();
        //     })
        // })
    })
    </script>
</body>
</html>