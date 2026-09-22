<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 7 - empty()</title>
</head>
<body>
    <form action="validacaoNOME.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"> <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];

        if (empty($nome)) { 
            echo "<p>Por favor, informe seu nome.</p>"; 
        } else { 
            echo "<p>Bem-vindo, " . htmlspecialchars($nome) . "! :)</p>"; 
        }
    }
    ?>
</body>
</html>