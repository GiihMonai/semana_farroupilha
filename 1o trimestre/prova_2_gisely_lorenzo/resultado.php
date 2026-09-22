<?php
session_start();
$nome = $_SESSION['nome_jogador'] ?? 'Vivente';

$total_perguntas = 20;
$pontos = 0;

$dados_questoes = [
    1 => ["Qual era o principal caráter ideológico da Revolução Farroupilha?", "Republicano"],
    2 => ["Em qual província brasileira teve início a Guerra dos Farrapos?", "São Pedro do Rio Grande do Sul"],
    3 => ["Quem foi um dos principais líderes militares da revolução?", "Bento Gonçalves da Silva"],
    4 => ["Além do RS, em qual outra região a revolução se expandiu?", "Laguna"],
    5 => ["Sobre a questão da escravidão na Guerra dos Farrapos:", "Homens negros lutaram nos exércitos visando a liberdade"],
    6 => ["Qual o significado da cor vermelha na bandeira?", "Simbolizava o ideal republicano e revolucionário"],
    7 => ["Qual o nome da daça que é um animal típico do RS?", "Maçanico"],
    8 => ["Qual é o compasso mais utilizado para dançar chula?", "8"],
    9 => ["Qual é a ordem das invernadas dentro de um CTG?", "Dente de leite, Mirim, Juvenil, Adulta, Veterana, Xiru"],
    10 => ["Qual desses NÃO é um ciclo coreográfico?", "Ciclo dos sapateios"],
    11 => ["Qual a principal característica do “ciclo dos pares enlaçados”?", "Alegre e envolvente"],
    12 => ["Qual a mão utilizada para convidar a prenda?", "Mão direita"],
    13 => ["Qual NÃO é uma harmonia de conjunto?", "Dança individual"],
    14 => ["Como os tropeiros salgavam a carne?", "Suor de cavalo"],
    15 => ["Quem aparece para proteger o Negrinho do Pastoreio?", "A Virgem Maria, considerada sua madrinha"],
    16 => ["Qual o pedido feito pelo velho guerreiro na lenda da Erva-Mate?", "Que suas forças fossem devolvidas"],
    17 => ["Qual o nome do CTG do Lorenzo Baldasso?", "Tropeiro da Serra"],
    18 => ["Qual o principal criador do tradicionalismo moderno?", "Paixão Côrtes"],
    19 => ["Qual a música gaúcha mais ouvida (2026)?", "Querência Amada"],
    20 => ["Qual o cantor tradicionalista gaúcho mais ouvido (2026)?", "Luis Marenco"]
];

for ($i = 1; $i <= $total_perguntas; $i++) {
    if (isset($_POST["p$i"]) && $_POST["p$i"] == "1") {
        $pontos++;
    }
}

if ($pontos >= 18) {
    $mensagem = "Bah, mas que baita gaúcho! Tu conhece tudo dessa terra!";
    $cor_mensagem = "#18542a";
} elseif ($pontos >= 12) {
    $mensagem = "Muito bom, vivente! Tens o Rio Grande no coração.";
    $cor_mensagem = "#ffc926"; 
} else {
    $mensagem = "Precisa frequentar mais o galpão e tomar mais um mate pra aprender!";
    $cor_mensagem = "#d52518"; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Quiz CTG</title>
    <style>
        :root {
            --sunshine: #ffc926;
            --cream: #f3e8cc;
            --forest-green: #18542a;
            --tomato-burst: #d52518;
            --correct: #2e7d32;
            --wrong: #c62828;
        }

        body {
            background-color: var(--cream);
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-resultado {
            background: white;
            padding: 30px;
            border-radius: 20px;
            width: 100%;
            max-width: 600px;
            text-align: center;
            border-top: 15px solid var(--forest-green);
            margin-bottom: 20px;
        }

        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--forest-green);
            color: var(--sunshine);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            border: 5px solid var(--sunshine);
        }

        .score-num { font-size: 2.5rem; font-weight: bold; }
        .score-total { font-size: 0.9rem; }

        .mensagem-box {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 10px;
            border-left: 8px solid <?php echo $cor_mensagem; ?>;
            margin: 20px 0;
            font-style: italic;
            color: #333;
        }

        .revisao-lista {
            width: 100%;
            max-width: 600px;
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-sizing: border-box;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .item-revisao {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .item-revisao:last-child { border-bottom: none; }

        .enunciado {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .status-acerto {
            color: var(--correct);
            font-weight: bold;
            font-size: 0.95rem;
        }

        .status-erro {
            color: var(--wrong);
            font-size: 0.95rem;
            margin: 4px 0;
        }

        .resposta-correta {
            color: var(--forest-green);
            font-weight: bold;
            font-size: 0.95rem;
            margin: 4px 0;
        }

        .btn-reiniciar {
            display: block;
            background: var(--forest-green);
            color: var(--sunshine);
            text-decoration: none;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            margin-top: 10px;
            text-align: center;
            width: 100%;
            max-width: 600px;
        }
    </style>
</head>
<body>

    <div class="card-resultado">
        <h1>Resultado do Quiz</h1>
        <p>Bom trabalho, <strong><?php echo htmlspecialchars($nome); ?></strong>!</p>

        <div class="score-circle">
            <span class="score-num"><?php echo $pontos; ?></span>
            <span class="score-total">de 20</span>
        </div>

        <div class="mensagem-box">
            "<?php echo $mensagem; ?>"
        </div>
    </div>

    <div class="revisao-lista">
        <h3 style="color: var(--forest-green); margin-top: 0; border-bottom: 2px solid var(--sunshine); padding-bottom: 10px;">Revisão do Desafio</h3>
        
        <?php foreach ($dados_questoes as $num => $info): 
            $acertou = (isset($_POST["p$num"]) && $_POST["p$num"] == "1");
        ?>
            <div class="item-revisao">
                <span class="enunciado"><?php echo $num . ". " . $info[0]; ?></span>
                
                <?php if ($acertou): ?>
                    <span class="status-acerto">✓ Você acertou a questão!</span>
                <?php else: ?>
                    <p class="status-erro">✗ Você errou a questão.</p>
                    <p class="resposta-correta"><strong>Resposta correta:</strong> <?php echo $info[1]; ?></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="index.php" class="btn-reiniciar">Tentar Novamente</a>

</body>
</html>