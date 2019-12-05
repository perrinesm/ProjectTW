<div id = "all">  

    <?php    

        function compare($m, $chaine){

            $i = 0;

            $bool = false;

            $chaine = strtolower($chaine);

            $tabChaine = explode(" ", $chaine);

            while($i < count($tabChaine)){

                if ($m == $tabChaine[$i]){

                    $bool = true;
                }

                $i = $i + 1;

            }

            return $bool;
        }

        function compareLine($m, $line){


            $i = 0;

            $bool = false;

            while($i < 21){
            

                if (compare($m, $line[$i])){

                    $bool = true;
                }

                $i = $i + 1;

            }

            return $bool;

        }

        $m = $_GET['bar'];

        $m = strtolower($m);

        $tab = [];

        $tabM = explode(" ", $m);
    
        $productTable = $bdd->query("SELECT * FROM `tableproduit`");

        while($productLine = $productTable->fetch()){

            $j = 0;

            while($j < count($tabM)) {


                if (compareLine($tabM[$j], $productLine)){


                    $longeur = count($tab);

                    $tab[$longeur] = $productLine['produit'];

                }

                $j = $j + 1;

            }     

        }

        $i = 0;

        if(count($tab) == 0){

            echo('Aucun résultat');

        }

        while ( $i < count($tab)) {            

                $productTable = $bdd->query("SELECT * FROM `tableproduit` WHERE `produit` = '".$tab[$i]."'");

                $productLine = $productTable->fetch();        

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
                                <thead>
                                    <tr>
                                        <th align='left'> <h4 > <a href='index.php?page=product&amp;product=".$produit."''>  ".$produit." </a> </h4></th>
                                        <th align='left'><p class='description'><strong> Description </strong></p></th>
                                        <th  align='center'><strong> Prix  </strong> </th>
                                    </tr>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td ><p> <img src='images/".$productLine['image']."'/> </p></td>
                                    <td width='70%''><p class='description'> ".$description."</p></td>
                                    <td width='15%'' align='center'><p> ".$prix."€ </p></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>

                    ");

            $i = $i + 1;

        }

    ?>  

</div>
