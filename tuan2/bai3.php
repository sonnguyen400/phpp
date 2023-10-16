<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Bài 3:  
    $arr=[1,1,3,4,5];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    function arr_check($arr){
        for ($i=1; $i<count($arr) ; $i++) { 
            if($arr[$i]-$arr[$i-1]<=0) return "Dãy không tăng dần";
        }
        return "Dãy tăng dần";
    }
    echo arr_check($arr);
    ?>
</body>
</html>