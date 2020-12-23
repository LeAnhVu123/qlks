@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px;padding:0px 0px 0px 0px;">
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
                            <th>SDT KH</th>
                            <th>Nội Dung</th>
                            <th>Trả Lời</th>
                            <th>Rep</th>
                            <th>Delete</th>
                            <th>Rep DT</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    @foreach($lh as $val)
                        <tr>
                            <td>{{$val->manv}}</td>
                            <td>{{$val->sdt}}</td>
                            <td>{{$val->noidung}}</td>
                            <td>{{$val->traloi}}</td>
                            <td><a href="Sua/Rep/{{$val->malh}}"><button class="btn btn-primary" style="width:70px;">Rep</button></a></td>
                            <td><a href="XoaRep/{{$val->malh}}"><button class="btn btn-danger" style="width:70px;">Xóa</button></a></td>
                            <td><a href="RepDT/{{$val->malh}}"><button class="btn btn-info" style="width:70px;">Gọi</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
		</div> 
  
@endsection
