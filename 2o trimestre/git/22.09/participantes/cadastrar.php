<?php
require_once "../includes/cabecalho.php";
?>

<h2>Cadastrar Participante</h2>

<form action="salvar.php" method="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">
    </div>

    <button type="submit" class="btn">Salvar</button>
    <a href="listar.php">Cancelar</a>
</form>

<?php require_once "../includes/rodape.php"; ?>