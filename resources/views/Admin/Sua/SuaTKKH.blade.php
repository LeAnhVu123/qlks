@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Tài Khoản Khách Hàng</span></div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
          
                <table>
                    <tr>
                        <td style="padding-top:10px;">Tài Khoản</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="taikhoan" placeholder="{{$kh->taikhoan}}"readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mật Khẩu</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="matkhau" value="{{$kh->matkhau}}"></td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">CMND</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="makh" placeholder="{{$kh->makh}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Họ Tên</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="hoten" value="{{$kh->hoten}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Số Điện Thoại</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="sdt" value="{{$kh->sdt}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Email</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="Email" autocomplete="off" name="email" value="{{$kh->email}}"></td>
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
