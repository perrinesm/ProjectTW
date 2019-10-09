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
        <div class="product" >
            <h2> PinPad Pro 13.3 </h2>
            <p> <img style="width: 240px; height: 240px" src="tabA2.png" /> </p>
            <p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p>

            <p> <strong>Type de produit :</strong> Tablette <br/>
                <strong>Capacité :</strong> 100 Go <br/>
                <strong>Processeur :</strong>  Puce A12X Bionic avec architecture 64 bits.Neural Engine. <br/> Coprocesseur M12 intégré <br/>
                <strong>Type de carte graphique :</strong> Intel Iris Plus Graphics 645 <br/>
                <strong>Caméra TrueDepth :</strong> Photos 7 Mpx Capteur arrière de luminosité. Stabilisation automatique de l’image. <br/>
                <strong>Système d'exploitation :</strong> iOS 14.5 <br/>
                <strong>Mémoire graphique :</strong> 8.0 Go <br />
            </p>
            <form> 
                <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
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