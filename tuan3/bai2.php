<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Form Đăng ký/Đăng nhập</h2>
    <form  id="form"  action="./bai2_home.php" method="POST">
        <label for="username">Tên tài khoản</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Đăng nhập">
    </form>

</body>
</html>