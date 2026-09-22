<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Equipamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastrar Equipamento</h2>
    <form action="salvar.php" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="categoria" required><br><br>

        <label>Patrimônio:</label><br>
        <input type="text" name="patrimonio" required><br><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" required><br><br>

        <label>Disponível:</label><br>
        <select name="disponivel">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="listar.php">Voltar</a>
</body>
</html>