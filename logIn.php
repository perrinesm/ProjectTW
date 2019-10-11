<html>

<head>
	
  <link rel="stylesheet" href="stylesheet.css"> 
  <link rel="icon" type="image/png" href="icon.png" />

</head>



<header>
	
	<?php include "header.php";?>


</header>

<body>
	<div class = 'inscription'> 
		<form method="post" action="index.php"> 	
   			<p>ID :
   			<input type="text" name="ID" id="ID" />
     		</p>
   			<p>Mot de passe :
   			<input type="text" name="PW" id="PW" >
   			</p>
        	<input type="submit" class="Bouton" value="OK"/>
		</form>
	</div>
</body>



<footer>
	
	<?php include "footer.php";?>

</footer>


</html>