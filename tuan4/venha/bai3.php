<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài 3</title>
    <style>
        .form{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-group{
            display: flex;
            justify-content: space-between;
            padding:8px 16px;
        }
        .form-group>input{
            margin-left:20px;
            float:right;
        }
    </style>
</head>
<body>
<div id="box">
        <div class="form">
            <form action="" method="post">
                <div class="form-group">
                    <label for="firstName">Họ:</label>
                    <input type="text" name="firstName"   value="<?php echo isset($_POST['firstName'])?$_POST["firstName"]:'';?>">
                </div>

                <div class="form-group">
                    <label for="lastName">Tên:</label>
                    <input type="text" name="lastName"   value="<?php echo isset($_POST['lastName'])?$_POST["lastName"]:'';?>">
                </div>

                <div class="form-group sex-section">
                    <label>Giới tính:</label>
                    <div class="radio-group">
                        <input type="radio" id="male" value="male" name="gender"   <?php if (isset($_POST['gender']) && $_POST['gender'] === "male") echo "checked"; ?>>
                        <label for="male">Nam</label>
                        <input type="radio" id="female" value="female"  name="gender"  <?php if (isset($_POST['gender']) && $_POST['gender'] === "female") echo "checked"; ?>>
                        <label for="female">Nữ</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dob">Ngày sinh:</label>
                    <input type="date" name="dob"   value="<?php echo isset($_POST['dob'])?$_POST["dob"]:'';?>">
                </div>

                <div class="form-group">
                    <label for="studentCode">Căn cước công dân:</label>
                    <input type="text" name="studentCode"  value="<?php echo isset($_POST['studentCode'])?$_POST["studentCode"]:'';?>">
                </div>
                <?php 
                    if(isset($_POST['studentCode'])){
                        echo idValidator($_POST['studentCode'])?"CCCD Hợp lệ":"CCCD không Hợp lệ";
                    }
                ?>
                <div class="form-group">
                    <label for="address">Đia chỉ:</label>
                    <select name="address" required>
                        <option value="Ha Noi">Ha Noi</option>
                        <option value="HCM" <?php if (isset($_POST['address']) && $_POST['address'] === "HCM") echo "checked"; ?>>HCM</option>
                        <option value="Nghe An" <?php if (isset($_POST['address']) && $_POST['address'] === "Nghe An") echo "checked"; ?>>Nghe An</option>
                        <option value="Ninh Binh" <?php if (isset($_POST['address']) && $_POST['address'] === "Ninh Binh") echo "checked"; ?>>Ninh Binh</option>
                    </select>
                </div>

                <input type="submit" value="Gửi">
            </form>
        <?php
            function idValidator($id) {
                if(strlen($id)!==12||$id[0]==='0')return false;
                for($i=0;$i<strlen($id);$i++){
                    if(!is_numeric($id[$i])) return false;
                }
                return true;
            }
        ?>
    <div style="min-height: 200px;"></div>

    
</body>
</html>