<?php 
	session_start();
require("{$_SERVER['DOCUMENT_ROOT']}/configure/db.php");

if(!isset($_SESSION['logged'])){
	$_SESSION['logged'] = false;
}
if(!isset($_SESSION['adminlogged'])){
	$_SESSION['adminlogged'] = false;
}
if(!isset($SKIPLOGINTEST)){
	$SKIPLOGINTEST = false;
}
if(!isset($ADMINCHECK)){
	$ADMINCHECK = false;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/css/styles.css" rel="stylesheet" type="text/css">
<title>World Traverller OnWeb - <?php echo $title ?></title>
</head>

<body topmargin="0" marginheight="0">
<div class="Header">Welcome to World Traveller OnWeb. <br />

<?php include("{$_SERVER['DOCUMENT_ROOT']}/functions/login_box.php"); ?>

</div>





<div align="center">
<div class="LocationHeading">
<h1 style="color:#FFF"><?php echo $title ?></h1>
</div>
<div align="center"  class="MainContainer">






<?php
if($ADMINCHECK == true && $_SESSION['adminlogged'] == true)
{
	echo ("<h2>Admin Mode</h2>");
}else if($ADMINCHECK == true && $_SESSION['adminlogged'] != true)
{
	echo ("<h2>Not Admin!!</h2>");
	include('footer.php');
	exit();
}else if ($SKIPLOGINTEST != true && $_SESSION['logged'] != true)
{
	?>
	
<p align="center" style="margin-top:150px">Please login before you start your World Traveller journey. :)</p>
<p align="center">If you do not have an account with us, please <a href="/account/register.php">CLICK HERE</a> to register.</p>

	<?php
	include('footer.php');
	exit();
}
?>