<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');

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
<title>multiple return</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="bodycontainer">
		<header id="mainHeader">
			<div class="row">
				<?php
					echo "<img src=\"../images/$headerlogo\" alt=\"headerLogo\" id=\"headerLogo\">";
				?>
				<div id="main-menu">
					<ul>
						<li><a href="../index.php" id="home">Home</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="logincontent">
			<h1 id="welcome">Welcome to your edit content page</h1><br><br><br>
			<a href="phpscripts/caller2.php?caller_id=event1">Event1</a><br><br><br>
			<a href="phpscripts/caller2.php?caller_id=event2">Event2</a><br><br><br>
			<a href="phpscripts/caller2.php?caller_id=pa1">Introduction1</a><br><br><br>
			<a href="phpscripts/caller2.php?caller_id=contact">Contact</a><br><br><br>
			<!-- <a href="admin_editall2.php">Event2</a><br> -->
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
