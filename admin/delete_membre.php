<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id']) AND $_SESSION['id'] == '1') {

	if(isset($_GET['id']) AND !empty($_GET['id'])) {

		if($_GET['id'] != $_SESSION['id']) {

			$suppr_id = htmlspecialchars($_GET['id']);
			$suppr = $bdd->prepare('DELETE FROM membres_kolizeum WHERE id = ?');
			$suppr->execute(array($suppr_id));
			
			header('Location: liste_membres.php');
		}
		else {
			header("Location: liste_membres.php");
		}
	}
	else {
		header("Location: liste_membres.php");
	}
}
else {
    header('Location: index.php');
}
?>