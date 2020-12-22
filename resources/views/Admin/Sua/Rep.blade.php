@extends('Admin.QuanLy')
@section('content')  
<div class="col-9" style="height:550px;">
<form action="" method="post">
        @csrf
    <div class="row">
        <div class="col-12">Hỗ trợ khách hàng</div>
            <div class="col-3 mt-2"><span style="padding-left:150px">Họ tên </span></div>
            <div class="col-9 mt-2"><input type="text" style="width:385px;" name="hoten" value="{{$a->hoten}}" readonly></div>
            <div class="col-3 mt-2"><span style="padding-left:150px">SDT </span></div>
            <div class="col-9 mt-2"><input type="text" style="width:385px;" value="{{$a->sdt}}" readonly></div>
            <div class="col-3 mt-2"><span style="padding-left:150px">Email </span></div>
            <div class="col-9 mt-2"><input type="text" style="width:385px;" name="email" value="{{$a->email}}" readonly></div>
            <div class="col-3 mt-2"></div style="padding-left:150px">
            <div class="col-9 mt-2"><textarea style="width:385px;" id="w3review" name="w3review" rows="4" cols="50" required autocomplete="off" readonly>{{$a->noidung}}</textarea></div>
            <div class="col-3 mt-2"></div style="padding-left:150px">
            <div class="col-9 mt-2"><textarea style="width:385px;" id="w3review" name="traloi" rows="4" cols="50" required autocomplete="off" placeholder="Nội dung trả lời"></textarea></div>
            <div class="col-3 mt-2"></div style="padding-left:150px">
            <div class="col-9 mt-2"><input type="submit" value="Trả Lời"></div>
        
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
    </form>
</div>
@endsection