<?php
require_once "conexao.php";

$termo = isset($_GET['termo']) ? $_GET['termo'] : '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Jogos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pesquisar Jogo</h1>
    <form action="pesquisar.php" method="GET">
        <label>Pesquisar jogo:</label>
        <input type="text" name="termo" value="<?= htmlspecialchars($termo) ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <?php if ($termo !== ''): ?>
        <h2>Resultados da busca:</h2>
        <?php
        $termo_busca = $conexao->real_escape_string($termo);
        $sql = "SELECT * FROM jogos WHERE titulo LIKE '%$termo_busca%'";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0): ?>
            <ul>
                <?php while ($jogo = $resultado->fetch_assoc()): ?>
                    <li><?= $jogo['titulo'] ?> (<?= $jogo['plataforma'] ?>) - Nota: <?= $jogo['nota'] ?></li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum jogo encontrado.</p>
        <?php endif; ?>
    <?php endif; ?>

    <br>
    <a href="index.php">Voltar ao menu</a>
</body>
</html>