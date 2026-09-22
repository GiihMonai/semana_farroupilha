<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Chat Fake 2000s Edition ✨</title>
    <style>
        body {
            background-color: #ffe4f1; 
            font-family: 'Comic Sans MS', 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 10px 10px 0px #ffb7d5;
            border: 3px solid #ffb7d5;
            width: 350px;
            text-align: center;
        }
        h2 { color: #ff69b4; text-shadow: 1px 1px #fff; }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 2px solid #ffb7d5;
            border-radius: 15px;
            outline: none;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #ffb7d5;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover { background-color: #ff69b4; }
        .chat-box {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff0f6;
            border-radius: 10px;
            color: #d63384;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Y2K Chat Simulator 🎀</h2>
    
    <form method="POST" action="">
        <input type="text" name="mensagem" placeholder="Digita algo, fofa..." required> 
        <br>
        <input type="submit" value="Enviar ✨"> 
    </form>

    <?php
    function responder($mensagem) {
        $msg = strtolower($mensagem); 

        $respostas = [
            "oi" => "Ai, oi... Demorou tudo isso pra dizer só isso? ✨",
            "tudo bem" => "Tava tudo ótimo até eu ter que responder isso, sabe? 💅",
            "prof" => "O divo do Maurício explicou mil vezes, mas o cérebro tá em modo offline? 🙄",
            "entendi" => "Parabéns, quer um gloss de morango por ter feito o mínimo? 🍓",
            "obrigado" => "De nada, mas não se acostuma pq não sou sua assistente, tá? ✨",
            "ajuda" => "Procura no Google, fofa. O esforço é tendência esse ano! 💋"
        ];

        foreach ($respostas as $chave => $valor) {
            if (strpos($msg, $chave) !== false) {
                return $valor;
            }
        }

        return "Não entendi nada do que você digitou... mico total! 💅✨";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userMsg = $_POST['mensagem'];
        $respostaSarcastica = responder($userMsg); 

        echo "<div class='chat-box'>";
        echo "<strong>Você:</strong> " . htmlspecialchars($userMsg) . "<br>";
        echo "<strong>Bestie:</strong> " . $respostaSarcastica;
        echo "</div>";
    }
    ?>
</div>

</body>
</html>