<?php 
session_start();
if(!$_SESSION['logged'] == 1)
	$_SESSION['logged'] = 0;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css">
<title>World Traverller OnWeb - <?= $title ?></title>
</head>

<body topmargin="0" marginheight="0">
<div class="Header">Welcome to World Traveller OnWeb. <br />

<?php include('functions/login_box.php'); ?>

</div>





<div align="center">
<div align="center"  class="MainContainer">