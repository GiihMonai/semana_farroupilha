<?php
require_once 'conexao.php';

$termo = isset($_GET['busca']) ? $_GET['busca'] : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Série</title>
</head>
<body>
    <h2>Pesquisar Série</h2>
    <form action="pesquisar.php" method="GET">
        <label>Pesquisar série:</label>
        <input type="text" name="busca" value="<?= htmlspecialchars($termo) ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <?php if ($termo !== ''): ?>
        <h3>Resultados:</h3>
        <?php
        $sql = "SELECT * FROM series WHERE titulo LIKE '%" . $conn->real_escape_string($termo) . "%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($linha = $result->fetch_assoc()) {
                echo "<li>" . $linha['titulo'] . " (" . $linha['plataforma'] . ") - Nota: " . $linha['nota'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhuma série encontrada com o termo pesquisado.</p>";
        }
        ?>
    <?php endif; ?>

    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>