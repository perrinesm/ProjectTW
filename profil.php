<html>
    
    <body>

        <div style="background-color: khaki" align="center">    

            <h2> Profil de <?php echo $_SESSION['pseudo'];?></h2>

            <br /><br />

            Pseudo = <?php echo $_SESSION['pseudo'];?>

            <br/>

            Mail = <?php echo $_SESSION['mail'];?>

            <br />

            <?php 

                if(isset($_SESSION['id'])) {
                    ?>
                    <a href='index.php?page=editionprofil'> Editer mon profil </a>
                    <a href='index.php?page=deconnexion'> Se déconnecter </a>
                    <?php                      
                }

            ?>

        </div>   
    
    </body>

</html>


