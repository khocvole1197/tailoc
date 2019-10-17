<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIMTAILOC</title>
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
				
				<marquee width="100%" direction="left" >  <p style=" padding-left: 100px; margin-top: 0px;margin-bottom: 0px; color: blue">

					<?php 


					$info = $this->session->userdata('user');
					$is = $info['username'];


					if ($is) {

							# code...
						echo "Xin chào: ";

						print_r($is);
					}	
					?>
				Sim số đẹp Tài Lộc kính chúc quý khách năm mới an khang, thịnh vượng!</p></marquee>
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
						





						<!-- tìm kiếm	 -->		


						<nav class="navbar navbar-light bg-light">
							<form action="khachhang_showData/dataSearchUser" class="form-inline" method="post" style="font-size: 14px;">
								<select name="cachtimkiem" style="margin: 0 15px">
									<option value="timso" selected >Tìm theo số</option>
									<option value="timgia">Tìm theo giá</option>
									<option value="timnhamang">Tìm theo nhà mạng</option>

								</select>
								<input id="Search" class="form-control mr-sm-2" name="gttimkiem" type="text" placeholder="Nhập..." aria-label="Search">
								<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="background: pink" >Tìm Kiếm</button>
								
								<b>Hướng dẫn tìm kiếm:</b>
								Chọn Tìm sim theo số, tìm sim theo giá, tìm sim theo nhà mạng: sau đó nhập thông tin vào ô tìm kiếm và ấn 'tìm kiếm' để tìm kết quả. <br>
								- Tìm sim theo số <br>

								- Tìm sim theo giá <br>

								- Tìm sim theo nhà mạng <br>
							</form>
							
						</nav>
						<br>
						<h5>Sim Số Đẹp</h5>
						<div style="font-size: 14px;">
							<b>Sim Số Đẹp</b>  giá rẻ các mạng Viettel, Mobi, Vina. Bán Sim số đẹp giá gốc, đăng ký thông tin chính chủ. Giao sim số đẹp miễn phí Toàn Quốc.
						</div>
						


						<!-- kết thúc tìm kiếm -->
						<table class="table table-bordered table-striped">
							<thead class="thead-dark cente ">
								<tr>
									
									<th scope="" style="padding: 6px;">Số Sim</th>
									<th scope=""  style="padding: 6px;">Giá Bán</th>
									<th scope=""  style="padding: 6px;">Nhà Mạng</th>
									<th scope=""  style="padding: 6px;">Đặt Mua</th>
								</tr>
							</thead>


							<tbody class="thead">
								<tr>
									<?php foreach($post->result() as $row): ?> 
										<form action="http://localhost:8080/simtailoc/index.php/khachhang_showdata/thanhtoan"  method="POST" enctype="multidata/form-data">


											<input name="so" hidden type="text" class="form-control" id="formGroupExampleInput" value="<?= $row->so ?>">
											<input name="gia" hidden type="text" class="form-control" id="formGroupExampleInput" value="<?= $row->gia ?>">
											<input name="nhamang" hidden type="text" class="form-control" id="formGroupExampleInput" value="<?= $row->nhamang ?>">
											<td style="padding: 6px;vertical-align: inherit;">												
												<?php echo $row->so; ?></td>
												<td style="padding: 6px;vertical-align: inherit;"><?php echo $row->gia; ?></td>
												<td style="padding: 6px;vertical-align: inherit;">
													<span class="n1" style="background-image: url(<?=$row->nhamang ?>);height: 22px;margin: auto;width: 75px;display: block;"> </span>








												</td>

												<td style="padding: 6px;vertical-align: inherit;"> 

													<?php
						$info = $this->session->userdata('user');
						$is = $info['username']; 
					
						if ($is) {

								echo "<input name='btnMua' type='submit' class='btn btn-success  btn-sm' value='Mua'> </input>";
								
							# code...
						}
						else{
								echo "<a href='http://localhost:8080/simtailoc/index.php/user/login '' class='btn btn-success  btn-sm' title='mua sim'>mua</a>";
						}

						?>


													<!-- <a href="<?php echo base_url(); ?>index.php/user/login " class="btn btn-success  btn-sm" title="mua sim" >mua</a>
 -->







													<!-- <a href="<?php echo base_url(); ?>index.php/khachhang_showData/editSim/<?= $row->id ?> " class="btn btn-success  btn-sm" title="mua sim" >mua</a> -->
													<!-- <button type="submit" style="    width: 25px;color: red;background: white;"> -->







						<?php
						$info = $this->session->userdata('user');
						$is = $info['username'];
						
						
						if ($is) {
							# code...
							
						

						}	
						
							 ?> 


														<!-- <button type='submit' class='btn btn-info btn-sm' ><i class='fa fa-cart-plus'></i></button> -->












														<!-- <input  name="save" method="post" id="formGroupExampleInput" class="btn btn-danger" placeholder="" value="s"> -->
													</td>

												</tr>

											</form>
										<?php endforeach;?>
									</tbody>




								</table>
								<div class="paging" style="text-align: center;"><?php echo $paginator; ?></div>

								<!-- Modal -->

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
				<div>

				</div>

				<!-- The Modal cart-->
				<div class="modal" id="myModalCart">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Giỏ hàng của bạn</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<table border="1px" style="width: 100%;">
									<thead>
										<tr>
											<th>Số sim</th>
											<th>giá bán</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<?php $d = 0; ?>
										<?php foreach ($mangketqua as $key => $value):?>
											<?php  			
											$num =  $value->gia;
											$num = (int)$num;
											$d=(int)$d;
											$d += $num;
											?>
											<tr>
												<td><?= $value->sdt ?></td>
												<td><?= $value->gia ?></td>
												<td >
													<!-- <a href="" class="btn btn-success"  >xoa</a> -->
													<a href="khachhang_showdata/delete_json/<?= $value->sdt ?>" class="btn  btn-sm" title=" xóa sim đang bán" onclick="return confirm('Bạn chắc chắn muốn gỡ xuống khỏi giỏ hàng?');"> 
														<i class="fa fa-trash"></i> 
													</td>

												</tr>

											<?php endforeach ?>

										</tbody>
									</table>
								</div>

								<!-- Modal footer -->
								<p>Tổng Tiền:  <?php echo $d; ?></p>
								<div class="modal-footer">
									<a href="khachhang_showData/cart"> <input  type="submit" class="btn btn-success " value="Thanh Toán" title="lưu lại" onclick="return confirm('Xác Nhận?');"> </a>

									

									<button  type="button" class="btn btn-danger" data-dismiss="modal">Chọn Tiếp</button>
								</div>

							</div>
						</div>
					</div>
					<!-- endmodal -->
	</body>
</html>