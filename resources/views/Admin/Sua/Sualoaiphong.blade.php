@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Phòng</span></div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST" enctype="multipart/form-data">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
            <input type="hidden" value="{{$lp->role}}">
                <table>
                <tr>
                        <td style="padding-top:10px;">Mã loại</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="maloai" value="{{$lp->maloai}}"readonly></td>
                    </tr>
                <tr>
                        <td style="padding-top:10px;">Tên loại</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tenloai" value="{{$lp->tenloai}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Sức chứa</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="succhua" value="{{$lp->succhua}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mô tả</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="mota" value="{{$lp->mota}}"></td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">Giá</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="gia" value="{{$lp->gia}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Hình ảnh</td>
                    
                        <td style="padding-left:50px;padding-top:10px;">{{$lp->hinhanh}} <input type="file" autocomplete="off" name="hinhanh" value="{{$lp->hinhanh}}" ></td>
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
