<?php 

require("../database/database.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$setor = $_POST['setor'];

$erro = "";

try{
    if (isset($nome)  && isset($sobrenome) && isset($telefone) && isset($setor)){
        $array = array($nome, $sobrenome, $telefone,$setor);
        $sql = conectaBD()->prepare("INSERT INTO funcionario VALUES(null, ?, ?, ?, ?)");
        $sql -> execute(array_values($array));
}

} catch (Exception $e) {
    $erro = "&erro=Erro: " . $e->getMessage();
}

//volta para a página do cliente 
header("Location:/trabalho_php-master/?p=funcionario{$erro}");

?>