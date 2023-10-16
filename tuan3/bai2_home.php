<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name=$_POST["username"];
        $password=$_POST["password"];
        if($name=="admin"&&$password=="12345"){
            echo "Đăng nhập thành công. Xin chào $name";
        }else{
            echo "Tên tài khoản hoặc mật khẩu sai";
        }
        
    ?>
</body>
</html>