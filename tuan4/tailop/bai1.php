<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bai1.php" method="post">
        <input type="text">
    </form> 
    <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            echo "Số ký tự: ".strlen($str)."<br>";
            echo strtoupper($str);
        }
    ?>
</body>
</html>