    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<title>Xử Lý Đơn Hàng</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/style_admin_update.css"> 
</head>
<body>
<div  class="bodyy ">

	<div class="header" style="text-align: left; background: #14B9C8;">
		<div class="row">
				<div  class="col-md-4" style="    padding-top: 13px;">SIM TÀI LỘC</div>
				<div class="col-md-4" style=""></div>
				<div class="col-md-4" style=" text-align: right;">
					<div>
						
						<?php
						$info = $this->session->userdata('user');
						$is = $info['username'];
						$lever = $info['lever'];
						if ($lever=='admin') {
							# code...
							echo "Xin chào: ";

							print_r($is);	
						}
						else{
							
							header('Location: http://localhost:8080/simtailoc/index.php/showData/logout');
						}
								
						?> <i class="fa fa-user-secret" aria-hidden="true"></i>
					</div>
					<div><p>
						<a href="<?php echo base_url();?>index.php/showData/logout">Đăng xuất <i class="fa fa-sign-out" aria-hidden="true"></i></a>
					</p></div>
				</div>
			</div>

	</div>
	<div class="connten">
		<div class="row">
			<?php require('title_menuoder.php') ?>
			<div class="col-md-10 " >


				<!-- khung  -->
				<!-- menu -->
				<div class="container">

					<ul class="nav nav-tabs nav-justified overline-from-left">
							<li class="nav-item ">
								<a class="nav-link active" href="<?php echo base_url(); ?>index.php/showData/adminOrder">Quản Lý đơn hàng mới</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="<?php echo base_url(); ?>index.php/showData/adminOrder_xuly">Đơn Hàng Đang Xử Lý</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url(); ?>index.php/phantrang">Lịch Sử Đơn Hàng</a>
							</li>
							<li class="nav-item">
								<!-- 	<a class="nav-link" href="#">Link</a> -->


							</li>



						</ul>


					<!-- het menu -->
					<!-- hien thi don hang -->
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th scope="">#</th>
								<th scope="">Số Sim</th>
								<th scope="">Giá Bán</th>
								<th scope="">Nhà Mạng</th>
								<th scope="">Họ Tên KH</th>
								<th scope="">SĐT LH</th>
								<th scope="">Địa Chỉ</th>
								<!-- <th scope="">Tuỳ Chọn</th> -->
								
							</tr>
						</thead>
						<!-- http://localhost:81/bai1dulieu/index.php/addOrder/insertData_controller -->
						<tbody class="thead">
							<?php foreach($post->result() as $row): ?>    


								<tr>
									<td><?php echo $row->id; ?></td>
									<td> <?php echo $row->so; ?></td>
									<td><?php echo $row->gia; ?></td>
									<td> <span class="n1" style="background-image: url(<?=$row->nhamang?>);height: 22px;margin: auto;width: 75px;display: block;"> </span></td>
									<td> <?php echo $row->hoten; ?></td>
									<td> <?php echo $row->sdt; ?></td>
									<td> <?php echo $row->diachi; ?></td>
									

								</tr> 






							<?php endforeach;?>



						</tbody>
					</tbody>
				</table>
				<div class="paging"><?php echo $paginator; ?></div>

				<!-- hien thi don hang -->
			</div>
			​ 

			<!-- het khung -->


		</div>

	</div>
</div>



</div>




</body>
</html>