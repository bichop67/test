<?php
session_start();

require("../includes/vars.php");

if(isset($_SESSION['id']) AND $_SESSION['id'] == '1') {

	if(isset($_GET['id']) AND !empty($_GET['id'])) {

		$suppr_id = htmlspecialchars($_GET['id']);
		$suppr = $bdd->prepare('DELETE FROM ip_blacklist WHERE id = ?');
		$suppr->execute(array($suppr_id));

		header('Location: bannir.php');
	}
	else {
		header("Location: bannir.php");
	}
}
else {
    header('Location: index.php');
}
?>