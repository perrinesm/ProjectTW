<html>

<head>

  <link rel="stylesheet" href="style.css">  	

</head>



<header>
	
	<?php include "header.php";?>


</header>

<body>
	
	<form method="post" action="logIn.php"> 	
   			
   		
   		<p>ID :

   		<input type="text" name="ID" id="ID"/>

     	</p>




   		<p>Mot de passe :

   		<input type="text" name="PW" id="PW"/>
   		
   	    </p>


   	    <p>E-mail :

   		<input type="text" name="mail" id="mail"/>
   		
   	    </p>


        <input type="submit" class="Bouton" value="OK"/>

	</form>


</body>



<footer>
	
	<?php include "footer.php";?>

</footer>


</html>