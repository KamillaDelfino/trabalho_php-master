<?php 

require("../database/database.php");

$nome = $_POST['nome'];
$id = $_POST['id'];
$email = $_POST['email'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];

$erro = "";

try{
        conectaBD()->exec('UPDATE cliente SET nome="'.$nome.'",
                email="'.$email.'",
                sobrenome="'.$sobrenome.'",
                telefone="'.$telefone.'" WHERE id="'.$id.'"');
} catch (Exception $e){
        $erro = "&erro=Erro: " . $e->getMessage();
}

//volta para a página do cliente 
header("Location:/trabalho_php-master/?p=cliente{$erro}");

?>