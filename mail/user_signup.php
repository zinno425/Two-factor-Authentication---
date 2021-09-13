<?php include('includes/db.php'); ?>


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
                
                
                
         <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post" action="">
							<div class="img-container-block">
  <img src="logo.jpg" href="../index.php" alt="logo" style="max-width:400px">
</div>
					<span class="login100-form-title p-b-49">
						Sign UP
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">First name</span>
						<input class="input100" type="text" name="fname" placeholder="Type your first name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                   
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Full name is reauired">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lname" placeholder="Type your last name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                   
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email id is reauired">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="text" name="mail" placeholder="Mail id for the suffix - @pandamail.com">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                  
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Mobile no is reauired">
						<span class="label-input100">Mobile no</span>
						<input class="input100" type="text" name="mob" placeholder="Type your Mobile no">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                  
                   
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Password is reauired">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Re-Password is required">
						<span class="label-input100">Re-enter Password</span>
						<input class="input100" type="text" name="pass_1" placeholder="Re-Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					</br>
                </br>
            </br>
            </br>
        
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="signup">
								Sign Up
							</button>
						</div>
					</div>

					

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Already Registered?
						</span>

						<a href="cloud.php" class="txt2">
							LogIn
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

   if(isset($_POST['signup'])){

    
    $fname = $_POST['fname'];
 
    $lname = $_POST['lname'];
    
    $mail = $_POST['mail'];
    
    $mob = $_POST['mob'];
       
    
    
    $pass = $_POST['pass'];
       
       $newmail = $mail."@pandamail.com";
    
   
    
    
    
    $add_user = "INSERT INTO `mail_user`(`f_name`, `l_name`, `mail_id`, `pwd`, `mob_no`) VALUES ('$fname','$lname','$newmail','$pass','$mob')";
    
    $run = mysqli_query($con,$add_user);
    
    if($run)
       {
             
           echo "<script> alert('User Added Succesfull')</script>";
           echo" <script>window.open('index.php','_self')</script>";
                
                
        }
        else
        {
            
         echo"<script> alert('User Added Unuccesfull')</script>";
         echo"<script>alert('kindly provide correct credientials')</script>";
         echo"<script>window.open('user_signup.php','_self')</script>";
            
        }
   
    
}


?>
    