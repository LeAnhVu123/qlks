@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;">
            <div class="row">
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Liên Hệ</span> </div>
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
                            <th>Mã NV</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Nội Dung</th>
                            <th>Trả Lời</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($lh as $val)
                        <tr>
                            <td>{{$val->manv}}</td>
                            <td>{{$val->hoten}}</td>
                            <td>{{$val->sdt}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->noidung}}</td>
                            <td><a href="Sua/Rep/{{$val->malh}}"><button class="btn btn-info ml-1" style="width:70px;">Rep</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
  
@endsection
