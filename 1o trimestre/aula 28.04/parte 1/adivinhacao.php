<?php
session_start();

if (!isset($_SESSION['numero']) || isset($_POST['novo_jogo'])) {
    $_SESSION['numero'] = rand(1, 10); 
    $_SESSION['tentativas'] = 0;
    $mensagem = "Adivinhe o número de 1 a 10! ✨";
    $cor_alerta = "#ff85a2"; 
}

if (isset($_POST['chute']) && !isset($_POST['novo_jogo'])) {
    $chute = (int)$_POST['chute'];
    $_SESSION['tentativas']++; 

    if ($chute == $_SESSION['numero']) {
        $mensagem = "Parabéns! Você acertou em " . $_SESSION['tentativas'] . " tentativas!"; 
        $cor_alerta = "#ff85a2"; 
        $venceu = true;
    } elseif ($chute < $_SESSION['numero']) {
        $mensagem = "Tente um número maior"; 
        $cor_alerta = "#ffb7c5";
    } else {
        $mensagem = "Tente um número menor";
        $cor_alerta = "#ffb7c5";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação 🎀</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            border: 2px solid #ffb6c1;
            width: 350px;
        }
        h2 { color: #ff85a2; }
        .alert {
            background-color: <?php echo $cor_alerta ?? '#ff85a2'; ?>;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: white;
            font-weight: bold;
        }
        input[type="number"] {
            padding: 10px;
            border: 2px solid #ffb6c1;
            border-radius: 10px;
            width: 80px;
            outline: none;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-chutar {
            background-color: #ff85a2;
            color: white;
        }
        .btn-novo {
            background-color: #ff85a2;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Adivinhe o Número!</h2>
    
    <div class="alert">
        <?php echo $mensagem ?? "Adivinhe o número! ✨"; ?>    
    </div>

    <form method="post" action="">
        <?php if (!isset($venceu)): ?>
            <input type="number" name="chute" min="1" max="10" required>
            <br>
            <button type="submit" class="btn-chutar">Chutar 🎀</button>
        <?php endif; ?>
        
        <br>
        <button type="submit" name="novo_jogo" class="btn-novo">Novo Jogo 🎀</button>
    </form>

    <p style="color: #ff85a2; font-size: 0.9em; margin-top: 20px;">
        Tentativas: <?php echo $_SESSION['tentativas']; ?> ✨
    </p>
</div>

</body>
</html>