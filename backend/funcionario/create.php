<?php 

require("../database/database.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$setor = $_POST['setor'];

$erro = "";

if ($nome != "" && $sobrenome != "" && $telefone != "" && $setor != ""){
    try{
        $array = array($nome, $sobrenome, $telefone, $setor);
        $sql = conectaBD()->prepare("INSERT INTO funcionario VALUES(null, ?, ?, ?, ?)");
        $sql -> execute(array_values($array));
    } catch (Exception $e) {
        $erro = "&erro=Erro: " . $e->getMessage();
    }
    
    header("Location:/trabalho_php-master/?p=funcionario{$erro}");
}else{
    echo "Campos não preenchidos! Favor preencher!";
}


?>