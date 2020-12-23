@extends('Masterlayout')
<head><title>Phòng Đã Đặt</title></head>
@section('content')
@if(session('itemCart'))
@foreach($itemCart as $key=>$value)
<!-- <div class="col-12 mt-2" style="text-align:center;font-size:20px;padding: 0px 0px 0px 0px;">@include('notice')</div> -->
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
				<img src="{{$path}}\{{$value->hinhanh}}" alt="" class="img" style="height:200px;width:100%;">
				<p style="padding-top:5px;height:10px;white-space: nowrap">Loai Phong : <span class="loai text-capitalize" style="white-space: nowrap;">{{$value->tenloai}}</span></p>

				<p style="padding-top:5px;height:10px">Sức chứa : <span class="succhua">{{$value->succhua}}</span></p>
				<p style="padding-top:5px;height:10px">Giá : <span class="gia">{{$value->gia}}</span><span>.000 VND</span></p>

			</div>
			<div class="col-3">

				<table>
					<tr style="">
						<td>- Số phòng</td>
						<td style="padding-left:20px;"><input type="number" min="1" max="5" style="width:70px;" value="1" class="sophong" data-key="{{$key}}"></td>
					</tr>
					<tr>
						<td>- Mã phòng</td>						
						<td style="padding-left:20px;" class="aabb">						
							<select name="maphong" class="maphong">
								@foreach($value->lvap as $option)
								<option value="{{$option->maphong}}">{{$option->maphong}}</option>
								@endforeach
							</select>						
							<!-- <select name="maphong[]" class="maphong">
								@foreach($value->lvap as $option)
								<option value="{{$option->maphong}}">{{$option->maphong}}</option>
								@endforeach
							</select>						 -->
						</td>
					</tr>
					<tr>
						<td>- Số người</td>
						<td style="padding-left:20px;padding-top:5px;"><input type="number" min="1" max="5" style="width:70px;" class="songuoi" value="1"></td>
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
			<div class="col-2 dv" style="padding-left:40px;font-size:1.3rem;padding-right:0px;">
				<!-- <table style="width:100%;"><input type="checkbox" name="" id="" class="dv1" value='1'><span> Thuê xe </span></table>
				<table style="width:100%;"><input type="checkbox" name="" id="" class="dv2" value='2'><span> Đưa đón</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv3" value='3'><span> Nhà hàng</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv4" value='4'><span> Quầy bar</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv5" value='5'><span> Spa</span></table>
				<table style="width:100%"><input type="checkbox" name="" id="" class="dv6" value='6'><span> Giặt ủi</span></table> -->
				@foreach($dv as $itemdv)
				<table style="width:100%"><input type="checkbox" name="dichvu" id="" class="dv{{$itemdv->madv}}" itemdv='{{$itemdv->madv}}' value="{{$itemdv->madv}}"><span style="font-size:15px;"> {{$itemdv->tendv}}</span></table>
				@endforeach
				<hr>
				<table style="width:100%"><span style="font-size:17px;">Tổng : </span> <span class="total-priceservice" style="font-size:17px;"> 0</span><span style="font-size:17px;">.000 VND</span></table>

			</div>
			<div class="col-2" style="text-align:center;">

				<!-- <input style="padding-top:0px;width:100px" type="text" class="xuatgia" value="0" readonly="true" placeholder="....Gia..."><span>.000 VND</span> -->
				<span class="xuatgia" style="padding-top:0px;width:100px"></span><span>.000 VND</span>
			</div>
			<div class="col-2">
				<!-- <a href="{{route('ttoan')}}" style="padding-top:0px;padding-right:20px;float:right;">
					<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="width:110px;">
						Đặt Phòng
					</button>
				</a> -->
				<input type="hidden" value="{{$value->maloai}}" class="maloai">
					<button type="button" class="btn btn-primary datphong" data-toggle="button" aria-pressed="false" autocomplete="off" style="width:110px;" data-key="{{$key}}">
						Đặt Phòng
					</button>

				<button type="button" class="btn btn-primary xoass" style="width:110px;margin-top:20px;margin-left:52px;margin-top:30px;" value="{{$value['maloai']}}">
					Hủy Phòng
				</button>

				<a href="#" style="padding-top:50px;padding-right:20px;float:right;">
					Đặt phòng thêm

				</a>

			</div>
		</div>
	</form>
	</div>
</div>
@endforeach
@endif
<script>
	$(document).ready(function() {
		$('.datphong').click(function(){
			var key = $(this).attr('data-key');
			var maloai = $('.maloai').eq(key).val();			
			var aabb = $('.aabb').eq(key);
			var select = aabb.find('.maphong');
			var ngayden = $('.ngayden').eq(key).val();
			var ngaydi = $('.ngaydi').eq(key).val();
			var tongtien = $('.xuatgia').eq(key).text();
			var sophong = $('.sophong').eq(key).val();
			var songuoi = $('.songuoi').eq(key).val();
			var arr = [];
			var dv =[];
			var dichvu = $('.dv').eq(key).find('input:checkbox[name="dichvu"]:checked');
			dichvu.each( function () {
				dv.push($(this).val());
			});
			select.each(function(k,val){
				var bbaa = aabb.find('.maphong').eq(k).val();
				arr.push(bbaa);
			})
			var stringMP = JSON.stringify(arr);
			var stringDV = JSON.stringify(dv);
			$.ajax({
				type: "get",
				url: "{{route('showall')}}",
				data: {
					maphong : stringMP,
					madichvu : stringDV,
					ml : maloai,
					ngayden : ngayden,
					ngaydi :ngaydi,
					tongtien : tongtien,
					sophong : sophong,
					songuoi : songuoi,
					key : key,
				}, 
				success: function(result){
					window.location.href = "{{route('ttoan')}}"
				}
    });

		})
		var dv = @php echo json_encode($dv) @endphp;
		var d = new Date();
		var month = d.getMonth() + 1;
		var day = d.getDate();
		if (day.toString().length == 1) {
			day = '0' + day;
		}
		var year = d.getFullYear();
		var date = year + "-" + month + "-" + day;
		$('.ngayden').val(date);
		$('.ngaydi').val(date);
		$('.ngayden, .ngaydi').datepicker({
			dateFormat: 'yy-mm-dd',
			minDate: new Date(),
			numberOfMonths: 2,
		});


		$('.xoass').each(function(index, value) {
			var alltotal = 0;
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
							$('.xuatgia').each(function(key) {
								alltotal += parseInt($('.xuatgia').eq(key).text());
							})
							$('.total').val(alltotal + "000 VND");
						}
					},
				})
			})
		})

		// var dv = [100, 200, 300, 400, 500, 600];

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
			$('.xuatgia').each(function(index) {
				alltotal += parseInt($('.xuatgia').eq(index).text());
			})
			$('.total').val(alltotal + ".000 VND");
		}

		$('.abc').each(function(index, value) {
			var gia = $('.gia').eq(index).text();
			var xuatgia = gia;
			$('.xuatgia').eq(index).text(xuatgia);
			
			$('.ngaydi').change(function() {
				updatePrice(index);
			})
			//lấy dữ liệu dịch vụ
			for (let i = 0; i <= 6; i++) {
				var gia1 = 0;
				$('.dv' + i).eq(index).change(function() {
					if ($(this).is(':checked')) {
						gia1 += dv[i - 1].gia;
						$('.total-priceservice').eq(index).text(gia1);
						updatePrice(index);
					} else {
						gia1 = gia1 - dv[i - 1].gia;
						$('.total-priceservice').eq(index).text(gia1);
						updatePrice(index);
					}
				})
			}
		})

		$('.sophong').change(function() {
				var valSP = parseInt($(this).val());
				var key = parseInt($(this).attr('data-key'));
				var eParent = $('.aabb').eq(key);
				var fSelect = eParent.children().eq(0);
				if(eParent.children().length > 1){
					eParent.find('.auto').remove();
				}
				for(var i=1;i<valSP;i++){
					var sAuto = fSelect.clone(true).addClass('auto');					
					eParent.append(sAuto);
					updatePrice(key);
				}				
			})
	})


	var minDate = new Date();
	$('.ngayden').datepicker({
		showAmin: 'drop',
		numberOfmonth: 1,
		minDate: minDate,
		dateFormat: 'yy-mm-dd',
		onClose: function(selectedDate) {
			$('.ngaydi').datepicker("option", "minDate", selectedDate);
		}
	})
	$('.ngaydi').datepicker({
		showAmin: 'drop',
		numberOfmonth: 1,
		minDate: minDate,
		dateFormat: 'yy-mm-dd',
		onClose: function(selectedDate) {
			// $('.nut1').datepicker("option", "minDate",selectedDate);
		}
	})
</script>
@endsection