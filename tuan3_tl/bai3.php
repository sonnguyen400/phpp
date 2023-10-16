<!DOCTYPE html>
<html>
<head>
    <title>Tính chỉ số BMI</title>
</head>
<body>
    <h1>Tính chỉ số BMI</h1>
    <form method="post" action="bai3.php">
        <label for="height">Chiều cao (mét):</label>
        <input type="text" name="height" required><br>

        <label for="weight">Cân nặng (kilogram):</label>
        <input type="text" name="weight" required><br>

        <button type="submit">Tính BMI</button>
    </form>
    <?php 
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $height = isset($_POST['height']) ? $_POST['height'] : 0;
            $weight = isset($_POST['weight']) ? $_POST['weight'] : 0;
    
            // Tính chỉ số BMI
            $bmi = $weight / ($height * $height);
    
            if ($bmi>40) {
                $classification = "Béo phì độ III";
            } elseif ($bmi>=35) {
                $classification = "Béo phì độ II";
            } elseif ($bmi>=30) {
                $classification ="Béo phì độ I" ;
            } elseif ($bmi>=25) {
                $classification = "Thừa cân";
            } elseif ($bmi>=18.5) {
                $classification ="Bình thường" ;
            } elseif ($bmi>=17) {
                $classification = "Gầy độ I";
            } else {
                $classification = "Gầy độ II";
            }

            echo "Chỉ số BMI của bạn là: " . number_format($bmi, 2) . "<br>";
            echo "Phân loại BMI: " . $classification;
        }
    ?>
</body>
</html>
