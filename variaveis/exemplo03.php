<?php

/* Variaveis Pre-Definidas */

$nome = $_GET["a"];

var_dump($nome);

// Mostra o IP de acesso
$ip = $SERVER["REMOTE_ADDR"];

// Mostra o Nome de acesso
$ip = $SERVER["SCRIPT_NAME"];

echo $ip;

?>