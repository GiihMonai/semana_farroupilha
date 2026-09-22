<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { 
            font-family: sans-serif; 
            text-align: center; 
            background-color: #fff5f8; 
            padding-top: 100px; 
        }

        .welcome { 
            background: white; 
            display: inline-block; 
            padding: 40px; 
            border-radius: 15px; 
            border: 1px solid #fff5f8; 
        }

        a { 
            text-decoration: none; 
            color: #c795a0; 
            font-weight: bold; 
        }
    </style>
</head>
<body>
    <div class="welcome">
        <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
        <p>Você está em uma área protegida.</p>
        <br>
        <a href="?logout=true">Sair do Sistema (Logout)</a>
    </div>
</body>
</html>