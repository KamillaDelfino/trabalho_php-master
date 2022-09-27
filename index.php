<?php
	require("./frontend/functions.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Referencia o arquivos de estilização do CSS-->
    <link rel="stylesheet" href="style.css">
    <title>Angencia de Carros</title>
</head>

<body>

    <!--Foi separado o header e o footer como foi feito nas aulas e 
    incluído na página principal index.php -->

    <?php

    include('./frontend/header/header.php');
    load_page();
    include('./frontend/footer/footer.php');

    ?>


</body>

</html>