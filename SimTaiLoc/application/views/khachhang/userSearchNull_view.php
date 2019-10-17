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
				
				 <marquee width="100%" direction="left" >  <p style=" padding-left: 100px; margin-top: 0px;margin-bottom: 0px; color: blue"> Sim số đẹp Tài Lộc kính chúc quý khách năm mới an khang, thịnh vượng!</p></marquee>
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
							<form action="khachhang_showData/dataSearchUser" class="form-inline" method="post">
								<select name="cachtimkiem" style="margin: 0 15px">
											<option value="timso" selected >Tìm theo số</option>
											<option value="timgia">Tìm theo giá</option>
											<option value="timnhamang">Tìm theo nhà mạng</option>
											
										</select>
								<input id="Search" class="form-control mr-sm-2" name="gttimkiem" type="text" placeholder="Nhập..." aria-label="Search">
								<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="background: pink" >Tìm Kiếm</button>
								
								<b>Hướng dẫn tìm kiếm:</b>s
								Chọn Tìm sim theo số, tìm sim theo giá, tìm sim theo nhà mạng: sau đó nhập thông tin vào ô tìm kiếm và ấn 'tìm kiếm' để tìm kết quả. <br>
								- Tìm sim theo số <br>

								- Tìm sim theo giá <br>

								- Tìm sim theo nhà mạng <br>
							</form>
							
						</nav>
						<br>
						<!-- <h4>Sim Số Vinafone</h4>
						<p>Danh sách các số sim Vinafone hiện đang có bán tại cửa hàng</p> -->
						<!-- kết thúc tìm kiếm -->
<table class="table table-bordered">
							<thead class="thead-dark cente">
								
							</thead>

							<tbody class="thead">
								
							<h2>không có dữ liệu quý khách vừa tìm kiếm. hãy chắc chắn quý khách đã lựa chọn đúng thông tin cần tìm!</h2>
							<a href="../khachhang_showData" class=" text-center btn btn-block btn-link btn-lg">Quay Lại Trang Chủ</a>
										  
							</tbody>
						</table>

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

	
 


	</body>




	</html>