<?php 

$param = isset($_GET['p']) ? $page = $_GET['p'] : $page = 'carro';

echo "<ul class='sub_menu'>";
echo    "<li><a href='?p=$param&&sub=tabela'>Tabela</a></li>";
echo    "<li><a href='?p=$param&&sub=form'>Novo</a></li>";
echo "</ul>";

?>