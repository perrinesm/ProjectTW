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

    <body style = "display: flex; flex-direction: column;">
        <div class="product">
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"><h2> PinTosh 1984 GRIFFIN </h2></th>
                    <th align="left"><p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p></th>
                </tr></thead>
                <tbody><tr>
                    <td width="20%"><p> <img style="width: 240px; height: 240px" src="ordiA2.png"/> </p></td>
                    <td width="45%"><p class="description"><p> <strong>Type de PC :</strong> Gamer <br/><strong>Processeur :</strong>  Intel® Core i9-8950HK <br/><strong>Type de carte graphique :</strong> NVIDIA GeForce RTX 2080 <br/><strong>Fréquence :</strong> 2666 MHz  <br/><strong>Capacité SSD :</strong> 1000.0 Go <br/><strong>Système d'exploitation :</strong> Windows 11 <br/><strong>Mémoire graphique :</strong> 8.0 Go <br /></p>
                    <td align="center" width="15%"><p><strong> Prix  </strong><br > 5599,99€ </p></td>
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