<?php
require_once 'conexao.php';

$sql = "SELECT * FROM series";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Séries</title>
</head>
<body>
    <h2>Todas as Séries</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Título</th>
            <th>Gênero</th>
            <th>Plataforma</th>
            <th>Ano</th>
            <th>Nota</th>
            <th>Ações</th>
        </tr>
        <?php while ($linha = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $linha['titulo'] ?></td>
                <td><?= $linha['genero'] ?></td>
                <td><?= $linha['plataforma'] ?></td>
                <td><?= $linha['ano'] ?></td>
                <td><?= $linha['nota'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $linha['id'] ?>">Editar</a> | 
                    <a href="excluir.php?id=<?= $linha['id'] ?>" onclick="return confirm('Deseja excluir esta série?')">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>