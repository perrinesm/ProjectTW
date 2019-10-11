<html>

<head>
	<meta charset="utf-8" />
  	<link rel="stylesheet" href="stylesheet.css">  
  	<link rel="icon" type="image/png" href="icon.png" />	

</head>



<header>
	
	<?php include "header.php";?>


</header>

<body>
	<div align = "center" class='inscription'><p><strong>Inscription</strong></p>
		<form method="post" action="logIn.php"> 	
   			<p>Nom :
   				<br ><input type="text" name="NOM" id="NOM"/>
     		</p>
   			<p>Prénom :
   				<br ><input type="text" name="PRENOM" id="PRENOM"/>
			</p>
			<p>Date de naissance (jj/mm/aaaa) :
   				<br ><input type="text" name="DATE" id="DATE"/>
   	    	</p>  
   	    	<p>E-mail :
			   <br ><input type="text" name="mail" id="mail"/>
			</p>
			<p>Téléphone :
   				<br ><input type="text" name="TEL" id="TEL"/>
   	    	</p> 
		</form>
	</div>
	<div align = "center" class='inscription'>
		<form method="post" action="logIn.php"> 	
   			<p>ID :
   				<br ><input type="text" name="ID" id="ID"/>
     		</p>
   			<p>Mot de passe :
   				<br ><input type="text" name="PW" id="PW"/>
			</p>
			<p>Confirmation du mot de passe :
   				<br ><input type="text" name="PW2" id="PW2"/>
			</p>
			<br ><p>
			<input type="submit" class="buttonInscrip"  value="OK"/>
			</p>
		</form>
	</div>
</body>



<footer >
	
	<?php 
	include "footer.php";
	?>

</footer>


</html>