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
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/event.js"> 
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
						$lever =  $info['lever'];

						if ($lever=='admin') {
							# code...
							echo "Xin chào: ";

							print_r($is);
							// print_r($info);	
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
				<div class="col-md-10 ">
					<!-- khung  -->
					<div class="container">
						<div class="">
							
								<div class=" ">
								
										<!-- ben trai -->
										
										<!-- het ben trai -->
										<!-- o giua -->
										<div >
											<!-- tìm kiếm	 -->	
											<div style="margin-top: 25px;">
												<h3 class="text-xs-center"> Thông Tin Sim Đang Bán</h3>	
											</div>	
											<br>
											<div style="margin-top: 20px;">
												<!-- them moi -->
												<div class="container">
													<!-- Button to Open the Modal -->
													<button type="button" class="btn btn-primary centeradd" data-toggle="modal" data-target="#myModal">
														Thêm Mới
													</button>
													<!-- The Modal -->
													<div class="modal fade " id="myModal">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title">Thêm Mới Số Sim</h4>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																</div>
																<form action="<?php echo base_url(); ?>index.php/showData/addData" method="post" enctype="multidata/form-data"> 	
																	<div class="modal-dialog">
																		<div style="color: red;text-align: center;">
																			<?php 
																			if ($is) {
																					
																						# code...
																				echo "Quản trị viên:"; 
																			
																			$info = $this->session->userdata('user');
																			$is = $info['username'];
																			print_r($is);
																					}
																					else{
																						echo "Cảnh báo: bạn phải đăng nhập để thêm dữ liệu!";
																					}		
																			?>

																			 <i class="fa fa-user-secret" aria-hidden="true"></i>
																			<input type="text" name="is" hidden value="<?=$is?>">
																		</div>
																		<div class="modal-content">
																			<div class="modal-body">
																				<div class="card">
																					<div class="card-block">
																						<fieldset class="form-group">
																							<input name="id" type="text" class="form-control" id="formGroupExampleInput1"  hidden>
																						</fieldset>
																						<fieldset class="form-group">
																							<label for="formGroupExampleInput"><b>Số Sim:</b> </label>
																							<input name="so" id="so" type="text" class="form-control" id="formGroupExampleInput" onkeypress='validate(event)'  maxlength="10">		
																						</fieldset>
																						<fieldset class="form-group">
																							<label for="formGroupExampleInput1"><b>Giá Sim:</b></label>
																							<input name="gia" id="gia" type="text" class="form-control" id="formGroupExampleInput1" onkeypress='validate(event)'>
																						</fieldset> 
																						<fieldset class="form-group">
																							<form>
																								<label for="nhamang"><b> Chọn nhà mạng (Chỉ được chọn một):</b> </label>
																								<select class="form-control" id="nhamang" name="nhamang">
																									<option> </option>
																									<option value="http://simthainguyen.vn/images/network/1.gif">Viettel</option>
																									<option value="http://simthainguyen.vn/images/network/3.gif">Vinaphone</option>
																									<option value="http://simthainguyen.vn/images/network/2.gif">Mobifone</option>
																									<option value="http://simthainguyen.vn/images/network/4.gif">Vietnamobile</option>
																								</select>
																							</form>	
																						</fieldset>

																					</div>

																				</div>

																			</div>
																			<div class="modal-footer">
																				
																				<input type="submit" class="btn btn-success " value="Lưu" title="lưu lại"> 
																				<!-- <input type="button" class="btn btn-success  nut nutxulyAjax " name="" value="Thêm" accept="" data-dismiss="modal">		 -->						
																				<button type="button" class="btn btn-danger" data-dismiss="modal">Huỷ</button>
																			</div>

																		</div>
																	</div>
																</div>  
																<!-- </form> -->
															</div>													
														</form> 
													</div>
												</div>
											</div>  

											<!-- </form> -->
										</div>

										<!-- het them -->
									</div>
									<!-- kết thúc tìm kiếm -->
									<table class="table table-bordered table-striped" style="margin-top: 20px;">
									<thead class="thead-dark">
										<tr style="background: #bebeeb">									
											<th style="text-align: center; width: 253.5px" scope="">Số Sim</th>
											<th style="text-align: center;width: 253.5px" scope="">Giá Bán</th>
											<th style="text-align: center; width: 253.5px" scope="">Nhà Mạng</th>
											<th style="text-align: center;width: 253.5px" scope="">Xử Lý</th>						
										</tr>
									</thead>
									<tbody class="thead">
										<?php foreach ($dulieutucontroller as $key => $value): ?>
											<tr>
												<input type="hidden" style="" name="id" class="form-control" id="formGroupExampleInput" value="<?= $value['id'] ?>">
												<td ><?= $value['so'] ?></td>
												<td style="text-align: center; "> <?= $value['gia'] ?></td>
												<td >
													<span class="n1" style="background-image: url(<?=$value['nhamang'] ?>);height: 22px;margin: auto;width: 75px;display: block;"> </span>
												</td>
												<td style="text-align: center; ">
													<a href="showData/deleteData/<?= $value['id'] ?> " class="btn btn-danger xoa btn-sm" title=" xóa sim đang bán" onclick="return confirm('Bạn chắc chắn muốn gỡ xuống khỏi của hàng?');"> 
														<i class="fa fa-trash"></i> 

													</a> | 												
													<button type="button" class="btn btn-warning btns btn-sm" data-toggle="modal" data-target="#<?= $value['id'] ?>" title=" Sửa sim đang bán" >													
														<i class="fa fa fa-edit"></i>												
													</button>
													<!-- het form -->																						
												</td>											
											</tr>																		
										<?php endforeach ?>
									</tbody>								
								</table>						
								<!-- het o giua -->

								<!-- ben phai -->

								
							</div>
						</div>
					
				</div>
			</div>
			<!-- het khung -->
		</div>
	</div>

</div>
 <!-- update data -->
<?php foreach ($dulieutucontroller as $key => $value): ?>
	<div class="container">
		<!-- Button to Open the Modal -->
		
		<!-- The Modal -->
		<form action="<?php echo base_url(); ?>index.php/showData/updateData" method="post" enctype="multidata/form-data"> 
			<div class="modal fade " id="<?= $value['id'] ?>" >
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Sửa Thông Tin: <?= $value['so'] ?></h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div style="color: red;text-align: center;">
																			<?php 
																			if ($is) {
																					
																						# code...
																				echo "Quản trị viên:"; 
																			
																			$info = $this->session->userdata('user');
																			$is = $info['username'];
																			print_r($is);
																					}
																					else{
																						echo "Cảnh báo: bạn phải đăng nhập để sửa dữ liệu!";
																					}		
																			?>

																			 <i class="fa fa-user-secret" aria-hidden="true"></i>
																			<input type="text" name="is" hidden value="<?=$is?>">
																		</div>
							<div class="card">
								<div class="card-block">
									<fieldset class="form-group">										
										<input name="id" type="text" class="form-control" id="formGroupExampleInput1" value="<?= $value['id'] ?>" hidden>
									</fieldset>
									<fieldset class="form-group">
										<label for="formGroupExampleInput"><b>Số Sim:</b> </label>
										<input name="so" id="so" type="text" class="form-control" id="formGroupExampleInput" value="<?= $value['so'] ?>"  onkeypress='validate(event)'  maxlength="10">		
									</fieldset>
									<fieldset class="form-group">
										<label for="formGroupExampleInput1"><b>Giá Sim:</b></label>
										<input name="gia" id="gia" type="text" class="form-control" id="formGroupExampleInput1" value="<?= $value['gia'] ?>"  onkeypress='validate(event)'  >
									</fieldset> 
									<fieldset class="form-group">
										<form>
																													
											<label for="nhamang"><b> Chọn nhà mạng (Chỉ được chọn một):</b> </label>
											<select class="form-control" id="nhamang" name="nhamang">

												<option value="<?= $value['nhamang'] ?>">...</option>

												<option value="http://simthainguyen.vn/images/network/1.gif">Viettel</option>
												<option value="http://simthainguyen.vn/images/network/3.gif">Vinaphone</option>
												<option value="http://simthainguyen.vn/images/network/2.gif">Mobifone</option>
												<option value="http://simthainguyen.vn/images/network/4.gif">Vietnamobile</option>
											</select>
										</form>											
									</fieldset>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-success " value="Lưu" title="lưu lại" onclick="return confirm('Lưu?');"> 
							<!-- <input type="button" class="btn btn-success  nut nutxulyAjax " name="" value="Thêm" accept="" data-dismiss="modal">		 -->						
							<button type="button" class="btn btn-danger" data-dismiss="modal">Huỷ</button>
						</div>

					</div>
				</div>
			</div>  
			<!-- </form> -->
		</div>	
	</form> 
<?php endforeach ?>
 <!-- end update data -->

<script type="text/javascript">

	function validate(evt) { // ham chi cho nhap so
		var theEvent = evt || window.event;

		  // Handle paste
		  if (theEvent.type === 'paste') {
		  	key = event.clipboardData.getData('text/plain');
		  } else {
		  // Handle key press
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode(key);
		}
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}
</script>

</body>

</html>