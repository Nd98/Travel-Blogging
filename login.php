<?php
	session_start();
	if(isset($_SESSION['username'])){
		header('Location: index.php');
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- ==============================================================================================-->
<script src="js/bootstrap-notify.js"></script>
<!-- ============================================================================================= -->
</head>
<body>
	
	<div class="container-login100" style="background-image: url('img/bg/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-b-30" style="padding-top: 30px;margin-top: 50px">
			<form class="login100-form validate-form" method="POST" action="routes/login.php">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="Username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

				<!-- <div class="text-center p-b-20" style="padding-top: 25px">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c" style="padding-bottom: 20px">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="img/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div> -->

				<div class="text-center p-b-20" style="padding-top:30px">
					<span class="txt1">
						Not yet registered?
						<a href="signup.php" class="txt2 hov1">
						&nbsp;Sign Up
					</a>
					</span>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

<script>
  function setNotify(message){

    $.notify({
        title: "",
        message: message,
        icon: '',
        target: "_blank"
        },{

        // where to append the notification
        element: 'body',

        // static | fixed | relative | absolute
        position: 'absolute',

        // notification type
        type: "error",

        // is dismissable?
        allow_dismiss: true,

        // allows duplicate notifications
        allow_duplicates: true,

        // put the newest notification on the top
        newest_on_top: false,

        // shows a progress bar
        showProgressbar: false,

        // placement options
        placement: {
            from: "top",
            align: "right"
        },

        // offset in pixels
        offset: 20,

        // space between notifications
        spacing: 10,

        // z-index property
        z_index: 1031,

        // delay in milliseconds
        delay: 5000,

        // timer in millisconeds
        timer: 1000,

        // URL target property
        url_target: '_blank',

        // pause the timer on hover
        mouse_over: null,

        // animation options
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },

        // or 'image'
        icon_type: 'class',

        // custom template
        template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" style="background-color:#bd59d4;color:white" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
        
		});
	}

    </script>

<?php 
	if(isset($_SESSION['error']))
	{
		echo '<script>setNotify("'.$_SESSION['error'].'");</script>';
	}

	session_unset();
?>

	
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