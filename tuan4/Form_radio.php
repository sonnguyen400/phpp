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
   
    <form action="./tuan5.php" method="get">
        <label for="gt">Giới tính</label><br>
        <div>
            Nam<input type="radio" name="gt" value="nam"  <?php if (isset($_GET['submit']) && $_GET['gt'] === "nam") echo "checked"; ?>>
            Nữ <input type="radio" name="gt" value="nu"  <?php if (isset($_GET['submit']) && $_GET['gt'] === "nu") echo "checked"; ?>>
        </div>
        <button type="submit" name="submit">Gửi</button>
    </form>
    <?php 
    ?>
</body>
</html>