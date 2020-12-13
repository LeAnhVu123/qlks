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
                        <td style="padding-top:10px;">Mã Loại</td>
                        <!-- <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="maloai"></td> -->
                        <td style="padding-left:50px;padding-top:10px;">
                                <select name="maloai" id="" >
                                <option value="{{$mp->maloai}}">{{$ml->tenloai}}</option>
                                @foreach($lp as $value)
                                    <option value="{{$value->maloai}}">{{$value->tenloai}}</option>
                                @endforeach    
                                </select>
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
