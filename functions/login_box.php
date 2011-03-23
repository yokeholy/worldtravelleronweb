<?php
if($_SESSION['logged'] == true)
{
	echo ('You\'re logged in as '.$_SESSION['NickName'].'. ');
	echo ('<a href="/account/main.php">My Account</a> | ');
	echo ('<a href="/functions/pure/logout_action.php">Logout</a>');
}
else if(isset($_SESSION['logged']) && $_SESSION['logged'] == false)
{

	function CurrentURL() {
		$pageURL = 'http';
		//if ($_SERVER["HTTPS"] == "on") 
		//	$pageURL .= "s";
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		else
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		return $pageURL;
	}

?>

<form action="/functions/pure/login_action.php" method="post" name="login" style="margin:0px;">
	Please login: 
	Username:
	<input name="Username" type="text" size="10" maxlength="24">
	Password:
	<input name="Password" type="password" size="10" maxlength="24">
	<input name="" type="submit" value="Login" style="height:14px; cursor:pointer">
	<input name="Reset" type="reset" value="Reset" style="height:14px; cursor:pointer">
	<input name="Login" type="hidden" value="1">
	<input name="URL" type="hidden" value="<?php echo CurrentURL(); ?>">
</form>
<?php
}
?>
