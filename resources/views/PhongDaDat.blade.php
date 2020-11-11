@extends('Masterlayout')
@section('content')
@if(session('itemCart'))
@foreach(session('itemCart') as $value)

<div class="abc">
	<div class="container-fluid mt-2" style="text-align:center;height:50px;width:100%;background-color: lightskyblue;padding-right:0px; border: 0.2px solid;">
		<div class="row">
			<div class="col-3" style="padding-top:7px;">
				Loại phòng
			</div>
			<div class="col-3" style="padding-top:7px;">
				Thông tin đặt phòng
			</div>
			<div class="col-2" style="padding-top:7px;">
				Dịch vụ
			</div>
			<div class="col-2" style="padding-top:7px;">
				Giá
			</div>
			<div class="col-2" style="padding-top:7px;">

			</div>
		</div>
	</div>
	<div class="container-fluid" style="height:300px;width:100%;padding-right:0px;padding-top:10px;border-left:0.2px solid;border-bottom:0.2px solid;border-right:0.2px solid;">
		<div class="row">
			<div class="col-3">
				<img src="img\km\{{$value->HinhAnh}}" alt="" class="img" style="height:200px;width:100%;">
				<p style="padding-top:5px;height:10px">Loai Phong :<span class="loai">{{$value->TenLoai}}</span></p>

				<!-- <div>{{$value->MoTa}}</div>  -->

				<p style="padding-top:5px;height:10px">SucChua:<span class="succhua">{{$value->SucChua}}</span></p>
				<p style="padding-top:5px;height:10px">Gia:<span class="gia">{{$value->Gia}}</span></p>

			</div>
			<div class="col-3">

				<table>
					<tr style="">
						<td style="">- Số phòng</td>
						<td style="padding-left:20px;"><input type="number" min="1" max="10" style="width:70px;" value="1" class="sophong"></td>
					</tr>
					<tr>
						<td>- Người lớn</td>
						<td style="padding-left:20px;padding-top:5px;"><input type="number" min="1" max="10" style="width:70px;"></td>
					</tr>
					<tr>
						<td>- Trẻ em</td>
						<td style="padding-left:20px;padding-top:5px;"><input type="number" min="1" max="10" style="width:70px;"></td>
					</tr>
					<tr>
						<td>- Ngày đến</td>
						<td style="padding-left:20px;padding-top:5px;"><input type="text" min="1" max="10" style="width:150px;" class="ngayden"></td>
					</tr>
					<tr>
						<td>- Ngày đi</td>
						<td style="padding-left:20px;padding-top:5px;"><input type="text" min="1" max="10" style="width:150px;" class="ngaydi"></td>
					</tr>
				</table>
				<!-- - Số lượng phòng <input type="number" min="1" max="10" style="width:70px;"><p>
            - Người lớn <input type="number" min="1" max="10" style="width:70px;">
            - Trẻ em <input type="number">
            - Ngày đến <input type="date">
            - Ngày đi <input type="date"> -->
			</div>
			<div class="col-2 dv" style="padding-left:40px;">
				<table style="width:100%;"><input type="checkbox" name="" id="" class="dv1" value='1'><span> Thuê xe </span></table>
				<table style="width:100%;"><input type="checkbox" name="" id="" class="dv2" value='2'><span> Đưa đón</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv3" value='3'><span> Nhà hàng</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv4" value='4'><span> Quầy bar</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv5" value='5'><span> Spa</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv6" value='6'><span> Giặt ủi</span></table>
				<table style="width:100%">Tong<span class="total-priceservice">0</span></table>

			</div>
			<div class="col-2" style="text-align:center;">

				<!-- <input style="padding-top:0px;width:100px" type="text" class="xuatgia" value="0" readonly="true" placeholder="....Gia..."><span>.000 VND</span> -->
				<span class="xuatgia" style="padding-top:0px;width:100px"></span><span>.000 VND</span>
			</div>
			<div class="col-2">
				<a href="" style="padding-top:0px;padding-right:20px;float:right;">
					<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="width:110px;">
						Đặt Phòng
					</button>
				</a>

				<button type="button" class="btn btn-primary xoass" style="width:110px;padding-top:20px;padding-right:20px;float:right;" value="{{$value['MaLoai']}}">
					Hủy Phòng
				</button>

				<a href="DatPhong" style="padding-top:50px;padding-right:20px;float:right;">

					Đặt phòng thêm

				</a>

			</div>
		</div>
	</div>
</div>
@endforeach
@endif
<div class="container-fluid">
	<div class="row">
		<div class="offset-2"></div>
		<div class="col-6" style="padding-top:10px;font-weight: bolder;">
			<p style=""> Tổng Tiền : <input type="text" readonly="False" class="total"><input type="submit" value="Thanh Toán" style="margin-left:10px;"></p>
		</div>
		<div class="offset-4"></div>
	</div>
</div>
<div>
</div>
<script>
	$(document).ready(function() {
		var d = new Date();
		var month = d.getMonth() + 1;
		var day = d.getDate();
		if (day.toString().length == 1) {
			day = '0' + day;
		}
		var year = d.getFullYear();
		var date = month + "/" + day + "/" + year;
		$('.ngayden').val(date);
		$('.ngaydi').val(date);
		$('.ngayden').datepicker();
		$('.ngaydi').datepicker();


		$('.xoass').each(function(index, value) {
			$(this).click(function() {
				var val = $('.xoass').eq(index).val();
				$.ajax({
					url: "{{route('getval')}}",
					method: "POST",
					data: {
						"_token": "{{ csrf_token() }}",
						'val': val
					},
					success: function(result) {
						if (confirm('Ban co muon xoa khong?')) {
							$('.abc').eq(index).remove();
						}
					},
				})
			})
		})

		var dv = [100, 200, 300, 400, 500, 600];

		function updatePrice(index) {
			var total = 0;
			let alltotal = 0;
			let totalPriceService = parseInt($('.total-priceservice').eq(index).text());
			let gia = $('.gia').eq(index).text();
			let sophong = $('.sophong').eq(index).val();
			let ngayden = $('.ngayden').eq(index).val();
			let ngaydi = $('.ngaydi').eq(index).val();
			let aa = new Date(ngayden);
			let bb = new Date(ngaydi);
			let diffTime = Math.abs(bb - aa);
			let ngayo = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
			let xuatgia = $('.xuatgia').eq(index).text();
			let pp = 0;
			if (ngayo == 0) {
				ngayo = 1;
			}
			total = gia * sophong * ngayo + totalPriceService;
			$('.xuatgia').eq(index).text(total);
			$('.xuatgia').each(function(key) {
				alltotal += parseInt($('.xuatgia').eq(key).text());
			})
			$('.total').val(alltotal);
		}

		$('.abc').each(function(index, value) {
			var gia = $('.gia').eq(index).text();
			var xuatgia = gia;
			$('.xuatgia').eq(index).text(xuatgia);
			$('.sophong').change(function() {
				updatePrice(index);
			})
			$('.ngaydi').change(function() {
				updatePrice(index);
			})
			//lấy dữ liệu dịch vụ
			for (let i = 0; i <= 6; i++) {
				var gia1 = 0;
				$('.dv' + i).eq(index).change(function() {
					if ($(this).is(':checked')) {
						gia1 += dv[i - 1];
						$('.total-priceservice').eq(index).text(gia1);
						updatePrice(index);
					} else {
						gia1 = gia1 - dv[i - 1];
						$('.total-priceservice').eq(index).text(gia1);
						updatePrice(index);
					}
				})
			}
		})
	})
</script>
@endsection