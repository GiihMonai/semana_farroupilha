<?php
require_once "conexao.php";

$sql = "SELECT titulo, plataforma, nota FROM jogos WHERE zerado = TRUE";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogos Zerados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jogos Zerados</h1>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Nota</th>
        </tr>
        <?php while ($jogo = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $jogo['titulo'] ?></td>
            <td><?= $jogo['plataforma'] ?></td>
            <td><?= $jogo['nota'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">Voltar ao menu</a>
</body>
</html>