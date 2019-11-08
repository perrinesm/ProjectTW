<?php 
session_start();


include "bdd.php";

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid= intval($_GET['id']);
    $requser=$bdd->prepare('SELECT * FROM membres WHERE id =?');
    $requser->execute(array($getid));
    $userinfo=$requser->fetch();
}

?>



<html>
    <head>
     <title> test connexion </title>
     <meta charset="utf-8">
    </head>

    <body>
    <div align="center">     
        <h2> Profil de <?php echo $userinfo['pseudo'];?></h2>
        <br /><br />
        Pseudo = <?php echo $userinfo['pseudo'];?>
        <br/>
        Mail = <?php echo $userinfo['mail'];?> 
        <br />
        <?php 
        if(isset($_SESSION['id'])) {
            ?>
            <a href='#'> Editer mon profil </a>
            <a href='deconnexion.php'> Se déconnecter </a>
            <?php
              
        }
        ?>
    </div>
    
    
    </body>
</html>
<?php
?>

