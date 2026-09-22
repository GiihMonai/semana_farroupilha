<?php
require_once "conexao.php";

$sql = "SELECT * FROM jogos";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Jogos</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Lista de Jogos</h1>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Gênero</th>
            <th>Plataforma</th>
            <th>Ano</th>
            <th>Nota</th>
            <th>Ações</th>
        </tr>
        <?php while ($jogo = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $jogo['titulo'] ?></td>
            <td><?= $jogo['genero'] ?></td>
            <td><?= $jogo['plataforma'] ?></td>
            <td><?= $jogo['ano'] ?></td>
            <td><?= $jogo['nota'] ?></td>
            <td>
                <a href="editar.php?id=<?= $jogo['id'] ?>">Editar</a> |
                <a href="excluir.php?id=<?= $jogo['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">Voltar ao menu</a>
</body>
</html>