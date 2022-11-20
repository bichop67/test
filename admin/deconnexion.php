<?php
session_start();

require("../includes/vars.php");


if($_SESSION['id'] != '1') {
	$disconnected = $bdd->prepare("UPDATE membres_kolizeum SET connected = 'non', derniere_deconnexion = NOW() WHERE id = ?");
	$disconnected->execute(array($_SESSION['id']));


	function checkKeys ($bdd, $randStr) {
		$result = $bdd->query("SELECT * FROM membres_kolizeum");

		while ($row = $result->fetch()) {
			if($row['code'] == $randStr) {
				$keyExists = true;
				break;
			} else {
				$keyExists = false;
			}
			return $keyExists;
		}
	}

	function generateKey($bdd) {
		$keyLength = 6;
		$str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
		$randStr = substr(str_shuffle($str), 0, $keyLength);

		$checkKey = checkKeys($bdd, $randStr);

		while ($checkKey == true) {
			$randStr = substr(str_shuffle($str), 0, $keyLength);
			$checkKey = checkKeys($bdd, $randStr);
		}

		return $randStr;
	}

	$cle_finale = generateKey($bdd);

	$set_code = $bdd->prepare("UPDATE membres_kolizeum SET code = ? WHERE id = ?");
	$set_code->execute(array($cle_finale, $_SESSION['id']));
}

$_SESSION = array();
session_destroy();
header("Location: index.php");
?>