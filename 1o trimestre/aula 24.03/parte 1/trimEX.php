<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 8 - trim()</title>
</head>
<body>
    <form action="trimEX.php" method="post">
        <label for="usuario">Usuário (tente colocar espaços antes e depois):</label>
        <input type="text" name="usuario" id="usuario"> <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = trim($_POST['usuario']); 
        echo "<p>Usuário informado: " . htmlspecialchars($usuario) . "</p>"; 
    }
    ?>
</body>
</html>