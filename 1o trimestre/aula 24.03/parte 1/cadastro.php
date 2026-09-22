<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 4 - Cadastro</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br> <label for="email">E-mail:</label>
        <input type="email" name="email" id="email"><br><br> <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"><br><br> <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        echo "<h3>Dados Recebidos:</h3>";
        echo "<p>Nome: " . htmlspecialchars($nome) . "</p>"; 
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Idade: " . htmlspecialchars($idade) . "</p>";
    }
    ?>
</body>
</html>