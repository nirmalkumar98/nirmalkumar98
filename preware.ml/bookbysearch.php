<?php
session_start();
require_once("admin/connection.php");
extract($_REQUEST);
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
.style3 {
	color: #FF00FF;
	font-size: 24px;
}
.style5 {color: #000099}
-->
</style>
</head>

<body>
<?php require_once("header.php")?>
	
			<table width="319" border="0">
  <tr>
    <td width="309" height="77"><div align="center"></div></td>
  </tr>
</table>

            <div align="center" class="bg-primary style3"><em><strong>Put your words in top search input top right corner.            </strong></em></div>
			
			<table width="200" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  </table>
  <form action=""   method="post">
  

<table width="200" border="1" align="center">
  <tr>
    <td bgcolor="#00FFFF"><div class="styled-input">
								<input type="text" name="searchkey" required=""> 
								 
								<span></span>
							</div>  
      <p align="center">	</div>
								<input type="submit" name="search" value="search">&nbsp;</p></td>
  </tr>
</table>
</form>	
		<table width="200" border="0" align="center">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		<p>&nbsp;</p>
			
			
			<table width="401" border="0" align="center" class="appointmentform">
              <tr>
                <td height="52" colspan="3"><div align="center">
                  <p class="btn-danger">these results are similar to your search... </p>
                  <p class="bg-danger">&nbsp;</p>
                </div></td>
              </tr>
		<?php 
			
		if(isset($search))
		{
		$searchq = $searchkey;
		$searchq = preg_replace("#[^0-9a-z]#","",$searchkey);
	
		$query = mysql_query("select * from drdetail where name LIKE 			 		'%$searchq%'");
		$count = mysql_num_rows($query);
		
		if($count == 0)
		{
		$result = "there is no such result";
		}
		else
		{
		while($rows=mysql_fetch_array($query))
		{
		
		?>
              <tr>
                <td width="56" rowspan="2"><img src="adminmanage/images/<?php echo $rows['S.N.']?>.jpg" width="91%" height="49" />&nbsp;</td>
                <td width="171" height="33">
                  <div align="center"><?php echo $rows['name'] ?>	&nbsp;</div></td>
                <td width="160"><div align="center"><?php echo $rows['qualification']?>&nbsp;</div></td>
              </tr>
              <tr>
                <td height="31"><div align="center"><?php echo $rows['contact'];
$sendname=$rows['name'];?>&nbsp;</div></td>
                <td><div align="center"><?php echo $rows['hospital']?>&nbsp;</div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td height="22" colspan="2"><div align="center" class="agileinfo_banner_bottom_pos style5"><a href="booknowwhensearch.php?x=<?php echo $sendname ?>">Book Now </a></div></td>
              </tr>
              <tr>
                <td colspan="3" class="bg-danger">&nbsp;</td>
              </tr>
			  <?php 
				}
				}
				}
			  ?>
            </table>
			<p>&nbsp;</p>
			<table width="731" border="0">
  <tr>
    <td width="721" height="78">&nbsp;</td>
  </tr>
</table>
<p>
            <?php require_once("footer.php");?>
</p>
		
</body>

</html>
