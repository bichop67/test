<!DOCTYPE html>
<html lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Logs</title>
	<link rel="stylesheet" type="text/css" href="css/stylex.css">
</head>
<body>
  	<?php include("include_notif.php"); ?>

	<p class='logout_msg'>SCREEN DU HACK + SCREEN DE LA VENTE A SAM-_-#3804</p>

	<h1>LOGS</h1>

	
 	<a href="deconnexion.php" title="Déconnexion"><img src="img/logout.png" class="logout" /></a>

	<?php
	$file = fopen("U92Zb3ALSChwx4rLDa4DT5238i7i7ja.html", "r") or exit("Impossible d'ouvrir les logs !");

	//Output a line of the file until the end is reached
	while(!feof($file)) {
		echo fgets($file). "<br>";
	}

	fclose($file);
	?>

</body>
</html>