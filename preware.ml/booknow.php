<?php
session_start();
extract($_REQUEST);
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

if(isset($submit))
{
	mysql_query("insert into apdetail set apname='".$apname."',apphone='".$apphone."',sex='".$gender."',speci='".$spec."',age='".$age."'");
	$q=mysql_query("select * from apdetail where apname='".$apname."' and apphone='".$apphone."' and sex='".$gender."' and speci='".$spec."' and age='".$age."'");
	$a=mysql_fetch_array($q);
	$_SESSION['token']=$a['token_id'];
	$_SESSION['spec']=$spec;
	//SMS API
	
	header("location: apsuccess.php");
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
								<select name="spec" id="category1" required="">
									<option >Specialization*</option>
									<option >Cardiology</option>
									<option >Heart Surgery</option>
									<option >Skin Care</option>
									<option >Body Check-up</option>
									<option >Numerology</option>
									<option >Diagnosis</option>
									
								</select>
								<span></span>
							</div>
						<div class="styled-input">
								<select id="category2" name="age" required="">
									<option >Choose Age*</option>
									<option >Less than 14</option>
									<option >14-18</option>
									<option >18-35</option>
									<option >35-60</option>
									<option >More than 60</option>
								</select>
								<span></span>
							</div>
								<input type="submit" name="submit"      	   		value="Book Appointment">
						</div>
						
					</form>
						
				</div>
				<div class="clearfix"></div>
			 </div>
		</div>
		</div>
	</div>
	</div>

<!-- //Appointment Form -->

<?php require_once("footer.php")?>




</body>

</html>