<?php 

require("./backend/database/database.php");

//Busca clientes no banco de dados
$sql = conectaBD()->prepare("SELECT * FROM funcionario");
$sql -> execute();

//forma o resutlado em um Array
$fetchFuncio = $sql ->fetchAll();

//recebe id do cliente para ser alterado
if (isset($_GET["alt"])){
    //Salva os dados do cliente em variáveis
        foreach($fetchFuncio as $funcionario){
            if($funcionario["id"] == $_GET["alt"]){
                $id = $funcionario["id"];
                $nome = $funcionario["nome"];
                $sobrenome = $funcionario["sobrenome"];
                $telefone = $funcionario["telefone"];
                $setor = $funcionario["setor"];
            }
        }
    }
    

?>