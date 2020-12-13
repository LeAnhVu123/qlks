@extends('Admin.QuanLy')
@section('content')  
<div class="col-10" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sua Tài Khoản NV</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="{{route('post-suatt',$tt->matt)}}" method="POST">
				@csrf
				<table>
					<tr>
						<td style="padding-top:10px;">Mã đơn</td>
						<td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="madon" value="{{$tt->madon}}" readonly></td>
					</tr>
					<tr>
						<td style="padding-top:10px;">ThanhToan</td>
						<td style="padding-left:50px;padding-top:10px;">
							<select name="tt" id="">				
								<option value="0" {{$tt->thanhtoan == 0 ? 'selected' : ''}}>Chưa thanh toán</option>
								<option value="1" {{$tt->thanhtoan == 1 ? 'selected' : ''}}>Đã thanh toán</option>
							</select>
						</td>
					</tr>
					<tr>
                        <td colspan="2" style="padding-left:175px;padding-top:10px;"><input type="submit" value="Thêm"></td>
                    </tr>
				</table>
			</form>
		@include('notice')
    </div>
</div>
@endsection
