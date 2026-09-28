<?php

session_start();

require '../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($email === '' || $senha === '') {
    header('Location: login.php?erro=preencha');
    exit;
}

$stmt = $pdo->prepare("
    SELECT id, nome, email, senha
    FROM usuarios
    WHERE email = ?
    LIMIT 1
");

$stmt->execute([$email]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha'])) {

    session_regenerate_id(true);

    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    $_SESSION['usuario_email'] = $usuario['email'];

    header('Location: ../index.php');
    exit;
}

header('Location: login.php?erro=1');
exit;
