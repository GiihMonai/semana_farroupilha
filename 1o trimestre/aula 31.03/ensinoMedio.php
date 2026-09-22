<?php
function calcularResultado($pontuacao) {
    if ($pontuacao >= 15) { 
        return "Gênio organizado";
    } elseif ($pontuacao >= 10) {
        return "Sobrevivente";
    } else {
        return "mals";
    }
}

$resultadoFinal = "";
$pontos = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (count($_POST) < 6) {
        $resultadoFinal = "Por favor, responda a todas as perguntas!";
    } else {
        foreach ($_POST as $valor) {
            $pontos += (int)$valor;
        }
        
        $perfil = calcularResultado($pontos);
        $resultadoFinal = $perfil == "mals" ? ":| Perfil: $perfil" : ":) Perfil: $perfil";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz: Sobrevivência no Ensino Médio</title>
<style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f0fdf4;
            padding: 40px 20px; 
            color: black;
        }
        
        .container { 
            background: #ffffff; 
            padding: 30px; 
            border-radius: 15px; 
            max-width: 650px; 
            margin: auto; 
            border: 2px solid #A8DCAB;
        }

        h1 {
            color: #61b5d6ff;
            text-align: center;
            border-bottom: 3px solid #87CEEB;
            padding-bottom: 10px;
        }

        .pergunta { 
            margin-bottom: 20px; 
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
            border-left: 5px solid #87CEEB;
        }

        .pergunta p {
            font-weight: bold;
            margin-top: 0;
        }

        button {
            width: 100%;
            background-color: #A8DCAB;
            color: white;
            border: none;
            padding: 12px;
            font-size: 1.1em;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #87CEEB;
        }

        .resultado { 
            font-weight: bold; 
            font-size: 1.3em; 
            color: #808283ff; 
            margin-top: 25px; 
            padding: 15px;
            text-align: center;
            background-color: #e8f5e9;
            border-radius: 10px;
            border: 1px dashed #A8DCAB;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Você sobreviveria ao Ensino Médio?</h1>
        
        <form method="POST" action="">
            <div class="pergunta">
                <p>1. Você estuda com antecedência ou deixa para a última hora?</p>
                <input type="radio" name="p1" value="3" required> Sempre com antecedência<br>
                <input type="radio" name="p1" value="2"> Às vezes<br>
                <input type="radio" name="p1" value="1"> Sempre última hora
            </div>

            <div class="pergunta">
                <p>2. Quantas horas você dorme por noite?</p>
                <input type="radio" name="p2" value="3"> Mais de 7h<br>
                <input type="radio" name="p2" value="2"> Entre 5h e 6h<br>
                <input type="radio" name="p2" value="1"> Menos de 4h
            </div>

            <div class="pergunta">
                <p>3. Você faz os trabalhos no prazo?</p>
                <input type="radio" name="p3" value="3"> Sempre<br>
                <input type="radio" name="p3" value="2"> Quase sempre<br>
                <input type="radio" name="p3" value="1"> Frequentemente atraso
            </div>

            <div class="pergunta">
                <p>4. Você presta atenção nas aulas?</p>
                <input type="radio" name="p4" value="3"> Sim, foco total<br>
                <input type="radio" name="p4" value="2"> Me distraio um pouco<br>
                <input type="radio" name="p4" value="1"> Fico no celular
            </div>

            <div class="pergunta">
                <p>5. Você costuma revisar a matéria após a aula?</p>
                <input type="radio" name="p5" value="3"> Sim<br>
                <input type="radio" name="p5" value="2"> Só antes da prova<br>
                <input type="radio" name="p5" value="1"> Nunca reviso
            </div>

            <div class="pergunta">
                <p>6. Como é sua participação em trabalhos de grupo?</p>
                <input type="radio" name="p6" value="3"> Lidero/ajudo muito<br>
                <input type="radio" name="p6" value="2"> Faço apenas a minha parte<br>
                <input type="radio" name="p6" value="1"> Deixo os outros fazerem
            </div>

            <button type="submit">Ver Meu Resultado</button>
        </form>

        <?php if ($resultadoFinal): ?>
            <div class="resultado">
                <p><?php echo $resultadoFinal; ?></p>
                <p>Pontuação Total: <?php echo $pontos; ?> pontos.</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>