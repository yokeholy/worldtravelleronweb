<?php 
	session_start();

if(!isset($_SESSION['logged'])){
	$_SESSION['logged'] = false;
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
if (!(isset($SKIPLOGINTEST) && $SKIPLOGINTEST == true))
{
	?>
	
<p align="center">Please login before you start your World Traveller journey. :)</p>
<p align="center">If you do not have an account with us, please CLICK HERE to register.</p>

	<?php
	include('footer.php');
	exit();
}
?>