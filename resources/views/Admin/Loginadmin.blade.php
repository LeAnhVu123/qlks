<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('notice')
<form action="{{Route('xetdangnhap')}}" method="POST">
@csrf
    tai khoan <input type="text" name="ttk" id=""> </br>
    mat khau <input type="pass" name="matkhau">
    <button type="submit" class="btn btn-success">DangNhap</button>
</form>
</body>
</html>