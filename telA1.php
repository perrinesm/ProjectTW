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
        <div class = "product">
            <h2> PinPad Pro 13.3 </h2>
            <p> <img style="width: 240px; height: 240px" src="telA1.png" /> </p>
            <p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p>

            <p> <strong>Type de produit :</strong> Téléphone portable<br/>
                <strong>Capacité :</strong> 128 Go <br/>
                <strong>Processeur :</strong> Pineapple A10 Fusion <br/>
                <strong>Taille d'écran</strong>  4.7 pouces <br/>
                <strong>Définition :</strong> 1334 x 750 pixels <br/>
                <strong>Mémoire vive :</strong> 2.0 Go <br />
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