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
  
</div>
</div>
</body>
</html>
