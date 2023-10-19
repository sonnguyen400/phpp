<?php
    session_start();
    $_SESSION["login_ing"]=null;
    $accounts=isset($_SESSION["accounts"])?$_SESSION["accounts"]:array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký và Đăng nhập Cookie</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="from">
<div class="center">
  <h1>Đăng nhập</h1>
  <form method="post" action="./1_dang_nhap.php">
    <div class="inputbox">
      <input type="text" required="required" name="login_username" placeholder="Tên đăng nhập">
    </div>
    <div class="inputbox">
      <input type="password" required="required" name="login_password" placeholder="Mật khẩu">
    </div>
    <div class="inputbox">
      <input type="submit" value="Đăng nhập" name="login">
      <button ><a href="./1_dang_ky.php">Đăng ký</a></button>
    </div>
  </form>
  <?php 
    if(isset($_POST["login"])){
      $name=$_POST["login_username"];
      $pass=$_POST["login_password"];
      foreach($accounts as $account){
        if($name===$account["name"]&&$pass===$account["pass"]){
          $_SESSION["login_ing"]=$account;
          header("Location: "."./1_trang_chu.php");
        }  
      }
      echo "Tên Tài khoản hoặc mật khẩu sai";
      
    }
    
  ?>
</div>

</div>
</body>
</html>

