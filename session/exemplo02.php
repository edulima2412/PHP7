<?php

require_once("config.php");

// Apaga as variaveis de sessão
//session_unset($_SESSION['nome']);

// Limpa o usuario e as variaveis
//session_destroy

echo $_SESSION['nome'];

?>