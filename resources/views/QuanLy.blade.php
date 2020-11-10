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
<style>
.hover:hover{
    color:blue;
    cursor:pointer;
}
</style>
<body>
<!-- {{session('thanhcong')}} -->
    <div class="container-fluid mt-1" style="text-align:center;">
        <div class="row">
            <div class="col-12" style="width:100%;height:50px;padding-top: 8px;">
                <span style=" font-weight: bolder; ">Quản Lý Khách Sạn</span>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-1" style="background-color: lightskyblue;">
        <div class="row">
            <div class="col-3" style="border: 1px solid;height:500px;">
                <div class="row">
                    <div class="col-12" style="font-weight: bolder;border-bottom: 0.5px solid; width: 100%;text-align:center;  background-color: cornflowerblue;">
                        <span style="text-align:center;">Menu</span>
                    </div>

                    <div class="col-12 mt-2 hover">
                        <span class="b" style="padding-left:25px;">- Quản Lý Tài Khoản</span>
                    </div>
                    <div class="col-12 mt-2 hover">
                        <span class="c" style="padding-left:25px;">- Quản Lý Phòng</span>
                    </div>
                    <div class="col-12 mt-2 hover">
                        <span class="e" style="padding-left:25px;">- Quản Lý Loại Phòng</span>
                    </div>
                    <div class="col-12 mt-2 hover">
                        <span class="a" style="padding-left:25px;">- Quản Lý Đơn Đặt Phòng</span>
                    </div>
                    <div class="col-12 mt-2 hover">
                        <span class="d" style="padding-left:25px;">- Thống Kê Báo Cáo</span>
                    </div>
                    
                </div>
               
                
            </div>
            <div class="col-9" style="border-right: 1px solid;border-top: 1px solid;border-bottom: 1px solid;height:500px;width:100%;">
                          <!--     -----------------------------      -->
                    <div class="row qltk" style="display:none;">
                        <div class="col-2 mt-3" >
                            <div class="row">
                                <div class="col-12 mt-3 hover">
                                    <span class="themid">Thêm tài khoản : </span>
                                </div>
                                <div class="col-12 mt-3 hover">
                                    <span class="deleteid">Xóa tài khoản : </span>
                                </div>
                                <div class="col-12 mt-3 hover">
                                    <span class="updateid">Sửa tài khoản : </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mt-5 add" style="height:auto;width:100px;display:none;">
                        <form action="" method="post">
                        @csrf
                            <div class="col-12 mt-1">
                                <input type="text" name="id" placeholder="Nhập ID">
                            </div>
                            <div class="col-12 mt-1">
                                <input type="password" name="pw" placeholder="Nhập PW">
                            </div>
                            <div class="col-12 mt-1 smad" style="padding-left:132px;display:none;">
                                <input  type="submit" name="" value="Đăng Kí">
                            </div>
                            <div class="col-12 mt-1 smup" style="padding-left:135px;display:none;">
                            <input  type="submit" name="" value="Update">
                            </div>
                        </div>
                        </form>
                       
                        <div class="col-3 mt-5 del" style="height:auto;width:100px;display:none;">
                        <form action="" method="post">
                        @csrf
                            <div class="col-12 mt-1">
                                <input type="text" name="id" placeholder="Nhập ID">
                            </div>
                            <div class="col-12 mt-1 xoaid" style="padding-left:142px;">
                                <input  type="submit" name="" value="Delete">
                            </div>
                        </form>
                        </div>
                        
                </div>
                             <!-- -----------------------------      -->
                         <!--     -----------------------------      -->
                <div class="row mt-3 qllp" style="display:none;">
                        <div class="col-3 ">
                            <div class="row">
                                <div class="col-12 hover">
                                    <span class="addlp">Thêm Loại Phòng</span>
                                </div>
                                <div class="col-12 mt-3 hover">
                                    <span class="dellp">Xóa Loại Phòng</span>
                                </div>
                                <div class="col-12 mt-3 hover">
                                    <span class="updlp">Sửa Loại Phòng</span>
                                </div>
                            </div>
                        </div>
                    <div class="col-3 adup" style="display:none;">
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Mã Loại">
                           </div>
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Tên Loại">
                           </div>
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Sức Chứa">
                           </div>
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Giá">
                           </div>
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Hình Ảnh">
                           </div>
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Mô Tả">
                           </div>
                           <div class="col-12 mt-1 smadl" style="padding-left:148px;display:none;">
                               <input type="submit" value="Thêm">
                           </div> 
                           <div class="col-12 mt-1 smupl" style="padding-left:136px;display:none;">
                               <input type="submit" value="Update">
                           </div> 
                   </div>    


                   <div class="col-3 xoalp" style="display:none;">
                           <div class="col-12 mt-1">
                               <input type="text" placeholder="Mã Loại">
                           </div>
                           <div class="col-12 mt-1 " style="padding-left:136px;">
                               <input type="submit" value="Delete">
                           </div> 
                   </div> 
                   
                    
                </div>
                         <!--     -----------------------------      -->

                 <div class="row mt-4 qlp" style="display:none;">
                        <div class="col-3 ">
                            <div class="row">
                                <div class="col-12 hover">
                                    <span class="addp">Thêm Phòng</span>
                                </div>
                                <div class="col-12 mt-3 hover">
                                    <span class="delp">Xóa Phòng</span>
                                </div>
                                <div class="col-12 mt-3 hover">
                                    <span class="upp">Sửa Phòng</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 themp" style="display:none;">
                           
                                <div class="col-12 mt-1">
                                    <input type="text" placeholder="Mã Phòng">
                                </div>
                                <div class="col-12 mt-1">
                                    <input type="text" placeholder="Mã Loại">
                                </div>
                                <div class="col-12 mt-1">
                                    <input type="text" placeholder="Ghi Chú">
                                </div>
                                <div class="col-12 mt-1">
                                    <input type="text" placeholder="Trạng Thái">
                                </div>
                                <div class="col-12 mt-1">
                                    <input type="text" placeholder="Số Tầng">
                                </div>
                                <div class="col-12 mt-1 smadp" style="padding-left:148px;display:none;">
                                    <input type="submit" value="Thêm">
                                </div>
                                <div class="col-12 mt-1 smp" style="padding-left:136px;display:none;">
                                    <input type="submit" value="Update">
                                </div>
                                
                        </div>  
                        
                        <div class="col-3 xoap" style="display:none;">
                                <div class="col-12 mt-1">
                                    <input type="text" placeholder="Mã Phong">
                                </div>
                                <div class="col-12 mt-1 " style="padding-left:140px;">
                                    <input type="submit" value="Delete">
                                </div> 
                        </div>   
                          
                    </div>
                 
            
                         <!--     -----------------------------      -->
                <div class="row tkbc mt-3" style="display:none;">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12 hover">
                                <span>Theo Tuần</span>
                            </div>
                            <div class="col-12 mt-3 hover">
                                <span>Theo Tháng</span>
                            </div>
                            <div class="col-12 mt-3 hover">
                                <span>Theo Quý</span>
                            </div>
                            <div class="col-12 mt-3 hover">
                                <span>Theo Năm</span>
                            </div>
                        </div>
                    </div>                 
                </div>
                        <!--     -----------------------------      -->
                        <div class="row mt-3 xddp" style="display:none;">
                    <div class="col-3" >
                        <div class="row">
                            <div class="col-12 mt-3 hover">
                                <span>Đã Thanh Toán</span>
                            </div>
                            <div class="col-12 mt-3 hover">
                                <span>Chưa Thanh Toán</span>
                            </div>
                            <div class="col-12 mt-3 hover">
                                <span>Ngày Đặt</span>
                            </div>
                            <div class="col-12 mt-3 hover">
                                <span>Từ Ngày Đến Ngày</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 mt-3">
                       <span>..........................</span> 
                    </div> 
                </div>
                 <!--     -----------------------------      -->
            </div>
           
           
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('.a').each(function(){
            $(this).click(function(){
                $('.xddp').show();
                $('.qltk').hide();
                $('.qlp').hide();
                $('.tkbc').hide();
                $('.qllp').hide();
            })
        })

        $('.b').each(function(){
            $(this).click(function(){
                $('.qltk').show();
                $('.xddp').hide();
                $('.qlp').hide();
                $('.tkbc').hide();
                $('.qllp').hide();
            })
        })

        $('.c').each(function(){
            $(this).click(function(){
                $('.qlp').show();
                $('.qltk').hide();
                $('.xddp').hide();
                $('.tkbc').hide();
                $('.qllp').hide();
            })
        })

        $('.d').each(function(){
            $(this).click(function(){
                $('.tkbc').show();
                $('.qlp').hide();
                $('.qltk').hide();
                $('.xddp').hide();
                $('.qllp').hide();
            })
        })
        $('.e').each(function(){
            $(this).click(function(){
                $('.qllp').show();
                $('.xddp').hide();
                $('.qltk').hide();
                $('.qlp').hide();
                $('.tkbc').hide();
            })
        })
        $('.themid').each(function(){
            $(this).click(function(){
                $('.add').show();
                $('.smad').show();
                $('.del').hide();
                $('.smup').hide();
                
            })
        })
        $('.deleteid').each(function(){
            $(this).click(function(){
                $('.del').show();
                $('.add').hide(); 
            })
        })
        $('.updateid').each(function(){
            $(this).click(function(){
                $('.add').show();
                $('.smup').show();
                $('.smad').hide();
                $('.del').hide();
             
                
            })
        })
        $('.addlp').each(function(){
            $(this).click(function(){
                $('.adup').show();
                $('.smadl').show();
                $('.xoalp').hide();
                $('.smupl').hide();    
            })
        })       
        $('.updlp').each(function(){
            $(this).click(function(){
                $('.adup').show();
                $('.smupl').show();
                $('.smadl').hide();
                $('.xoalp').hide();     
            })
        })
        $('.dellp').each(function(){
            $(this).click(function(){
                $('.xoalp').show();
                $('.adup').hide();
            })
        })
        $('.addp').each(function(){
            $(this).click(function(){
                $('.themp').show();
                $('.smadp').show();
                $('.smp').hide();
                $('.xoap').hide();
            })
        })
        $('.upp').each(function(){
            $(this).click(function(){
                $('.themp').show();
                $('.smp').show();
                $('.smadp').hide();
                $('.xoap').hide();
               
            })
        })
        $('.delp').each(function(){
            $(this).click(function(){
                $('.xoap').show();
                $('.themp').hide();
               
            })
        })
      

    })
    </script>
</body>
</html>