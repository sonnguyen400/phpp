<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./bai3.php" method="post">
        <input type="text" name="num1" placeholder="Nhập số thứ nhất">
        <select name="operator">
            <option value="+">Cộng</option>
            <option value="-">Trừ</option>
            <option value="*">Nhân</option>
            <option value="/">Chia</option>
        </select>
        <input type="text" name="num2" placeholder="Nhập số thứ hai">
        <input type="submit" value="Tính">
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];
            $result = 0;
    
            switch ($operator) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "Lỗi: Không thể chia cho 0";
                    }
                    break;
                default:
                    echo "Lỗi: Phép tính không hợp lệ";
            }
    
            echo "Kết quả: " . $result;
        }
    ?>
</body>
</html>