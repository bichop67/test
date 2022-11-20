<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id']) AND $_SESSION['id'] == '1') {

  $connected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="oui" ORDER BY pseudo');
  $disconnected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="non" ORDER BY pseudo');

  if(isset($_GET['id']) AND isset($_GET['id_membre']) AND !empty($_GET['id']) AND !empty($_GET['id_membre'])) {

    $get_id = htmlspecialchars($_GET['id']);
    $get_id_membre = htmlspecialchars($_GET['id_membre']);

    $victime = $bdd->prepare('SELECT * FROM victimes_membres WHERE id = ? AND id_membre = ?');
    $victime->execute(array($get_id, $get_id_membre));

    if($victime->rowCount() == 1) {
      $victimes = $victime->fetch();
      $pseudo_victime = $victimes['pseudo_victime'];
      $serveur_victime = $victimes['serveur_victime'];
    }
    else {
      header("Location: membre.php?id=".$get_id_membre);
    }
  }
  else {
    header("Location: membre.php?id=".$get_id_membre);
  }


  if(isset($_POST['submit'])) {

    $pseudo_victime_ecrit = $_POST['pseudo'];
    $serveur_victime_ecrit = $_POST['serveur'];

    if(!empty($_POST['pseudo']) AND !empty($_POST['serveur'])) {

      $update = $bdd->prepare("UPDATE victimes_membres SET id_membre = ?, pseudo_victime = ?, serveur_victime = ? WHERE id = ?");
      $update->execute(array($get_id_membre, $pseudo_victime_ecrit, $serveur_victime_ecrit, $get_id));

      header("Location: membre.php?id=".$get_id_membre);
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
        <title>Informations de <?= $pseudo_victime; ?></title>
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

      <h1>Informations de <?= $pseudo_victime; ?></h1>

      <a href="membre.php?id=<?= $get_id_membre ?> title="Retour"><img src="img/back.png" class="back" /></a>
      <a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>

      <p>Serveur : <?= $serveur_victime; ?></p><br /><br /><br />

      <form method="POST" action="">
        <label for="pseudo">Nouveau pseudo</label><br />
        <input type="text" name="pseudo" class="form-input" value="<?= $pseudo_victime; ?>"><br /><br />

        <label for="serveur">Nouveau serveur</label><br />
        <input type="text" name="serveur" id="serveur" class="form-input" value="<?= $serveur_victime; ?>"><br /><br /><br />

        <input type="submit" name="submit" class="form-submit" value="Modifier">
      </form><br/>

    </body>
</html>