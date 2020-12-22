@extends('Admin.QuanLy')
@section('content')
<div class="col-10" style="height:550px; padding-left:0px;padding-right:0px;">
            <div class="row">
            <div class="col-12 mt-3" style="padding-left:40px;">
               <form action="" method="get">
               @csrf
                  <input type="text"  name="tungay" class="tungay" placeholder="Từ ngày" value="{{$tn}}" readonly>
                  <input type="text"  name="denngay" class="denngay" placeholder="Đến ngày" value="{{$dn}}" readonly>
                  <input type="submit" value="Xem" name="gui"><p>
               </form>
               </div>
               <div class="col-12" style="padding-left:40px;">Tổng tiền : {{$s}} VND <span style="padding-left:20px;">Đã thanh toán :</span>  {{$e}} VND <span style="padding-left:20px;">Chưa thanh toán :</span>  {{$f}} VND</div>
               <div class="col-12 mt-1">@if(session('thanhcong'))
                <div class="alert alert-info">
                    {{session('thanhcong')}}
                </div>
                @endif</div>

				<!-- <div class="col-12" style="padding-top:20px;padding-left:40px;display:float-left"><span style="font-size: 20px;">Quản Lí Tài Khoản Khách Hàng</span> </div>
				<div class="col-12" style="padding-top:20px;padding-left:40px;display:float-right;"><span style="font-size: 20px;">Thêm tài khoản</span><a href="{{route('get-themtk')}}"><button class="btn btn-primary ml-1" style="width:70px;">Thêm</button></a></div> -->
                
                <div class="col-12" style="padding-left:40px;"><hr></div>
                <div class="col-12" style="padding-left:40px;">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn</th>
                            <th>Mã thanh toán</th>
                            <th>Thanh toán</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                
                    <tbody>
              @foreach($dd as $val)
                        <tr>
                           <td>{{$i++}}</td>
                           <td>
                                <form action="{{route('alldondat')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="dua" id="" value="{{$val->madon}}">
                                    <div class="md" style="cursor:pointer;">{{$val->madon}}</div>
                                    <input type="submit" value="gui" class="hd">
                                </form>
                            </td>
                            <td>
                                <form action="{{route('thanhtoan')}}" method="get">
                                @csrf 
                                    <input type="hidden" name="day" id="" value="{{$val->ddvatt['matt']}}">
                                    <div class="tt" style="cursor:pointer;">{{$val->ddvatt['matt']}}</div>
                                    <input type="submit" value="gui" class="gui">
                                </form>
                            </td>
                            <td>{{$val->ddvatt['thanhtoan']}}</td>
                            <td>{{$val->tongtien}}</td>
                        </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            
		</div>
        <script>
$(document).ready(function(){
      var minDate = new Date();
      $('.tungay, .denngay').datepicker({
        showAmin: 'drop',
        numberOfmonth: 1,
        // minDate: minDate,
        dateFormat: 'yy-mm-dd',
        onClose: function(selectedDate){
          $('.denngay').datepicker("option", "minDate",selectedDate);
        }
      })
        $('.hd').hide();
        $('.gui').hide();
        $('.md').click(function(){
            $(this).next().click();
        });
        $('.tt').click(function(){
            $(this).next().click();
        });
  });
</script>
       
@endsection
