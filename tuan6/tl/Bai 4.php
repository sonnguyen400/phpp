<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 4</title>
    <style>
         *{
            font-family: "montserrat", sans-serif;
        }
        body {
            font-size: 100%;
            background: gray;
        }
        #box{
        margin : 5% 10%;
        border : 2px solid whitesmoke;
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
        }
        input[type=submit]{
            color: #625a5a;
            font-size: 30px;
            font-weight: bold;
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
            <div class="tieude" align="center"> Bài 4</div>
        </div>
        <div class="noidung">
            <div class="form">
                <form method="post" action="./Bai 4.php">
                    <label for="studentCode">Nhập phân số</label>
                    <input type="text" id="studentCode" name="phan_so" ><br><br>
                    <input type="submit" name="btn" value="Kiểm tra">
                </form>
                <?php 
                    function phanso($so){
                        if(preg_match_all('/^\d+\/\d+$/',$so)){
                            $tu=explode("/",$so)[0];
                            $mau=explode("/",$so)[1];
                            return $tu/$mau;
                        }else return null;
                    }
                    if(isset($_POST['phan_so'])){
                        if(trim($_POST["phan_so"])!=""){
                            echo phanso($_POST["phan_so"])!==null?"Đây là phân số":"Đây không là phân số";
                        }else{
                            echo "Không để trống";
                        }
                    }
                ?>
            </div>
        </div>
    <div style="min-height: 200px;"></div>
</body>
</html>