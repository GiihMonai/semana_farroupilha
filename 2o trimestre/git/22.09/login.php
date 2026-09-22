<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Churrasco Farroupilha</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="body-login">
    <div class="card-login">
        <h2>Acesso ao Sistema</h2>
        
        <?php if (isset($_GET['erro'])): ?>
            <div class="mensagem-erro">E-mail ou senha incorretos!</div>
        <?php endif; ?>

        <form action="autenticar.php" method="POST">
            <div class="campo-form">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="campo-form">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn-submit">Entrar</button>
        </form>
    </div>
</body>
</html>