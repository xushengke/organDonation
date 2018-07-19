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

	$tbl1 = "tbl_image";
	$getImages = getImage($tbl1);

	if(!is_string($getImages)){
	while($row = mysqli_fetch_array($getImages)){
		$headerlogo = $row['image_logo'];
		$facebook = $row['image_facebook'];
		$twitter = $row['image_twitter'];
		$youtube = $row['image_youtube'];
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<body>
	<div id="bodycontainer">
		<header id="mainHeader">
				<?php
					echo "<img src=\"../images/$headerlogo\" alt=\"headerLogo\" id=\"headerLogo\">";
				?>
				<div id="main-menu">
					<ul>
						<li><a href="../index.php" id="home">Home</a></li>
					</ul>
				</div>
		</header>
				<div class="logincontent">
					<h4 id="welcome">WELCOME!</h4>
					<?php if(!empty($message)){echo $message;} ?>
					<form action="admin_login.php" method="post">
						<label>Username:</label>
						<input type="text" name="username" value="" class="loginword"><br><br>
						<label id="password">Password:</label>
						<input type="text" name="password" value="" class="loginword"><br><br><br>
						<input type="submit" name="submit" value="Log in" id="loginbutton">
					</form>
				</div>

			<footer>
			   <?php
			     echo"<img src=\"../images/$headerlogo\" alt=\"headerLogo\" id=\"footerLogo\">";
			     echo"<ul><a target=_blank href=\"https://www.facebook.com/pages/Organ-Donation-Ontario/1589235651403335\"><li><img  id=\"facebook\" src=\"../images/$facebook\"></li></a>";
			     echo"<a target=_blank href=\"https://twitter.com/TrilliumGift\"><li><img  class=\"social\" src=\"../images/$twitter\"></li></a>";
			     echo"<a target=_blank href=\"https://www.youtube.com/watch?v=n6FdS3tcso4\"><li><img  class=\"social\" src=\"../images/$youtube\"></li></a></ul>";
			    ?>
			    <p>Copyright Life Extended &copy; 2018</p>
			 </footer>
	</div>
</body>
</html>
