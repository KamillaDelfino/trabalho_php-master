<?php 

require("./backend/database/database.php");
//Busca carros no banco de dados
$sql = conectaBD()->prepare("SELECT * FROM carro");
$sql -> execute();

//forma o resutlado em um Array
$fetchCarro = $sql ->fetchAll();

//recebe id do carro para ser alterado
if (isset($_GET["alt"])){
    //Salva os dados do carro em variáveis
        foreach($fetchCarro as $carro){
            if($carro["id"] == $_GET["alt"]){
                $id = $carro["id"];
                $marca = $carro["marca"];
                $cor = $carro["cor"];
                $placa = $carro["placa"];
                $modelo = $carro["modelo"];
            }
        }
    }

?>