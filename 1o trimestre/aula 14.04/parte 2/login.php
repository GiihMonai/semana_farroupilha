<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_digitado = $_POST['usuario'];
    $senha_digitada = $_POST['senha'];

    $usuario_correto = "admin";
    $senha_correta = "1234";

    if ($usuario_digitado === $usuario_correto && $senha_digitada === $senha_correta) {
        $_SESSION['usuario'] = $usuario_digitado;
        header("Location: dashboard.php");
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Exercício 2</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #fff5f8; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }

        .login-card { 
            background: white; 
            padding: 2rem; 
            border-radius: 12px; 
            width: 300px; 
            border: 1px solid #ffe0eb; 
        }

        h2 { 
            color: #d8a7b1; 
            text-align: center; 
        }

        input { 
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            border: 1px solid #ddd; 
            border-radius: 6px; 
            box-sizing: border-box; 
        }

        button { 
            width: 100%; 
            padding: 10px; 
            background-color: #d8a7b1; 
            color: white; 
            border: none; 
            border-radius: 6px; 
            cursor: pointer; 
        }
        
        button:hover { 
            background-color: #c795a0; 
        }

        .error { 
            color: #ff6b6b; 
            font-size: 0.9em; 
            text-align: center; 
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <?php if (isset($erro)) echo "<p class='error'>$erro</p>"; ?>
        <form method="post">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>