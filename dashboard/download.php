
<?php 

session_start();
include('includes/db.php');

    if(isset($_GET['file_id'])){
        
        $file_id = $_GET['file_id'];
        
        $get_file = "SELECT * FROM `file` WHERE `file_id`='$file_id'";
        
        $run = mysqli_query($con,$get_file);
        
        $row  = mysqli_fetch_array($run);
        
     
      $f_name = $row['file_name'];
      $f_size= $row['file_size'];
      $f_type = $row['file_type'];
            
        
        $size = $f_size/1000;
                  
        }
        

     
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
    
    <title>HOME - CloudBlast </title>
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
    
     <style>
    
        td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    
    
    
    </style>
    
    
    
</head>

<body>
      <div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo">CLOUD DASHBOARD</a>
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
					<a class="waves-effect" href="index.html"><i class="menu-icon fa fa-home"></i><span>Home</span></a>
				</li>
				
				
			<!-- /.menu js__accordion -->
			<h5 class="title">Services</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Compute engine</span></a>
				</li>
                <li>
					<a class="waves-effect" href="storage.html"><i class="menu-icon fa fa-user"></i><span>Storage</span></a>
				</li>
                <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Cloud schedular</span></a>
				</li>
                <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Billing</span></a>
				</li>
                <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Monitoing</span></a>
				</li>
                <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>IAM</span></a>
				</li>
                <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Security</span></a>
				</li>
				
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">Account</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				 <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Account setting</span></a>
				</li> <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Usages</span></a>
				</li> <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Payments</span></a>
				</li> <li>
					<a class="waves-effect" href="user.html"><i class="menu-icon fa fa-user"></i><span>User Verification</span></a>
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
		<h1 class="page-title">Home</h1>
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
            <div class="col-md-2">
            <br /> <br /> <br />
            
            </div>
		  <form method="post" action="">
            
            <div class="col-md-8">
            
                <h3 class="text-center">DOWNLOAD STEP 1</h3>
                <br/>
            <table style="border-collapse: collapse;width:100%;">
                
                
                
            <tr>
                <th>File Id</th>
                  <td><?php echo "$file_id"; ?></td>
                </tr>
                <tr>
                <th>File Name</th>
                 <td><?php echo "$f_name"; ?></td>
                       </tr>
                    <tr>
                <th>File Size</th>
                   <td><?php echo "$size kb"; ?></td>
                           </tr>
                        <tr>
                <th>File Type</th>
                   <td><?php echo "$f_type"; ?></td>
                
                </tr>  
                  <tr>
                <th>User Password</th>
                   <td>  <div class="form-group"><!-- form-group Begin -->
                               
                             
                               
                               <input type="password" class="form-control" name="pass" required>
                               
                           </div><!-- form-group Finish --></td>
                
                </tr>  
                
                
                
              
               
             
             
             
                
                
               
                
                
                </table>
        
            <br /> <br /> <br /><br /> <br /> <br />
           <div class="row small-spacing text-center">
               
             
               <h5>Enter the key</h5>
          
                <input type="text" name="otp" style="width:800px"/> 
                
                </div><br /> 
                <div class="row small-spacing text-center">
                <button class="btn btn-info" name="request">Request</button>
               
                </div>
            </form>
            
            </div>
             <div class="col-md-2">
            <br /> <br /> <br />
                 
               
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row -->	   <br /> <br /> <br />
                 	
        <div class="row">
        
            <div class="col-md-4"></div>
            
            <div class="col-md-4"></div>
        
        
        </div>
        
          
            
		
	</div>
        
        
	<!-- /.main-content -->
</div><!--/#wrapper -->
           <footer class="footer text-center">
			<ul class="list-inline">
				<li>2019 @ Pika cloud.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
         
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
    
     
    
    
    
    
    
      if(isset($_POST['request'])){
          
          
          $pass = $_POST['pass'];
          
          
          
          
          $user = "SELECT * FROM `user` WHERE `user_pwd` ='$pass'";
          
          $run_user = mysqli_query($con,$user);
          
          $row_user = mysqli_fetch_array($run_user);
          
          $user_name = $row_user['user_name'];
          $user_mail = $row_user['user_mail'];
          
          
       
          $req = "INSERT INTO `request`(`file_id`, `file_name`, `user_name`, `user_mail`, `date`) VALUES ('$file_id','$f_name','$user_name','$user_mail',NOW())";
          
          $run  = mysqli_query($con,$req);
          
          if($run){
              
              
              echo "<script> alert('Requset Sent'); </script>";
              echo "<script> window.open('download_1.php?file_id=$file_id','_self') </script>";
              
              
              
              
          }
          
          
          
          
          
          
      }
    
    
    
    
    
    ?>
















