<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="login-body">
    <div class="container" style="max-width: 400px; margin-top: 10vh;">
        <h2 style="text-align: center;">Entrar no Sistema</h2>
        <form action="autenticar.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Senha:</label>
            <input type="password" name="senha" required>
            
            <button type="submit" class="btn" style="width: 100%; margin-top: 15px;">Login</button>
        </form>
    </div>
</body>
</html>