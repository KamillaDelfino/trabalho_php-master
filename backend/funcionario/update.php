<?php 

require("../database/database.php");

$nome = $_POST['nome'];
$id = $_POST['id'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$setor = $_POST['setor'];

$erro = "";

try{
        conectaBD()->exec('UPDATE funcionario SET nome="'.$nome.'",
                setor="'.$setor.'",
                sobrenome="'.$sobrenome.'",
                telefone="'.$telefone.'" WHERE id="'.$id.'"');
} catch (Exception $e){
        $erro = "&erro=Erro: " . $e->getMessage();
}

//volta para a página do cliente 
header("Location:/trabalho_php-master/?p=funcionario{$erro}");

?>