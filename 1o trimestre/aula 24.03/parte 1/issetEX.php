<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 6 - isset()</title>
</head>
<body>
    <form action="issetEX.php" method="post">
        <label for="cidade">🏙️ Cidade:</label>
        <input type="text" name="cidade" id="cidade"> <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['cidade']) && $_POST['cidade'] !== '') {
            echo "<p>Cidade informada: " . htmlspecialchars($_POST['cidade']) . "</p>"; 
        } else {
            echo "<p>Nenhum dado enviado.</p>"; 
        }
    }
    ?>
</body>
</html>