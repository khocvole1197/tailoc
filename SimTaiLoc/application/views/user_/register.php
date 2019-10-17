<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>SIMTAILOC</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/styleRegister.css">
	
	
	<title>Đăng ký</title>
</head>
<body>
	
	
<form action="<?php echo base_url(); ?>index.php/user/register" method="post" id="form">
	<fieldset>
		<div><span class="success"><?php if(isset($b_Check) && $b_Check == true){echo "Gửi Form thành công !";}?></span></div>
	<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Đăng ký thành viên Sim Số Đẹp TÀI LỘC</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="#">

                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Tài Khoản </label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                              <!--   <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tài khoản" /> -->

                                                <input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>"  placeholder="Nhập tài khoản" />
												<span class="error"><?php echo form_error('username'); ?></span>



                                            </div>
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Mật Khẩu </label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                           


                                                <input class="form-control" name="password" type="password" placeholder="Nhập mật khẩu" value="<?php echo set_value('password'); ?>" />
												<span class="error"><?php echo form_error('password'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="passconf" class="cols-sm-2 control-label">Nhập Lại Mật Khẩu </label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                              <input class="form-control" name="passconf" type="password" placeholder="Nhập lại mật khẩu" value="<?php echo set_value('passconf'); ?>"  />
												<span class="error"><?php echo form_error('passconf'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label"> Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input class="form-control" type="text" name="email" placeholder="Nhập email" value="<?php echo set_value('email'); ?>" size="50" />
											<span class="error"><?php echo form_error('email'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="sodt" class="cols-sm-2 control-label">Số Điện Thoại</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input class="form-control" type="text" name="sodt" placeholder="Nhập số điện thoại" value="<?php echo set_value('sodt'); ?>" />
												<span class="error"><?php echo form_error('sodt'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    
				
					
					
											<span >
												<input  type="checkbox"  name="dieukhoan" value="yes"/>
												Tôi chấp nhận <a href="#">
												điều khoản.</a>
											</span>
											<span class="error"><?php echo form_error('dieukhoan'); ?></span>
										
									
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Đăng Ký</button>

                                    </div>
                                    <div class="login-register">
                                        <a href="<?php echo base_url(); ?>index.php/user">Đăng Nhập</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
</fieldset>
</form>

<!-- 
	<div id="body">
		<h2>Đăng ký thành viên Sim Số Đẹp TÀI LỘC</h2>
		<form action="<?php echo base_url(); ?>index.php/user/register" method="post" id="form">
			<fieldset>
				<legend>nhập thông tin để đăng ký</legend>
				<div><span class="success"><?php if(isset($b_Check) && $b_Check == true){echo "Gửi Form thành công !";}?></span></div>
				<div>
					<label for="username">Tài Khoản :</label>
					<input class="form" type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
					<span class="error"><?php echo form_error('username'); ?></span>
				</div>
				<div>
					<label for="password">Mật Khẩu :</label>
					<input class="form" name="password" type="password" value="<?php echo set_value('password'); ?>" size="50" />
					<span class="error"><?php echo form_error('password'); ?></span>
				</div>
				<div>
					<label for="passconf">Nhập Lại Mật Khẩu :</label>
					<input class="form" name="passconf" type="password" value="<?php echo set_value('passconf'); ?>" size="50" />
					<span class="error"><?php echo form_error('passconf'); ?></span>
				</div>
				<div>
					<label for="email">Email :</label>
					<input class="form" type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
					<span class="error"><?php echo form_error('email'); ?></span>
				</div>
				<div>
					<label for="sodt">Số Điện Thoại :</label>
					<input class="form" type="text" name="sodt" value="<?php echo set_value('sodt'); ?>" size="50" />
					<span class="error"><?php echo form_error('sodt'); ?></span>
				</div>
				<div>
				
					
					
					<span >
						<input  type="checkbox"  name="dieukhoan" value="yes"/>
						Tôi chấp nhận <a href="#">
						điều khoản.</a>
					</span>
					<span class="error"><?php echo form_error('dieukhoan'); ?></span>
				
				</div>
				<div><input class ="ip_dangky" type="submit" id="save" value="Đăng Ký" /><input type="reset" id="save" value="Nhập Lại" /></div>

			</fieldset>
		</form>
	</div> -->
</body>
</html>