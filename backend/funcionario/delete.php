<?php

require("./backend/database/database.php");

$id = $_GET['del'];

$erro = "";

try{
    $id = $_GET['del'];
    $pdo = conectaBD();
    $pdo ->exec("DELETE FROM funcionario WHERE id=$id");
} catch(Exception $e) {
    $erro = "&erro=Erro: " . $e->getMessage();
}

header("Location:/trabalho_php-master/?p=funcionario{$erro}");

?>