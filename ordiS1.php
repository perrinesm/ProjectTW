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
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"> <h2> Universe PinTab </h2></th>
                    <th align="left"><p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p></th>
                </tr></thead>
                <tbody><tr>
                    <td width="20%"><p> <img style="width: 240px; height: 240px" src="ordiS1.png"/> </p></td>
                    <td width="45%"><p class="description"><p> <strong>Type de produit :</strong> Ultra portable - Sub Notebook<br/><strong>Processeur :</strong>   Intel Core i5 7200U (Dual-Core 3.1 GHz) <br/><strong>Type de carte graphique :</strong> Intel HD Graphics 615 <br/><strong>Fréquence :</strong> de 1.4 GHz à 3.9 GHz  <br/><strong>Durée de fonctionnement :</strong>Jusqu'à 13.5 heures <br/><strong>Système d'exploitation :</strong> Windows 10 <br/><strong>Mémoire graphique :</strong> 6.0 Go <br /></p>
                    <td align="center" width="15%"><p><strong> Prix  </strong><br > 749,99€ </p></td>
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