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

    $produitNum = 0;

    $done = false;

    if (isset($_POST['quantiteSuppr'])){

    while (!$done){

    if(isset($_POST[$produitNum]) and $done == false){

            $done = true;

            $cartTable = $bdd->query("SELECT * FROM `cart`");            

            $i = 0;

            $cartLine = $cartTable->fetch();

            while($i != $produitNum){


                $cartLine = $cartTable->fetch();

                $i =  $i + 1;

            }


            if($cartLine['quantite'] - $_POST['quantiteSuppr'] < 1){            

                $suppr = $bdd->query("DELETE FROM `cart` WHERE `produit` = '". $cartLine['produit']."'");

            }

            else{

                $suppr = $bdd->query("DELETE FROM `cart` WHERE `produit` = '" . $cartLine['produit']."'");

                $req = $bdd->prepare('INSERT INTO cart(produit, quantite) VALUES(?,?)');

                $req->execute(array($cartLine['produit'], $cartLine['quantite'] - $_POST['quantiteSuppr']));

            }

            $done = true;

        }

        $produitNum = $produitNum + 1;

    }

}

    $cartTable = $bdd->query("SELECT * FROM `cart`");

    $done = false;

    $vide = true;

    $numSend = 0;

    while($cartLine = $cartTable->fetch()){

        $vide = false;

        $productTable = $bdd->query("SELECT * FROM `tableproduit` WHERE `produit` = '".$cartLine['produit']."'");

        $productLine = $productTable->fetch();        
        

                  

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
                        <th align='center'style='font-size:30px'><strong> Quantité  </strong></th>
                        
                    </tr></thead>
                    <tbody ><tr>
               	        <td width='15%'><p> <img src='images/".$productLine['image']."'/> </p></td>
                        <td width='45%''><p class='description'>".$productLine['description']."</p></td>
                        <td align='center' width='15%' style='font-size:30px'><p>".$productLine['prix']."</p></td>
                        <td align='center' width='15%' style='font-size:30px'><p>".$cartLine['quantite']."</p></td>
                        <td align='right' width='15%''><p>

                        <form action = 'cart.php' method = 'post'> 

                            <select name='quantiteSuppr' id='quantiteSuppr' class='button'>
                                <option value='1'>QuantitéSupprimée</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                            </select>

					       <input class='button2' type='submit' name='".$numSend."' value='Supprimer' onclick='alert(\"Produit supprimé !\")''>	

                        </form>

                        </p></td>
                    </tr></tbody>
                </table>
            
            </div>

            ");      


        $numSend = $numSend + 1;

    }

    if ($vide){

        echo("Votre panier est vide !");
    }


    ?>

	<a href = 'index.php' class = 'menu'style="text-align:center"><p><strong>Retour à l'accueil</strong></p></a>

</body>



<footer>
	
	<?php include "footer.php";?>

</footer>


</html>