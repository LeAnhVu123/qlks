@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Thêm Loại Phòng</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf
                <table>
                    <tr>
                        <td style="padding-top:10px;">Tên Loại</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tenloai"></td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">Sức chứa</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="succhua"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mô Tả</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="mota"></td>
                    </tr>
                   
                    <tr>
                        <td style="padding-top:10px;">Giá</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="gia"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Hình ảnh</td>
                        <td style="padding-left:50px;padding-top:10px;">
                            <!-- <label for="files" id="label" style="border: 1px solid;width:175px;text-align:center;cursor:pointer;font-size: 15px;">Chọn hình ảnh</label> -->
                            <input id="files"  type="file" name="hinhanh">
                            <!-- style="visibility:hidden;" -->
                        </td>
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
