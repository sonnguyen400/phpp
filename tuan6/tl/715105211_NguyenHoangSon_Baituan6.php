<?php 
        $data=Array(
            Array(
                "id"=>'id1',
                "hang"=>"quan",
                "ma"=>"ha2i",
                "dongia"=>100,
                
            ),
            Array(
                "id"=>'id2',
                "hang"=>"cúc",
                "ma"=>"na1m",
                "dongia"=>200,
            ),
            Array(
                "id"=>'id3',
                "hang"=>"áo",
                "ma"=>"da2c",
                "dongia"=>300,
            ),
            Array(
                "id"=>'id4',
                "hang"=>"áo phông",
                "ma"=>"thu1y",
                "dongia"=>400,
            ),
            Array(
                "id"=>'id5',
                "hang"=>"áo phap",
                "ma"=>"212",
                "dongia"=>500,
            ),
        );
       
    
        function getLoai($mahang){
            return substr($mahang,strlen($mahang)-2,1);
        }
        function getSTT($mahang){
            return substr($mahang,-3);
        }
        function getGiam($mahang){
            if(getLoai($mahang)==1) return 0.5;
            else if(getLoai($mahang)==2) return 0.3;
        }
        function thanhtien($dongia,$soluong,$mahang){
            if(trim($soluong)==""||trim($dongia)=="") return "";
            return $dongia*$soluong-getGiam($mahang)*$dongia*$soluong;
        }
        if(isset($_POST['submit'])){
            for($i=0;$i<5;$i++){
                $hang=Array(
                    "id"=>$_POST["id$i"],
                    "hang"=>$_POST["hang$i"],
                    "ma"=>$_POST["ma$i"],
                    "loai"=>getLoai($_POST["ma$i"]),
                    "stt"=>getSTT($_POST["ma$i"]),
                    "dongia"=>$_POST["dongia$i"],
                    "soluong"=>$_POST["soluong$i"],
                    "giamgia"=>getGiam($_POST["ma$i"]),
                    "tien"=>thanhtien($_POST["dongia$i"],$_POST["soluong$i"],$_POST["ma$i"])
                );
                $data[$i]=$hang;
            }
        }
        if(isset($_POST['reset'])){
            header("Location: ".$_SERVER['PHP_SELF']);
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,input{
            width: 100%;
            
        }
        table{
            border:1px solid black;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        input{
            border: none;
        }
        td{
            padding:8px;
            border-left: 1px solid #4D4C7D;
        }
        tr{
            border-bottom: 1px solid #4D4C7D;;
        }

        thead{
            background-color: #4D4C7D;
            color:white;
        }
        button{
            padding: 10px 20px;
            border: none;
            background-color: #363062;
            color:white;
            margin-right: 20px;
        }
        input:focus{
            outline: none;
        }
       
       
    </style>
</head>
<body>
    <form action="./715105211_NguyenHoangSon_Baituan6.php" method="post">
    <table>
        <thead>
            <td>STT</td>
            <td>Mặt hàng</td>
            <td>Mã hàng</td>
            <td>Mã loại</td>
            <td>STT hàng</td>
            <td>Đơn giá</td>
            <td>Số lượng</td>
            <td>Giảm giá</td>
            <td>Thành tiền</td>
        </thead>
        <?php 
            $dataExist=count($data)!==0;
            for($i=0;$i<5;$i++){
                $hang=$dataExist?$data[$i]:null;
                echo "
                    <input type='hidden' name='id$i'      value='".(isset($hang["id"])?$hang["id"]:"")."'>
                    <tr>
                    <td>".($i+1)."</td>
                    <td><input type='text' name='hang$i'      value='".(isset($hang["hang"])?$hang["hang"]:"")."'></td>
                    <td><input type='text' name='ma$i'        value='".(isset($hang["ma"])?$hang["ma"]:"")."'></td>
                    <td><input type='text' name='loai$i'      value='".(isset($hang["loai"])?$hang["loai"]:"")."'></td>
                    <td><input type='text' name='stt$i'       value='".(isset($hang["stt"])?$hang["stt"]:"")."'></td>
                    <td><input type='text' name='dongia$i'    value='".(isset($hang["dongia"])?$hang["dongia"]:"")."'></td>
                    <td><input type='text' name='soluong$i'   value='".(isset($hang["soluong"])?$hang["soluong"]:"")."'></td>
                    <td><input type='text' name='giamgia$i'   value='".(isset($hang["giamgia"])?$hang["giamgia"]*100:"")."'></td>
                    <td><input type='text' name='tien$i'      value='".(isset($hang["tien"])?$hang["tien"]:"")."'></td>
                    </tr>";
            }
        ?>
    </table>
    <button type="submit" name="submit">Gửi</button>
    <button type="submit" name="reset">Reset</button>
    </form>
    
    
</body>
</html>