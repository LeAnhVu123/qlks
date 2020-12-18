@extends('Admin.QuanLy')
@section('content')  
<div class="col-10" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Tài Khoản NV</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST">
            @csrf
                <table>
                    <tr>
                        <td style="padding-top:10px;">tai khoan</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="taikhoan" value="{{$manv->taikhoan}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">role</td>
						<td style="padding-left:50px;padding-top:10px;">
							<select name="role" id="">
								@foreach($role as $value)
									<option value="{{$value->role_id}}" {{$manv->role == $value->role_id ? 'selected' : ''}}>{{$value->name_role}}</option>
								@endforeach
							</select>
						</td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">matkhau</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input class="pw" type="password" autocomplete="off" name="matkhau" value="{{$manv->matkhau}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">cmnd</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="cmnd" value="{{$manv->cmnd}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">hoten</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="hoten" value="{{$manv->hoten}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">sdt</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="sdt" value="{{$manv->sdt}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">email</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="email" autocomplete="off" name="email" value="{{$manv->email}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:112px;padding-top:10px;"> <a href=""> <input type="submit" value="Sửa"></a> <input class="rs" type="button" value="RSPW"></td>
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
<script>
$(document).ready(function(){
    $('.rs').each(function(){
        $(this).click(function(){
            var resetmk = 123;
            $('.pw').val(resetmk);
        });
    });
});
</script>
@endsection
