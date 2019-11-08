<!DOCTYPE html>

<?php

include "bdd.php";

if(isset($_GET['id'])){

            $requser = $bdd ->query("SELECT * FROM `membres` WHERE `id` = '".$_GET['id']."'" );
            $user = $requser -> fetch();
            $pseudo = $user['pseudo'];
            $id = $user['id'];
            $mail = $user['mail'];
            $session = true;

}

$page="index";
	if(isset($_GET['page'])){
		$page=$_GET['page'];
				
	}
            

?>

<html>
<div id = "all">
<head>

<link rel="stylesheet" href="style.css">	
<link rel="icon" type="image/png" href="icon.png" />

</head>



<header>
	
	<?php include "header.php";?>


</header>

<body>
	<?php
	
	if(!($page==="index")){
		
		include "".$page."view.php";
		include "".$page."action.php";
		
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