@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;">
@include('notice')
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Thanh Toán</span> </div>
				<div class="col-12">
                    <form action="" method="get">
                    @csrf
                        <input type="radio" name="" id="" class="b"><input type="submit" name="gui" class="a" value="1"><span> Đơn đã thanh toán </span> 
                        <input type="radio" name="" id="" class="b"><input type="submit" name="gui" class="a" value="2"><span> Đơn chưa thanh toán </span> 
                    </form>    
                </div>
                <div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm Thanh Toán</span><a href="{{route('get-themtt')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mã Đơn</th>                            
							<th>Thanh toán</th>    
							<th>Ngày TT</th>                      
							<th>Ngày sửa</th>                      
                            <th>Update</th>                          
                            <th>Delete</th>                          
                        </tr>
                    </thead>
                
                    <tbody>
                   @foreach($tt as $value)
                        <tr>
                            <td>
                                <form action="{{route('alldondat')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="dua" id="" value="{{$value->madon}}">
                                    <div class="md" style="cursor:pointer;">{{$value->madon}}</div>
                                    <input type="submit" value="gui" class="hd">
                                </form>
                            </td>                            
                            <td>{{$value->thanhtoan}}</td>
							<td>{{$value->created_at}}</td>
							<td>{{$value->updated_at}}</td>
                            <td><a href="{{route('get-suatt',$value->matt)}}"><button class="btn btn-info ml-1" style="width:70px;">Sửa</button></a></td>
                            <td><a href="{{route('get-xoatt',$value->matt)}}"><button class="btn btn-danger ml-1" style="width:70px;">Xóa</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
<script>
    $(document).ready(function(){
        $('.a').hide();
        $('.hd').hide();
        $('.b').click(function(){
            $(this).next().click();
        });
        $('.md').click(function(){
            $(this).next().click();
        });
    })
</script>     
@endsection