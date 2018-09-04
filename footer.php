<?php
require_once("admin/connection.php");
if(isset($send))
{	
	mysql_query("insert into feedback set name='".$name."',email='".$email."',feedback='".$message."'");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<div class="contact" id="contact">
	<div class="container">
		<div class="f-bg-w3l">
		<h3>CONTACT US</h3>
				<div class="col-md-4  w3layouts_footer_grid1">
				<div class="form-bg-w3ls">
					<h4 class="subhead-agileits white-w3ls">Get in Touch</h4>
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" name="email" placeholder="Email" required="">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<div class="w3_cs">
						<input name="send" type="submit" value="SEND" class="button-w3layouts hvr-rectangle-out">
						</div>
					</form>
				</div>	
				</div>
				<div class="col-md-4  w3layouts_footer_grid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.263979809904!2d75.80443661421856!3d26.799721983176276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDQ3JzU5LjAiTiA3NcKwNDgnMjMuOSJF!5e0!3m2!1sen!2sin!4v1534762099507" width="300" height="320"></iframe>
				</div>
				<div class="col-md-4  w3layouts_footer_grid">
					<h4>Address</h4>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>51/1, Second floor, <label> Pratap Nagar.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">nirmaljangir313@gmail.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +91 9694268079</li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +91 8209972371</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>


				<div class="clearfix"> </div>
					<p class="copyright">© 2018 Curative. All Rights Reserved | Design by <a href="index.php" target="_blank">Curative</a></p>
			</div>
			</div>
	</div></body>
</html>
