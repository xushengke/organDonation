<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();

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
<title>CMS Portal</title>
<link rel="stylesheet" href="css/main.css">
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
			<h3 id="welcome">Welcome to your user page</h3><br>
			<div id="admin">
			<?php echo "<h3 id=\"hello\">Hi-{$_SESSION['user_name']}</h3>";
						echo "<p>Last Logintime {$_SESSION['user_date']}</p><br>";
						echo "<p>Thank you for being a donor!<br><br>We will send an email to you to confirm your information!</p>"
			 ?>
			<!-- <a href="admin_createuser.php">Create User</a> -->
			<a href="admin_edituser.php">Edit User</a>
			<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
			</div>
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
