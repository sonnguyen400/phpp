<?php 
   session_start();
   $users=isset($_SESSION["users"])?$_SESSION["users"]:Array();
   if($_SESSION["login_ing"]==null){
    header("Location: "."./1_dang_nhap.php");
    }else{
        $login_ing=$_SESSION["login_ing"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="from">

<div class="center">
  <!-- <h1>Bài 4 Nhập thông tin bằng session <br>session</h1> -->
  <form action="" method="post">
            <input type="submit" name="dx" value="Đăng xuất">
</form>
    
  <form method="post">
    <div class="inputbox">
      <span>Nhập Họ Tên</span>
      <input type="text" required="required" name="fullname" placeholder="Nhập tên của bạn">
    </div>
    <div class="inputbox">
      <span>Nhập Số điện thoại</span>
      <input type="number" required="required" name="phone" placeholder="Sô điện thoại">
    </div>
    <div class="inputbox">
      <span>Ngày sinh</span>
      <input type="date" required="required" name="birth">
    </div>
    <div class="inputbox">
      <span>Giới tính</span>
      <input type="radio" class="radio1" name="sex" value="Nam" checked>
      Nam
      <input type="radio"  class="radio1" name="sex" value="Nữ">Nữ
    </div>
    <div class="inputbox">
      <input type="submit" value="Hiển thị" name="input">
    </div>
  </form>
  <?php
    function checkduplicatephone($phone,$users){
      foreach($users as $use){
        if($use["phone"]===$phone) return true;
      }
      return false;
    }
    if(isset($_POST["delete"])&&isset($users[$_POST["delete"]])){
      unset($users[$_POST["delete"]]);
      $_SESSION["users"]=$users;
    }
    if(isset($_POST["input"])){
      $name=trim($_POST["fullname"]);
      $phone=trim($_POST["phone"]);
      $birth=trim($_POST["birth"]);
      $gender=trim($_POST["sex"]);
      if(!checkduplicatephone($phone,$users)){
        $user=Array(
          "name"=>$name,
          "phone"=>$phone,
          "birth"=>$birth,
          "gender"=>$gender,
          "adder"=>$login_ing["name"]
        );
        $users[$phone]=$user;
        $_SESSION["users"]=$users;
      }else{
        echo "Số điện thoại đã tồn tại";
      };
      
    }


    echo "<h1>Thông tin các thành viên: </h1><br>";
      foreach($users as $use){
        echo "<div style='margin:20px'>Tên người dùng: $use[phone]<br>
              Họ tên:$use[name]<br>
              Số điện thoại: $use[phone]<br>
              Ngày sinh $use[birth]<br>
              Giới tính: $use[gender]<br>
              Người thêm: $use[adder]<br>
              <form action='./bai_3.php' method='post'>
                <button type='submit' name='delete' value='$use[phone]'>Xóa</button>
              </form>
              </div>";
      }
  ?>
</div>
</div>
</body>
</html>
