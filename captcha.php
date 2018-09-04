<?php
session_start();
$uc=array("A","S","D","F","G","H","J","P","Q","W","E","R","T","Y","U","Z","X","C","V","B","N","M");
$lc=array("a","s","d","f","g","h","j","p","q","w","e","r","t","y","u","z","x","c","v","b","n","m");
$sc=array("!","@","#","$","%","&","?");
$suc=$uc[rand(0,21)];
$slc=$lc[rand(0,21)];
$ssc=$sc[rand(0,6)];
$n1=rand(1,9);
$n2=rand(1,9);
$n3=rand(1,9);
$txt=$suc.$n1.$slc.$n2.$ssc.$n3;
$txtimage=$suc." ".$n1." ".$slc." ".$n2." ".$ssc." ".$n3;
$_SESSION['cap']=$txt;
header("content-type: image/jpeg");
$x=130;
$y=30;
$f=14;
$img=imagecreate($x,$y);
imagecolorallocate($img,255,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,20,5,$txtimage,$wh);
imagejpeg($img,null,25);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
