<html>
  <head>
    <title>REDE INFO</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
<?php
$dados = $_SERVER;
echo '<pre>';

$ip = isset($_SERVER["HTTP_X_REAL_IP"]) ? $_SERVER["HTTP_X_REAL_IP"] : "Indisponível";
$rota = isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : "Indisponível";
$proxy = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : "Indisponível";

echo "<br>IP DE ORIGEM: $ip";
echo "<br>NÓS NA ROTA: $rota";
echo "<br>ÚLTIMO NÓ: $proxy";

echo '</pre>';

?> 

  </body>
</html>