<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 2</title>
    <style>
        body {
            font-family: "montserrat", sans-serif;
            font-size: 100%;
            background: gray;
        }
        #box {
            margin: 5% 10%;
            border: 2px solid whitesmoke;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 7px;
            background: white;
        }
        .noidung {
            padding: 15px;
            text-align: center;
            font-size: 30px;
        }
        .head {
            background: #6793B1;
            min-height: 40px;
        }
        .tieude {
            padding: 5px 15px;
            font-size: 25px;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        input[type="text"],
        select {
            height: 50px;
            width: 150px;
            border-radius: 10px;
            border: none;
            margin-right: 5px;
        }
        input[type="radio"]{
            font-size: 15px;
            font-weight: normal;
        }
        input[type="checkbox"] {
            vertical-align: middle;
        }

        input[type="submit"]{
            height: 50px;
            width: 150px;
            border-radius: 10px;
            border: none;
        }
        label {
            vertical-align: middle;
        }
        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form label {
            margin-top: 10px;
        }
        .result {
            margin: 10px auto;
            color: blue;
        }
        .error {
            margin: 10px auto;
            color: red;
        }
        .form-actions {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 10px;
        }
        .checkbox-row {
            display: flex;
            align-items: center;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }
        .checkbox-container input[type="checkbox"],
        .checkbox-container label {
            margin-right: 5px;
        }
    </style>
</head>
<body>
<div style="min-height: 100px;"></div>
<div id="box">
    <div class="head">
        <div class="tieude" align="center"> Simple Registration Form</div>
    </div>
    <div class="noidung">
        <div class="form">
            <form method="post" action="">
            <label for="monhoc">Chọn môn học :</label>
                <select id="monhoc" name="monhoc">
                    <option value="" <?php if (isset($_POST['monhoc'])) echo "selected"; ?>>==========</option>
                    <option value="CTDL & GT" <?php if (isset($_POST['monhoc']) && $_POST['monhoc'] === "CTDL & GT") echo "selected"; ?>>CTDL & GT</option>
                    <option value="Toán rời rạc" <?php if (isset($_POST['monhoc']) && $_POST['monhoc'] === "Toán rời rạc") echo "selected"; ?>>Toán rời rạc</option>
                    <option value="Nền tảng PT WEB" <?php if (isset($_POST['monhoc']) && $_POST['monhoc'] === "Nền tảng PT WEB") echo "selected"; ?>>Nền tảng PT WEB</option>
                    <option value="Lập trình hướng đối tượng" <?php if (isset($_POST['monhoc']) && $_POST['monhoc'] === "Lập trình hướng đối tượng") echo "selected"; ?>>Lập trình hướng đối tượng</option>
                    <option value="Lập trình java" <?php if (isset($_POST['monhoc']) && $_POST['monhoc'] === "Lập trình java") echo "selected"; ?>>Lập trình java</option>
                    <option value="Mạng máy tính" <?php if (isset($_POST['monhoc']) && $_POST['monhoc'] === "Mạng máy tính") echo "selected"; ?>>Mạng máy tính</option>
                </select><br>

                <label>Hình thức học: </label>
                <input type="radio" id="online" name="formLearning" checked value="Online" <?php if (isset($_POST['formLearning']) && $_POST['formLearning'] === "Online") echo "checked"; ?>>
                <label for="Online">Online</label>
                <input type="radio" id="offline" name="formLearning" value="Offline" <?php if (isset($_POST['formLearning']) && $_POST['formLearning'] === "Offline") echo "checked"; ?>>
                <label for="Offline">Offline</label>
                <br>

                <label for="class">Chọn khung thời gian :</label>
                <br>
                <div class="checkbox-row">
                    <div class="checkbox-container">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $checkboxName = (string) $i;
                            $isChecked = isset($_POST[$checkboxName]) ? "checked" : "";
                            echo '<input type="checkbox" id="' . $i . '" name="' . $i . '" value="'.$i.'" ' . $isChecked . '>';
                            echo '<label for="' . $i . '">' . $i . '</label>';
                        }
                        ?>
                    </div>
                    <div class="checkbox-container">
                        <?php
                        for ($i = 6; $i <= 10; $i++) {
                            $checkboxName = (string) $i;
                            $isChecked = isset($_POST[$checkboxName]) ? "checked" : "";
                            echo '<input type="checkbox" id="' . $i . '" name="' . $i . '" value="'.$i.'" ' . $isChecked . '>';
                            echo '<label for="' . $i . '">' . $i . '</label>';
                        }
                        ?>
                    </div>
                </div>
                <br>
                <div class="form-actions">
                    <input type="submit" name="Save" value="Lưu thông tin">
                    <input type="submit" name="retype" value="Nhập lại">
                </div>
            </form>
            <?php
                if(isset($_POST["Save"])){
                    $tiet=[];
                    $type=$_POST['formLearning'];
                
                    for($i=1;$i<=10;$i++){
                        if(isset($_POST[$i])) array_push($tiet,$_POST[$i]);
                    }
                    if($_POST["monhoc"]===""||count($tiet)<1||!isset($type)){
                        echo "Nhập lại";
                    }else{
                        echo "$_POST[monhoc]<br>$type<br>".join(",",$tiet);
                    }
                }
            ?>
        </div>
    </div>
</div>
<div style="min-height: 200px;"></div>
</body>
</html>
