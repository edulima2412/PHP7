<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


//Apagar Dados
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

//Parametros que ligam os dados
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados apagados OK!";

?>