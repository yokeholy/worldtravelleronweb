<?php
session_start();


//connect the database
require("{$_SERVER['DOCUMENT_ROOT']}/configure/db.php");
$query = mysql_query('SELECT * FROM user WHERE Username = \''.$_POST['Username'].'\'');
$UserInfo = mysql_fetch_array($query);

//process the result of query
if(empty($UserInfo))
{
	header('Location: /error.php?eid=1');
} else {

	
	if(md5($_POST['Password']) == $UserInfo['Password'])
	{
	
	//start to set all values for the session
	$_SESSION['NickName'] = $UserInfo['NickName'];
	$_SESSION['Username'] = $UserInfo['Username'];
	$_SESSION['Level'] = $UserInfo['Level'];
	

	$_SESSION['logged'] = true;
	
	if($UserInfo['Type'] == 9)
		$_SESSION['adminlogged'] = true;

	header('Location: /main.php');
	} else {
		header('Location: /error.php?eid=2');
	}
}
?>