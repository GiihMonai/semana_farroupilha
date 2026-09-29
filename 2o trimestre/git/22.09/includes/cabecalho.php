<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configura o caminho base dinamicamente para os links funcionarem em qualquer pasta
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/22.09";

// Verificação de segurança: redireciona para login se não estiver autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: $base_url/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Participantes</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/estilo.css">
</head>
<body>
    <header>
        <h1>Painel Administrativo</h1>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Início</a>
            <a href="<?php echo $base_url; ?>/participantes/listar.php">Participantes</a>
            <a href="<?php echo $base_url; ?>/logout.php">Sair (<?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>)</a>
        </nav>
    </header>
    <div class="container">