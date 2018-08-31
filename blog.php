<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>MY BLOG PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if ($_POST) {
		# code...
		if ($_POST['logout']=="yes") {
			session_destroy();
		}
	}
	if (isset($_SESSION['user'])) {
		echo "<h1>Welcome $_SESSION[user]!</h1>"
		."<b>College :</b> $_SESSION[college]<br>"
		."<b>Class : </b> $_SESSION[class]<br>"
		."<b>Batch : ,/b> $_SESSION[batch]<br>";

		echo "<br>"
		>"<form method='post' action='blog.php'>"
		."<input type='hidden' name='logout' value='yes'/>"
		."<input type ='submit' value='Logout'/>"
		."</form>";
	}
	else {
		header("Refresh: 0,url=login.php");
	}
	?>
	<header>
		<nav>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="contact.html">contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="gallery.html">Gallery</a>
				</li>
				<li>
					<a href="resume.html">Resume</a>
				</li>
			</ul>
		</nav>
	</header>
		<footer>
		<div>
			&copy;All rights are reserved
		</div>
	</footer>

</body>
</html>