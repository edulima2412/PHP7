<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//Abrir transação
$conn->beginTransaction();

//Apagar Dados
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//Retorna transação
$conn->rollback();

//Confirma transação
$conn->commit();

echo "Dados apagados OK!";

?>