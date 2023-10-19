<?php
    session_start();
    $questions=isset($_SESSION["questions"])?$_SESSION["questions"]:Array();
    if($_SESSION["login_ing"]==null){
        header("Location: "."./1_dang_nhap.php");
    }else{
        $login_ing=$_SESSION["login_ing"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm câu hỏi nhiều đáp án</title>
	<!-- Begin bootstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="	sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- End bootstrap cdn -->
    <style>
        table{
            width: 100%;
            border: 1px solid black;
            padding:8px;
        }
        tr{
            border-bottom: 1px solid black;
        }

    </style>
</head>
<body>
<!-- 	 -->
<main style="min-height: 100vh; max-width: 100%;">
					<!-- <hr> -->
			
			<div id="action" style="margin: 20px 0 0 13%;">
            <p class="h3">Thêm câu hỏi </p>
			<a href="" class="btn btn-primary">Trở lại</a>
            <form action="./bai_5.php" method="POST" enctype="multipart/form-data">
			</div>
            <div   style="margin: 20px 13%;">
                <div class="form-group">
                    <label for="name_quiz"><span style="color: red;">*</span>Nhập tên câu hỏi</label>
                    <input class="form-control"   type="text" name="ten_cau_hoi" id="">
                </div>
                
                
                <p>Nhập các lựa chọn và tích đáp án đúng</p>
                            <div style='margin: 20px 0 0 0;' class='input-group mb-3'>
                            <div class='input-group-text'>
                            <input name='dad[]' value='dap_an0' type='checkbox'>
                            </div>
                            <input name='da_0' type='text' class='form-control' placeholder='Nhập đáp án'>
                        </div>
                            <div style='margin: 20px 0 0 0;' class='input-group mb-3'>
                            <div class='input-group-text'>
                            <input name='dad[]' value='dap_an1' type='checkbox'>
                            </div>
                            <input name='da_1' type='text' class='form-control' placeholder='Nhập đáp án'>
                        </div>
                            <div style='margin: 20px 0 0 0;' class='input-group mb-3'>
                            <div class='input-group-text'>
                            <input name='dad[]' value='dap_an2' type='checkbox'>
                            </div>
                            <input name='da_2' type='text' class='form-control' placeholder='Nhập đáp án'>
                        </div>
                            <div style='margin: 20px 0 0 0;' class='input-group mb-3'>
                            <div class='input-group-text'>
                            <input name='dad[]' value='dap_an3' type='checkbox'>
                            </div>
                            <input name='da_3' type='text' class='form-control' placeholder='Nhập đáp án'>
                        </div>                             
                <div style="margin: 20px 0 0 0;" class="d-grid">
                    <input class="btn btn-primary btn-block" name="btn" type="submit" value="Thêm câu hỏi">
                </div>
               
            </div>
            </form>
		
	</main>
    <?php 
        if(isset($_POST["btn"])){
            $question=Array(
                "ten"=>$_POST["ten_cau_hoi"],
                "da_0"=>$_POST["da_0"],
                "da_1"=>$_POST["da_1"],
                "da_2"=>$_POST["da_2"],
                "da_3"=>$_POST["da_3"],
                "dad"=>$_POST["dad"]
            );
            array_push($questions,$question);
            $_SESSION["questions"]=$questions;
        }
    ?>

        <div id="action" style="margin: 20px 0 0 13%;">
            <p class="h3">Danh sách câu hỏi</p>
            <table>
                <tr>
                    <td>STT</td>
                    <td>Tên câu hỏi</td>
                    <td>Các đáp án</td>
                </tr>
                <?php
                    for($i=0;$i<count($questions);$i++){
                        $question=$questions[$i];
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>$question[ten]</td>";
                        echo "<td>
                            <ul>
                                <li>$question[da_0]</li>".(in_array("dap_an0",$question["dad"])?"Đúng":"")."
                                <li>$question[da_1]</li>".(in_array("dap_an1",$question["dad"])?"Đúng":"")."
                                <li>$question[da_2]</li>".(in_array("dap_an2",$question["dad"])?"Đúng":"")."
                                <li>$question[da_3]</li>".(in_array("dap_an3",$question["dad"])?"Đúng":"")."
                            </ul>
                        </td>";
                        echo "</tr>";
                    }
                    
                ?>
            </table>
            
        </div>
        <div style="margin: 20px 13%;">
        </body>

	
</html>