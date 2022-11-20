<?php
session_start();

require("../includes/vars.php");


$requser = $bdd->prepare("SELECT * FROM membres_kolizeum WHERE id = ?");
$requser->execute(array($_SESSION['id']));

$userinfo = $requser->fetch();


if(isset($_SESSION['id']) AND $_SESSION['id'] != '1' AND $userinfo['code_entre'] == $userinfo['code']) {

	if(isset($_GET['id']) AND !empty($_GET['id'])) {

		$reqvictime = $bdd->prepare("SELECT * FROM victimes_membres WHERE id = ? AND id_membre = ?");
		$reqvictime->execute(array($_GET['id'], $_SESSION['id']));
		$victimeinfo = $reqvictime->fetch();

		if($_GET['id'] == $victimeinfo['id']) {

			$suppr_id = htmlspecialchars($_GET['id']);
			$suppr = $bdd->prepare('DELETE FROM victimes_membres WHERE id = ? AND id_membre = ?');
			$suppr->execute(array($suppr_id, $_SESSION['id']));
		
			header('Location: victimes.php');
		}
		else {
			header('Location: victimes.php');
		}

	}
	else {
		header('Location: victimes.php');
	}
}
else {
    header('Location: panel.php');
}
?>