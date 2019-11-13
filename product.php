  

   <body style= "display: flex; flex-direction: column;">

         <?php

            
            

            
            $productName = "'".$_GET['product']."'";
            

            

            $productTable = $bdd->query("SELECT * FROM `tableproduit` WHERE `produit` = " . $productName."");


            
            $productLine = $productTable->fetch();

    



            
            if(isset($_POST['quantite']) AND isset($_SESSION['id'])){

                $cartTable = $bdd->query("SELECT * FROM `cart` WHERE `produit` = " . $productName." AND `id` = ".$_SESSION['id']."");

                $quantitePrecedante = 0;

                while($cartLine = $cartTable->fetch()){

                    $quantitePrecedante = $cartLine['quantite'] + $quantitePrecedante;

                    $suppr = $bdd->query("DELETE FROM `cart` WHERE `produit` = " . $productName." AND `id` = ".$_SESSION['id']."");

                }
            
                $req = $bdd->prepare('INSERT INTO cart(produit, quantite, id) VALUES(?,?,?)');


                $req->execute(array($_GET['product'], $_POST['quantite'] + $quantitePrecedante, $_SESSION['id']));


            }
            

            


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
                    <td width="20%"><p> <img style="width: 240px; height: 240px" src=<?php echo("'images/".$productLine['image']."'")?>/> </p></td>
                    <td width="40%"><p class="description"> <p> 



                        <strong><?php echo($productLine['car1'])?></strong> <?php echo($productLine['des1'])?> <br/>
                        <strong><?php echo($productLine['car2'])?></strong> <?php echo($productLine['des2'])?> <br/>
                        <strong><?php echo($productLine['car3'])?></strong> <?php echo($productLine['des3'])?> <br/>
                        <strong><?php echo($productLine['car4'])?></strong> <?php echo($productLine['des4'])?> <br/>
                        <strong><?php echo($productLine['car5'])?></strong> <?php echo($productLine['des5'])?> <br/>
                        <strong><?php echo($productLine['car6'])?></strong> <?php echo($productLine['des6'])?> <br/>
                        <strong><?php echo($productLine['car7'])?></strong> <?php echo($productLine['des7'])?> <br/>
                        <strong><?php echo($productLine['car8'])?></strong> <?php echo($productLine['des8'])?> <br/>

                       

                    </p>
                    <td align="left" width="10%"><p><strong> Prix  </strong><br > <?php echo($productLine['prix'])?> </p></td>
                    <td align="right" width="30%"><p> 

                    <?php

                    if (isset($_SESSION['id'])){


         echo("<form method='post' action = '')?>'>

                        <select name='quantite' id='quantite' class='button'>
                            <option value='error'>Quantite</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                        </select>

                        <input type='submit' class='button' value=' Ajouter au Panier' onclick='alert('Element(s) ajouté(s) au panier !')'/>

                    </form>");

                }

                else{

                echo("<form method='post' action = ''>

                        <select name='quantite' id='quantite' class='button'>
                            <option value='error'>Quantite</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                        </select>

                        <input type='submit' class='button' value=' Ajouter au Panier' onclick='alert(\"Connectez vous pour ajouter des éléments à votre panier !\")' />

                    </form>");

                }


                

?>

                    </p></td>
                </tr></tbody>
            </table>
        </div>
    </body>

