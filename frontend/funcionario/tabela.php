<?php 
  require_once("./backend/funcionario/list.php");
?>

<table>
  <tr>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Tel</th>
    <th>Setor</th>
    <th>Atualizar</th>
    <th>Excluir</th>
  </tr>
<?php
  foreach($fetchFuncio as $key => $funcionario){
    echo '<tr>';
    echo '<td>'.$funcionario["nome"].'</td>';
    echo '<td>'.$funcionario["sobrenome"].'</td>';
    echo '<td>'.$funcionario["telefone"].'</td>';
    echo '<td>'.$funcionario["setor"].'</td>';
    echo '<td><a href="?p=funcionario&sub=form&alt='.$funcionario["id"].'">Atualizar</a></td>';
    echo '<td><a href="?p=funcionario&action=delete&del='.$funcionario["id"].'">Delete</a></td>';
    echo '</tr>';
  }
?>

</table>

<?php 
  if(isset($_GET["erro"]))
    echo '<div id="erro_crud"><p>' .$_GET['erro'].'</p><div>';
?>