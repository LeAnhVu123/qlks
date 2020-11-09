@if(session('itemCart'))
@foreach(session('itemCart') as $value)
<div>{{$value['MoTa']}}</div><br>
@endforeach
@endif