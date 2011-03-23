<?php
$title = "Error";
$SKIPLOGINTEST = true;
include("{$_SERVER['DOCUMENT_ROOT']}/header.php")
?>

<h1 style="margin-top:200px;">ERROR!</h1>

<?php 
if($_GET['eid'] == 1)
	echo ('<p alien="center">Invalid Username.</p>');
else if($_GET['eid'] == 2)
	echo ('<p alien="center">Invalid Password.</p>');

?>
<p align="center"><a href="/account/register.php">Click here to register a new account.</a></p>
<?php
include("{$_SERVER['DOCUMENT_ROOT']}/footer.php")
?>