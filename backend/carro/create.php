<?php 

require ('../database/database.php');

$marca = $_POST['marca'];
$cor = $_POST['cor'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];

$erro = "";

try {
    if(isset($marca) && isset($cor) && isset($placa) && isset($modelo)){
        $array = array($marca, $cor, $placa,$modelo);
        $sql = conectaBD()->prepare("INSERT INTO carro VALUES (null, ?, ?, ?, ?)");
        $sql -> execute(array_values($array));
    }
} catch (Exception $e) {
    $erro = "&erro=Erro: " . $e->getMessage();
}

//volta para a página do carro 
header("Location:/trabalho_php-master/?p=carro{$erro}");

?>
