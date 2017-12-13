<?php

$name = "imagens";

//Criar pasta
if(!is_dir($name)){

	mkdir($name);

	echo "Diretorio criado com sucesso";

}

//Excluir pasta
else {

	rmdir($name);
	echo "Já existe o diretorio: $name, foi removido";

}

?>