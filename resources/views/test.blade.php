<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="" enctype='multipart/form-data' method="post">
            @csrf
            <input type="file" name="hinhanh">
            <button type="submit">Click</button>
        </form>
        <script>
  var d = new Date();
  a=d.getDate();
  b=d.getMonth()+1;
  c=d.getFullYear();
  e=a+"/"+b+"/"+c;
  console.log(e);
  </script>
</body>
</html>