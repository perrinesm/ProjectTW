<?php 
session_start();


if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid= intval($_GET['id']);
    $requser=$bdd->prepare('SELECT * FROM membres WHERE id =?');
    $requser->execute(array($getid));
    $userinfo=$requser->fetch();
}

?>

<html>
    
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
            <a href='index.php?page=editionprofil'> Editer mon profil </a>
            <a href='index.php?page=deconnexion'> Se déconnecter </a>
            <?php
              
        }
        ?>
    </div>
    
    
    </body>
</html>
<?php
?>

