<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id'])) {

	if($_SESSION['id'] != '1') {


		$req_mbr = $bdd->prepare("SELECT * FROM membres_kolizeum WHERE id = ?");
		$req_mbr->execute(array($_SESSION['id']));

		$userinfo = $req_mbr->fetch();
		$code_valide = $userinfo['code'];


		if($userinfo['code_entre'] != $userinfo['code']) {

		    if(isset($_POST['submit'])) {

			    $code = utf8_decode($_POST['code']);

			    if(!empty($code)) {

					if($code == $code_valide) {

					    $req_finale = $bdd->prepare("UPDATE membres_kolizeum SET connected = 'oui', code_entre = ?, derniere_connexion = NOW() WHERE id = ?");
						$req_finale->execute(array($code, $_SESSION['id']));

						header("Location: logs.php");

					}
					else {
						$msg = "Le code entré est incorrect !";
					}

			    }
			    else {
			    	$msg = "Veuillez entrer un code !";
			    }
			}
		}
		else {
			$req_connected = $bdd->prepare("UPDATE membres_kolizeum SET connected = 'oui' WHERE id = ?");
			$req_connected->execute(array($_SESSION['id']));

			header("Location: logs.php");
		}
	}
	else {
		$connected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="oui" ORDER BY pseudo');
		$disconnected = $bdd->query('SELECT * FROM membres_kolizeum WHERE connected="non" ORDER BY pseudo');
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

	<?php
		if($_SESSION['id'] == '1') {
	?>
			<p class='bienvenue'>Bienvenue <?= $_SESSION['pseudo']; ?> !</p>

			<?php include("../includes/sidenav.php"); ?>

			<h1>LOGS</h1>

			<a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>


			<a href="supprimer_logs.php">Effacer les logs</a><br /><br /><br />

			<?php include("include_notif.php"); ?>
			<?php

				$file = fopen("f6s5df4sdfouizhbnb89545611.php", "r") or exit("Impossible d'ouvrir les logs !");
				//Output a line of the file until the end is reached
				while(!feof($file)) {
					echo fgets($file). "<br>";
				}
				fclose($file);

			}
			else { /* POUR MEMBRES SANS PRIVILEGES */
			?>

		<?php
			if(isset($msg)) {
				echo "<p class='message'>".$msg."</p>";
			}
		?>

		<h1>CODE D'ACCÈS</h1>

		<a href="deconnexion.php" title="Déconnexion"><img src="logout.png" class="logout" /></a>

		<p class="consignes">Veuillez entrer votre code d'accès pour vous connecter.</p>

		<form method="POST" action="" class="form">
			<label for="code">Code</label><br />
		    <input type="text" class="form-input" id="code" name="code" value="<?php if(isset($_POST['code'])) { echo $_POST['code']; } ?>"><br /><br /><br />

		    <input type="submit" name="submit" class="form-submit" value="Valider" />
		</form>

		<?php
		}

		?>

</body>
</html>