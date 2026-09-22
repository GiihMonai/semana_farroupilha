<?php
require_once 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM series WHERE id = $id";
$result = $conn->query($sql);
$serie = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Série</title>
</head>
<body>
    <h2>Editar Série</h2>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $serie['id'] ?>">
        
        <p>
            <label>Título:</label><br>
            <input type="text" name="titulo" value="<?= $serie['titulo'] ?>" required>
        </p>
        <p>
            <label>Gênero:</label><br>
            <input type="text" name="genero" value="<?= $serie['genero'] ?>" required>
        </p>
        <p>
            <label>Plataforma:</label><br>
            <input type="text" name="plataforma" value="<?= $serie['plataforma'] ?>" required>
        </p>
        <p>
            <label>Ano:</label><br>
            <input type="number" name="ano" value="<?= $serie['ano'] ?>" required>
        </p>
        <p>
            <label>Nota:</label><br>
            <input type="number" step="0.1" name="nota" value="<?= $serie['nota'] ?>" min="0" max="10" required>
        </p>
        <p>
            <label>Assistida:</label><br>
            <select name="assistida" required>
                <option value="1" <?= $serie['assistida'] ? 'selected' : '' ?>>Sim</option>
                <option value="0" <?= !$serie['assistida'] ? 'selected' : '' ?>>Não</option>
            </select>
        </p>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="listar.php">Cancelar</a>
</body>
</html>