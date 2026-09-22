<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 5 - Verificação de Envio</title>
</head>
<body>
    <form action="verificacao.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"> <button type="submit">Enviar</button> </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        echo "<p>Nome informado: " . htmlspecialchars($nome) . "</p>"; 
    }
    ?>
</body>
</html>