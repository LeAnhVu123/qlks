@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
         <div>{{$error}}</div>
	@endforeach
</div>
@elseif(session('thanhcong'))
    <div class="alert alert-info">
        {{session('thanhcong')}}
    </div>
@endif