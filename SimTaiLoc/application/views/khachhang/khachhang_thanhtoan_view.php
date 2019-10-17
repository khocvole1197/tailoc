<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thanh Toan</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/style_11.css">
	<!-- <link rel="stylesheet" href=""> -->
	
</head>
<body>
	<div class="container-fluid">

		<?php require('header_khachhang.php') ?>	

		<section>

			<div class="container fixDisplay">
				
				 <marquee width="100%" >  <p style=" padding-left: 100px; margin-top: 0px;margin-bottom: 0px; color: blue"> Sim số đẹp Tài Lộc kính chúc quý khách năm mới an khang, thịnh vượng!</p></marquee>
				<div class="row" style="">
					<!-- ben trai -->
					<div class=" col-md-2">
						<!--  -->

				<?php require('title1.php') ?>

						<!--  -->
						<!-- Nav tabs -->
						
						<!-- <h6> -->
							<!-- <b>Sim Theo Loại </b> -->

<!-- test -->

						<?php require('title2.php') ?>

<!-- endtest -->
						<!-- </h6>	 -->
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" >Sim tam hoa</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" >Sim lộc phát</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" >Sim thần tài </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab">Sim năm sinh</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" >Sim gánh đảo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" >Sim dễ nhớ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages">Sim tự chọn </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings">Sim máy bàn</a>
								</li>
							</ul>
						</ul>
					</div>
					<!-- het ben trai -->

					<!-- o giua -->
					<div class="col-md-8 fixDisplayCenter">
						
						<br>
						<h4>Sim Số Đẹp</h4>

<!-- kết thúc tìm kiếm -->
					<!-- 
													<table class="table table-bordered table-striped">
							<thead class="thead-dark cente ">
								<tr>
									<th scope="">so</th>
									<th scope="">gia</th>
									<th scope="">nhamang</th>
									<th>tuychon</th>
									
								</tr>
							</thead>


							




								
									<?php foreach ($mangketqua as $key => $value):?>
										<div class="col-sm-4">
											<div class="">
												<tr>
													<td style="    padding: 5px;"><?= $value->ten ?></td>	
													<td style="    padding: 5px; font-size: 16px;" ><?= $value->sdt ?></td>
													</td><td style="    padding: 5px; font-size: 16px;" ><?= $value->sdt ?></td>
													</td>										
													<td style="    padding: 3px;">
													<a href="delete_json/<?= $value->sdt ?>" class="btn btn-success"  >xoa</a>  </td>


									<?php endforeach ?> 
										  
							</tbody>
						</table> -->
						<div class="row">
								<?php foreach ($mangketquacuasim as $key => $value): ?>

			<!-- <form action="../updatedata" method="post" enctype="multidata/form-data">  -->
				<form action="<?php echo base_url(); ?>index.php/addOrder/insertData_controller" id="form" method="post" enctype="multidata/form-data" name="myForm" onsubmit="return validateForm()"> 

					<div class="card">

						<div class="card-block">

							<label for="formGroupExampleInput"></label>
							<input name="id" hidden type="text" class="form-control" id="formGroupExampleInput" value="<?= $value['id'] ?>">		

								
							<label for="formGroupExampleInput"></label>
							<input name="so" hidden type="text" class="form-control" id="formGroupExampleInput" value="<?= $value['so'] ?>">

							<label for="formGroupExampleInput"></label>
							<input name="gia" hidden type="text" class="form-control" id="formGroupExampleInput" value="<?= $value['gia'] ?>">

							<slabel for="formGroupExampleInput1"></label>
							<input name="nhamang" hidden type="text" class="form-control" id="formGroupExampleInput1" placeholder="vd: 01695665636" value="<?= $value['nhamang'] ?>" >
							Số Sim
							<b><?= $value['so'] ?></b>		
							 được bán với giá 
							<b><?= $value['gia'] ?></b>. nhập thông tin vào bên dưới để mua sim!  <br>	
							 <br><b>Thông tin người mua:	</b>	<br>

							<!-- add -->
								
							<label for="formGroupExampleInput1">Họ Tên Khách Hàng:</label>
							<input   name="hoten" id="username"  type="text" class="form-control" id="formGroupExampleInput1"   title="vui lòng chỉ nhập dạng chữ" required >
							

							<label for="formGroupExampleInput1">Số Điện Thoại Liên Hệ :</label>

							<input name="sdt" id="sdt" type="text" class="form-control" id="formGroupExampleInput1" maxlength="10"  required>

							<label for="formGroupExampleInput1">Địa Chỉ : </label>

							<input name="diachi" id="diachi" type="text" class="form-control" id="formGroupExampleInput1"  required><br>

							<input  type="submit" class="btn btn-success btn-block" value="Mua Hàng" title="Mua sim này">
							
						</div>

					</div>

				</form>

			<?php endforeach ?>
						</div>

					</div>

					<!-- het o giua -->

					<!-- ben phai -->
					
					<div class=" col-md-2 ">
						<!--  -->
					<?php require("title3.php") ?>			
					
							
						
						
						
						<!-- het ben phai -->
					</div>
				</div>
			</div>
		</section>

		
		<?php require('footer.php') ?>

	
 


	</body>




	</html>