<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <style>
        p,input{
            display: block;
        }
        
        #form{
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            max-width: 800px;
        }
        form{
            width: 500px;
        }
        .inputField{
            width: 100%;
            display:flex;
            flex-direction: row;
            justify-content:space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <div id="form">
        <h2>Form Đăng ký/Đăng nhập</h2>
        <form action="bai1.php" method="POST">
            <div class="inputField">
                <p for="username">Tên người dùng:</p>
                <input type="text" name="username" required>
            </div>
            <div class="inputField">
                <p for="password">Mật khẩu:</p>
                <input type="password" name="password" required>
            </div>

            <div class="inputField">
                <p for="confirm_password">Nhập lại mật khẩu:</p>
                <input type="password" name="confirm_password" required>
         </div>  
            <input type="submit" value="Đăng ký">
        </form>
    </div>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $state=true;
            if($_POST["username"]==""||$_POST["password"]==""||$_POST["confirm_password"]==""){
                echo "Không để trống các trường<br>";
                $state=false;
            }
            if($_POST["password"]!=$_POST["confirm_password"]){
                echo "Mật khẩu nhập lại không khớp<br>";
                $state=false;
            }
            if($state==true){
                echo "Đăng ký thành công<br>";
            }
        }
    ?>
</body>
</html>