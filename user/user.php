<?php

include('includes/db.php');

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
    
    <title>HOME - Cloud Blast </title>
    
    
    
    
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="extra/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="extra/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="extra/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="extra/css/main.css">
<!--=============================================================================================-->
    
    
    
    
    
   <link rel="stylesheet" href="assets/styles/style.min.css">
    

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

	<!-- Dark Themes -->
	<link rel="stylesheet" href="assets/styles/style-dark.min.css">
</head>

<body>
      <div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo">USER DASHBOARD</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html">Pikachu</a></h5>
			<h5 class="position">Administrator</h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
				</div>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Home</span></a>
				</li>
				
				
			<!-- /.menu js__accordion -->
			<h5 class="title">Log in</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
                <li>
					<a class="waves-effect" href="user.php"><i class="menu-icon fa fa-user"></i><span>User Panel</span></a>
				</li>
				
                <li>
					<a class="waves-effect" href="trustee.php"><i class="menu-icon fa fa-user"></i><span>Trustee</span></a>
				</li>
                <li>
					<a class="waves-effect" href="auth.php"><i class="menu-icon fa fa-user"></i><span>Authority</span></a>
				</li>
             
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">Account</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				 <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Account setting</span></a>
				</li> <li>
					<a class="waves-effect" href="dashboard/index.php"><i class="menu-icon fa fa-user"></i><span>Cloud dashboard</span></a>
				</li>
			
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->
    
            <div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">User Panel</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<!-- /.ico-item fa fa-fa-arrows-alt -->
		<div class="ico-item toggle-hover js__drop_down ">
			<span class="fa fa-th js__drop_down_button"></span>
			<div class="toggle-content">
				<ul>
					<li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
					<li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
					<li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
					<li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
					<li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
				</ul>
				<a href="#" class="read-more">More</a>
			</div>
			<!-- /.toggle-content -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<a href="#" class="ico-item fa fa-power-off js__logout"></a>
	</div>
	<!-- /.pull-right -->
</div>
    
    
    <div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">

            <div class="col-md-12" style="text-align: center;"> 
                
                
                
                    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post" action="" >
					<span class="login100-form-title p-b-49">
						User Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Usermail is reauired">
						<span class="label-input100">Usermail</span>
						<input class="input100" type="text" name="usermail" placeholder="Type your usermail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Proceed
							</button>
						</div>
					</div>


					

					<div class="flex-col-c p-t-155">
						<a href="user_signup.php" class="txt2">
							sign up
							
						</a>

						
                       
					</div>
				</form>
			</div>
		</div>
	</div>
            
              
            
            </div>
          
            
            
            
            
            
            
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
        <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
		<!-- /.row -->		
		<footer class="footer" style="text-align: center">
			<ul class="list-inline">
				<li>2019 @ cloud blast.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
          
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Percent Circle -->
	<script src="assets/plugin/percircle/js/percircle.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="assets/plugin/chart/chartist/chartist.min.js"></script>
	<script src="assets/scripts/chart.chartist.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="assets/plugin/moment/moment.js"></script>
	<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/scripts/fullcalendar.init.js"></script>

	<script src="assets/scripts/main.min.js"></script>

</body>
</html>
    
    <?php 
    
   if(isset($_POST['login'])){
       
       
        
        $usermail = $_POST['usermail'];
       
        $pass = $_POST['pass'];
        
        $get_user = "SELECT * FROM `user` WHERE `user_mail`='$usermail' AND `user_pwd`='$pass'";
        
        $run_user = mysqli_query($con,$get_user);
        
        $check_user = mysqli_num_rows($run_user); 
       
        
       
       
        
        
        if($run_user)
        
       {
            
             $user = "SELECT * FROM `user` WHERE `user_mail`='$usermail' ";
        
            $runn = mysqli_query($con,$user);
         
            $roww = mysqli_fetch_array($runn);
            
            $username = $roww['user_name'];
            
            
             $req = "INSERT INTO `otp`(`user_name`, `user_mail`, `otp`,`date`) VALUES ('$username','$usermail','null',NOW())";
        
        
        $runn = mysqli_query($con,$req);
        
        if($runn){
             $_SESSION['user_email']=$usermail;
           echo "<script> alert('Login Step 1 Succesfull')</script>";
           echo" <script>window.open('otp_verify.php','_self')</script>";
                
        }
        }
        else
        {
            
         echo"<script> alert('Login Step 1 Unuccesfull')</script>";
         echo"<script>alert('kindly provide correct credientials')</script>";
         echo"<script>window.open('user.php','_self')</script>";
            
        }
    }    
    
    ?>
    