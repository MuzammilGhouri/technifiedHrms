<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Human Resource Management System</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/skin/default_skin/css/theme.css')); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/skin/default_skin/css/newTheme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('new/css/responsive.css')); ?>" />
    <!-- -------------- CSS - allcp forms -------------- -->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/allcp/forms/css/forms.css')); ?>">-->

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        input.user:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
        }
        input.password:active{
            -webkit-box-shadow: 0 0 0 30px white inset !important;
        }
        .wrappass:before {
            content: '';
            background: url(../../../../img/password-icon.png) no-repeat scroll 15px center;
            position: absolute;
            padding: 25px;
        }
        .wrapemail:before{
            content: '';
            background: url('../../../../img/user-icon.png') no-repeat left 15px center;
            position: absolute;
            padding: 25px;
        }
    </style>
    
    
</head>

<body class="utility-page sb-l-c sb-r-c" style="background:white">

<!-- -------------- Body Wrap  -------------- -->
<div class="wrapper">
	<aside class="left" style="background: url(<?php echo e(asset('img/login-bg.jpg')); ?>)" >
		<div class="logo">
			<div class="logo-main"> <img src="<?php echo e(asset('new/img/logonew.png')); ?>"> </div>
			<p> Perform your HR functions effortlessly and let your workforce access their data from anywhere, anytime. </p>
		</div>
		<div class="user-graphic-main m-hide"> <img src="<?php echo e(asset('new/img/user-graphic.png')); ?>"> </div>
		<div class="globe-main m-hide">
		    <img src="<?php echo e(asset('new/img/globe.gif')); ?>">
		</div>
	</aside>
	<aside class="right">
		<div class="lock-icon m-hide"> <img src="<?php echo e(asset('img/login-lock.png')); ?>"> </div>
		<div class="form-wrapper">
			<h2>User Login</h2>
			<div> </div>
			<?php echo Form::open(); ?>

				<input name="__RequestVerificationToken" type="hidden" value="O50x96SQeDYPhMbWm-fIIOIQnjbVJQ-FZyH00TvJNKiH3dY4cLqkFQSQRyN941UysfNx63b9bC6_U_8vdWk9uqN-Dur9seBm0DZu6AVKmPU1" autocomplete="off">
				<?php if(session('message')): ?>
                    <div class="alert <?php echo e(session('class')); ?>">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
				<div class="input-wrapper wrapemail">
				    <input type="text" name="email" id="email" class="gui-input user" placeholder="Email">
				</div>
				<div class="input-wrapper wrappass">
				    <input type="password" name="password" id="password" class="gui-input password" placeholder="Password">
				</div>
				<input type="submit" value="sign in" class="transition" autocomplete="off">
				<!--<div class="forgot-password"> <a href="/User/ForgotPassword">Forgot Password?</a> </div>-->
				<div class="clear"></div>
			<?php echo Form::close(); ?>

		</div>
		<footer>
			<div class="txt1"> Powered by <a href="#">Technified Labs ©</a> </div>
			<div class="txt2"> All Rights Reserved - 2023 </div>
		</footer>
	</aside>
	<div class="clear"></div>
	<div class="mob_login" style="background: url(<?php echo e(asset('img/login-bg.jpg')); ?>)">
	    <div class="login_img"> <img src="<?php echo e(asset('new/img/logonew.png')); ?>" class="" alt="logo"> </div>
		<div class="form-wrapper">
			<h2>User Login</h2>
			<div> </div>
			<?php echo Form::open(); ?>

				<input name="__RequestVerificationToken" type="hidden" value="O50x96SQeDYPhMbWm-fIIOIQnjbVJQ-FZyH00TvJNKiH3dY4cLqkFQSQRyN941UysfNx63b9bC6_U_8vdWk9uqN-Dur9seBm0DZu6AVKmPU1" autocomplete="off">
				<?php if(session('message')): ?>
                    <div class="alert <?php echo e(session('class')); ?>">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
				<input type="text" name="email" id="email" class="gui-input user" placeholder="Email">
				
				<input type="password" name="password" id="password" class="gui-input password" placeholder="Password">
				<input type="submit" value="sign in" class="transition" autocomplete="off">
				<!--<div class="forgot-password"> <a href="/User/ForgotPassword">Forgot Password?</a> </div>-->
				<div class="clear"></div>
			<?php echo Form::close(); ?>

		</div>
		<footer>
			<div class="txt1"> Powered by <a href="#">Technified Labs ©</a> </div>
			<div class="txt2"> All Rights Reserved - 2023 </div>
		</footer>
	</div>    
</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="<?php echo e(asset('assets/js/mapping.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery/jquery-1.11.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery/jquery_ui/jquery-ui.min.js')); ?>"></script>

<!-- -------------- CanvasBG JS -------------- -->
<script src="<?php echo e(asset('assets/js/plugins/canvasbg/canvasbg.js')); ?>"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="<?php echo e(asset('assets/js/utility/utility.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/demo/demo.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>