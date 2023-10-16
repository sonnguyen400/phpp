<?php
    $valid=true;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 3</title>
    <style>
        body {
            font-family: "montserrat", sans-serif;
            font-size: 100%;
            background: gray;
            margin: 0;
            padding: 0;
        }

        #box {
            width: 60%;
            margin: 5% auto;
            padding: 20px;
            border: 2px solid whitesmoke;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 7px;
            background: white;
        }
        #avatar{
            width: 30%;
            aspect-ratio: 1/1;
        }
        .form {
            text-align: center;
        }

        .tieude {
            padding: 5px 15px;
            font-size: 25px;
            color: white;
            font-weight: bold;
            text-align: center;
            background: #6793B1;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .form label {
            display: inline-block;
            font-weight: bold;
            text-align: right;
            width: 30%;
            padding: 5px;
            margin: 5px;
        }

        .form input[type="text"],
        .form select,
        .form input[type="date"],
        .form input[type="email"],
        .form input[type="password"] {
            width: 60%;
            height: 30px;
            padding: 5px;
            border: 1px solid #ccc;
            margin: 5px;
            border-radius: 5px;
            background: white;
        }

        .form input[type="radio"] {
            width: 20px;
            height: 20px;
            margin-right: 5px;
            vertical-align: middle;
        }

        .form input[type="submit"] {
            width: 30%;
            height: 40px;
            background: #6793B1;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .form input[type="submit"]:hover {
            background: #517a9b;
        }

        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .form-group label {
            width: 20%;
        }

        .form-group .radio-group {
            display: flex;
            align-items: center;
        }

        .form-group .radio-group label {
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div id="box">
        <div class="form">
            <div class="tieude">Simple Registration Form</div>
            <form enctype="multipart/form-data" action="./bai4.php" method="post">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName"  value="">
                </div>
                <?php 
                    if(isset($_POST['firstName'])){
                        if(trim($_POST['firstName'])==""){
                            $valid=false;
                            echo "<p>Không để trống phần này</p>";
                        }
                    }
                ?>

                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName"  value="">
                </div>
                <?php 
                    if(isset($_POST['lastName'])){
                        if(trim($_POST['lastName'])==""){
                            $valid=false;
                            echo "<p>Không để trống phần này</p>";
                        }
                    }
                ?>

                <div class="form-group sex-section">
                    <label>Sex:</label>
                    <div class="radio-group">
                        <input type="radio" id="male" name="sex" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="sex" value="Female">
                        <label for="female">Female</label>
                    </div>
                </div>
                <?php 
                    if(!isset($_POST['sex'])){
                        $valid=false;
                        echo "<p>Không để trống phần này</p>";
                    }
                ?>

                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob"  value="">
                </div>
                <?php 
                    if(!isset($_POST['dob'])||trim($_POST['dob'])==""){
                            $valid=false;
                            echo "<p>Không để trống phần này</p>";
                    }
                ?>

                <div class="form-group">
                    <label for="studentCode">Student Code:</label>
                    <input type="text" name="studentCode"  value="">
                </div>
                <?php 
                    if(!isset($_POST['studentCode'])||trim($_POST['studentCode'])==""){
                            $valid=false;
                            echo "<p>Không để trống phần này</p>";
                    }
                ?>

                <div class="form-group">
                    <label for="email">Student email:</label>
                    <input type="email" name="email"  value="">
                </div>
                <?php 
                    if(isset($_POST['email'])){
                        $regexr="/(@gmail.com)$/i";
                        echo preg_match($regexr,$_POST['email'])!=1||trim($_POST['email'])==""?"<p>Email không hợp lệ</p>":" ";
                    }else{
                        $valid=false;
                    }
                ?>

                <div class="form-group">
                    <label for="id"> ID  (Căn cước):</label>
                    <input type="password" name="ID"  value="">
                </div>
                <?php 
                    if(!isset($_POST['ID'])||trim($_POST['ID'])==""){
                            $valid=false;
                            echo "<p>Không để trống phần này</p>";
                    }
                ?>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <select name="address" required>
                        <option value="City A" >Ha Noi</option>
                        <option value="City B" >HCM</option>
                        <option value="City C" >Nghe An</option>
                        <option value="City D" >Ninh Binh</option>
                    </select>
                </div>
                <?php 
                    if(!isset($_POST['address'])||trim($_POST['address'])==""){
                            $valid=false;
                            echo "<p>Không để trống phần này</p>";
                    }
                ?>

                <div class="form-group">
                    <label for="fileupload">Avatar:</label>
                    <input type="file" name="fileupload" id="fileupload"  value="UploadImage">
                </div>
                <input type="submit" value="Save Information">
            </form>
            <div style="min-height: 200px;">
            <?php
           
           if($_SERVER["REQUEST_METHOD"]=="POST"){
               $dir="./upload/";
               $state=1;
               $file= $_FILES["fileupload"];
               if($file['size']!==0&& $valid==true){
                   $targetFile=$dir . basename($file["name"]);
                   $check=getimagesize($file["tmp_name"]);
                       if($check!==false){
                           if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                               echo "<br>File ". basename( $file["name"])." uploaded successfully.";
                               echo "<img id='avatar' src='$targetFile'><br>";
                               echo "<div><br>First name: $_POST[firstName]<br>
                                     Last name:  $_POST[lastName]<br>
                                     Gender: $_POST[sex] for ".($_POST['sex']=='Male'?"Khu A":"Khu B")."
                                     <br>Date of birth: $_POST[dob]
                                     <br>Age: ".(2023-str_split($_POST['dob'],4)[0])."
                                     <br>Student code: $_POST[studentCode]<br>
                                     Email: $_POST[email]<br>
                                     ID: $_POST[ID]
                                     Address: $_POST[address]<br></div>";
                           } else {
                                echo "<br>An error occurred while uploading the file.";
                           }
                       }else{
                           echo "File is not an image.";
                           $state = 0;
                       }
                   
               }
   
              
   
           }
               
           ?>
            </div>
        </div>
    
</body>
</html>