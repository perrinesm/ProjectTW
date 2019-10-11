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
                    <th align="left"> <h2> Pinphone XS </h2></th>
                    <th align="left"><p style="padding-left: 15px; font-size: 120%"> Caractéristiques :<br />  </p></th>
                </tr></thead>
                <tbody><tr>
                    <td width="20%"><p> <img style="width: 240px; height: 240px" src="telA1.png"/> </p></td>
                    <td width="45%"><p class="description">  <p> <strong>Type de produit :</strong> Téléphone portable<br/> <strong>Capacité :</strong> 128 Go <br/><strong>Processeur :</strong> Pineapple A10 Fusion <br/><strong>Taille d'écran</strong>  4.7 pouces <br/><strong>Définition :</strong> 1334 x 750 pixels <br/><strong>Mémoire vive :</strong> 2.0 Go <br /></p>
                    <td align="center" width="15%"><p><strong> Prix  </strong><br > 899,99€ </p></td>
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