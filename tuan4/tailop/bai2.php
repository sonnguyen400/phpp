<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 1</title>
    <style>
        body {
            font-family: "montserrat", sans-serif;
            font-size: 100%;
            background: gray;
        }
        #box{
        margin : 5% 10%;
        border : 2px solid whitesmoke;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius : 7px;
        background: white;
    }
        .noidung{
            padding : 15px;
            text-align: center;
            font-size: 30px;
        }
        .head{
            background :  #6793B1;
            min-height: 40px;
        }
        .tieude{
            padding: 5px 15px;
            font-size: 25px;
            color :white;
            font-weight: bold;
            text-align: center;
        }
        input{
            height: 50px;
            width: 150px;
            border-radius: 10px;
            border: none;
        }
        .form{
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-around;    
        }
        .item{
            display: inline-block;
            margin: 5px 10px;
        }
        .result{
            margin: 10px auto;
            color: blue;
        }
        .error{
            margin: 10px auto;
            color: red;
        }
        
    </style>
</head>
<body>
<div style="min-height: 100px;"></div>
    <div id="box">
        <div class="head">
            <div class="tieude" align="center"> Simple Registation Form</div>
        </div>
        <div class="noidung">
            <div class="form">
                <form method="post" action="">
                    <label for="studentCode">Mã sinh viên:</label>
                    <input type="text" id="studentCode" name="studentCode" value="<?php echo isset($_POST["studentCode"]) ? $_POST["studentCode"] : ''; ?>"><br>

                    <label for="dob">Ngày sinh:</label>
                    <input type="date" id="dob" name="dob" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>"><br>


                    <input type="submit" name="register" value="Đăng ký">
                    <input type="submit" name="retype" value="Nhập lại">
                </form>
                <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $msv=$_POST["studentCode"];
                        $ngaysinh=$_POST["dob"];
                        if(strlen($msv)==0||strlen($ngaysinh)==0){
                            echo "Không được bỏ trống";
                        }else{
                            echo "$msv<br>".date_format(date_create($ngaysinh),"d/m/Y")."</p>";
                        }
                    }
                ?>
            </div>
                        
            </div>
        </div>
    <div style="min-height: 200px;"></div>

    
</body>
</html>