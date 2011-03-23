<?php
$title = "Administration Panel";
$ADMINCHECK = true;
include("{$_SERVER['DOCUMENT_ROOT']}/header.php")
?>

<h1>Version List</h1>
<table width="60%">
<tr>
<td><h4>Version</h4></td>
<td><h4>Update Content</h4></td>
<td><h4>Date & Time</h4></td>
<?php

$query = mysql_query("SELECT * FROM version");
while($VersionInfo = mysql_fetch_array($query))
{
	echo ('<tr><td><p align="left"><strong>V'.$VersionInfo['Version'].'</strong></p></td><td><p align="left">'.$VersionInfo['UpdateContent'].'</p></td><td><p>'.$VersionInfo['Time'].'</p></td></tr>');
}
?>

</table>
<h3><a href="admin.php">BACK</a></h3>

<?php
include("{$_SERVER['DOCUMENT_ROOT']}/footer.php")
?>