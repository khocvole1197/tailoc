<header class="container c">
			
			<nav class="navbar navbar-light bg-faded">


				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
					
					<ul class="nav navbar-nav">

						
						<div class="nav-item active" >
							
						</div>
						
						<li class="nav-item active">
							<a href="<?= base_url(); ?>index.php/khachhang_showData" class="nav-link">TRANG CHỦ</a>

						</li>
						<li class="nav-item active">
							<a href="<?= base_url(); ?>index.php/khachhang_showData/cart" name="thanhtoan" class="nav-link">THANH TOÁN </a>
						</li>
						<li class="nav-item active">
							<a href="<?= base_url(); ?>index.php/khachhang_showData" class="nav-link">CAM KẾT </a>
						</li>
						<li class="nav-item active">
							<a href="<?= base_url(); ?>index.php/khachhang_showData" class="nav-link">
								<p style="float: left;padding-right: 0px; text-align: center;padding: 0px;margin: 0px; padding-left: 57px; ">THU MUA SIM</p> <p style="text-align: left;padding: 0px;margin: 0px;"><img src="https://simthanglong.vn/images/new2.gif" alt=""></p></a>
						</li>
						<li class="nav-item active">
							<a href="<?= base_url(); ?>index.php/khachhang_showData/viewLienhe" class="nav-link">LIÊN HỆ</a>
						</li>
						
						
					</ul>
				</div>
			</nav>
			<div class="row" >







				<div  class="col-md-4" style="">
					
					
 
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" >giohang</button> -->

				</div>
				<div class="col-md-4" style=""></div>
				<div class="col-md-4" style=" text-align: right;">
					<div style="color: red;">
						
						<?php
						$info = $this->session->userdata('user');
						$is = $info['username'];
						
						
						if ($is) {
							# code...
							echo "	<button type='button' class='btn btn-light btn-sm' data-toggle='modal' data-target='#myModalCart'><i class='fa fa-cart-plus'></i></button>";
							echo "Xin chào: ";

							print_r($is);

							echo "<a href='http://localhost:8080/simtailoc/index.php/user/logout'><i>  đăng xuất <i></a>";

						}	
						
						else{ 
							
							echo "<a href='http://localhost:8080/simtailoc/index.php/user'>đăng nhập </a>"; echo "|"; echo "<a href='http://localhost:8080/simtailoc/index.php/user/register'> đăng ký</a>";


							
							 }	 ?>  <!-- <i class="fa fa-user-secret"
aria-hidden="true"></i><a href="<?php echo base_url();?>index.php/user/logout"
>Đăng xuất <i class="fa fa-sign-out" aria-hidden="true"></i></a> -->
						
					</div>
					
				</div>
			</div>

		</header>