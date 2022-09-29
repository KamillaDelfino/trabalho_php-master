<?php 

require("../database/database.php");

$marca = $_POST ['marca'];
$cor = $_POST ['cor'];
$id = $_POST['id'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];

$erro = "";

if($marca != "" && $cor != "" && $modelo != "" && $placa != "" ){
    try {
            conectaBD()->exec('UPDATE carro SET marca="'.$marca.'",
                    cor="'.$cor.'",
                    placa="'.$placa.'",
                    modelo="'.$modelo.'" WHERE id="'.$id.'"');
    } catch (Exception $e) {
            $erro = "&erro=Erro: " . $e->getMessage();
    }
    //volta para a página do cliente 
    header("Location:/trabalho_php-master/?p=carro{$erro}");
}else{
    echo "Campos não preenchidos! Favor preencher!";
}



?>