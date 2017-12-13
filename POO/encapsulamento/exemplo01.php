<?php

class Pessoa {

	public $nome = "Eduardo";
	protected $idade = 30;
	private $senha = "1234";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>";

$objeto->verDados();
?>