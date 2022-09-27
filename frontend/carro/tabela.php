<?php 
  require_once("./backend/carro/list.php");
?>
<table>
  <tr>
    <th>Marca</th>
    <th>Cor</th>
    <th>Placa</th>
    <th>Modelo</th>
    <th>Atualizar</th>
    <th>Excluir</th>
  </tr>
<?php
  foreach($fetchCarro as $key => $carro){
    echo '<tr>';
    echo '<td>'.$carro["marca"].'</td>';
    echo '<td>'.$carro["cor"].'</td>';
    echo '<td>'.$carro["placa"].'</td>';
    echo '<td>'.$carro["modelo"].'</td>';
    echo '<td><a href="?p=carro&sub=form&alt='.$carro["id"].'">Atualizar</a></td>';
    echo '<td><a href="?p=carro&action=delete&del='.$carro["id"].'">Delete</a></td>';
    echo '</tr>';
  }
?>

</table>
<?php
  if (isset($_GET["erro"]))
    echo '<div id="erro_crud"><p>'.$_GET['erro'].'</p></div>';
?>