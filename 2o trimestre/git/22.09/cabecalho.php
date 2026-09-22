<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Churrasco da Semana Farroupilha</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header class="header-principal">
        <h1>Churrasco da Semana Farroupilha</h1>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <nav class="menu-navegacao">
                <a href="../index.php">Início</a>
                <a href="../participantes/cadastrar.php">Nova Inscrição</a>
                <a href="../participantes/listar.php">Participantes</a>
                <a href="../auth/logout.php" class="btn-sair">Sair</a>
            </nav>
        <?php endif; ?>
    </header>
    <main class="conteudo-principal">