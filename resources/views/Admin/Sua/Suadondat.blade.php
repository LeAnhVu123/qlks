@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Phòng</span></div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST" enctype="multipart/form-data">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
          
                <table>
                    <tr>
                        <td style="padding-top:10px;">Mã đơn</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="madon" placeholder="{{$dd->madon}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã nhân viên</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="manv" value="{{$dd->manv}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã khách hàng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="makh" value="{{$dd->makh}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã khuyến mãi</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="makm" value="{{$dd->makm}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã thanh toán</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="matt" value="{{$dd->matt}}"></td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">Ngày lập</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="date" autocomplete="off" name="ngaylap" value="{{$dd->ngaylap}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Tổng tiền</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tongtien" value="{{$dd->tongtien}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Trạng thái</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="trangthai" value="{{$dd->trangthai}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:175px;padding-top:10px;"> <a href=""> <input type="submit" value="Sửa"></a></td>
                    </tr> 
                </table>
                </form>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('thanhcong'))
                <div class="alert alert-info">
                    {{session('thanhcong')}}
                </div>
            @endif
            </div>
    </div>
</div>
@endsection
