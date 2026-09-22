<?php
require_once "conexao.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT * FROM jogos WHERE id = $id";
$resultado = $conexao->query($sql);
$jogo = $resultado->fetch_assoc();

if (!$jogo) {
    die("Jogo não encontrado!");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Jogo</h1>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $jogo['id'] ?>">

        <p>
            <label>Título:</label><br>
            <input type="text" name="titulo" value="<?= $jogo['titulo'] ?>" required>
        </p>
        <p>
            <label>Gênero:</label><br>
            <input type="text" name="genero" value="<?= $jogo['genero'] ?>" required>
        </p>
        <p>
            <label>Plataforma:</label><br>
            <input type="text" name="plataforma" value="<?= $jogo['plataforma'] ?>" required>
        </p>
        <p>
            <label>Ano:</label><br>
            <input type="number" name="ano" value="<?= $jogo['ano'] ?>" required>
        </p>
        <p>
            <label>Nota:</label><br>
            <input type="number" step="0.1" name="nota" value="<?= $jogo['nota'] ?>" required>
        </p>
        <p>
            <label>Zerado:</label><br>
            <select name="zerado">
                <option value="1" <?= $jogo['zerado'] ? 'selected' : '' ?>>Sim</option>
                <option value="0" <?= !$jogo['zerado'] ? 'selected' : '' ?>>Não</option>
            </select>
        </p>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="listar.php">Cancelar</a>
</body>
</html>