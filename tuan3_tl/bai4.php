<!DOCTYPE html>
<html>
<head>
    <title>Tìm Số Lớn Nhất</title>
</head>
<body>
    <h1>Tìm Số Lớn Nhất</h1>
    <form method="post" action="bai4.php">
        <label for="numbers">Nhập danh sách các số (cách nhau bằng dấu phẩy):</label>
        <input type="text" name="numbers" required><br>

        <button type="submit">Tìm số lớn nhất</button>
    </form>
     <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numbers_str = isset($_POST['numbers']) ? $_POST['numbers'] : '';
        $arr = explode(',', $numbers_str);
        $arr = array_map('intval', array_map('trim', $arr));
        $max_number = max($arr);
        echo "Danh sách các số: " . implode(', ', $arr) . "<br>";
        echo "Số lớn nhất là: $max_number";
    }
    ?>
</body>
</html>
