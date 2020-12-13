@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Thêm Loại Phòng</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf
                <table>
                     <tr>
                        <td style="padding-top:10px;">Tên KM</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tenkm"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Giá giảm</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="giagiam"></td>
                    </tr>
                   
                    <tr>
                        <td style="padding-top:10px;">Ngày BD</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="ngaybd" class="ngaybd"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Ngày KT</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="ngaykt" class="ngaykt"></td>
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
	$(document).ready(function(){
		$('.ngaybd, .ngaykt').datepicker({
			dateFormat: "yy-mm-dd",
			numberOfMonths : 2,
		})
	})

</script>
@endsection
