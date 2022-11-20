<?php
session_start();

require("../includes/vars.php");


$requser = $bdd->prepare("SELECT * FROM membres_kolizeum WHERE id = ?");
$requser->execute(array($_SESSION['id']));

$userinfo = $requser->fetch();

if(isset($_SESSION['id']) AND $_SESSION['id'] != '1' AND $userinfo['code_entre'] == $userinfo['code']) {

  $victimes = $bdd->prepare('SELECT * FROM victimes_membres WHERE id_membre = ? ORDER BY id');
  $victimes->execute(array($_SESSION['id']));

  if(isset($_POST['submit'])) {

    $pseudo = $_POST['pseudo'];
    $serveur = $_POST['serveur'];


    if(!empty($_POST['pseudo']) AND !empty($_POST['serveur'])) {

      $reqpseudo = $bdd->prepare("SELECT * FROM victimes_membres WHERE pseudo_victime = ?");
      $reqpseudo->execute(array($pseudo));
      $pseudoexist = $reqpseudo->rowCount();

      if($pseudoexist == 0) {

        $insertmbr = $bdd->prepare("INSERT INTO victimes_membres(id_membre, pseudo_victime, serveur_victime) VALUES(?, ?, ?)");
        $insertmbr->execute(array($_SESSION['id'], $pseudo, $serveur));

        header("Location: victimes.php");

      }
      else {
        $msg = "Le pseudo du joueur existe déjà !";
      }

    }
    else {
      $msg = "Tous les champs doivent être complétés !";
    }

  }

}
else {
  header("Location: panel.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Victimes</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include("include_notif.php"); ?>

  <?php
    if(isset($msg)) {
      echo "<p class='message'>".$msg."</p>";
    }
  ?>
  
  <h1>AJOUTER UNE VICTIME</h1>

  <a href="logs.php" title="Retour"><img src="img/back.png" class="back" /></a>
  <a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>

  <form method="POST" action="" class="form">
    <label for="pseudo">Pseudo</label><br />
    <input type="text" class="form-input" id="pseudo" name="pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>"><br /><br />

    <label for="serveur">Serveur</label><br />
    <input type="text" class="form-input" id="serveur" name="serveur"><br /><br /><br />

    <input type="submit" name="submit" class="form-submit" value="Valider" />
  </form>


  <h1 style="margin-top: 70px;">LISTE DES VICTIMES</h1>

    <?php
      echo'
          <table>
              <thead>
                  <tr>
                      <th>Pseudo</th>
                      <th>Serveur</th>
                      <th>Supprimer</th>
                  </tr>
              </thead>
              <tbody>';
       
      while($v = $victimes->fetch())
      { 
      echo "<tr>
      <td>".$v['pseudo_victime']."</td>
      <td>".$v['serveur_victime']."</td>
      <td><a href='delete_victime.php?id=".$v['id']."'><img src='img/delete.png'></a></td>
      </tr>";
      }
      echo "</tbody></table>";
    ?>
    <br />
    <?php
      $total = 0;
      $sqls = $bdd->prepare('SELECT COUNT(*) AS id FROM victimes_membres WHERE id_membre = ?');
      $sqls->execute(array($_SESSION['id']));

      if ($sqls) {
        $total = $sqls->fetchColumn();
      }
      
      echo "<h4><strong>TOTAL DE VICTIMES : ".$total."</strong></h4>";
    ?>

</body>
</html>