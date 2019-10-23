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
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"><h2> LapPinTop 2k19 </h2></th>
                    <th align="left"><p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p></th>
                </tr></thead>
                <tbody><tr>
                    <td width="20%"><p> <img style="width: 240px; height: 240px" src="ordiA1.png"/> </p></td>
                    <td width="45%"><p class="description"><p> <strong>Type de produit :</strong> Ultra portable - Sub Notebook<br/><strong>Processeur :</strong>  Intel Core i5 <br/><strong>Type de carte graphique :</strong> Intel Iris Plus Graphics 645 <br/><strong>Fréquence :</strong> de 1.4 GHz à 3.9 GHz  <br/><strong>Résolution de la webcam :</strong> Caméra FaceTime HD 720p <br/><strong>Système d'exploitation :</strong> Mac OS Mojave <br/><strong>Mémoire graphique :</strong> 8.0 Go <br /></p>
                    <td align="center" width="15%"><p><strong> Prix  </strong><br > 4599,99€ </p></td>
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