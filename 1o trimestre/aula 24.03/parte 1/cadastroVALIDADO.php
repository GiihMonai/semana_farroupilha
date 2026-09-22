<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 10 - Cadastro Validado</title>
</head>
<body>
    <form action="cadastroVALIDADO.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br> <label for="email">E-mail:</label>
        <input type="text" name="email" id="email"><br><br> <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        
        $erros = [];

        if (empty($nome)) {
            $erros[] = "O campo nome é obrigatório.";
        }

        if (empty($email)) {
             $erros[] = "O campo e-mail é obrigatório."; 
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "O e-mail informado é inválido.";
        }

        if (empty($erros)) {
            echo "<h3>Cadastro realizado com sucesso.</h3>"; 
            echo "<p>Nome: " . htmlspecialchars($nome) . "</p>"; 
            echo "<p>Email: " . htmlspecialchars($email) . "</p>"; 
        } else {
            echo "<h3>Ocorreram os seguintes erros:</h3>";
            echo "<ul>";
            foreach ($erros as $erro) {
                echo "<li>$erro</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>