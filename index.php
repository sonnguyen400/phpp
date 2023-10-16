<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="checkbox" name="checkbox[]" value="khoa">
        <input type="checkbox" name="checkbox[]" value="khoa1">
        <button type="submit">Submit</button>
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $result=$_POST["checkbox"];
            print_r($result);
        }
    ?>

</body>
</html>