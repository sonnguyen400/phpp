<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            max-width: 200px;
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px auto;
        }
        input{
            padding:8px 16px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
        <form action='./bai1.php' method='post'>
            Tài khoản<input type='text' name='tk' value="<?php echo isset($_POST['tk'])?$_POST["tk"]:'';?>" id=''>
            Mật khẩu <input type='text' name='mk' value="<?php echo isset($_POST['mk'])?$_POST["mk"]:'';?>" id=''>
            Ngày sinh <input type='date' name='ns' value="<?php echo isset($_POST['ns'])?$_POST["ns"]:'';?>" id=''>
            <input type='submit' name='btn' value='Gửi'>
            
        </form>
            <?php 
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    echo    "Tài Khoản: $_POST[tk]<br>
                            Mật khẩu: $_POST[mk]<br>
                            Ngày sinh:$_POST[ns]";
                }
            ?>
    
</body>
</html>