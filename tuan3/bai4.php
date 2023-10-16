<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label,input{
            display: block;
        }
        table{
            margin-top: 50px;
        }
        table,tr,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="./bai4.php" method="post">
        <label for="name">Tên học sinh : </label>
        <input name="name"/>
        <label for="id">Mã sinh viên : </label>
        <input name="id"/>
        <label for="birthday">Ngày sinh : </label>
        <input type="date" name="birthday"/>
        <button type="submit">Thêm sinh viên</button>
    </form>
    <?php 
        const a="";
        $list=[];
        if(isset($_SESSION["list"])){
            $list=$_SESSION["list"];
        }
        else{
            $_SESSION["list"]=$list;
        }
        $table_head="<tr>
                        <td>Họ Tên</td>
                        <td>Mã sinh viên</td>
                        <td>Ngày sinh</td>
                    </tr>";

        echo "<table>$table_head";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            array_push($list,["name"=>$_POST["name"],
                            "id"=>$_POST["id"],
                            "birthday"=>$_POST["birthday"]]);
            $_SESSION["list"]=$list;
        }
        foreach ($list as $key => $student) {
            print_r($student);
        }

        echo"</table>";
    ?>
    <script>

    </script>
</body>
</html>