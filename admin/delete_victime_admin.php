<?php
session_start();

require("../includes/vars.php");


if(isset($_SESSION['id']) AND $_SESSION['id'] == '1') {

	if(isset($_GET['id']) AND isset($_GET['id_membre']) AND !empty($_GET['id']) AND !empty($_GET['id_membre'])) {

		$suppr_id = htmlspecialchars($_GET['id']);
		$suppr_id_membre = htmlspecialchars($_GET['id_membre']);
		
		$suppr = $bdd->prepare('DELETE FROM victimes_membres WHERE id = ? AND id_membre = ?');
		$suppr->execute(array($suppr_id, $suppr_id_membre));
	
		header('Location: membre.php?id='.$suppr_id_membre);
	}
	else {
		header('Location: membre.php?id='.$suppr_id_membre);
	}
}
else {
    header('Location: index.php');
}
?>