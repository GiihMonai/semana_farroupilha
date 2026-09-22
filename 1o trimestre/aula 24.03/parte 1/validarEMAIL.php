<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 9 - Validação de E-mail</title>
</head>
<body>
    <form action="validarEMAIL.php" method="post">
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email"> <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            echo "<p>Email válido</p>";
        } else { 
            echo "<p>Email inválido</p>"; 
        }
    }
    ?>
</body>
</html>