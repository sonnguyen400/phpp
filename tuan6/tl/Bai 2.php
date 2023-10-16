<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 1</title>
    <style>
         *{
            font-family: "montserrat", sans-serif;
        }
        body {
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
            /* border: none; */
        }
        .form{
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-around;  
            flex-direction: column;  
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
        .form-element{
            font-size: 30px;
        }
    </style>
</head>
<body>

<div style="min-height: 100px;"></div>
    <div id="box">
        <div class="head">
            <div class="tieude" align="center"> Bài 1</div>
        </div>
        <div class="noidung">
            <div class="form">
                <form action="./Bai 2.php" method="post">
                    <?php
                        echo inputElement(Array(
                            'title'=>"Tài khoản",
                            'type'=>"text",
                            'name'=>"name"
                        ));
                        echo "<br>";
                        if(isset($_POST["submit"])){
                            validName($_POST['name']);
                        }
                        echo inputElement(Array(
                            'title'=>"Mật khẩu",
                            'type'=>"password",
                            'name'=>"password"
                        ));
                        if(isset($_POST["submit"])){
                            validName($_POST['password']);
                        }
                        echo inputElement(Array(
                            'inptype'=>'button',
                            'title'=>"Gửi",
                            'type'=>"submit",
                            'name'=>"submit",
                            "value"=>"submit"
                        ));

                    ?>
                </form>
                
                
            </div>
        </div>
    <div style="min-height: 200px;"></div>

    <?php 
        
        function inputElement($input){
            $value=isset($input['value'])?$input['value']:"";
            $inputtype=isset($input['inptype'])?$input['inptype']:"";
            $title=isset($input['title'])?$input['title']:"";
            $type=isset($input['type'])?$input['type']:"";
            $name=isset($input['name'])?$input['name']:"";
            return 
                "<div class='form-element'>
                    ".($inputtype==='button'?
                    "<button name='$name' value='$value'  type=$type>$title</button>":
                    "$title<input name=$name value='$value' type='$type'/>")."
                </div>";
        }

        function checkChar($text){
            return preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$text);
        }
        function validName($text){
            if(!isset($text)||trim($text)=="") echo "Không bỏ trống";
            if(checkChar($text)) echo "Chỉ được chứa ký tự chữ hoặc số ";
            if(strlen(trim($text))<5) echo "Quá ngắn . Phải có ít nhất 5 ký tự";
        }
        
        function validPassword($text){
            if(!isset($text)||trim($text)=="") echo "Mật khẩu Không bỏ trống";
            if(strlen(trim($text))<5) echo "Mật khẩu Quá ngắn . Phải có ít nhất 5 ký tự";
        }
    ?>
</body>
</html>