<html>

<head>
	
<link rel="stylesheet" href="stylesheet.css">	
<link rel="icon" type="image/png" href="icon.png" />

</head>



<header>
	
	<?php include "header.php";?>


</header>

<body >


    <?php

    include_once "bdd.php";

    $cartTable = $bdd->query("SELECT * FROM `cart`");

    $produitNum = 0;   

    while($cartLine = $cartTable->fetch()){

        $productTable = $bdd->query("SELECT * FROM `tableproduit` WHERE `produit` = '".$cartLine['produit']."'");

        $productLine = $productTable->fetch();        
        

        if(isset($_POST[$produitNum])){
            

            $suppr = $bdd->query("DELETE FROM `cart` WHERE `produit` = '". $productLine['produit']."'");

        }

        else{

            

            echo("

	       <div  class = 'product'>  
                <style>
                    table{border-collapse:collapse;}  
                </style>
                <table width='100%''>
                    <thead><tr>
                        <th align='left'><h4>".$productLine['produit']."</h4></th>
                        <th align='left'><p class='description'><strong> Description </strong></p></th>
                        <th align='center'style='font-size:30px'><strong> Prix  </strong></th>
                    </tr></thead>
                    <tbody ><tr>
               	        <td width='15%'><p> <img src='".$productLine['image']."'/> </p></td>
                        <td width='45%''><p class='description'>".$productLine['description']."</p></td>
                        <td align='center' width='15%' style='font-size:30px'><p>".$productLine['prix']."</p></td>
                        <td align='right' width='25%''><p>

                        <form action = 'cart.php' method = 'post'> 
					       <input class='button2' type='submit' name='".$produitNum."' value='Supprimer' onclick='alert(\"Produit supprimé !\")''>	   
                        /form>

                        </p></td>
                    </tr></tbody>
                </table>
            
            </div>

            ");

        }


        $produitNum = $produitNum + 1;

    }

    ?>

	<a href = 'index.php' class = 'menu'style="text-align:center"><p><strong>Retour à l'accueil</strong></p></a>

</body>



<footer>
	
	<?php include "footer.php";?>

</footer>


</html>