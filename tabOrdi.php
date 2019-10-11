<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylesheet.css" />
        
    </head>

    <header>
        <?php 
        include "header.php";
        ?>
    </header>
    <body  style="display: flex; flex-direction: column;">
        <h2 style="margin-left: 90px;">  Ordinateurs </h2>

            <div class = "product">  
                <style>
                    table{
                        border-collapse:collapse;}
                    
                </style>
                <table width="100%">
                    <thead><tr>
                        <th align="left"><h4>  <a href="ordiA1.php"> MacPin Pro </a></h4></th>
                        <th align="left"><p class="description"><em><strong> Description </strong></em></p></th>
                        <th align="center"><em><strong> Prix  </strong> </em></th>
                    </tr></thead>
                    <tbody><tr>
                        <td ><p> <img src="ordiA1.png" /> </p></td>
                        <td><p class="description"> Une incroyable puissance. Au meilleur prix. Waterproof .<br >Bulletproof <br /><br /> Puce A12 Bionic avec Neural Engine. Écran Retina de 10,5 pouces avec affichage True Tone </p></td>
                        <td align="center"><p> 4599,99€ </p></td>
                    </tr></tbody>
                </table>
                
            </div>
    
            <div class = "product">
                <style>
                    table{
                        border-collapse:collapse;}
                    
                </style>
                <table width="100%">
                    <thead><tr>
                        <th align="left"><h4> <a href="ordiA2.php"> PinTosh 1984 </a> </h4></th>
                        <th align="left"><p class="description"> <em><strong>Description </strong> </em></p></th>
                        <th align="center"><em><strong> Prix  </strong> </em></th>
                    </tr></thead>
                    <tbody><tr>
                        <td><p> <img src="ordiA2.png" /> </p></td>
                        <td><p class="description"> Une relique remasterisée en PC gaming nouvelle génération pouvant faire tourner n'importe quel jeu. <br/>Egalement très utile pour du minage de bitcoin. </p></td>
                        <td align="center"><p> 5599,99€ </p></td>
                    </tr></tbody>
                </table>
            </div>
    
            <div class = "product">
                <style>
                    table{
                        border-collapse:collapse;}
                    
                </style>
                <table width="100%">
                    <thead><tr>
                        <th width="15%" align="left"><h4 > <a href="ordiS1.php">Universe Pin-BOOK</a> </h4></th>
                        <th align="left"> <p class="description"><em><strong> Description </strong> </em></p></th>
                        <th align="center"><em><strong> Prix  </strong> </em></th>
                    </tr></thead>
                    <tbody><tr>
                        <td><p> <img  src="ordiS1.png" /> </p></td>
                        <td><p class="description">La patience, c'est surfait: parfois, vous voulez que ça aille vite ! <br/>Le Universe PinBook offre le lecteur d'empreintes digitales dernière génération. <br/> Combinez la netteté de la 4K avec les couleurs incroyablement vives de la technologie HDR DuPa Vision. <br/></p></td>
                        <td align="center"><p> 749,99€ </p></td>
                    </tr></tbody>
                </table>    
            </div>
    
            <div class = "product">
                <style>
                    table{
                        border-collapse:collapse;}
                    
                </style>
                <table width="100%">
                    <thead><tr>
                        <th width="15%" align="left"><h4> <a href="ordiS1.php"> SurvivorPin 2.0 </a>  </h4></th>
                        <th align="left"><p class="description"> <em><strong>Description </strong> </em></p></th>
                        <th align="center"><em><strong> Prix  </strong> </em></th>
                    </tr></thead>
                    <tbody><tr>
                        <td><p> <img src="ordiS2.png" /> </p></td>
                        <td><p class="description"> Produit sponsorisé par Bear Grill.<br  /> Utilisable dans toutes conditions météorologiques. Recommandé en zone de conflit armé. </p></td>
                        <td align="center"><p> 419,99€ </p></td>
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