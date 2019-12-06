<!DOCTYPE html>

<?php

include "bdd.php";

session_start();

$page = "index";

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}

?>

<html id="all">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="stylesheet.css" />
	<link rel="icon" type="image/png" href="icon.png" />
</head>

<header>
	<?php include "header.php"; ?>
</header>

<body background="images/fond.jpg">
	<?php

	if ($page === "logUpOk") {
		echo ("
					<section>
						<center>
							<h1> Votre compte est créé vous pouvez vous connecter ! </h1>
						</center>
					</section>
					");
	}
	else{
		if (!($page === "index")) {
			include "" . $page . ".php";
		} else {
			echo ("
					<section>
						<center>
							<h1> Bienvenue ! </h1>
						</center>
					</section>
					");
		}
	}
	?>

</body>

<footer>
	<?php include "footer.php"; ?>
</footer>
</html>