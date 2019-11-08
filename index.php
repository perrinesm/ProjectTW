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
	<section>
		<center>
			<h1> Bienvenue ! </h1>
		</center>
	</section>
</body>



<footer>
	
	<?php include "footer.php";?>

</footer>

</div>
</html>