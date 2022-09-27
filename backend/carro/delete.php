<?php

require("./backend/database/database.php");

$id = $_GET['del'];

$erro = "";

try{
    $pdo = conectaBD();
    $pdo ->exec("DELETE FROM carro WHERE id=$id");
} catch (Exception $e) {
    $erro = "&erro=Erro: " . $e->getMessage();
}

header("Location:/trabalho_php-master/?p=carro{$erro}");

?>