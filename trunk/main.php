<?php
$title = "World Traveller OnWeb";

include("header.php");

if(!isset($_GET['page']))
	$_GET['page'] = NULL;

$filename = 'pages/'.$_GET['page'].'.php';

if(file_exists($filename))
{
	include($filename);
}else {
?>

<h1>Home </h1>

<?php
}

include("footer.php");
?>
