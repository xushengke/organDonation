<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');


	$ip = $_SERVER['REMOTE_ADDR'];
	//$time = `NOW()`;
	//echo $ip;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
			// redirect_to('../index.php');
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<h4 id="welcome">WELCOME!</h4>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin/admin_login.php" method="post" class="form">
		<label>Username:</label>
		<input type="text" name="username" value="" class="loginword">
		<label id="password">Password:</label>
		<input type="text" name="password" value="" class="loginword">
		<input type="submit" name="submit" value="Log in" id="loginbutton">
	</form>
</body>
</html>
