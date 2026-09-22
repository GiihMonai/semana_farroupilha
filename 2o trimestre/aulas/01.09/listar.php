<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

include 'conexao.php';

$sqlTodos = "SELECT * FROM equipamentos";
$resTodos = $conexao->query($sqlTodos);

$sqlDisponiveis = "SELECT * FROM equipamentos WHERE disponivel = 1";
$resDisponiveis = $conexao->query($sqlDisponiveis);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Equipamentos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Voltar ao Início</a> | <a href="cadastrar.php">Novo Cadastro</a>
    
    <h2>Todos os Equipamentos</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Patrimônio</th>
            <th>Estado</th>
            <th>Disponível</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $resTodos->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['categoria']) ?></td>
                <td><?= htmlspecialchars($row['patrimonio']) ?></td>
                <td><?= htmlspecialchars($row['estado']) ?></td>
                <td><?= $row['disponivel'] ? 'Sim' : 'Não' ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> | 
                    <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>Equipamentos Disponíveis</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Patrimônio</th>
            <th>Estado</th>
        </tr>
        <?php while ($row = $resDisponiveis->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['categoria']) ?></td>
                <td><?= htmlspecialchars($row['patrimonio']) ?></td>
                <td><?= htmlspecialchars($row['estado']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>