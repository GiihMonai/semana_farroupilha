<?php
require_once "conexao.php";

$resTotal = $conexao->query("SELECT COUNT(*) AS total FROM jogos");
$total = $resTotal->fetch_assoc()['total'];

$resZerados = $conexao->query("SELECT COUNT(*) AS zerados FROM jogos WHERE zerado = TRUE");
$zerados = $resZerados->fetch_assoc()['zerados'];

$resNaoZerados = $conexao->query("SELECT COUNT(*) AS nao_zerados FROM jogos WHERE zerado = FALSE");
$naoZerados = $resNaoZerados->fetch_assoc()['nao_zerados'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estatísticas do Catálogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Estatísticas do Catálogo</h1>
    <p>Quantidade total de jogos: <?= $total ?></p>
    <p>Jogos zerados: <?= $zerados ?></p>
    <p>Jogos ainda não zerados: <?= $naoZerados ?></p>
    <br>
    <a href="index.php">Voltar ao menu</a>
</body>
</html>