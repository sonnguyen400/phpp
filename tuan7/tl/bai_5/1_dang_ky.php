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
<div class="center">
  <h1>Đăng ký</h1>
  <form method="post" action="./1_dang_ky.php">
    <div class="inputbox">
      <input type="text" required="required" name="register_username" placeholder="Tên đăng nhập">
    </div>
    <div class="inputbox">
      <input type="password" required="required" name="register_password" placeholder="Nhập mật khẩu">
    </div>
    <div class="inputbox">
      <input type="password" required="required" name="register_password_again" placeholder="Nhập lại mật khẩu">
    </div>
    
    <div class="inputbox">
      <input type="submit" value="Đăng ký" name="register">
      <button><a href="./1_dang_nhap.php">Đăng nhập</a></button>
    </div>
  </form>
  <?php
    if(isset($_POST["register"])){
      $name=$_POST["register_username"];
      $pass=$_POST["register_password"];
      $re_pass=$_POST["register_password_again"];
      $isValid=true;
      if(isset($name)&&trim($name)!==""){
        foreach($accounts as $account){
          if($name===$account["name"]){
            echo "<div style='color:red'>Tài khoản đã tồn tại</div>";
            $isValid=false;
          }  
        }
      }else {
        echo "<div style='color:red'>Tên tài khoản không để trống</div>";
        $isValid=false;
      } 
      if(!isset($pass)||!isset($re_pass)||trim($pass)===""||trim($re_pass)===""){
        echo "<div style='color:red'>Mật khẩu không để trống</div>";
        $isValid=false;
      }else if($pass==$re_pass){
        echo "<div style='color:red'>Mật khẩu nhập lại phải trùng với mật khẩu đã nhập trước đó</div>";
      }
      
      if($isValid){
        $account=Array(
          "name"=>trim($name),
          "pass"=>$pass
        );
        array_push($accounts,$account);
        $_SESSION["accounts"]=$accounts;
        header("Location: "."./1_dang_nhap.php");
      }
    }
   

  ?>

</div>
</div>
</body>
</html>

