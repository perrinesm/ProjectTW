<!DOCTYPE html>

<?php

include "bdd.php";

session_start ();

$page="index";
	if(isset($_GET['page'])){
		$page=$_GET['page'];
				
	}
            

?>

<html>
<div id = "all">
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="stylesheet.css" />
	<link rel="icon" type="image/png" href="icon.png" />
    <title></title>
	
</head>



<header>
	
	<?php include "header.php";?>


</header>

<body background="images/fond.jpg">
	<?php
	
	if(!($page==="index")){
		
		include "".$page.".php";
		
		
	}
	else{
		echo("
		<section>
			<center>
				<h1> Bienvenue ! </h1>
			</center>
		</section>
	");
	}
	?>
</body>


<footer>
	
	<?php include "footer.php";?>

</footer>

</div>
</html>