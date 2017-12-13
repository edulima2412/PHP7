<?php

//Visualizar o cookie
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
	
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $obj->empresa;

}

?>