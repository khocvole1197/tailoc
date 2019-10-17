<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<title>Đơn Hàng Chờ</title>
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
				<div  class="col-md-4" style="padding-top: 13px;">SIM TÀI LỘC</div>
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
				<div class=" col-md-2 menu1">
					<div class="vertical-menu">
						<a href="<?php echo base_url(); ?>index.php/showData" class="active" value="">SimTaiLoc</a>
						<a href="<?php echo base_url(); ?>index.php/showData">Quản Lý Sim</a>
						<a href="<?php echo base_url(); ?>index.php/showData/adminOrder">Quản Lý Đơn Hsàng</a>

					</div>		
				</div>
				<div class="col-md-10 ">


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
					<!-- 	<table class="table table-bordered table-striped" style="margin-top: 10px;"> -->
							<thead class="thead-dark">
								<tr>
									Chi tiết đơn hàng



								</tr>
							</thead>

							
							<!-- code lay danh sach sdt khach hang -->
							
																																																								
													

													
						

							<!-- endcode lay danh sach sdt khach hang -->

							<tbody class="thead">
								<form  action="<?php echo base_url(); ?>index.php/addOrder/insertData_controller_xuly1" method="POST" enctype="multidata/form-data"> 
								<!-- ../adddata/insertData_controller_order -->
								<div class="row" >
									<div class="col-md-4">
										<div>
											<table border="1" style="width: -webkit-fill-available;border: darkkhaki;">
    
												<tr>
																
																<th>Số Sim</th>
																<th>Nhà Mạng</th>
																<th>Giá Bán </th>
																<th></th>

															</tr>
															<tr>
																	<?php $d = 0; ?>
																<?php foreach ($mangketqua as $key => $value):?>
																	<?php  			
																	$num =  $value->gia;
																	$num = (int)$num;
																	$d=(int)$d;
																	$d += $num;
																	?>
															
																<td><?= $value->sdt ?></td>
																<!-- <td><?= $value->nhamang ?></td> -->
																<td><span class="n1" style="background-image: url(<?=$value->nhamang ?>);height: 22px;margin: auto;width: 75px;display: block;"> </span></td>
																	<td><?= $value->gia ?></td>
																	<td></td>
																
																</tr>

																

																<input name="so" type="hidden" value="<?= $value->sdt ?>" >
																<input name="gia" type="hidden"   value="<?= $value->gia ?>" >
																<input name="nhamang" type="hidden"   value="<?=$value->nhamang ?>" >


																<?php endforeach ?>
											</table>
										</div>
									</div>
									<div class="col-md-4">
										<table border="1" style="width: -webkit-fill-available; border: darkkhaki;">
   
												<tr>
																	<th>Họ Tên KH</th>
																<th>Liên Hệ</th>
																<th>Địa Chỉ</th>
																<th>Tổng tiền</th>
																</tr>
																<tr>
																	
																

																<?php foreach ($list as $key => $value):?>

																<td><?= $value['hoten'] ?></td>
																<td><?= $value['sdt'] ?></td>
																<td><?= $value['diachi'] ?></td>


																
																<input name="hoten" type="hidden"  value="<?= $value['hoten'] ?>" >
																<input name="sdt" type="hidden"  value="<?= $value['sdt'] ?>" >
																<input name="diachi" type="hidden"   value="<?= $value['diachi'] ?>" >

																<td>
																	
																	<?php echo $d; ?>
																</td>

																<?php endforeach ?>



															</tr>
										</table>
									</div>
								</div>

								

								<div class="" style="padding-top: 50px;">
									<input type="submit" name="save" class="btn btn-success btn-sm"  value="Xác nhận đơn hàng" title="xác nhận">
														<input type="submit" name="comback" class="btn btn-warning btn-sm" value="Huỷ đơn hàng">
								</div>					
								</div>
							</form>
							</tbody>
							
						<!-- </table> -->
						
						
						<!-- hien thi don hang -->
					</div>
					​ 

					<!-- het khung -->


				</div>

			</div>
		</div>
		


	</div>

















	<div class="container">


	
	


	







<!-- thanh toán  -->

		

												

													


















													
														
													

												

												
											
												

						
	
	</body>
</html>