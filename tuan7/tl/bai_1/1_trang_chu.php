<?php
    $accounts=isset($_COOKIE["accounts"])?json_decode($_COOKIE["accounts"],true):array();
    function register($name,$pass,$repass,$accounts){
        if($pass!==$repass){
            header("Location: "."./1_dang_ky.php");
        }else{
            foreach($accounts as $account){
                if($name===$account["name"])  header("Location: "."./1_dang_ky.php?mess='Trungten'");
            }
        }
        
    }
    if(isset($_POST["register"])){
        $pass=$_POST["register_password_again"];
        $repass=$_POST["register_password"];
        $username=$_POST["register_username"];
        register($username,$pass,$repass,$accounts);
        $account=array(
            "name"=>$_POST["register_username"],
            "pass"=>$_POST["register_password"]
        );
        setcookie("account",json_encode($account,true));
        array_push($accounts,$account);
        setcookie("accounts",json_encode($accounts,true));
    }
    if(isset($_POST["login"])){
        $pass=$_POST["login_password"];
        $username=$_POST["login_username"];
        foreach($accounts as $account){
            if($username===$account["name"]&&$pass===$account["pass"]){
                setcookie("account",json_encode($account,true));
            }
        }
    }
    if(isset($_POST["dx"])){
        setcookie("account",'',time()-3600);
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
            if(!isset($_COOKIE["account"])){
                header("Location: "."./1_dang_nhap.php");
            }else{
                echo json_decode($_COOKIE["account"],true)["name"];
            }
        ?>
        <form action="./1_trang_chu.php" method="post">
            <input type="submit" name="dx" value="Đăng xuất">
        </form>
    </div>
</body>
</html>
