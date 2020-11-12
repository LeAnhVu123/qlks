@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
            <div class="row">
                <div class="col-12" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Phòng</span></div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mã Phòng</th>
                            <th>Mã Loại</th>
                            <th>Ghi Chú</th>
                            <th>Trạng Thái</th>
                            <th>Mã Tầng</th>
                            <th>Delete</th>
                            <th>Update</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ph as $value)
                        <tr>
                            <td>{{$value->MaPhong}}</td>
                            <td>{{$value->MaLoai}}</td>
                            <td>{{$value->GhiChu}}</td>
                            <td>{{$value->TrangThai}}</td>
                            <td>{{$value->MaTang}}</td>
                            <td>del</td>
                            <td>upd</td>
                        </tr>
                    @endforeach
                         </tbody>
                
                </table>
   
                </div>
            </div>
        </div>
@endsection
