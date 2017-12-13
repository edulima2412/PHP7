<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ed");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("tata", "33333");
//$aluno->insert();
//echo $aluno;

//Alterar dados do usuario
//$usuario = new Usuario();
//$usuario->loadById(5);
//$usuario->update("rafaela", "0000");
//echo $usuario;

//Excluir dados
$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;

?>