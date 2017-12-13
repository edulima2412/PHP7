<?php

/* Comentario */

$anoNascimento = 1988;

$nome = "Eduardo";

$sobrenome = "Lima";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit;

/* Apaga variavel */
unset($nome);

/* Retira a noticia caso a condição seja verdadeira */
if(isset($nome)){
	echo $nome;
}

?>