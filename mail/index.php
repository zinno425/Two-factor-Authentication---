
<?php
session_start();
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
    
    <title>PANDA MAIL </title>
       
    
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
     

    
    <div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">

            <div class="col-md-12" style="text-align: center;">           
              <h1>PANDAMAIL</h1>
            
            </div>
            
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
				<li>2019 @ PandaMail.</li>
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
        
        $get_user = "SELECT * FROM `mail_user` WHERE `mail_id`='$usermail' AND `pwd`='$pass'";
        
        $run_user = mysqli_query($con,$get_user);
        
        $check_user = mysqli_num_rows($run_user);
        
        
        if($run_user)
        
       {
             $_SESSION['user_email']=$usermail;
           echo "<script> alert('Login Succesfull')</script>";
           echo" <script>window.open('inbox.php?mail=$usermail','_self')</script>";
                
                
        }
        else
        {
            
         echo"<script> alert('Login Step 1 Unuccesfull')</script>";
         echo"<script>alert('kindly provide correct credientials')</script>";
         echo"<script>window.open('user.php','_self')</script>";
            
        }
    }    
    
    ?>
    