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

    <body  style="display: flex; flex-direction: column;">
        <h2 style="margin-left: 90px;"> - Accessoires </h2>

        <div class="product">  
            <h4> Ecouteurs </h4>
            <p> <img class="pict" src="ecouteur.jpg"/> </p>
            <p class="description"> Description </p>
            <p class="description"> </p>
            <form> 
                <input style="background-color: blue; margin-left: 620px; height: 60px" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
            </form>
        </div>

        <div class="product">  
            <h4> Etui tablette </h4>
            <p> <img class="pict" src="etui.jpg" /> </p>
            <p class="description"> Description </p>
            <p class="description"> </p>
            <form> 
                <input style="background-color: blue; margin-left: 620px; height: 60px" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
            </form>
        </div>

        <div class="product">  
            <h4> Chargeur </h4>
            <p> <img class="pict" src="load.jpg" /> </p>
            <p class="description"> Description </p>
            <p class="description"> </p>
            <form> 
                <input style="background-color: blue; margin-left: 620px; height: 60px" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
            </form>
        </div>

        <div class="product">  
            <h4> Clavier Bluetooth </h4>
            <p> <img class="pict" src="clavier.png" /> </p>
            <p class="description"> Description </p>
            <p class="description"> </p>
            <form> 
                <input style="background-color: blue; margin-left: 620px; height: 60px" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
            </form>
        </div>

    </body>

    <footer>
        <?php 
        include "footer.php";
        ?>
    </footer>
    
    </html>
<!DOCTYPE html>