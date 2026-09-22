<?php
require_once 'conexao.php';

$sql = "SELECT * FROM series ORDER BY nota DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ranking das Séries</title>
</head>
<body>
    <h2>Ranking das Séries</h2>
    <ol>
        <?php while ($linha = $result->fetch_assoc()): ?>
            <li><?= $linha['titulo'] ?> - <?= $linha['nota'] ?></li>
        <?php endwhile; ?>
    </ol>
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>