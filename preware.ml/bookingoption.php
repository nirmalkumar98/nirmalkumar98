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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
.style3 {font-size: 24px; font-style: italic; font-weight: bold; color: #0033FF; }
-->
</style>
</head>


<body>	

<?php 
require_once("header.php");
?>
	
    <p>&nbsp;</p>
    <table width="1019" height="175" border="0">
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="964" height="120" border="0" align="center">
      <tr>
        <td width="476"><div align="center"><a href="bookbysearch.php"> <span class="style3">Book by search </span></a></div></td>
        <td width="472"><div align="center"><a href="booknow.php" ><span class="style3">Book by filling form </span></a></div></td>
      </tr>
    </table>
    <table width="1019" height="175" border="0">
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <?php
require_once("footer.php");
?>

</body>
</html>
