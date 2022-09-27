<?php 
    require_once("./backend/carro/list.php");
?>

<div class="cadastrar">
    <form action="<?=isset($id) ? './backend/carro/update.php' : './backend/carro/create.php'?>" method="post">
        
    <?php 
     //Ta setado um nome? Se tiver o titulo do form vai alterar p  atualizar, se nao para cadastrar 
     $title = isset($id) ? "Atualizar" : "Cadastrar";
     echo '<h1 class="title">'.$title.'</h1>';
    ?>
      <input type="hidden" name="id" value="<?= isset($id)? $id : ""; ?>"><br> 
        <label>Marca</label>
        <input name="marca" placeholder="Digite a Marca do carro" value="<?=isset($marca) ? $marca : '' ; ?>"/>
        <label>Cor</label>
        <input name="cor" placeholder="Digite a cor do carro" value="<?=isset($cor) ? $cor : '' ; ?>"/>
        <label>Placa</label>
        <input name="placa"placeholder="Digite a Placa do carro" value="<?=isset($placa) ? $placa : '' ; ?>"/>
        <label>Modelo</label>
        <input name="modelo"placeholder="Digite a Modelo do carro" value="<?=isset($modelo) ? $modelo : '' ; ?>"/>
        <button type="submit">Salvar</button>
    <form>
</div>