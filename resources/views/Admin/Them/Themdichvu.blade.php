@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
@include('notice')
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Thêm Dịch vụ</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="{{route('postthemdv')}}" method="POST">
            @csrf
                <table>
                    <tr>
                        <td style="padding-top:10px;">Tên dịch vụ</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tendv"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Giá</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="number" autocomplete="off" name="gia"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:175px;padding-top:10px;"><input type="submit" value="Thêm"></td>
                    </tr>
                </table>
                </form>
            
              
            </div>
            
    </div>
</div>
 
@endsection