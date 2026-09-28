<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    header('Location: ../index.php');
    exit;
}

$erro = $_GET['erro'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="login-body">

    <div class="container" style="max-width: 400px; margin-top: 10vh;">

        <h2 style="text-align: center;">Entrar no Sistema</h2>

        <?php if ($erro === '1'): ?>
            <p style="color: #b00020; text-align: center;">
                Email ou senha incorretos.
            </p>

        <?php elseif ($erro === 'preencha'): ?>
            <p style="color: #b00020; text-align: center;">
                Preencha o email e a senha.
            </p>
        <?php endif; ?>

        <form action="autenticar.php" method="POST">

            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                autocomplete="username"
                required
            >

            <label for="senha">Senha:</label>
            <input
                type="password"
                id="senha"
                name="senha"
                autocomplete="current-password"
                required
            >

            <button
                type="submit"
                class="btn"
                style="width: 100%; margin-top: 15px;"
            >
                Login
            </button>

        </form>

        <div style="
            margin-top: 20px;
            padding: 12px;
            background: #f2f2f2;
            border-radius: 6px;
            font-size: 14px;
        ">
            <strong>Acesso padrão:</strong><br>
            Email: admin@admin.com<br>
            Senha: 123456
        </div>

    </div>

</body>
</html>