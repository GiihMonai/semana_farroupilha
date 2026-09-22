<?php
if (isset($_POST['logout'])) {
    setcookie("usuario", "", time() - 3600); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

if (isset($_POST['nome'])) {
    $nome_usuario = $_POST['nome'];
    setcookie("usuario", $nome_usuario, time() + 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Cookies 🍪</title>
</head>
<body>
    <?php if (isset($_COOKIE['usuario'])): ?>
        <h1>Olá, <?php echo htmlspecialchars($_COOKIE['usuario']); ?>! Bem-vindo/a de volta.</h1>
        <form method="POST">
            <button type="submit" name="logout">❌ Apagar cookie (Logout)</button>
        </form>
    <?php else: ?>
        <form method="POST">
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome" required>
            <button type="submit">Enviar ✅</button>
        </form>
    <?php endif; ?>
</body>
</html>