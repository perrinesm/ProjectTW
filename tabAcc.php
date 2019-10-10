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
        <h2 style="margin-left: 90px;">   Accessoires </h2>
                

        <div class = 'product'>  
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"><h4> Ecouteurs </h4></th>
                    <th align="left"><p class="description"><em><strong> Description </strong> </p></th>
                    <th align="center"><em><strong> Prix  </strong> </em></th>
                </tr></thead>
                <tbody><tr>
                    <td ><p> <img src="ecouteur.jpg"/> </p></td>
                    <td><p class="description">à compléter text pas long sinon pb </p></td>
                    <td align="center"><p> 25,99€ </p></td>
                    <td align="left"><p><form> 
                        <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
                    </form></p></td>
                </tr></tbody>
            </table>
            
        </div>

        <div class = 'product'>  
            <h4> Etui tablette </h4>
            <p> <img src="etui.jpg" /> </p>
            <p class="description"> <em><strong> Description</strong> </em> <center><em><strong> Prix  </strong> </em></center></p>
            <p class="description"> <center>25,99€ </center></p>
            <form> 
                <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
            </form>
        </div>

        <div class = 'product'>  
            <h4> Chargeur </h4>
            <p> <img src="load.jpg" /> </p>
            <p class="description"><em><strong>  Description </strong> </em> <center><em><strong> Prix  </strong> </em></center></p>
            <p class="description"> <center>25,99€ </center></p>
            
            <form> 
                <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
            </form>
        </div>

        <div class = 'product'>  
            <h4> Clavier Bluetooth </h4>
            <p> <img src="clavier.png" /> </p>
            <p class="description"> <em> <strong> Description</strong>  </em><center><em><strong> Prix  </strong> </em></center></p>
            <p class="description"><center>25,99€ </center> </p>
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