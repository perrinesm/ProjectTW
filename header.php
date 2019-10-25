
        <meta charset="iso-8859-1">
        <title>PINEAPPLE</title>
        <link rel="stylesheet" href="stylesheet.css">

    <div ID="headerID">


        <div id="logoNom">
            <a href = 'index.php' class = "titre">PINEAPPLE</a>
            <img src="images/logo.png" class = "logo"> 
            
        </div>


       
        <div id="bande">   

            <div id="bandeGauche">
               
                <div class="menuCategory">

                    <form method = "get" action = "search.php">

                        <span class="navtitle">Produit</span>

                        <div class="withSeveralLinks">
                    
                            <a href = 'tab.php?productType=telephone' class = "menu">Téléphones</a>
                            <a href = 'tab.php?productType=tablette' class = "menu">Tablettes</a>
                            <a href = 'tab.php?productType=ordinateur' class = "menu">Ordinateurs</a>
                            <a href = 'tab.php?productType=accessoire' class = "menu">Accessoires</a>       


                        </div>

                                               

                        <meta><input type="search" name="bar" id="bar" placeholder="Recherche..." /></meta>

                        <meta class="menu"><input type="submit" value="Valider"/></meta>

                    </form>

                </div>


                

                    

                


            </div>

            <div id="bandeDroite">

                <form method="post" action="index.php"> 

                <meta class="menu">ID :</meta>

                <meta class="menu"><input type="text" name="ID" id="ID" /></meta>

                <meta class="menu">Password :</meta>

                <meta class="menu"><input type="text" name="PW" id="PW" ></meta>

                <meta class="menu"><input type="submit" class="Bouton" value="OK"/></meta>

                <a href='logUp.php' class="menu">Inscription</a>

                <a href = 'cart.php'><img class="images/logoCart" src="panier.png"></a>
                
                </form>
   
            </div>

        </div>

    
    </div>

        

