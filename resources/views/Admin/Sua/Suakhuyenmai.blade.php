@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Khuyến mãi</span></div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf           
                <table>
					<tr>
							<td style="padding-top:10px;">Tên KM</td>
							<td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tenkm" value="{{$km->tenkm}}"></td>
						</tr>
					<tr>
                        <td style="padding-top:10px;">Giá Giảm</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="giagiam" value="{{$km->giagiam}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Ngày BD</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input class="ngaybd" type="text" autocomplete="off" name="ngaybd" value="{{$km->ngaybd}}" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Ngày KT</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input class="ngaykt" type="text" autocomplete="off" name="ngaykt" value="{{$km->ngaykt}}" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:175px;padding-top:10px;"> <a href=""> <input type="submit" value="Sửa"></a></td>
                    </tr> 
                </table>
                </form>
            @include('notice')
            </div>
    </div>
</div>
<script>
	var minDate = new Date();
      $('.ngaybd').datepicker({
        showAmin: 'drop',
        numberOfmonth: 1,
        minDate: minDate,
        dateFormat: 'yy/mm/dd',
        onClose: function(selectedDate){
          $('.ngaykt').datepicker("option", "minDate",selectedDate);
        }
      })
      $('.ngaykt').datepicker({
        showAmin: 'drop',
        numberOfmonth: 1,
        minDate: minDate,
        dateFormat: 'yy/mm/dd',
        onClose: function(selectedDate){
          // $('.nut1').datepicker("option", "minDate",selectedDate);
        }
      })

</script>
@endsection
