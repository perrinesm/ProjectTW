
   



    <body  style = "display: flex; flex-direction: column;">
        


        <?php

            $productType = "'".$_GET['productType']."'"; 

            $type = "";      

            switch ($productType) {

                                case "'telephone'":
                                  $type = "Téléphones";
                                  break;

                                case "'tablette'":
                                  $type = "Tablettes";
                                  break;
                              
                                case "'ordinateur'":
                                  $type = "Ordinateurs";
                                  break;

                                case "'accessoire'":
                                  $type = "Accessoires";
                                  break;

                          }              

            echo("<h2 style='margin-left: 90px;'>".$type."</h2>");

            $tabTable = $bdd->query("SELECT * FROM `tableproduit` WHERE `type` = ".$productType."");

            


            
        while ($productLine = $tabTable->fetch()) {
            
        

            $produit = $productLine['produit'];

            $description = $productLine['description'];

            $prix = $productLine['prix'];


            echo("


                <div class = 'product'>  
                    <style>
                        table{
                        border-collapse:collapse;}
                    
                    </style>
                    <table width='100%''>
                        <thead><tr>
                            <th align='left'> <h4 > <a href='index.php?page=product&amp;product=".$produit."''>  ".$produit." </a> </h4></th>
                            <th align='left'><p class='description'><strong> Description </strong></p></th>
                            <th  align='center'><strong> Prix  </strong> </th>
                        </tr></thead>
                        <tbody><tr>
                            <td ><p> <img src='images/".$productLine['image']."'/> </p></td>
                            <td width='70%''><p class='description'> ".$description."</p></td>
                            <td width='15%'' align='center'><p> ".$prix."€ </p></td>
                        </tr></tbody>
                    </table>
                </div>


                ");

        }

        ?>

    </body>
