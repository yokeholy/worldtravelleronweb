<div class="leftpanel">
<div class="leftpanel_box" style="height:30px; top:25px; position:relative;">
<style type="text/css">
p {
	color:#330;
}
</style>

<?php
if($_SESSION['logged'] == true)
{

//connect the database
require("{$_SERVER['DOCUMENT_ROOT']}/configure/db.php");
$query = mysql_query('SELECT * FROM user WHERE Username = \''.$_SESSION['Username'].'\'');
$UserInfo = mysql_fetch_array($query);


$query = mysql_query('SELECT * FROM level WHERE Level = \''.$_SESSION['Level'].'\'');
$LevelInfo = mysql_fetch_array($query);



?>


<p style="margin-top:-2px"><strong><?php echo $_SESSION['NickName']?> - <?php echo $LevelInfo['Title']?><br>
Level: <?php echo $UserInfo['Level']?> Exp: <?php echo $UserInfo['Exp'];?>/<?php echo $LevelInfo['ExpRequired']?></strong></p>
</div>

<div class="leftpanel_box" style="height:340px; top:50px; position:relative;">
	<p><a href="/main.php"><img src="/images/leftpanel_button_home.png" width="200" height="30"></a><br>
		<a href="/main.php?page=treasure"><img src="/images/leftpanel_button_treasure.png" width="200" height="30"></a><br>
		<a href="/main.php?page=airport"><img src="/images/leftpanel_button_airport.png" width="200" height="30"></a><br>
		<a href="/main.php?page=worldmap"><img src="/images/leftpanel_button_worldmap.png" width="200" height="30"></a><br>
		<a href="/main.php?page=collection"><img src="/images/leftpanel_button_collection.png" width="200" height="30"></a><br>
	<hr align="center" width="90%" color="#000000" size="1px" ></p>
	<h3 style="color:#800">Information</h3>
	<table width="80%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left"><p><strong>Coin: <span style="color:#920"><?php echo $UserInfo['Coin']?></span></strong></p></td>
			<td align="left"><p><strong>Gold: <span style="color:#920"><?php echo $UserInfo['Gold']?></span></strong></p></td>
		</tr>
		<tr>
			<td align="left"><p></p></td>
			<td align="left"><p>&nbsp;</p></td>
		</tr>
		<tr>
			<td align="left"><p>&nbsp;</p></td>
			<td align="left"><p>&nbsp;</p></td>
		</tr>
	</table>
	<p>&nbsp;</p>
</div>

<div class="leftpanel_box" style="height:35px; top:70px; position:relative;">
<p><strong>My Current Location<br>
<span style="color:#920">Troy</span></strong></p>
</div>

</div>

<?php
} else {
?>
<p style="color:#520; font-weight:bolder;">Guest</p>
</div>
</div>
<?php } ?>