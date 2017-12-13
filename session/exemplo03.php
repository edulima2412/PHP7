<?php

require_once("config.php");

// Mostra seu id na sessão
echo session_id();

echo session_regenerate_id();

var_dump($_SESSION);

?>