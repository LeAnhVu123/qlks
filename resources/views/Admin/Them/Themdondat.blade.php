@extends('Admin.QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
	<div class="row">
		<div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Thêm Đơn Đặt</span> </div>
		<div class="col-12" style="padding-left:100px;font-size:15px;">
			<form action="" method="POST" enctype="multipart/form-data">
				@csrf
				<table>
					<tr>
						<td style="padding-top:10px;">Mã nhân viên</td>
						<td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="manv"></td>
					</tr>
					<tr>
						<td style="padding-top:10px;">Mã khách hàng</td>
						<td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="makh"></td>
					</tr>
					<tr>
						<td style="padding-top:10px;">Mã phòng</td>
						<td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="maphong"></td>
					</tr>

					<tr>
						<td style="padding-top:10px;">Mã khuyến mãi</td>						
						<td style="padding-left:50px;padding-top:10px;">
							<select name="makm" id="" style="width:150px;height:30px">
							<option name="makm"></option>
							@foreach($km as $value)
								<option name="makm" value="{{$value->makm}}">{{$value->tenkm}}</option>
							@endforeach
							</select>
						</td>
					</tr>
					
					<tr>
						<td style="padding-top:10px;">Ngày Đặt</td>
						<td style="padding-left:50px;padding-top:10px;"> <input class="abc" type="text" autocomplete="off" name="ngaylap"></td>
					</tr>
					<tr>
						<td style="padding-top:10px;">Tổng tiền</td>
						<td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tongtien"></td>
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
									<input type="checkbox" name="dv{{$value->madv}}"  value="{{$value->madv}}" class="mr-2">{{$value->tendv}}
								</div>
							@endforeach
							</div>
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
<script>
	$(document).ready(function() {
		$('.abc').datepicker({
			dateFormat: "yy-mm-dd",
			minDate: new Date(),
			numberOfMonths: 2,
			changeMonth: true,
			stepMonths: 0
		});
	})
</script>
@endsection