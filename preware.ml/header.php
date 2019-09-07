<?php
session_start();
if(!empty($_GET['a']))
{
	session_unset();
}
if($_SESSION['name']=="")
{
	header("location: login.php");
}
?>
<head>
<title>Curative a Medical Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Curative a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<!-- Header -->
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
			<div class="w3_fr">
				<a href="#">Email Us</a>
				<a href="#contact" class="scroll">How to find us</a>
				
				</div>
			</div>
			<div class="bottom_header_right">
				<div class="bottom-social-icons">
					<a class="facebook" href="#">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="twitter" href="#">
						<span class="fa fa-twitter"></span>
					</a>
					<a class="pinterest" href="#">
						<span class="fa fa-pinterest-p"></span>
					</a>
					<a class="linkedin" href="#">
						<span class="fa fa-linkedin"></span>
					</a>
				</div>
				<div class="head-search">
				<form action="#" method="post">
				  <div class="formborder">
						<input type="text" placeholder="Search..." name="search" required="">
						<input name="submit" type="submit" value="">
				  </div>
				</form>
			</div>


				
				
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">
							<h1>
								CURATIVE
								<label>For A Better Treatment</label>
							</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">Home</a>
								</li>
								<li>
									<a href="#about" class="scroll">About</a>
								</li>
								<li>
									<a href="#services" class="scroll">Services</a>
								</li>
								<li>
									<a href="#testimonials" class="scroll">Testimonials</a>
								</li>
								
								<li>
									<a href="bookingoption.php" >Book Appointment</a>
								</li>
								<li>
									<a href="#contact" class="scroll">Contact Us</a>
								</li>
								<li>
									<a href="" >Hello, <?php echo $_SESSION['name'] ?></a>
								</li>
								<li><a href="index.php?a=12"><em class="fa fa-sign-out"></em> Logout</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<div class="headerdown">
	<div class="container">
	<div class="col-md-4 col-sm-4 w3_hl">
	<div class="w3l_l">
	<i class="fa fa-phone-square" aria-hidden="true"></i>
	</div>
	<div class="w3l_r">
	<h3>call Today +91-9694268079</h3>
	<h5>Ask for Doctor</h5>
	</div>
	
	</div>
	
	<div class="col-md-4 col-sm-4 w3_hc">
	<div class="w3l_cl">
	<i class="fa fa-clock-o" aria-hidden="true"></i>
	</div>
	<div class="w3l_cr">
	<h3>Open Hours</h3>
	<h5>Mon-sun(08:00-23:00 hrs)</h5>
	</div>
	
	</div>
	
	<div class="col-md-4 col-sm-4 w3_hr">
	<div class="w3l_rl">
	<i class="fa fa-book" aria-hidden="true"></i>
	</div>
	<div class="w3l_rr">
	<a href="#appointmentform" class="scroll">
	<h3>For an Appointment</h3>
	<h5>Book Now</h5>
	</a>
	</div>
	
	
	
	</div>
	<div class="clearfix"></div>
	</div>
	</div>