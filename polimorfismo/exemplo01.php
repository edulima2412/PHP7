<?php

abstract class Animal{
	
	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	}
}

class Cachorro extends Animal
{
	
	public function falar(){
		
		return "Late";

	}
}

class Gato extends Animal{

	public function falar(){
		
		return "Mia";

	}
}

class Passaro extends Animal{

	public function falar(){
		
		return "Canta";

	}

	//Concatenando com a classe pai
	public function mover(){
		
		return "Voa e " . parent::mover();

	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "</br>";
echo $pluto->mover() . "</br>";

echo "---------------------- </br>";

$gato = new Gato();

echo $gato->falar() . "</br>";
echo $gato->mover() . "</br>";

echo "---------------------- </br>";

$passaro = new Passaro();

echo $passaro->falar() . "</br>";
echo $passaro->mover() . "</br>";

?>