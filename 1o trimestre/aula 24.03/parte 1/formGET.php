<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Comparando - GET</title>
</head>
<body>
    <form action="formGET.php" method="get"> <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"> <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_GET['nome'])) {
        echo "<p>Nome digitado: " . htmlspecialchars($_GET['nome']) . "</p>"; 
    }
    ?>
</body>
</html>