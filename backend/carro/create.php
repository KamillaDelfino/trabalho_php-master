<?php 

require ('../database/database.php');

$marca = $_POST['marca'];
$cor = $_POST['cor'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];

$erro = "";

    if($marca != "" && $cor != "" && $modelo != "" && $placa != "" ){
        try {
            $array = array($marca, $cor, $placa,$modelo);
            $sql = conectaBD()->prepare("INSERT INTO carro VALUES (null, ?, ?, ?, ?)");
            $sql -> execute(array_values($array));
        } catch (Exception $e) {
            $erro = "&erro=Erro: " . $e->getMessage();
        }
        header("Location:/trabalho_php-master/?p=carro{$erro}");
    }else{
        echo "Campos não preenchidos! Favor preencher!";
    }
?>
