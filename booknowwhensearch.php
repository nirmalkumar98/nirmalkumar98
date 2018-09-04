<?php
session_start();
extract($_REQUEST);
require_once("admin/connection.php");
if($_SESSION['name']=="")
{
	header("location: login.php");
}
if(!empty($_GET['a']))
{
	session_unset();
}
$drname=$_GET['x'];
if(isset($submit))
{
	
	
	$q=mysql_query("select * from drdetail where name='".$drname."'");
	$a=mysql_fetch_array($q);
	
	mysql_query("insert into apdetail set apname='".$apname."',apphone='".$apphone."',sex='".$gender."',age='".$age."',hosp='".$a['hospital']."'");
	
	$q1=mysql_query("select * from apdetail where apname='".$apname."'    and apphone='".$apphone."' and sex='".$gender."' and age='".$age.  "'");
	$a1=mysql_fetch_array($q1);
	
	$_SESSION['token_id']=$a1['token_id'];
	$_SESSION['drname']=$a['name'];
	$_SESSION['hospital']=$a['hospital'];
	$_SESSION['address']=$a['address'];
	$_SESSION['phone']=$a['contact'];
	
	//SMS API
	header("location: searchapsuccess.php");
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Curative a Medical Website | Home :: w3layouts</title>
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
<?php require_once("header.php")?>
</head>

<body>
<div class="appointmentform" id="appointmentform">
<div class="container">
	<div class="register-full">
		<div class="register-right">
			<div class="register-in">
		
				<h3>APPOINTMENT FORM</h3>
				<div class=" w3_abp">
				<div class="registerimg">
					<img src="images/app.jpg" class="img-responsive" alt="" />
				</div>
				</div>
				<div class=" register-form">
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input">
								<input type="text" name="apname" required=""> 
								<label>Patients Name</label>
								<span></span>
							</div> 
							
							<div class="styled-input">
								<input type="text" name="apphone" required=""> 
								<label>Phone Number</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<h2>Sex :</h2>
								  <input type="radio" name="gender" value="male"> Male
								  <input type="radio" name="gender" value="female"> Female
							</div>
							
							<div class="styled-input">
								<select id="category2" name="age" required="">
									<option>Choose Age*</option>
									<option>Less than 14</option>
									<option>14-18</option>
									<option>18-35</option>
									<option>35-60</option>
									<option>More than 60</option>
								</select>
								<span></span>
							</div>
								<input type="submit" name="submit" value="Book Appointment">
					  </div>
						
					</form>
						
				</div>
				<div class="clearfix"></div>
			 </div>
		</div>
		</div>
	</div>
	</div>

<?php require_once("footer.php")?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	
	<!-- for testimonials slider-js-file-->
			<script src="js/owl.carousel.js"></script>
	<!-- //for testimonials slider-js-file-->
		<script>
		$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 3,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
		}); 
</script>
<!-- for testimonials slider-js-script-->

 <!--script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>
<!--script-->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->
<!-- /gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

</body>
</html>