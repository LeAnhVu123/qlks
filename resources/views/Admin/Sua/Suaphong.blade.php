@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Phòng</span></div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
          
                <table>
                    <tr>
                        <td style="padding-top:10px;">Mã Phòng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="maphong" value="{{$mp->maphong}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Số Tầng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="sotang" value="{{$mp->sotang}}" readonly></td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">Ghi Chú</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="ghichu" value="{{$mp->ghichu}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Trạng Thái</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="trangthai" value="{{$mp->trangthai}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Loại phòng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="maloai" value="{{$mp->maloai}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã đơn</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="madon" value="{{$mp->madon}}"></td>
                    </tr>
                    <!-- <tr>
                        <td style="padding-top:10px;">Chọn Loại Phòng</td>
                        <td colspan="2" style="padding-left:50px;padding-top:10px;">
                            <select name="maloai" id="">
                            <option value="{{$mp->maloai}}">Loại {{$mp->maloai}}</option>
                            @foreach($lp as $value)
                                <option name="maloai" value="{{$value->maloai}}">Loại {{$value->maloai}}</option>
                                @endforeach
                            </select>
                        </td> -->
                        <!-- <td colspan="2" style="padding-left:50px;padding-top:10px;"><input type="radio" name="maloai" value="1"> Vip
                        <input type="radio" name="maloai" value="2"> Thường
                        <input type="radio" name="maloai" value="3"> Trung -->

                        </td>
                        
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
