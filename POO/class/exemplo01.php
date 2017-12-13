<?php

class Pessoa{

	public $nome; //Atributo

	public function falar(){ //Metodo

		return "O meu nome é " .$this->nome;

	}

}

$eduardo = new Pessoa();
$eduardo->nome = "Eduardo";

echo $eduardo->falar();

?>