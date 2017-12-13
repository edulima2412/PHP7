<?php

$nome = "Eduardo lima";

$nome2 = "TREINAMENTO";

$nomeComp = $nome . " " . $nome2;

var_dump($nome, $nome2);

echo "<br>";

// Deixa as letras maiuscula
$nome = strtoupper($nome);

echo $nome;

echo "<br>";

// Deixa as letras minuscula
$nome2 = strtolower($nome2);

echo $nome2;

echo "<br>";

// Deixa maiuscula as primeiras letras
$nomeComp = ucwords($nomeComp);

echo $nomeComp;

?>