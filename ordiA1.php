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
        <div class="product">
            <h2> PinPad Pro 13.3 </h2>
            <p> <img style="width: 240px; height: 240px" src="ordiA1.png" /> </p>
            <p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p>

            <p> <strong>Type de produit :</strong> Ultra portable - Sub Notebook<br/>
                <strong>Processeur :</strong>  Intel Core i5 <br/>
                <strong>Type de carte graphique :</strong> Intel Iris Plus Graphics 645 <br/>
                <strong>Fréquence :</strong> de 1.4 GHz à 3.9 GHz  <br/>
                <strong>Résolution de la webcam :</strong> Caméra FaceTime HD 720p <br/>
                <strong>Système d'exploitation :</strong> Mac OS Mojave <br/>
                <strong>Mémoire graphique :</strong> 8.0 Go <br />
            </p>
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