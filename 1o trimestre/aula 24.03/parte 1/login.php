<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 2 - POST</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario"> <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"> <br>
        <button type="submit">Entrar</button> </form>

    <?php
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        echo "<p>Usuário informado: " . htmlspecialchars($usuario) . "</p>"; 
    }
    ?>
</body>
</html>