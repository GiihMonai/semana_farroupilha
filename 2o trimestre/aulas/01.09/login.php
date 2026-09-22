<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!empty($usuario) && !empty($senha)) {

        $stmt = $conexao->prepare("SELECT id, usuario, senha FROM usuarios WHERE usuario = ?");
        
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conexao->error);
        }

        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($usuario_dados = $resultado->fetch_assoc()) {

            if (password_verify($senha, $usuario_dados['senha']) || $senha === $usuario_dados['senha']) {
                $_SESSION['usuario_id'] = $usuario_dados['id'];
                $_SESSION['usuario_nome'] = $usuario_dados['usuario'];

                header("Location: index.php");
                exit;
            } else {
                $erro = "Senha incorreta!";
            }
        } else {
            $erro = "Usuário não encontrado!";
        }

        $stmt->close();
    } else {
        $erro = "Preencha todos os campos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laboratório</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .login-card {
            background-color: var(--vanilla-cream);
            border: 2px solid var(--misty-sky);
            padding: 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 4px 12px rgba(45, 58, 71, 0.08);
        }
        .login-card h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .mensagem-erro {
            background-color: var(--rosewood);
            color: var(--vanilla-cream);
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <h2>Login do Sistema</h2>

            <?php if ($erro): ?>
                <div class="mensagem-erro"><?= htmlspecialchars($erro) ?></div>
            <?php endif; ?>

            <form action="" method="POST">
                <label for="usuario">Usuário:</label><br>
                <input type="text" id="usuario" name="usuario" required><br>

                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" required><br>

                <button type="submit" style="width: 100%; margin-top: 10px;">Entrar</button>
            </form>
        </div>
    </div>

</body>
</html>