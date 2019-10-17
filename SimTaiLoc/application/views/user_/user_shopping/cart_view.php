<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta charset="UTF-8">
	<title>SIMTAILOC</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/style_11.css">
</head>
<body>
	<div class="container-fluid">
		
	
	<?php require('header_khachhang.php') ?>
	<div class="container">


		<!-- kiem tra xem co tai khoan chua. neu co tai khoan thi moi dang ky duoc -->
		<?php 
			$info = $this->session->userdata('user');
			$is = $info['username'];


			if ($is) {
								# code...
				
			}
			else{

				header('Location: http://localhost:8080/simtailoc/index.php/user/login');
			}	
		?>

		<?php 
			$info = $this->session->userdata('user');
			$is = $info['username'];
			if ($is) 
			{
				echo"gio hang cua: ";				# code...
				echo "$is";
																		// print_r($is);
			}?>					
												
	<div class="card-deck-wrapper">
				<?php 
				$info = $this->session->userdata('user');
				$is = $info['username'];


				if ($is) {
									# code...
					echo "  <input name='username' hidden  type='text' value='$is'   ";
						}
								// print_r($is);								
		?>


					
						
		<div class="row">
			<form method="post" action="pay_oder" >	
				<div class="card-deck ">


							<?php $d = 0; ?>
										
											
					
							<?php foreach ($mangketqua as $key => $value):?>
								<?php  			
									$num =  $value->gia;
									$num = (int)$num;
									$d=(int)$d;
									$d += $num;
								?>

								<div class="card-block">
									
									<h4 class="card-title"> Số Sim: <?= $value->sdt ?></h4>
									<p class="card-text">Giá Bán: <?= $value->gia ?></p>
									<a href="delete_json/<?= $value->sdt ?>" class="btn btn-success"  >xoa</a> 
									<!-- onclick="return confirm('Bạn chắc chắn muốn gỡ xuống khỏi gio hàng?');" -->
								</div>
							<?php endforeach ?>
							
				</div>
													
					<p>Tổng Tiền Phải Trả:  <?php echo $d; ?></p>							
				<div class=" col-lg-3" style="margin-left: 400px;"> 
						
						<label for="formGroupExampleInput1">Họ Tên Khách Hàng:</label>
						<input   name="ten" id="username"  type="text" class="form-control" id="formGroupExampleInput1"   title="vui lòng chỉ nhập dạng chữ"required > 
						<label for="formGroupExampleInput1">Địa Chỉ : </label>
						<input name="diachi" id="diachi" type="text" class="form-control" id="formGroupExampleInput1"  required><br>
						<?php 
						$info = $this->session->userdata('user');
						$is = $info['username'];

						if ($is) {
										# code...
							echo "  <input name='username' hidden  type='text' value='$is'   ";

										// print_r($is);
						}						
						?>
						<fieldeset class="form-group">

							<input type="submit"  id="formGroupExampleInput" class="btn btn-danger" method = "post" value="Thanh Toán">
						</fieldeset>
					</div>
				</form>
			</div>
	</div>
</div>
					
		<!--  -->
	</body>
</html>