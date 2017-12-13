<?php

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

echo $empresa;

echo "<br>";

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($texto2);

?>