@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Phòng</span> 
                <div class="col-12" style="padding-top:20px;padding-left:40px;">
                    <form action="{{route('phong')}}" method="get">
                    @csrf
                        <input class="xx" type="radio" name="xem" id="" ><input type="submit" name="gui" value="1" class="zz"><span>Phòng đã được đặt</span>
                        <input type="submit" name="gui" value="2" class="zz">
                        <input class="yy" type="radio" name="xem" id=""> <span>Phòng còn trống</span>
                    </form>
                </div>    
                </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm Phòng</span><a href="{{route('get-themp')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
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
                            <th>Số Phòng </th>
                            <th>Mã Loại</th>
                            <th>Số Tầng</th>
                            <th>Ghi Chú</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($p as $value)
                        <tr>
                            <td>{{$value->maphong}}</td>
                            
                                <td>
                                    <form action="{{route('lphong')}}" method="get">
                                    @csrf
                                        <input type="hidden" value="{{$value->maloai}}" name="maloai">
                                        <div class="aa" style="cursor:pointer;">{{$value->maloai}}</div>
                                        <input type="submit" name="abc" id="abc" class="abc">
                                    </form>
                                </td>
                            
                            <td>{{$value->sotang}}</td>
                            <td>{{$value->ghichu}}</td>
                            <td><a href="Sua/Suaphong/{{$value->maphong}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="XoaPhong/{{$value->maphong}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
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
        $('.zz').hide();
        $('.aa').click(function(){
            $(this).next().click();
        })
        $('.xx').click(function(){
            $(this).next().click()
        })
        $('.yy').click(function(){
            $(this).prev().click()
        })
})
    </script>
    
@endsection
