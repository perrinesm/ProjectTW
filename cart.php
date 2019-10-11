<html>

<head>
	
<link rel="stylesheet" href="stylesheet.css">	
<link rel="icon" type="image/png" href="icon.png" />

</head>



<header>
	
	<?php include "header.php";?>


</header>

<body >
	<div  class = 'product'>  
        <style>
            table{
                border-collapse:collapse;}  
        </style>
        <table width="100%">
            <thead><tr>
                <th align="left"><h4> Ecouteurs </h4></th>
                <th align="left"><p class="description"><strong> Description </strong></p></th>
                <th align="center"style="font-size:30px"><strong> Prix  </strong></th>
            </tr></thead>
            <tbody ><tr>
               	<td width="15%"><p> <img src="ecouteur.jpg"/> </p></td>
                <td width="45%"><p class="description">Son Pure Bass, puissant. <br >Maintenant, vous pouvez même l’emporter avec vous. <br > Découvrez les écouteurs T205 Pineapple au son Pineapple Pure Bass.<br > Ils sont légers. </p></td>
                <td align="center" width="15%"style="font-size:30px"><p> 34,99€ </p></td>
                <td align="right" width="25%"><p><form> 
					<input class="button2" type="button" value=" Supprimer" onclick="alert('Produit supprimé !')">	   
                </form></p></td>
            </tr></tbody>
        </table>
            
    </div>
	
	Votre panier est fixe car le code est en html strict !

	<a href = 'index.php' class = 'menu'style="text-align:center"><p><strong>Retour à l'accueil</strong></p></a>

</body>



<footer>
	
	<?php include "footer.php";?>

</footer>


</html>