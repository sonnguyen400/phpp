<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài 2</title>
    <style>
        .form{
            display: flex;
            margin: 0px auto;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>     
    <div class="form">
            <form method="POST" action="./bai2.php">
                <label for="day">Chọn ngày học :</label>
                <select id="day" name="day">
                    <option >==========</option>
                    <option value="Monday"      <?php if (isset($_POST['day']) && $_POST['day'] === "Monday") echo "selected"; ?>>Monday</option>
                    <option value="Tuesday"     <?php if (isset($_POST['day']) && $_POST['day'] === "Tuesday") echo "selected"; ?>>Tuesday</option>
                    <option value="Wednesday"   <?php if (isset($_POST['day']) && $_POST['day'] === "Wednesday") echo "selected"; ?>>Wednesday</option>
                    <option value="Thursday"    <?php if (isset($_POST['day']) && $_POST['day'] === "Thursday") echo "selected"; ?>>Thursday</option>
                    <option value="Friday"      <?php if (isset($_POST['day']) && $_POST['day'] === "Friday") echo "selected"; ?>>Friday</option>
                    <option value="Saturday"    <?php if (isset($_POST['day']) && $_POST['day'] === "Saturday") echo "selected"; ?>>Saturday</option>
                </select><br>

                <label>Hình thức học: </label>
                <input type="radio" id="online" value="online"  name="type" <?php if (isset($_POST['type']) && $_POST['type'] === "online") echo "checked"; ?>>
                <label for="Online">Online</label>
                <input type="radio" id="offline" value="offline" name="type" <?php if (isset($_POST['type']) && $_POST['type'] === "offline") echo "checked"; ?>>
                <label for="Offline">Offline</label>
                <br>

                <label for="class">Chọn khung thời gian :</label>
                <br>
                <div class="checkbox-row">
                    <div class="checkbox-container">
                       <?php
                            for($i=1;$i<=10;$i++){
                                $isChecked=isset($_POST['lesson'])&&in_array($i,$_POST['lesson'],false)?'checked':'';
                                echo  "<input type='checkbox' value='$i' name='lesson[]' id='' $isChecked >$i";
                            }
                       ?>
                    </div>
                    <div class="checkbox-container">
                   
                    </div>
                </div>
                <br>
                <div class="form-actions">
                    <input type="submit" name="" value="Gửi">
                </div>
            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    echo "Ngày: $_POST[day]
                        <br>Hình thức học: $_POST[type]
                        <br>Khung thời gian:".join(" ", $_POST['lesson']);
                }
            ?>
        </div>
    </div>
</div>
<div style="min-height: 200px;"></div>
</body>
</html>
