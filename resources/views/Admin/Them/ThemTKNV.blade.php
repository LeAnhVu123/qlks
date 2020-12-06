@extends('Admin.QuanLy')
@section('content')  
<div class="col-10" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Thêm Tài Khoản NV</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST">
            @csrf
                <table>
                    <tr>
                        <td style="padding-top:10px;">tai khoan</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="taikhoan" ></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">role</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="role"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">matkhau</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="matkhau"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">cmnd</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="cmnd"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">hoten</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="hoten"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">sdt</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="email"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">email</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="sdt"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:175px;padding-top:10px;"> <a href=""> <input type="submit" value="Thêm"></a></td>
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
