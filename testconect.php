<?php 
$bdd = new PDO('mysql:host=localhost;dbname=pineapple','root','');

if(isset($_POST['forminscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);   
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
    {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) { 
        if($mail == $mail2) {
          if(filter_var($mail, FILTER_VALIDATE_EMAIL)) 
           { 
            $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();

            $reqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
            $reqpseudo->execute(array($pseudo));
            $pseudoexist = $reqpseudo->rowCount();

            if($mailexist == 0 AND $pseudoexist == 0)
              {
              if($mdp == $mdp2) {
              $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
              $insertmbr->execute(array($pseudo, $mail, $mdp));
              $erreur= "Compte créé <a href=\"connexionessay.php\">Me connecter</a>"; /** remplacer par $erreur si bug /$_SESSION['comptecree']header('Location: index.php'); */ 
              }
              else {
               $erreur = "Mots de passe différents";
              }
            }
            if ($pseudoexist != 0 || $mailexist != 0){
              if ($pseudoexist == 0 ){
                $erreur = "Adresse mail déjà prise";
              }
              else{
                $erreur = "Pseudo déjà pris";
              }
            }
            if($pseudoexist != 0  AND $mailexist != 0){
                $erreur = "Pseudo et adresse mail déjà pris";
            }  
          }
          else { 
            $erreur = "Mail pas valide";
          }
        }
        else {
          $erreur = "Mails différents";
        }
      }
      else {
        $erreur = "Votre pseudo ne doit pas dépasser 255 caractères" ;
      }
    }
    else {
        $erreur = "Compléter tous les champs";    
    }
}

?>



<html>
    <head>
     <title> test connexion </title>
     <meta charset="utf-8">
    </head>

    <body>
    <div align="center">     
        <h2> Inscription </h2>
        <br /><br />
        <form method="POST" action=" ">
         <table >
          <tr>
           <td align="right">
            <label for="pseudo" > Pseudo : </label>
            <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"/>
            </td>
           </tr>

           <tr>
           <td align="right">
            <label for="mail" > Mail : </label>
            <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
            </td>
           </tr>

           <tr>
           <td align="right">
            <label for="mail" > Confirmation Mail : </label>
            <input type="email" placeholder="Confirmer votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
            </td>
           </tr>

           <tr>
           <td align="right">
            <label for="mdp" > Mot de passe : </label>
            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
            </td>
           </tr>

           <tr>
           <td align="right">
            <label for="mdp2" >Confirmer Mot de passe : </label>
            <input type="password" placeholder="Confirmation mot de passe" id="mdp2" name="mdp2" />
            </td>
           </tr>

           <tr>
             <td align="center"></td>
            
             <td align="center"> <input type="submit" name="forminscription" value="Je m'inscris" /> </td>
           </tr>

         </table>
        </form>
        <?php 
            if(isset($erreur)) {
                echo '<font color="red" > '.$erreur."</font>";
            }
        ?>
    </div>
    
    
    </body>
</html>