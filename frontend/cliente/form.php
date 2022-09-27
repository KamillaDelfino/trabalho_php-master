<?php 
    require_once("./backend/cliente/list.php");
?>

<div class="cadastrar">
    <form action="<?=isset($id) ? './backend/cliente/update.php' : './backend/cliente/create.php'?>" method="post">
        <?php  //title cadastrar ou atualizar
            $title = isset($id) ? 'Atualizar' : 'Cadastrar'; 
            echo '<h1 class="title">'.$title.'</h1>';
        ?>
        <input type="hidden" name="id" value="<?= isset($id)? $id : ""; ?>"><br> 
        <label>Nome</label>
        <input placeholder="Digite seu Nome" name="nome" type="text" value="<?=isset($nome) ? $nome : '' ; ?>"/>
        <label>Sobrenome</label>
        <input placeholder="Digite seu Sobrenome" name="sobrenome" type="text" value="<?=isset($sobrenome) ? $sobrenome : '' ; ?>"/>
        <label>Telefone</label>
        <input placeholder="Digite seu Telefone" name="telefone" type="text" value="<?=isset($telefone) ? $telefone : '' ; ?>"/>
        <label>Email</label>
        <input placeholder="Digite seu Email" name="email" type="email" value="<?=isset($email) ? $email : '' ; ?>"/>
        <button>Salvar</button>
    <form>
</div>

