
        <meta charset="iso-8859-1">
        <title>PINEAPPLE</title>
        <link rel="stylesheet" href="stylesheet.css">

    <div ID="headerID">


        

            <?php

            include "bdd.php";

        if(isset($_SESSION['id'])){

            echo('
            <div id="logoNom">
            <a href = "index.php" class = "titre">PINEAPPLE</a>
            <img src="images/logo.png" class = "logo"> 
            
        </div>


       
        <div id="bande">   

            <div id="bandeGauche">
               
                <div class="menuCategory">

                    <form method = "get" action = "search.php">

                        <span class="navtitle">Produit</span>

                        <div class="withSeveralLinks">
                    
                            <a href = "tab.php?productType=telephone" class = "menu">Téléphones</a><br/>
                            <a href = "tab.php?productType=tablette" class = "menu">Tablettes</a><br/>
                            <a href = "tab.php?productType=ordinateur" class = "menu">Ordinateurs</a><br/>
                            <a href = "tab.php?productType=accessoire" class = "menu">Accessoires</a>       


                        </div>

                                               

                        <meta><input type="search" name="bar" id="bar" placeholder="Recherche..." /></meta>

                        <meta class="menu"><input type="submit" value="Valider"/></meta>

                    </form>

                </div>


                

                    

                


            </div>


                <div id="bandeDroite">

                <form method="POST" action=" "> 

                    

                <a href="logUp.php" class="menu">Profil</a>

                <a href="logUp.php" class="menu">Deconnexion</a>

                <a href = "cart.php"><img class="logoCart" src="images/panier.png"></a>');

        }

        else{

            if(isset($_POST['formconnect'])){

                $mailconnect = htmlspecialchars($_POST['mailconnect']);
                $mdpconnect = sha1($_POST['mdpconnect']);
                if(!empty($mailconnect) AND !empty($mdpconnect)){

                    $requser = $bdd -> prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse= ?" );
                    $requser -> execute(array($mailconnect,$mdpconnect));
                    $userexist =$requser ->rowCount();

                    if ($userexist==1){

                        session_start ();

                        $userinfo=$requser->fetch();
                        $_SESSION['id']=$userinfo['id'];
                        $_SESSION['pseudo']=$userinfo['pseudo'];
                        $_SESSION['mail']=$userinfo['mail'];
                        header("Location: index.php");
                    }

                    else{

                        $erreur="Mauvais mail ou mot de passe";

                        echo('

                            <div id="logoNom">
            <a href = "index.php" class = "titre">PINEAPPLE</a>
            <img src="images/logo.png" class = "logo"> 
            
        </div>


       
        <div id="bande">   

            <div id="bandeGauche">
               
                <div class="menuCategory">

                    <form method = "get" action = "search.php">

                        <span class="navtitle">Produit</span>

                        <div class="withSeveralLinks">
                    
                            <a href = "tab.php?productType=telephone" class = "menu">Téléphones</a><br/>
                            <a href = "tab.php?productType=tablette" class = "menu">Tablettes</a><br/>
                            <a href = "tab.php?productType=ordinateur" class = "menu">Ordinateurs</a><br/>
                            <a href = "tab.php?productType=accessoire" class = "menu">Accessoires</a>       


                        </div>

                                               

                        <meta><input type="search" name="bar" id="bar" placeholder="Recherche..." /></meta>

                        <meta class="menu"><input type="submit" value="Valider"/></meta>

                    </form>

                </div>


                

                    

                


            </div>

                            <div id="bandeDroite">

                <form method="POST" action=" "> 

                <meta class="menu">E-Mail :</meta>

                <meta class="menu"><input type="text" name="mailconnect" id="ID" /></meta>

                <meta class="menu">Password :</meta>

                <meta class="menu"><input type="text" name="mdpconnect" id="PW" ></meta>

                <meta class="menu"><input type="submit" class="Bouton" name="formconnect" value="OK"/></meta>

                <font color="red" > '.$erreur.'</font>
                <a href="logUp.php" class="menu">Inscription</a>

                <a href = "cart.php"><img class="logoCart" src="images/panier.png"></a>');

                    }

                }

                else{

                    $erreur="Compléter tous les champs";

                    echo('

                        <div id="logoNom">
            <a href = "index.php" class = "titre">PINEAPPLE</a>
            <img src="images/logo.png" class = "logo"> 
            
        </div>


       
        <div id="bande">   

            <div id="bandeGauche">
               
                <div class="menuCategory">

                    <form method = "get" action = "search.php">

                        <span class="navtitle">Produit</span>

                        <div class="withSeveralLinks">
                    
                            <a href = "tab.php?productType=telephone" class = "menu">Téléphones</a><br/>
                            <a href = "tab.php?productType=tablette" class = "menu">Tablettes</a><br/>
                            <a href = "tab.php?productType=ordinateur" class = "menu">Ordinateurs</a><br/>
                            <a href = "tab.php?productType=accessoire" class = "menu">Accessoires</a>       


                        </div>

                                               

                        <meta><input type="search" name="bar" id="bar" placeholder="Recherche..." /></meta>

                        <meta class="menu"><input type="submit" value="Valider"/></meta>

                    </form>

                </div>


                

                    

                


            </div>

                        <div id="bandeDroite">

                            <form method="POST" action=" "> 

                                <meta class="menu">E-Mail :</meta>

                                <meta class="menu"><input type="text" name="mailconnect" id="ID" /></meta>

                                <meta class="menu">Password :</meta>

                                <meta class="menu"><input type="text" name="mdpconnect" id="PW" ></meta>

                                <meta class="menu"><input type="submit" class="Bouton" name="formconnect" value="OK"/></meta>

                                <font color="red" > '.$erreur.'</font>

                                <a href="logUp.php" class="menu">Inscription</a>

                                <a href = "cart.php"><img class="logoCart" src="images/panier.png"></a>');

                    }

            }

            else{


                echo('<div id="logoNom">
            <a href = "index.php" class = "titre">PINEAPPLE</a>
            <img src="images/logo.png" class = "logo"> 
            
        </div>


       
        <div id="bande">   

            <div id="bandeGauche">
               
                <div class="menuCategory">

                    <form method = "get" action = "search.php">

                        <span class="navtitle">Produit</span>

                        <div class="withSeveralLinks">
                    
                            <a href = "tab.php?productType=telephone" class = "menu">Téléphones</a><br/>
                            <a href = "tab.php?productType=tablette" class = "menu">Tablettes</a><br/>
                            <a href = "tab.php?productType=ordinateur" class = "menu">Ordinateurs</a><br/>
                            <a href = "tab.php?productType=accessoire" class = "menu">Accessoires</a>       


                        </div>

                                               

                        <meta><input type="search" name="bar" id="bar" placeholder="Recherche..." /></meta>

                        <meta class="menu"><input type="submit" value="Valider"/></meta>

                    </form>

                </div>


                

                    

                


            </div>


                <div id="bandeDroite">

                <form method="POST" action=" "> 

                <meta class="menu">E-Mail :</meta>

                <meta class="menu"><input type="text" name="mailconnect" id="ID" /></meta>

                <meta class="menu">Password :</meta>

                <meta class="menu"><input type="text" name="mdpconnect" id="PW" ></meta>

                <meta class="menu"><input type="submit" class="Bouton" name="formconnect" value="OK"/></meta>

                <a href="logUp.php" class="menu">Inscription</a>

                <a href = "cart.php"><img class="logoCart" src="images/panier.png"></a>');





            }

        }


?>
                
                </form>
   
            </div>


            

        </div>

    
    </div>

        

