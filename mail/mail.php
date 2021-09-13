<?php
session_start();
include('includes/db.php');

?>



<?php

   if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    
    $mail = "SELECT * FROM `mail` WHERE `mail_id` = '$id'";
    
    $runr = mysqli_query($con,$mail);
    
    $rowr = mysqli_fetch_array($runr);
       
       
    
    $sender_mail = $rowr['sender_mail'];
    $umail = $rowr['email_id'];
    $subject = $rowr['subject'];
    $content = $rowr['content'];
    $date = $rowr['date'];
    

   }
    
    

?>
<?php




$details = "SELECT * FROM `mail_user` WHERE `mail_id`='$umail'";

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
    
    <title>PANDAMAIL </title>
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
					<a class="waves-effect" href="inbox.php?mail=<?php echo $umail?>"><i class="menu-icon fa fa-home"></i><span>INBOX</span></a>
				</li>
				
				
			
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
				<a href="compose.html" class="btn btn-danger btn-mail-main btn-block margin-bottom-20 waves-effect waves-light">Compose</a>
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
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Read Mail</h3>
						<div class="box-tools pull-right">
							<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
							<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<div class="mailbox-read-info">
							<h3><?php echo $subject;?></h3>
							<h5>From: <?php echo $sender_mail; ?>
								<span class="mailbox-read-time pull-right"><?php echo $date; ?></span>
							</h5>
						</div>
						<!-- /.mailbox-read-info -->
						<div class="mailbox-controls with-border text-center">
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" data-container="body" title="Delete"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" data-container="body" title="Reply"><i class="fa fa-reply"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" data-container="body" title="Forward"><i class="fa fa-share"></i></button>
							<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
						</div>
						<!-- /.mailbox-controls -->
						<div class="mailbox-read-message">
							<?php echo $content;?>
						</div>
						<!-- /.mailbox-read-message -->
					</div>
					<!-- /.box-body -->
				
					<!-- /.box-footer -->
					<div class="box-footer">
						<div class="pull-right">
							<button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-reply"></i> Reply</button>
							<button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-share"></i> Forward</button>
						</div>
						<button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-trash-o"></i> Delete</button>
						<button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-print"></i> Print</button>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /. box -->
			</div>
			<!-- /.col-md-9 col-xs-12 -->
		</div>
		<!-- /.row -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2019 © PandaMail.</li>
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
    