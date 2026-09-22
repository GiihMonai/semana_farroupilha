<?php
require_once "conexao.php";

$sql = "SELECT titulo, nota FROM jogos ORDER BY nota DESC";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ranking dos Jogos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ranking dos Jogos</h1>
    <ol>
        <?php while ($jogo = $resultado->fetch_assoc()): ?>
            <li><?= $jogo['titulo'] ?> - <?= $jogo['nota'] ?></li>
        <?php endwhile; ?>
    </ol>
    <br>
    <a href="index.php">Voltar ao menu</a>
</body>
</html>