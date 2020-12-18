@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Đơn Đặt</span></div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST" enctype="multipart/form-data">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
          
                <table>
                    <tr>
                        <td style="padding-top:10px;">Mã đơn</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="madon" value="{{$dd->madon}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã nhân viên</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="manv" value="{{$dd->manv}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã khách hàng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="makh" value="{{$dd->makh}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã phòng</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="maphong" value="{{$dd->maphong}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Mã khuyến mãi</td>
						<td style="padding-left:50px;padding-top:10px;">
							<select name="km" id="" style="width:150px;height:30px">
                            <option name="km" value="{{$z->makm}}">{{$z->tenkm}}</option>
							@foreach($km as $value)
								<option name="km" value="{{$value->makm}}">{{$value->tenkm}}</option>
							@endforeach
							</select>
						</td>
                    </tr>
                     <tr>
                        <td style="padding-top:10px;">Ngày lập</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" class="nut" name="ngaylap" value="{{$dd->ngaylap}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Tổng tiền</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tongtien" value="{{$dd->tongtien}}"></td>
                    </tr>
                    <tr>
						<td style="padding-top:10px;">Trạng thái</td>
						<td style="padding-left:50px;padding-top:10px;">
							<select name="trangthai" id="">
								<option value="0">Chưa</option>
								<option value="1">Hoàn Thành </option>
							</select>
                        </td>
					</tr>
					<tr>
						<td style="padding-top:10px;">Dịch vụ</td>						
						<td>
						<div class="row ml-5">
							@foreach($dv as $value)							
								<div class="col-6 p-0 m-0 my-2" style="font-size:20px">
								
									<input type="checkbox" name="dv{{$value->madv}}" madv="" value="{{$value->madv}}" class="mr-2" @foreach($explode as $madv)  {{$value->madv == $madv ? 'checked' : ''}} @endforeach >{{$value->tendv}}
									
								</div>								
							@endforeach
							</div>
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
<script>
$(document).ready(function(){
	$('.nut').datepicker({
			dateFormat: "yy-mm-dd",
			minDate: new Date(),
			numberOfMonths: 2,
			changeMonth: true,
			stepMonths: 0
		});
})
	
</script>
@endsection
