<?php
session_start();

if (isset($_POST['nome_jogador'])) {
    $_SESSION['nome_jogador'] = $_POST['nome_jogador'];
}

$nome = $_SESSION['nome_jogador'] ?? 'Vivente';

$secoes = [
    "HISTÓRIA" => [
        "p1" => ["titulo" => "Qual era o principal caráter ideológico da Revolução Farroupilha em relação ao governo imperial?", "opcoes" => [["texto" => "Monarquista", "valor" => "0"], ["texto" => "Republicano", "valor" => "1"], ["texto" => "Ditatorial", "valor" => "0"]]],
        "p2" => ["titulo" => "Em qual província brasileira teve início a Guerra dos Farrapos?", "opcoes" => [["texto" => "Santa Catarina", "valor" => "0"], ["texto" => "São Pedro do Rio Grande do Sul", "valor" => "1"], ["texto" => "São Paulo", "valor" => "0"]]],
        "p3" => ["titulo" => "Quem foi um dos principais líderes militares da revolução?", "opcoes" => [["texto" => "Bento Gonçalves da Silva", "valor" => "1"], ["texto" => "Bento Manuel Ribeiro", "valor" => "0"], ["texto" => "Luigi Rossetti", "valor" => "0"]]],
        "p4" => ["titulo" => "Além do RS, em qual outra região a revolução se expandiu, proclamando a República Juliana?", "opcoes" => [["texto" => "Laguna", "valor" => "1"], ["texto" => "Corrientes", "valor" => "0"], ["texto" => "Lages", "valor" => "0"]]],
        "p5" => ["titulo" => "Sobre a questão da escravidão na Guerra dos Farrapos:", "opcoes" => [["texto" => "Os líderes eram abolicionistas convictos", "valor" => "0"], ["texto" => "A escravidão foi abolida imediatamente", "valor" => "0"], ["texto" => "Homens negros lutaram nos exércitos visando a liberdade", "valor" => "1"]]],
        "p6" => ["titulo" => "Qual o significado da cor vermelha ter sido entrecortada entre o verde e o amarelo na bandeira?", "opcoes" => [["texto" => "Representava as matas dos pampas gaúchos", "valor" => "0"], ["texto" => "Simbolizava o ideal republicano e revolucionário", "valor" => "1"], ["texto" => "Referia-se à cor oficial da bandeira espanhola", "valor" => "0"]]],
    ],
    "DANÇAS" => [
        "p7" => ["titulo" => "Qual o nome da dança tradicional que é um animal típico do Rio Grande do Sul?", "opcoes" => [["texto" => "Maçanico", "valor" => "1"], ["texto" => "Quero-quero", "valor" => "0"], ["texto" => "Bugio", "valor" => "0"]]],
        "p8" => ["titulo" => "Qual é o compasso mais utilizado para dançar chula?", "opcoes" => [["texto" => "8", "valor" => "1"], ["texto" => "12", "valor" => "0"], ["texto" => "16", "valor" => "0"]]],
        "p9" => ["titulo" => "Qual é a ordem das invernadas dentro de um CTG?", "opcoes" => [["texto" => "Berçário, Maternal, Juvenil, Adulta, Veterana, Ancião", "valor" => "0"], ["texto" => "Dente de leite, Mirim, Juvenil, Adulta, Veterana, Xiru", "valor" => "1"], ["texto" => "Pré-Mirim, Mirim, Jovial, Adulta, Veterana", "valor" => "0"]]],
        "p10" => ["titulo" => "Existe dentro das danças tradicionais gaúchas 4 tipos de ciclos coreográficos, qual desses NÃO é um?", "opcoes" => [["texto" => "Ciclo do fandango", "valor" => "0"], ["texto" => "Ciclo das contradanças", "valor" => "0"], ["texto" => "Ciclo dos sapateios", "valor" => "1"]]],
        "p11" => ["titulo" => "Qual a principal característica do “ciclo dos pares enlaçados”?", "opcoes" => [["texto" => "Alegre e envolvente", "valor" => "1"], ["texto" => "Vivo, alegre e descontraído", "valor" => "0"], ["texto" => "Exibicionismo", "valor" => "0"]]],
        "p12" => ["titulo" => "Qual a mão que é utilizada para convidar a prenda para dançar?", "opcoes" => [["texto" => "Mão direita", "valor" => "1"], ["texto" => "Mão esquerda", "valor" => "0"], ["texto" => "Ela que vá sozinha", "valor" => "0"]]],
        "p13" => ["titulo" => "Existem 3 tipos de “harmonia de conjunto das danças”, isso é, como vão ser as posições de cada par na dança. Qual entre as abaixo NÃO é uma opção?", "opcoes" => [["texto" => "Dança de fila", "valor" => "0"], ["texto" => "Dança de roda", "valor" => "0"], ["texto" => "Dança individual", "valor" => "1"]]],
    ],
    "CULTURA" => [
        "p14" => ["titulo" => "Hoje em dia, o charque é salgado com sal grosso e depois deixado ao sol para ficar pronto, mas os tropeiros em suas longas viagens salgavam a carne de outra forma. Como era feito?", "opcoes" => [["texto" => "Temperos exóticos", "valor" => "0"], ["texto" => "Suor de cavalo", "valor" => "1"], ["texto" => "Sal do Himalaia", "valor" => "0"]]],
        "p15" => ["titulo" => "Na versão mais popular da lenda do Negrinho do Pastoreio, quem é a figura que aparece para proteger o Negrinho após ele ser castigado no formigueiro?", "opcoes" => [["texto" => "A mãe do menino, que era uma escrava fugitiva", "valor" => "0"], ["texto" => "A Virgem Maria, considerada sua madrinha", "valor" => "1"], ["texto" => "O filho do estancieiro, que era seu amigo secreto", "valor" => "0"]]],
        "p16" => ["titulo" => "Segundo a lenda da Erva-Mate, qual foi o pedido feito pelo velho guerreiro ao mensageiro de Tupã para que sua filha, Yari, pudesse ser livre?", "opcoes" => [["texto" => "Que o mensageiro levasse Yari para conhecer outras tribos e encontrar um marido", "valor" => "0"], ["texto" => "Que ele recebesse riquezas e sementes para que nunca mais passasse fome", "valor" => "0"], ["texto" => "Que suas forças fossem devolvidas para que a filha não precisasse mais cuidar dele", "valor" => "1"]]],
        "p17" => ["titulo" => "Qual o nome correto do CTG ao qual o aluno Lorenzo Baldasso Vicente participa?", "opcoes" => [["texto" => "Estância do Rio Grande", "valor" => "0"], ["texto" => "Tropeiro da Serra", "valor" => "1"], ["texto" => "Lanceiros", "valor" => "0"]]],
        "p18" => ["titulo" => "Qual o principal criador do movimento tradicionalista gaúcho moderno?", "opcoes" => [["texto" => "Lorenzo Baldasso Vicente", "valor" => "0"], ["texto" => "Gilberto Bitencourt", "valor" => "0"], ["texto" => "Paixão Côrtes", "valor" => "1"]]],
        "p19" => ["titulo" => "Qual a música gaúcha mais ouvida (2026)?", "opcoes" => [["texto" => "Querência Amada", "valor" => "1"], ["texto" => "Céu, Sol, Sul, Terra e Cor", "valor" => "0"], ["texto" => "Tordilho Negro", "valor" => "0"]]],
        "p20" => ["titulo" => "Qual o cantor tradicionalista gaúcho mais ouvido (2026)?", "opcoes" => [["texto" => "Baitaca", "valor" => "0"], ["texto" => "Teixeirinha", "valor" => "0"], ["texto" => "Luis Marenco", "valor" => "1"]]],
    ]
];

foreach ($secoes as $nomeSecao => &$perguntasDaSecao) {
    $chaves = array_keys($perguntasDaSecao);
    shuffle($chaves);
    
    $novoArray = [];
    foreach ($chaves as $chave) {
        $novoArray[$chave] = $perguntasDaSecao[$chave];
    }
    $perguntasDaSecao = $novoArray;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz CTG - Desafio Farroupilha</title>
    <style>
        :root {
            --sunshine: #ffc926;
            --cream: #f3e8cc;
            --forest-green: #18542a;
            --tomato-burst: #d52518;
        }

        body {
            background-color: var(--forest-green); 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--forest-green);
            margin: 0;
            padding: 20px;
            transition: background-color 0.5s ease; 
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
        }

        header {
            text-align: center;
            border-bottom: 4px solid var(--sunshine);
            margin-bottom: 40px;
            padding-bottom: 20px;
        }

        h1 { color: var(--tomato-burst); margin: 0; }

        .pergunta-card {
            margin-bottom: 35px;
            padding: 20px;
            background: #fafafa;
            border-left: 6px solid var(--forest-green);
            border-radius: 4px;
        }

        .pergunta-titulo { font-weight: bold; font-size: 1.1rem; display: block; margin-bottom: 15px; }

        .opcao {
            display: block;
            background: white;
            border: 2px solid #eee;
            margin: 10px 0;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
        }

        .opcao:hover { border-color: var(--sunshine); background: var(--cream); }

        input[type="radio"] { margin-right: 12px; accent-color: var(--tomato-burst); }

        .btn-enviar {
            background-color: var(--forest-green);
            color: var(--sunshine);
            border: none;
            width: 100%;
            padding: 20px;
            font-size: 1.4rem;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Quiz do CTG</h1>
        <p>Bem-vindo ao galpão, <strong><?php echo htmlspecialchars($nome); ?></strong>! Boa sorte no desafio.</p>
    </header>

    <form action="resultado.php" method="POST">
    
    <?php foreach ($secoes as $tituloSecao => $perguntas): ?>
        <h2 style="color: var(--tomato-burst); border-bottom: 2px solid var(--sunshine); margin-top: 40px; padding-bottom: 10px;">
            SEÇÃO: <?php echo $tituloSecao; ?>
        </h2>

        <?php foreach ($perguntas as $id => $dados): ?>
            <div class="pergunta-card">
                <span class="pergunta-titulo"><?php echo $dados['titulo']; ?></span>
                
                <?php foreach ($dados['opcoes'] as $opcao): ?>
                    <label class="opcao">
                        <input type="radio" name="<?php echo $id; ?>" value="<?php echo $opcao['valor']; ?>" required>
                        <?php echo $opcao['texto']; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <button type="submit" class="btn-enviar">Finalizar Quiz</button>
</form>
</div>

<script>
window.onscroll = function() {
    const scrollMax = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = (window.scrollY / scrollMax) * 100;

    const green = getComputedStyle(document.documentElement).getPropertyValue('--forest-green');
    const red = getComputedStyle(document.documentElement).getPropertyValue('--tomato-burst');
    const yellow = getComputedStyle(document.documentElement).getPropertyValue('--sunshine');

    if (scrolled < 33) {
        document.body.style.backgroundColor = green;
    } else if (scrolled >= 33 && scrolled < 66) {
        document.body.style.backgroundColor = red;
    } else {
        document.body.style.backgroundColor = yellow;
    }
};
</script>

</body>
</html>