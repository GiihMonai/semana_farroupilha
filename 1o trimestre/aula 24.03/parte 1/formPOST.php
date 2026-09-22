<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Comparando - POST</title>
</head>
<body>
    <form action="formPOST.php" method="post"> <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"> <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST['nome'])) {
        echo "<p>Nome digitado: " . htmlspecialchars($_POST['nome']) . "</p>";
    }

    // Qual método mostra os dados na URL? 
    // R: GET
    
    // Qual método é mais adequado para informações sensíveis? 
    // R: POST, pq os dados vão no corpo da requisição e não ficam expostos na URL
    ?>
</body>
</html>