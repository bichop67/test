<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id']) AND $_SESSION['id'] == '1')
{

  $connected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="oui" ORDER BY pseudo');
  $disconnected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="non" ORDER BY pseudo');

  if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']);

    $membre = $bdd->prepare('SELECT * FROM membres_kolizeum WHERE id = ?');
    $membre->execute(array($get_id));

    if($membre->rowCount() == 1) {
      $membres = $membre->fetch();
      $pseudo = $membres['pseudo'];
      $mdp = $membres['mdp_texte'];
    } else {
      header("Location: liste_membres.php");
    }
  } else {
    header("Location: liste_membres.php");
  }


  if(isset($_POST['submit'])) {

    $pseudo_ecrit = htmlspecialchars($_POST['pseudo']);
    $mdp_ecrit_nohash = $_POST['mdp'];
    $mdp_ecrit_hash = sha1($_POST['mdp']);

    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) 
    {
      $update = $bdd->prepare("UPDATE membres_kolizeum SET pseudo = ?, motdepasse = ?, mdp_texte = ? WHERE id = ?");
      $update->execute(array($pseudo_ecrit, $mdp_ecrit_hash, $mdp_ecrit_nohash, $get_id));

      header("Location: liste_membres.php");
    }
    else {
      $msg = "Tous les champs doivent être complétés !";
    }
  }

}
else {
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Informations de <?= $pseudo; ?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <?php include("../includes/include_notif.php"); ?>

      <?php
        if(isset($msg)) {
          echo "<p class='message'>".$msg."</p>";
        }

        include("../includes/sidenav.php");
      ?>

      <h1>Informations de <?= $pseudo; ?></h1>

      <a href="liste_membres.php" title="Retour"><img src="img/back.png" class="back" /></a>
      <a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>

      <p>Mot de passe : <?= $mdp ?></p><br /><br /><br />
      <?php
      if($_GET['id'] == $_SESSION['id']) { /* Si le compte à modifier est celui de l'admin */
        echo "<p>Vous ne pouvez pas modifier votre compte !</p>";
      }
      else { ?>

      <form method="POST" action="">
        <label for="pseudo">Nouveau pseudo</label><br />
        <input type="text" name="pseudo" class="form-input" value="<?= $pseudo; ?>"><br /><br />

        <label for="mdp">Nouveau mot de passe</label><br />
        <input type="password" name="mdp" id="mdp" class="form-input"><br /><br /><br />

        <input type="submit" name="submit" class="form-submit" value="Modifier">
      </form><br/>

      <?php
      }
      ?>

    </body>
</html>