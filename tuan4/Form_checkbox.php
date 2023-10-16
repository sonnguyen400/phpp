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
        $x=array();
        if(isset($_GET["submit"])&&isset($_GET["ngonngu"])){
            $x=$_GET["ngonngu"];
        }
    ?>
    <form action="./Form_checkbox.php" method="get">
        <label for="gt">Ngôn ngữ</label><br>
        <div>
           Việt<input type="checkbox" name="ngonngu[]" value="Việt" id=""  <?php if (isset($_GET['submit']) && in_array("Việt", $x)) echo "checked"; ?>>
           Anh<input type="checkbox" name="ngonngu[]" value="Anh" id=""  <?php if (isset($_GET['submit']) && in_array("Anh", $x)) echo "checked"; ?>>
           Pháp<input type="checkbox" name="ngonngu[]" value="Pháp" id=""  <?php if (isset($_GET['submit']) && in_array("Pháp", $x)) echo "checked"; ?>>
        </div>
        <button type="submit" name="submit">Gửi</button>
    </form>
    <?php 
    ?>
</body>
</html>