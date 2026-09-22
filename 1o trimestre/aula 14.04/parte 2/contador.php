<?php
session_start();

if (isset($_POST['reset'])) {
    session_destroy(); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1; 
} else {
    $_SESSION['visitas']++;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #fff5f8;
        }

        .contador {
            font-size: 1.5em;
            color: #d8a7b1;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #d8a7b1;
            color: #fff5f8;
            border: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="contador">
        <p>Você visitou esta página <?php echo $_SESSION['visitas']; ?> vezes nesta sessão.</p>
    </div>

    <form method="post">
        <button type="submit" name="reset">Resetar Contador</button>
    </form>

</body>
</html>