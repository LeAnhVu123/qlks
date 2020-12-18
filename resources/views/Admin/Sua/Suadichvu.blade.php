@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
    <div class="row">
            <div class="col-12" style="padding-left:180px;padding-top:20px;"> <span style="font-size:20px;font-weight: bolder;">Sửa Dịch vụ</span> </div>   
            <div class="col-12" style="padding-left:100px;font-size:15px;">
            <form action="{{route('post-suadv',$dv->madv)}}" method="POST">
			@csrf
			
                <table>
                    <tr>
                        <td style="padding-top:10px;">Tên dịch vụ</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="tendv" value="{{$dv->tendv}}"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">Giá</td>
                        <td style="padding-left:50px;padding-top:10px;"> <input type="text" autocomplete="off" name="gia" value="{{$dv->gia}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:175px;padding-top:10px;"><input type="submit" value="Sửa"></td>
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
 
@endsection
