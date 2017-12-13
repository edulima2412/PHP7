<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Eduardo Lima");
$cad->setEmail("edulima2412@gmail.com");
$cad->setSenha(123456);

$cad->registrarVenda();

?>