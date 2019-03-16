<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('img/bg/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-b-30" style="padding-top: 30px;margin-top: 50px">
			<form class="login100-form validate-form" method="POST" action="routes/register.php">
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Username">
					<input class="input100" type="text" name="username" placeholder="UserName">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm password">
					<input class="input100" type="password" name="confirm-password" placeholder="Confirm password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign Up
					</button>
				</div>

				<div class="text-center p-b-20" style="padding-top: 25px">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c" style="padding-bottom: 20px;">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="img/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center p-b-20">
					<span class="txt1">
						Already registered?
						<a href="login.php" class="txt2 hov1">
						&nbsp;Sign In
					</a>
					</span>
				</div>

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>