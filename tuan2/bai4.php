<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $diem = [
        'Hùng' => [
            'Toán' => 8,
            'Lý' => 7,
            'Hóa'  => 9
        ],
        'Huy' => [
            'Toán' => 7,
            'Lý' => 8,
            'Hóa'  => 8
        ],
        'Hưng' => [
            'Toán' => 9,
            'Lý' => 9,
            'Hóa'  => 9
        ],
    ];
    $max=['name'=>"",'max'=>0];
    foreach($diem as $key=>$value){
        echo $key."    " ;
        print_r($value);
        $tb=($value['Toán']+$value['Lý']+$value['Hóa'])/3;
        if($tb>$max['max']){
            $max['name']=$key;
            $max['max']=$tb;
        }
        echo '<br>';
    }
    echo "Người có điểm trung bình cao nhất $max[name] : ";
    print_r($diem[$max['name']]);
    ?>
</body>
</html>