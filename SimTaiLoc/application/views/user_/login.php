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

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/styleLogin.css">
	
	
	<title>Đăng nhập</title>
</head>
<body>
	
	
    <div id="login">
        <h3 class="text-center text-white pt-5">Đăng Nhập SimTaiLoc</h3>
        <div class="container">

			<form action="<?php echo base_url(); ?>index.php/user/login/" method="post" id="form">



            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Đăng Nhập</h3>

                            <div><span class="success"><?php if(isset($b_Check) && $b_Check == false){echo "Tài khoản hoặc mật khẩu không đúng. Xin vui lòng đăng nhập lại !";}?></span></div>

                            <div class="form-group">
                                <label for="username" class="text-info">Tài Khoản:</label><br>
                               <input class="form" type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
								<span class="error"><?php echo form_error('username'); ?></span>

                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật Khẩu:</label><br>
                               <input class="form" name="password" type="password" value="<?php echo set_value('password'); ?>" size="50" />
								<span class="error"><?php echo form_error('password'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>ghi nhớ</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>

                                <input type="submit" id="save" name="submit" class="btn btn-info btn-md" value="Đăng Nhập">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo base_url(); ?>index.php/user/register" class="text-info">Đăng ký</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            </form> 
        </div>
    </div>





	<!-- <div id="body">
		<h2>Đăng nhập</h2>
		
	 	<form action="<?php echo base_url(); ?>index.php/user/login/" method="post" id="form">
			<fieldset>
				<legend>nhập thông tin để đăng nhập</legend>
				<div><span class="success"><?php if(isset($b_Check) && $b_Check == false){echo "Tài khoản không đúng. Xin vui lòng đăng nhập lại !";}?></span></div>
				<div>
					<label for="username">Tài Khoản</label>
					<input class="form" type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
					<span class="error"><?php echo form_error('username'); ?></span>
				</div>
				<div>
					<label for="password">Mật Khẩu</label>
					<input class="form" name="password" type="password" value="<?php echo set_value('password'); ?>" size="50" />
					<span class="error"><?php echo form_error('password'); ?></span>
				</div>
				<div><input type="submit" id="save" value="Đăng Nhập" />
				<button>
					<a href="<?php echo base_url(); ?>index.php/user/register">Đăng Ký</a>
				</button></div>
			</fieldset>
		</form> 

	</div> -->
</body>
</html>