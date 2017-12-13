<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


//Alterar Dados
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID");

$login = "eduardo";
$pass = "1234";
$id = 2;

//Parametros que ligam os dados
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados OK!";

?>