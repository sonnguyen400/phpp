<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
    //Bài 1
    echo '<table>';
    echo    '<tr>
                <td>STT</td>
                <td>Họ và tên</td>
                <td>Đề tài</td>
                <td>Xếp hạng</td>
            </tr>';
    for($i=1;$i<25;$i++){
        echo    "<tr>
                    <td>$i</td>
                    <td>Họ tên $i</td>
                    <td>Đề tài $i</td>
                    <td>Xếp hạng $i</td>
                </tr>";
    }
    echo '</table>';
    ?>
</body>
</html>