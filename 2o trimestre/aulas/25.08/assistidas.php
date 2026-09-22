<?php
require_once 'conexao.php';

$sql = "SELECT titulo, plataforma, nota FROM series WHERE assistida = TRUE";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Séries Assistidas</title>
</head>
<body>
    <h2>Séries Assistidas</h2>
    <ul>
        <?php while ($linha = $result->fetch_assoc()): ?>
            <li>
                <strong><?= $linha['titulo'] ?></strong> - 
                Plataforma: <?= $linha['plataforma'] ?> | 
                Nota: <?= $linha['nota'] ?>
            </li>
        <?php endwhile; ?>
    </ul>
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>