<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<p>1.Hàm tạo dãy số</p>";
        daySo();
        echo "<hr>";
        echo "<p>2. Hàm tạo phần tử HTML</p>";
        taoThe();

        echo "<br><hr><p>3. Hàm 1 tham số truyền vào</p>";
        daySo1(20);
        taoThe1(3);
        echo "<br><hr><p>3. Hàm 2 tham số truyền vào</p>";
        daySo2(6,22);

        function daySo(){
            for($i=1;$i<=10;$i++){
                echo $i;
                if($i<10){
                    echo ", ";
                }else{
                    echo " .<br>";
                }
            }
        }
        function taoThe(){
            echo " <div style='width: 250px; height:
            50px;border-radius: 2px;border: solid 3px
            red; float: left;margin: 5px 10px'></div>";
        }

        function taoThe1($x){
            for($i=1;$i<=$x;$i++){
               taoThe();
            }
            
        }

        function daySo1($x){
            for($i=1;$i<=$x;$i++){
                echo $i;
                if($i<$x){
                    echo ", ";
                }else{
                    echo " .<br>";
                }
            }
            return 1;
        }

        function daySo2($y,$x){
            for($i=$y;$i<=$x;$i++){
                echo $i;
                if($i<$x){
                    echo ", ";
                }else{
                    echo " .<br>";
                }
            }
            return 1;
        }

    ?>
</body>
</html>