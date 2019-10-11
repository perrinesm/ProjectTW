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
	<div align = "center" class='inscription'>
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
   	    	</p> <br >
	        <input type="submit" class="Button" value="OK"/>
		</form>
	</div>
</body>



<footer>
	
	<?php include "footer.php";?>

</footer>


</html>