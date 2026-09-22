<?php
if (isset($_POST['tema'])) {
    $escolha = $_POST['tema'];
    setcookie("tema", $escolha, time() + (86400 * 30)); 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$tema_atual = $_COOKIE['tema'] ?? 'claro';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2 - Tema 🎉</title>
    <style>
        body.claro {
            background-color: white;
            color: black;
        }
        body.escuro {
            background-color: black;
            color: white;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body class="<?php echo $tema_atual; ?>">
    <div class="container">
        <h1>🎨 Escolha seu Tema</h1>
        <form method="POST">
            <button type="submit" name="tema" value="claro">🌕 Tema Claro</button>
            <button type="submit" name="tema" value="escuro">🌑 Tema Escuro</button>
        </form>
        <p>O tema atual é: <strong><?php echo ucfirst($tema_atual); ?></strong></p>
    </div>
</body>
</html>