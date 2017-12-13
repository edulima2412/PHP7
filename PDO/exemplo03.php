<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


//Inserir Dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASS)");

$login = "edu";
$pass = "12345";

//Parametros que ligam os dados
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "Inserido OK!";

?>