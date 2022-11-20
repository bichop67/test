<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id']) AND $_SESSION['id'] == '1') {

  $connected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="oui" ORDER BY pseudo');
  $disconnected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="non" ORDER BY pseudo');

  $bans = $bdd->query('SELECT * FROM ip_blacklist ORDER BY id');


  if(isset($_POST['submit'])) {

    $ip = $_POST['ip'];

    if(!empty($ip)) {
    	
	    $reqban = $bdd->prepare("SELECT * FROM ip_blacklist WHERE ip = ?");
	    $reqban->execute(array($ip));
	    $banexist = $reqban->rowCount();

	    if($banexist == 0) {

	      if($ip != $_SERVER['REMOTE_ADDR']) {

	        $insertmbr = $bdd->prepare("INSERT INTO ip_blacklist(ip) VALUES(?)");
	        $insertmbr->execute(array($ip));
	        
	        header("Location: bannir.php");

	      }
	      else {
	        $msg = "Ne bannissez pas votre propre adresse IP !";
	      }

	    }
	    else {
	      $msg = "L'adresse IP est déjà bannie !";
	    }

    }
    else {
        $msg = "Veuillez remplir tous les champs !";
    }

  }

}
else {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des membres</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include("include_notif.php"); ?>

      <?php

        if(isset($msg)) {
          echo "<p class='message'>".$msg."</p>";
        }

        include("../includes/sidenav.php");
      ?>

      <h1>BANNIR UN VISITEUR</h1>

      <a href="panel.php" title="Retour"><img src="img/back.png" class="back" /></a>
      <a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>


      <form method="POST" action="" class="form">
        <label for="ip">Adresse IP</label><br />
        <input type="text" class="form-input" id="ip" name="ip"><br /><br /><br />

          <input type="submit" name="submit" class="form-submit" value="Bannir" />
      </form>


      <h1 style="margin-top: 70px;">LISTE DES BANS</h1>

      <?php
        echo'
            <table>
                <thead>
                    <tr>
                        <th>Adresse IP</th>
                        <th>Débannir</th>
                    </tr>
                </thead>
                <tbody>';
         
        while($b = $bans->fetch())
        { 
        echo "<tr>
        <td>".$b['ip']."</td>
        <td><a href='delete_ban.php?id=".$b['id']."'><img src='img/delete.png'></a></td>
        </tr>";
        }
        echo "</tbody></table>";
      ?>
      <br />
      <?php
        $total = 0;
        $sqls = $bdd->query('SELECT COUNT(*) AS id FROM ip_blacklist');
        if ($sqls) {
          $total = $sqls->fetchColumn();
        };
        
        echo "<h4><strong>TOTAL DE BANS : ".$total."</strong></h4>";
      ?>

</body>
</html>