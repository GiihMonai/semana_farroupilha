<?php
include 'conexao.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: listar.php");
    exit;
}

$stmt = $conexao->prepare("SELECT * FROM equipamentos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$equipamento = $resultado->fetch_assoc();

if (!$equipamento) {
    echo "Equipamento não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Equipamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Editar Equipamento</h2>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $equipamento['id'] ?>">

        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?= htmlspecialchars($equipamento['nome']) ?>" required><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="categoria" value="<?= htmlspecialchars($equipamento['categoria']) ?>" required><br><br>

        <label>Patrimônio:</label><br>
        <input type="text" name="patrimonio" value="<?= htmlspecialchars($equipamento['patrimonio']) ?>" required><br><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" value="<?= htmlspecialchars($equipamento['estado']) ?>" required><br><br>

        <label>Disponível:</label><br>
        <select name="disponivel">
            <option value="1" <?= $equipamento['disponivel'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$equipamento['disponivel'] ? 'selected' : '' ?>>Não</option>
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="listar.php">Cancelar</a>
</body>
</html>