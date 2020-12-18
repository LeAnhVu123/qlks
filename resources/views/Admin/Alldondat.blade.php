@extends('Admin.QuanLy')
@section('content')
<style>
body{
    overflow-x: hidden;
}
</style>
<div class="col-10" style="height:550px;padding-right:0px;padding-left:0px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Đơn Đặt Phòng</span> </div>
                <div class="col-12" style="padding-left:40px;padding-top:5px;">
                    <form action="{{route('alldondat')}}" method="get">
                        <input type="text" name="ngay" id="" class="u" autocomplete="off" placeholder="Từ ngày đặt" readonly> 
                        <input type="text" name="toingay" id="" class="u" autocomplete="off" placeholder="Tới ngày đặt" readonly> 
                        <input type="submit" name="gui" class="zz" value="Xác Nhận">
                    </form>
                </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm Đơn đặt</span><a href="{{route('get-themdd')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
                <div class="col-12 mt-1">@if(session('thanhcong'))
                <div class="alert alert-info">
                    {{session('thanhcong')}}
                </div>
                @endif</div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mã Đơn</th>
                            <th>Mã KH</th>
                            <th>Mã NV</th>
                            <th>Mã Phong</th>
							<th>Mã KM</th>
							<th>Mã DV</th>
                            <th>Ngày Đặt</th>
                            <th>Tổng Tiền</th>
                            <th>Trạng Thái</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                   @foreach($dd as $value)
                        <tr>
                            <td>{{$value->madon}}</td>
                            <td>
                                <form action="{{route('qltk')}}" method="get">
                                @csrf
                                    <input type="hidden" value="{{$value->makh}}" name="tkkh">
                                        <div class="aa" style="cursor:pointer;">{{$value->makh}}</div>
                                    <input type="submit" name="abc" class="abc">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('nv')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="tknv" value="{{$value->manv}}">
                                        <div class="bb" style="cursor:pointer;">{{$value->manv}}</div>
                                    <input type="submit" name="nv" class="tknv">
                                </form>

                            </td>
                            <td>
                                <form action="{{route('phong')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="phong" value="{{$value->maphong}}">
                                        <div class="cc" style="cursor:pointer;">{{$value->maphong}}</div>
                                    <input type="submit" name="nv" class="phong">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('khuyenmai')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="km" value="{{$value->makm}}">
                                        <div class="dd" style="cursor:pointer;">{{$value->makm}}</div>
                                    <input type="submit" name="gui" class="phong">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('dichvu')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="dv" value="{{$value->madv}}">
                                        <div class="ee" style="cursor:pointer;">{{$value->madv}}</div>
                                    <input type="submit" name="gui" class="phong">
                                </form>
                            </td>
							<td>{{$value->ngaylap}}</td>
                            <td>{{$value->tongtien}}</td>                            
                            <td>{{$value->trangthai == 0 ? 'Chua' : 'Hoan thanh'}}</td>
                            <td><a href="Sua/Suadondat/{{$value->madon}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="XoaDonDat/{{$value->madon}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
<script>
$(document).ready(function(){
    $(".abc").hide();
    $('.aa').click(function(){
        $(this).next().click();
    })
    $(".tknv").hide();
    $('.bb').click(function(){
        $(this).next().click();
    })
    $(".phong").hide();
    $('.cc').click(function(){
        $(this).next().click();
    })
    $(".khuyenmai").hide();
    $('.dd').click(function(){
        $(this).next().click();
    })
    $(".dichvu").hide();
    $('.ee').click(function(){
        $(this).next().click();
    })
    $('.u').datepicker({
			dateFormat: "yy-mm-dd",
			numberOfMonths : 2,
		})
})
</script> 
@endsection
