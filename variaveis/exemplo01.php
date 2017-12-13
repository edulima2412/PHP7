<?php

/* Tipos Basicos */
$nome = "Hcode";
$site = 'www.google.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

/*Tipos Compostos */
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

/* Tipos Especiais */
$arquivo = fopen("exemplo02.php", "r");

//var_dump($arquivo);

$nulo = NULL;

/* Mostra tipo e quantidade dos dados */
var_dump($nome);

?>