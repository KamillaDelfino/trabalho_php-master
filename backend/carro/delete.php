<?php

require("./backend/database/database.php");

$id = $_GET['del'];
$confirmacao = $_GET['confirmacao'];

$erro = "";

//ve se recebeu a confirmação
if (isset($confirmacao) && $confirmacao == 1){
	try{
	    $pdo = conectaBD();
	    $pdo ->exec("DELETE FROM carro WHERE id=$id");
	} catch (Exception $e) {
	    $erro = "&erro=Erro: " . $e->getMessage();
	}
}
else{
	$erro = "&confirma=" . $id;
}

header("Location:/trabalho_php-master/?p=carro{$erro}");

?>