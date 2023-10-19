<?php
    session_start();
    $accounts=isset($_SESSION["accounts"])?$_SESSION["accounts"]:array();
    if($_SESSION["login_ing"]==null){
        header("Location: "."./1_dang_nhap.php");
    }else{
        $login_ing=$_SESSION["login_ing"];
    }
    if(isset($_POST["dx"])){
        $_SESSION["login_ing"]=null;
        header("Location: "."./1_dang_nhap.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}
input {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    display: block;
    margin: auto;
    margin-top: 20px;
}
.content {
    text-align: center;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 50%;
}
a{
    color: white;
    text-decoration: none;
}
.content p {
    font-size: 24px;
    color: #333;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="content">
        Xin chào 
        <?php
            if(!isset($_SESSION["login_ing"])){
                header("Location: "."./1_dang_nhap.php");
            }else{
                echo $_SESSION["login_ing"]["name"];
            }
        ?>
        <form action="./1_trang_chu.php" method="post">
            <input type="submit" name="dx" value="Đăng xuất">
        </form>
        <a href="./bai_5.php"><button>Thêm câu hỏi</a></a>
    </div>
</body>
</html>
