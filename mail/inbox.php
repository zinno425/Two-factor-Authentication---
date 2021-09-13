<?php
session_start();
include('includes/db.php');

    
    
    

?>
<?php

$user_m = $_GET['mail'];


$details = "SELECT * FROM `mail_user` WHERE `mail_id`='$user_m'";

$runnd = mysqli_query($con,$details);

$rowwd = mysqli_fetch_array($runnd);

$name = $rowwd['f_name'];



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
    
    <title>PANDA </title>
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
		<a href="index.html" class="logo">PANDAMAIL</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="#"> <?php echo $name;?></a></h5>
			<h5 class="position"></h5>
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
					<a class="waves-effect" href="inbox.php"><i class="menu-icon fa fa-home"></i><span>Inbox</span></a>
				</li>
				
				
			<!-- /.menu js__accordion -->
			
			<!-- /.menu js__accordion -->
			<h5 class="title">Account</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
                 <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>PROFILE</span></a>
				</li>
				 <li>
					<a class="waves-effect" href="#"><i class="menu-icon fa fa-user"></i><span>PASSWORD CHANGE</span></a>
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
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<a href="compose.html" class="btn btn-danger btn-mail-main btn-block margin-bottom-20 waves-effect waves-light">COMPOSE</a>
				<div class="box box-solid">
					<div class="box-body">
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
								<span class="label-text-right pull-right"></span></a>
							</li>
							<li><a href="#"><i class="fa fa-envelope"></i> Sent</a></li>
							<li><a href="#"><i class="fa fa-file-text"></i> Drafts
								<span class="label-text-right pull-right"></span></a>
							</li>
							<li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label-right pull-right"></span></a>
							</li>
							<li><a href="#"><i class="fa fa-trash"></i> Trash</a></li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /. box -->
				<div class="box box-solid">
					<div class="box-body">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#"><i class="fa fa-circle-o text-primary"></i> Important</a></li>
							<li><a href="#"><i class="fa fa-circle-o text-success"></i> Promotions</a></li>
							<li><a href="#"><i class="fa fa-circle-o text-danger"></i> Social</a></li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col-md-3 col-xs-12 -->
			<div class="col-md-9 col-xs-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Inbox</h3>
						<div class="box-tools">
							<div class="has-feedback">
								<input type="text" class="form-control input-sm" placeholder="Search Mail">
								<span class="glyphicon glyphicon-search form-control-feedback"></span>
							</div>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<div class="mailbox-controls">
							<!-- Check all button -->
							<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-exclamation-circle"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-refresh"></i></button>
							<div class="pull-right">
								
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-left"></i></button>
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-right"></i></button>
								</div>
								<!-- /.btn-group -->
							</div>
							<!-- /.pull-right -->
						</div>
						<div class="table-responsive mailbox-messages">
							<table class="table table-hover table-striped">
								<tbody>
                                    <?php 
                                    
                                 
                                     $i=0;
          
                                $get_mail = "select * from mail";
          
                                $run_mail = mysqli_query($con,$get_mail);
          
                                while($row_mail = mysqli_fetch_array($run_mail)){
                                    
                                   $mail_id = $row_mail['email_id'];
                                   $subject = $row_mail['subject'];
                                   $sender_name = $row_mail['sender_name'];
                                   $date = $row_mail['date'];
                                   $id = $row_mail['mail_id'];
                                    
                                    
                                  
                                    
                                    
                                    if($mail_id == $_GET['mail']){
                                    
                                    
                                    
                                    ?>








									<tr>
										<td><input type="checkbox"></td>
										
										<td class="mailbox-name"><a href="mail.php?id=<?php echo $id;?>"><?php echo $sender_name;?></a></td>
										<td class="mailbox-subject"><span class="mailbox-subject-title"><?php echo $subject;?></span> 
										</td>
										<td class="mailbox-attachment"></td>
										<td class="mailbox-date"><?php echo $date;?></td>
									</tr>
								<?php  }
                                }
                                    
                                    ?>
								</tbody>
							</table>
							<!-- /.table -->
						</div>
						<!-- /.mail-box-messages -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer no-padding">
						<div class="mailbox-controls">
							<!-- Check all button -->
							<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-exclamation-circle"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-refresh"></i></button>
							<div class="pull-right">
								
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-left"></i></button>
									<button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-right"></i></button>
								</div>
								<!-- /.btn-group -->
							</div>
							<!-- /.pull-right -->
						</div>
					</div>
				</div>
				<!-- /. box -->
			</div>
			<!-- /.col-md-9 col-xs-12 -->
		</div>
        <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
		<!-- /.row -->		
		<footer class="footer" style="text-align: center">
			<ul class="list-inline">
				<li>2019 @ PANDAMAIL.</li>
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
    