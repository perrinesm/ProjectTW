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
        <h2 style="margin-left: 90px;">  Tablettes </h2>

        <div class = 'product'> 
            <style>
                table{
                   border-collapse:collapse;}
                    
            </style>
            <table width="100%">
                <thead><tr>
                    <th align="left"> <h4 style="margin-top: 5px;"> <a href="tabA1.php"> PinPad Pro </a></h4></th>
                    <th align="left"><p class="description"><em><strong> Description </strong></em></p></th>
                    <th align="center"><em><strong> Prix  </strong> </em></th>
                </tr></thead>
                <tbody><tr>
                    <td ><p> <img src="tabA1.png" /> </p></td>
                    <td><p class="description"> Meilleure tablette du marché.Une technologie est toute nouvelle, tout écran, toute puissante. <br >Elle renferme nos technologies les plus avancées dans un design complètement réinventé.. <br >Waterproof .</p></td>
                    <td align="center"><p> 899,99€ </p></td>
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
                    <th align="left"> <h4> <a href="tabA2.php"> PinSmart </a> </h4></th>
                    <th align="left"><p class="description"><em><strong> Description </strong></em></p></th>
                    <th align="center"><em><strong> Prix  </strong> </em></th>
                </tr></thead>
                <tbody><tr>
                    <td ><p> <img src="tabA2.png" /> </p></td>
                    <td><p class="description"> <br >Conçu et testé par Pineapple la tablette PinSmart dispose d'un processeur quadricoeur plus rapide. <br/>Batterie offrant jusqu'à 24h d'autonomie. <br >Naviguez sur Internet, regardez des films, un grand divertissement jour après jour. <br >Waterproof .</p></td>
                    <td align="center"><p> 459,99€ </p></td>
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
