  <?php 
            include('includes/db.php');
   if(isset($_SESSION['auth_mail'])){
        $auth_session = $_SESSION['auth_mail'];
        
        $get_auth = "SELECT * FROM `authority` WHERE  auth_mail='$auth_session'";
        
        $run_auth = mysqli_query($con,$get_auth);
        
        $row_auth = mysqli_fetch_array($run_auth);
        
       
        $auth_name = $row_auth['auth_name'];
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
    
    <title>HOME - Pika cloud </title>
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
		<a href="index.html" class="logo">AUTHORITY DASHBOARD</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="#"><?php 
                   
                   if(!isset($_SESSION['auth_mail'])){
                       
                       echo "Guest";
                       
                   }else{
                       
                       echo $auth_name;
                       
                   }
                   
                   ?>
                
                </a></h5>
			<h5 class="position">Administrator</h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
					<div class="control-item"><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
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
					<a class="waves-effect" href="user.php"><i class="menu-icon fa fa-user"></i><span>REQUESTS</span></a>
				</li>
				<li>
					<a class="waves-effect" href="cloud.php"><i class="menu-icon fa fa-user"></i><span>CLOUD FILES</span></a>
				</li>
                <li>
					<a class="waves-effect" href="trustee.php"><i class="menu-icon fa fa-user"></i><span>USER'S</span></a>
				</li>
               
             
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">Account</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				 <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>Account setting</span></a>
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

          <div class="col-md-6">
            
            
              <div id="content"><!-- #content Begin -->
                  <br/>
           <br/>
           <br/>
           <br/>

       <div class="container"><!-- container Begin -->
         
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
  
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> UPLOAD FILE </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="" method="post" enctype="multipart/form-data" ><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>CHOOSE FILE</label>
                               
                               <input type="file" class="form-control" name="files" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>CHOOSE FILE TYPE</label>
                               
                               <select  class="form-control" name="file_type" required>
                                   
                                   <option>SELECT TYPE</option>
                                   <option value="Text">TEXT</option>
                                   <option value="Image">IMAGES</option>
                                   <option value="Audio">AUDIO</option>
                                   <option value="Video">VIDEO</option>
                                   
                                   
                                   
                               </select>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Password</label>
                               
                               <input type="password" class="form-control" name="pass" required>
                               
                           </div><!-- form-group Finish -->
                           
                         
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="upload" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> UPLOAD
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
            
            
            
            
            
            
            
            
            
            </div>
          <div class="col-md-3"></div>
          
            
            
            
            
            
            
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
        <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
		<!-- /.row -->		
		<footer class="footer" style="text-align: center">
			<ul class="list-inline">
				<li>2019 @ cloudBlast.</li>
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
    

    
    
      if(isset($_POST['upload'])){
          
          $files = $_FILES['files']['name'];
          $file_size = $_FILES['files']['size'];
          
          $temp_name = $_FILES['files']['tmp_name'];
    
         move_uploaded_file($temp_name,"../dashboard/data/$files");
          
        $file_type = $_POST['file_type'];
        
          
        
          $pass = $_POST['pass'];
          
          
          $verify = "SELECT * FROM `authority` WHERE `auth_pwd` = '$pass'";
          
          
          $run = mysqli_query($con,$verify);
          
          if($run){
              
              
              $upload = "INSERT INTO `file`(`file_name`, `file_size`, `file_type`, `date`) VALUES ('$files','$file_size','$file_type',NOW())";
                  
                  
             $runn = mysqli_query($con,$upload);
              
             if($runn){
                 
                 echo "<script>alert('File has been sucessfully uploaded')</script>";
                 echo "<script>window.open('file.php','_self')</script>";
                 
             }
              else{
                  
                  echo "<script>alert('File uploading unsucessfull')</script>";
                  echo "<script>window.open('file.php','_self')</script>";
                  
              }
              
          }
          else
          {
                 echo "<script>alert('Wrong password')</script>";
                 echo "<script>window.open('file.php','_self')</script>";
              
          }
          
          
          
       
          
          
      }
    
    ?>
    