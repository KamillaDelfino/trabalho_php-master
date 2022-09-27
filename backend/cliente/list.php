<?php 

require("./backend/database/database.php");

//Busca clientes no banco de dados
$sql = conectaBD()->prepare("SELECT * FROM cliente");
$sql -> execute();

//forma o resutlado em um Array
$fetchClient = $sql ->fetchAll();

//recebe id do cliente para ser alterado
if (isset($_GET["alt"])){
    //Salva os dados do cliente em variáveis
        foreach($fetchClient as $cliente){
            if($cliente["id"] == $_GET["alt"]){
                $id = $cliente["id"];
                $nome = $cliente["nome"];
                $sobrenome = $cliente["sobrenome"];
                $email = $cliente["email"];
                $telefone = $cliente["telefone"];
            }
        }
    }
    

?>