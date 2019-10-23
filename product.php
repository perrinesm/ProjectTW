<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylesheet.css" />
        <title></title>
    </head>

    <header>
        <?php 
        include "header.php";
        ?>
    </header>

    <body style= "display: flex; flex-direction: column;">

         <?php

            
            include_once "bdd.php";

            
            $productName = "'".$_GET['product']."'";
            

            

            $productTable = $bdd->query("SELECT * FROM `tableproduit` WHERE `produit` = " . $productName."");


            
            $productLine = $productTable->fetch();
            

            


        ?>








        <div class="product">
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"> <h2><?php echo($productLine['produit'])?></h2></th>
                    <th align="left"><p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p></th>
                </tr></thead>
                <tbody><tr>
                    <td width="20%"><p> <img style="width: 240px; height: 240px" src=<?php echo("'".$productLine['image']."'")?>/> </p></td>
                    <td width="45%"><p class="description"> <p> 



                        <strong><?php echo($productLine['car1'])?></strong> <?php echo($productLine['des1'])?> <br/>
                        <strong><?php echo($productLine['car2'])?></strong> <?php echo($productLine['des2'])?> <br/>
                        <strong><?php echo($productLine['car3'])?></strong> <?php echo($productLine['des3'])?> <br/>
                        <strong><?php echo($productLine['car4'])?></strong> <?php echo($productLine['des4'])?> <br/>
                        <strong><?php echo($productLine['car5'])?></strong> <?php echo($productLine['des5'])?> <br/>
                        <strong><?php echo($productLine['car6'])?></strong> <?php echo($productLine['des6'])?> <br/>
                        <strong><?php echo($productLine['car7'])?></strong> <?php echo($productLine['des7'])?> <br/>
                        <strong><?php echo($productLine['car8'])?></strong> <?php echo($productLine['des8'])?> <br/>

                        

                    </p>
                    <td align="center" width="15%"><p><strong> Prix  </strong><br > 899,99€ </p></td>
                    <td align="right" width="20%"><p><form> 
                        <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
                    </form></p></td>
                </tr></tbody>
            </table>
        </div>
    </body>

    <footer>
        <?php 
        include "footer.php";
        ?>
    </footer>
    
    </html>
<!DOCTYPE html>