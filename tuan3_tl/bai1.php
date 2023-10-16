<!DOCTYPE html>
<html>
<head>
    <title>Tính Tổng Hai Số Nguyên</title>
</head>
<body>
    <h1>Tính Tổng Hai Số Nguyên</h1>
    <form method="post" action="bai1.php">
        <label for="so1">Số thứ nhất:</label>
        <input type="number" name="so1" required><br>

        <label for="so2">Số thứ hai:</label>
        <input type="number" name="so2" required><br>

        <button type="submit">Tính Tổng</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $so1 = isset($_POST['so1']) ? $_POST['so1'] : 0;
        $so2 = isset($_POST['so2']) ? $_POST['so2'] : 0;
        $tong = $so1 + $so2;
        echo "Tổng của $so1 và $so2 là: $tong";
    }
    ?>
</body>
</html>