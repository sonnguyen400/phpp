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
        
    </style>
</head>
<body>
<!-- 	 -->
<main style="min-height: 100vh; max-width: 100%;">
					<!-- <hr> -->
			
			<div id="action" style="margin: 20px 0 0 13%;">
            <p class="h3">Thêm câu hỏi </p>
			<a href="" class="btn btn-primary">Trở lại</a>
            <form action="" method="POST" enctype="multipart/form-data">
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

 <div id="action" style="margin: 20px 0 0 13%;">
            <p class="h3">Danh sách câu hỏi</p>
           
        </div>
 <div style="margin: 20px 13%;">
        </body>

	
</html>