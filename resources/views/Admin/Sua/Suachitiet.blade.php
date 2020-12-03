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
                        <td style="padding-top:10px;">Mã chi tiết</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="mact" placeholder="{{$ct->mact}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã đơn</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="madon" value="{{$ct->madon}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">SLPhòng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="slphong" value="{{$ct->slphong}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Người lớn</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="nguoilon" value="{{$ct->nguoilon}}"></td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">Trẻ em</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="treem" value="{{$ct->treem}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Ngày đến</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="date" autocomplete="off" name="ngayden" value="{{$ct->ngayden}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Ngày đi</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="date" autocomplete="off" name="ngaydi" value="{{$ct->ngaydi}}"></td>
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
