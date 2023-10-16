<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="bai2.php">
        <label for="salary">Nhập tiền lương:</label>
        <input type="number" name="salary" required><br>
        <button type="submit">Tính thuế</button>
    </form>
    <?php 
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tax=function($salary){
                if($salary>80000000)  return $salary*0.35;
                elseif($salary>52000000)  return $salary*0.3;
                elseif($salary>32000000)  return $salary*0.25;
                elseif($salary>18000000)  return $salary*0.2;
                elseif($salary>10000000)  return $salary*0.15;
                elseif($salary>5000000)  return $salary*0.1;
                else return $salary*0.05;
            };
            echo "Số thuế phải trả : ".$tax($_POST['salary']);
         }
    ?>
</body>
</html>