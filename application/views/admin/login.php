<!DOCTYPE html>
<html lang="en">
<head>
	<title>TigaDewaAdventure - Indonesia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/png" href="<?=base_url()?>assets/images/tigadewa.png">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_login/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('index.php/Login/do_login')?>">
					<span class="login100-form-title p-b-16">
						Welcome Admin
					</span>
					<span class="login100-form-title p-b-48">
                        <img src="<?=base_url();?>assets/images/tigadewa.png" width="100px;" alt="">
                    </span>
                    
                    <?php
                            $notifikasi = $this->session->flashdata('notif_gagal');
                            if ($notifikasi != null) {
                                echo '
                                    <div class="alert alert-danger text-center" style="color:red;">
                                        '.$notifikasi.'
                                    </div>
                                ';
                            }
                        ?>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="username">
                            <span class="focus-input100" data-placeholder="Username"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <input style="background-color:#fe6700" class="login100-form-btn" type="submit" value="Login" name="login">
                                <!-- <input class="login100-form-btn" type="submit" value="login"
                                    style="background-color: #fe6700"> -->
                            </div>
                        </div>

					<div class="text-center p-t-45">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="<?=base_url()?>assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="<?=base_url()?>assets_login/vendor/animsition/js/animsition.min.js"></script>

	<script src="<?=base_url()?>assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="<?=base_url()?>assets_login/vendor/select2/select2.min.js"></script>

	<script src="<?=base_url()?>assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url()?>assets_login/vendor/daterangepicker/daterangepicker.js"></script>

	<script src="<?=base_url()?>assets_login/vendor/countdowntime/countdowntime.js"></script>

	<script src="<?=base_url()?>assets_login/js/main.js"></script>

</body>
</html>