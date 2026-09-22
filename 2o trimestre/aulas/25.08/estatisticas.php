<?php
require_once 'conexao.php';

$resTotal = $conn->query("SELECT COUNT(*) as total FROM series");
$total = $resTotal->fetch_assoc()['total'];

$resAssistidas = $conn->query("SELECT COUNT(*) as assistidas FROM series WHERE assistida = TRUE");
$assistidas = $resAssistidas->fetch_assoc()['assistidas'];

$resNaoAssistidas = $conn->query("SELECT COUNT(*) as nao_assistidas FROM series WHERE assistida = FALSE");
$nao_assistidas = $resNaoAssistidas->fetch_assoc()['nao_assistidas'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estatísticas</title>
</head>
<body>
    <h2>Estatísticas do Catálogo</h2>
    <p><strong>Quantidade total de séries:</strong> <?= $total ?></p>
    <p><strong>Séries assistidas:</strong> <?= $assistidas ?></p>
    <p><strong>Séries ainda não assistidas:</strong> <?= $nao_assistidas ?></p>
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>