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
        }
    </style>
</head>
<body>
    <?php 
        $chon="";
        if(isset($_GET["submit"])&&isset($_GET["chon"])){
            $chon=$_GET["chon"];
        }
    ?>
    <form action="./Form_Select.php" method="get">
        <div class="input" >Danh sách chọn
            <select name="chon">
                <option value="Giá trị 1" <?php if (isset($_GET['submit']) && $chon=== "Giá trị 1") echo "selected"; ?>>a</option>
                <option value="Giá trị 2" <?php if (isset($_GET['submit']) && $chon=== "Giá trị 2") echo "selected"; ?>>b</option>
                <option value="Giá trị 3" <?php if (isset($_GET['submit']) && $chon=== "Giá trị 3") echo "selected"; ?>>c</option>
            </select> 
        </div>
        <button type="submit" name="submit">Gửi</button>
    </form>
    <?php 
    ?>
</body>
</html>