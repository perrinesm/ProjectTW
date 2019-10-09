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
            <h2> SurvivorPin 2.0 </h2>
            <p> <img style="width: 240px; height: 240px" src="telS2.png" /> </p>
            <p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p>
            <p> <strong>Type de produit :</strong> Téléphone portable <br/>
                <strong>Processeur :</strong>  Intel Core i5 <br/>
                <strong>Ecran :</strong> Affichage lisible en plein soleil Quadraclear 1000 cd/m² <br/>
                <strong>Type de carte graphique :</strong> Intel® Core™ i7-6600U vPro 2,6GHz, Max. 3,4 GHz <br/>
                <strong>Durée d'utilisation</strong> 72 heures <br/>
                <strong>Résolution de la webcam :</strong> Caméra Infrarouge FaceTime HD <br/>
                <strong>Système d'exploitation :</strong> Astra Linux  <br/>
                <strong>Mémoire graphique :</strong> 16.0 Go <br />
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