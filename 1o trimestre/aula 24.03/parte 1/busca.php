<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 1 - GET</title>
</head>
<body>
    <form action="busca.php" method="get">
        <label for="busca">Busca:</label>
        <input type="text" name="busca" id="busca">
        <button type="submit">Pesquisar</button>
    </form>

    <?php
    if (isset($_GET['busca'])) {
        $termo = $_GET['busca']; 
        echo "<p>Você pesquisou por: " . htmlspecialchars($termo) . "</p>"; 
    }
    ?>
</body>
</html>