@extends('QuanLy')
@section('content')
<div class="col-9" style="height:550px;">
            <div class="row">
                <div class="col-12" style="padding-top:20px;padding-left:40px;"><span style="font-size: 20px;">Quản Lí Tài Khoản Khách Hàng</span></div>
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PassWord</th>
                            <th>Họ Tên</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($kh as $value)
                        <tr>
                            <td>{{$value->MaKh}}</td>
                            <td>{{$value->PassWord}}</td>
                            <td>{{$value->HoTen}}</td>
                            <td>{{$value->SDT}}</td>
                            <td>{{$value->Email}}</td>
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
