<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 200px;
        }
        input{
            padding:8px 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="./Bai 3.php" method="post">
        Nhập số lượng đáp án
        <input type="text" name="amount">
        <button type="submit" >Thêm câu hỏi</button>
        <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            if(isset($_POST["amount"])&&trim($_POST["amount"])!=""){
                echo "Nhập lựa chọn và tích đáp án đúng";
                for($i=0;$i<$_POST["amount"];$i++){
                    echo "<input type='checkbox'/><input type='text'/>";
                }
            }else{
                echo "Vui lòng nhập liệu";
            }
        }
        ?>
    </form>
</body>
</html>