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
                    <th align="left"><p class="description"><strong> Description </strong> </p></th>
                    <th align="center"><strong> Prix  </strong> </th>
                </tr></thead>
                <tbody><tr>
                    <td width="15%"><p> <img src="ecouteur.jpg"/> </p></td>
                    <td width="45%"><p class="description">Son Pure Bass, puissant. <br >Maintenant, vous pouvez même l’emporter avec vous. <br > Découvrez les écouteurs T205 Pineapple au son Pineapple Pure Bass.<br > Ils sont légers. </p></td>
                    <td align="center" width="15%"><p> 34,99€ </p></td>
                    <td align="right" width="25%"><p><form> 
                        <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
                    </form></p></td>
                </tr></tbody>
            </table>
        </div>

        <div class = 'product'> 
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"><h4> Etui tablette </h4></th>
                    <th align="left"><p class="description"><strong> Description </strong> </p></th>
                    <th align="center"><strong> Prix  </strong> </th>
                </tr></thead>
                <tbody><tr>
                    <td width="15%"><p> <img src="etui.jpg"/> </p></td>
                    <td width="45%"><p class="description">Etui compatible avec toutes les tablettes Pineapple. <br > Entièrement en cuir. <br >  Waterproof. </p></td>
                    <td align="center" width="15%"><p> 19,99€ </p></td>
                    <td align="right" width="25%"><p><form> 
                        <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
                    </form></p></td>
                </tr></tbody>
            </table>
        </div>

        <div class = 'product'> 
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"><h4>  Chargeur  </h4></th>
                    <th align="left"><p class="description"><strong> Description </strong> </p></th>
                    <th align="center"><strong> Prix  </strong></th>
                </tr></thead>
                <tbody><tr>
                    <td width="15%"><p> <img src="load.jpg"/> </p></td>
                    <td width="45%"><p class="description">Chargeur Secteur 1A + cable USB, connecteur lightning.  <br > Rechargez facilement vos appareils disposant d'une entree Pineapple Lightning (PinPhone pro, PinPod, ..). <br >  Cable lightning inclus, longueur 0,90 cm.<br >  </p></td>
                    <td align="center" width="15%"><p> 9,99€ </p></td>
                    <td align="right" width="25%"><p><form> 
                        <input class="button" type="button" value=" Ajouter au Panier" onclick="alert('Produit ajouté !')">
                    </form></p></td>
                </tr></tbody>
            </table>
        </div>

        <div class = 'product'>
            <style>
                table{
                    border-collapse:collapse;}  
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"><h4>  Clavier Bluetooth  </h4></th>
                    <th align="left"><p class="description"><strong> Description </strong> </p></th>
                    <th align="center"><strong> Prix  </strong> </th>
                </tr></thead>
                <tbody><tr>
                    <td width="15%"><p> <img src="clavier.png"/> </p></td>
                    <td width="45%"><p class="description">Le PinKeyboard, avec son nouveau design, possède une batterie rechargeable et des touches plus fonctionnelles. <br > Le PinKeyboard s’associe automatiquement à tous nos produits.<br >Opérationnel pendant un mois entre chaque chargement.  </p></td>
                    <td align="center" width="15%"><p> 99,99€ </p></td>
                    <td align="right" width="25%"><p><form> 
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