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
	<?php require('header_khachhang.php') ?>	
	<div class="container">


		<!-- kiem tra xem co tai khoan chua. neu co tai khoan thi moi dang ky duoc -->
		<?php 
		$info = $this->session->userdata('user');
		$is = $info['username'];

		if ($is) {
							# code...
			echo "Xin chào: ";

			print_r($is);
		}
		else{

			header('Location: http://localhost:8080/simtailoc/index.php/user/login');
		}	
		?>


		<?php 
		$info = $this->session->userdata('user');
		$is = $info['username'];
								
											?>
											<div class="card-deck-wrapper"><?php 
											$info = $this->session->userdata('user');
											$is = $info['username'];


											if ($is) {
																	# code...
												echo "  <input name='username' hidden  type='text' value='$is'   ";


																	// print_r($is);
											}						
											?>
											<div class="card-deck">




<!-- thanh toán  -->

											<form method="post" action="pay_oder">
												<?php foreach ($mangketqua as $key => $value):?>

													<div class="card-block">
														<p class="card-text">gia: <?= $value->gia ?></p>
														<h4 class="card-title"> sdt: <?= $value->sdt ?></h4>

														<a href="delete_json/<?= $value->sdt ?>" class="btn btn-success"  >xoa</a> 

														<!-- onclick="return confirm('Bạn chắc chắn muốn gỡ xuống khỏi gio hàng?');" -->
													</div>



													<?php endforeach ?></div>
												</div>
											</div>
										</form>
	</body>
</html>