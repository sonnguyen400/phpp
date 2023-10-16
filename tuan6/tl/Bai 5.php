<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 5</title>
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
            <div class="tieude" align="center"> Bài 5</div>
        </div>
        <div class="noidung">
            <div class="form">
                <form method="POST" action="./Bai 5.php">
                        <input type="text" style="width: 40px" name="a" /> x 
                    +
                    <input type="text" style="width: 40px" name="b" /> = 0
                    <input type="submit" name="calculate" value="Tính">
                </form>
                <?php 
                    function phanso($so){
                        $isNeg=false;
                        if(str_contains($so,"-")){
                            $isNeg=true;
                            $so=explode("-",$so)[1];
                        }
                        if(preg_match_all('/^\d+\/\d+$/',$so)){
                            $tu=explode("/",$so)[0];
                            $mau=explode("/",$so)[1];
                            return $isNeg?-$tu/$mau:$tu/$mau;
                        }else return null;
                    }
                    function so($so){
                        $pattern='/^\d+$/';
                        $isNeg=false;
                        if(str_contains($so,"-")){
                            $isNeg=true;
                            $so=explode("-",$so)[1];
                        }
                        if(preg_match_all($pattern,$so)){
                            return $isNeg?-$so:$so;
                        };
                        return null;
                    }
                    function getVal($so){
                        if(isset($so)){
                            if(phanso($so)!=null) return phanso($so);
                            else if(so($so)!=null) return so($so);
                        }
                        return null;
                    }
                    if(isset($_POST['calculate'])){
                        $isvalid=true;
                        $a=$_POST['a'];
                        $b=$_POST['b'];
                        if(getVal($a)===null||$a==0){
                            echo "Nhập lại vào a<br>";
                            $isvalid=false;
                        }
                        if(getVal($b)===null){
                            echo "Nhập lại vào b";
                            $isvalid=false;
                        }
                        if($isvalid){
                            echo "<br>Nghiệm x= ".-getVal($b)/getVal($a);
                        }
                        
                    }
                ?>
            </div>
        </div>
    <div style="min-height: 200px;"></div>
</body>
</html>