<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Đăng Nhập Admin</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                @csrf
                    <table>
                            <tr>
                                <td>ID</td>
                                <td><input type="text" name="id"></td>
                            </tr>
                            <tr>
                                <td>Pass</td>
                                <td><input type="password" name="pass"></td>
                            </tr>
                            <tr>
                                <td colspan="2" ><input class="sm" type="submit"  value="Đăng Nhập"></td>
                            </tr>
                    </table>
                </form>
                
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $('.sm').each(function(){
            $(this).click(function(){
                

       

            })
        })
    })
</script>
</body>
</html>