<?php
session_start();
require_once("admin/connection.php");
session_start();

if(!empty($_GET['a']))
{
	session_unset();
}
if($_SESSION['name']=="")
{
	header("location: login.php");
}

$spec=$_SESSION['spec'];
$q=mysql_query("select * from drdetail where speciality='".$spec."'");
$a=mysql_fetch_array($q);
$name=$a['name'];
$token=$_SESSION['token'];
$hospital=$a['hospital'];
$address=$a['address'];
$phone=$a['contact'];

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
<style type="text/css">
<!--
.style2 {
	color: #0000FF;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
<?php require_once("header.php")?>
</head>

<body>

<div class="appointmentform" id="appointmentform">
<div class="container">
	<div class="register-full">
		<div class="register-right">
			<div class="register-in">
		
				<h3>YOUR APPOINTMENT BOOKED</h3>
				<div class=" w3_abp">
				<table width="428" height="317" border="0" align="center">
	<tr>
    <td><span class="style2">Hospital Name</span> &nbsp;</td>
    <td><?php echo $hospital;?>&nbsp;</td>
  </tr>
  <tr>
    <td width="289"><span class="style2">Hospital Address </span></td>
    <td width="129"><?php echo $address;?>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style2">Doctor Name </span></td>
    <td><?php echo $name;?>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style2">Token No.</span> </td>
    <td>
	<?php echo $token ?>
	&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style2">Phone No.</span>&nbsp;</td>
    <td>
	<?php echo $phone ?>
	&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

						
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