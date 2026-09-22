<?php
session_start();

require_once 'guerreiro.php';
require_once 'mago.php';
require_once 'arqueiro.php';

$resultado = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao_criar'])) {
    $nome = $_POST['nome'] ?? 'Herói';
    $classe = $_POST['classe'] ?? 'Guerreiro';
    $vida = intval($_POST['vida_inicial'] ?? 100);
    $nivel = intval($_POST['nivel_inicial'] ?? 1);

    if ($classe === 'Guerreiro') {
        $_SESSION['personagem'] = new Guerreiro($nome, $classe, $vida, $nivel);
    } elseif ($classe === 'Mago') {
        $_SESSION['personagem'] = new Mago($nome, $classe, $vida, $nivel);
    } elseif ($classe === 'Arqueiro') {
        $_SESSION['personagem'] = new Arqueiro($nome, $classe, $vida, $nivel);
    }
    
    $resultado = "✨ Personagem criado com sucesso!";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao_novo_personagem'])) {
    $_SESSION['ocultar_atual'] = true;
    header("Location: index.php");
    exit();
}

if (isset($_POST['acao_criar'])) {
    unset($_SESSION['ocultar_atual']);
}

$exibir_painel_jogo = isset($_SESSION['personagem']) && !isset($_SESSION['ocultar_atual']);

if ($exibir_painel_jogo) {
    $personagem = $_SESSION['personagem'];
    $valor_input = intval($_POST['valor_acao'] ?? 10);

    if (isset($_POST['acao_atacar'])) {
        ob_start();
        $personagem->atacar();
        $resultado = trim(ob_get_clean());
    }

    if (isset($_POST['acao_dano'])) {
        ob_start();
        $personagem->receberDano($valor_input);
        $resultado = trim(ob_get_clean());
    }

    if (isset($_POST['acao_recuperar'])) {
        ob_start();
        $personagem->recuperarVida($valor_input);
        $resultado = trim(ob_get_clean());
    }

    if (isset($_POST['acao_nivel'])) {
        ob_start();
        $personagem->subirNivel();
        $resultado = trim(ob_get_clean());
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema RPG</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            padding: 40px 20px; 
            background-color: #E8ECEF;
            color: #1C2B48;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .header-principal {
            text-align: center;
            margin-bottom: 30px;
            width: 100%;
            max-width: 900px;
        }

        h1 { 
            color: #1C2B48; 
            margin: 0 0 5px 0;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sub-titulo {
            color: #576574;
            font-size: 15px;
            margin: 0;
        }

        .painel-duas-colunas {
            display: flex;
            gap: 25px;
            width: 100%;
            max-width: 900px;
            align-items: flex-start;
        }

        .card { 
            background-color: #C4D8E5; 
            padding: 25px; 
            border-radius: 10px; 
            border: 1px solid #A7C7E7; 
            box-shadow: 0 6px 15px rgba(28, 43, 72, 0.1);
            box-sizing: border-box;
        }

        .card-criacao {
            width: 100%;
            max-width: 500px;
        }

        .coluna {
            flex: 1;
        }

        h2 { 
            color: #1C2B48; 
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 20px;
            border-bottom: 2px solid #A7C7E7;
            padding-bottom: 6px;
        }

        .campo { 
            margin-bottom: 16px;
        }

        label { 
            display: block; 
            margin-bottom: 6px; 
            font-weight: bold; 
        }
        
        input[type="text"], input[type="number"], select { 
            width: 100%; 
            padding: 10px; 
            background-color: #E8ECEF;
            border: 2px solid #A7C7E7; 
            border-radius: 6px; 
            color: #1C2B48;
            box-sizing: border-box; 
            font-size: 14px;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus, input[type="number"]:focus, select:focus {
            border-color: #8EB1D1; 
            outline: none;
        }
        
        .grupo-botoes {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        button { 
            color: #ffffff; 
            padding: 12px 16px; 
            border: none; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 14px; 
            font-weight: bold;
            transition: background-color 0.2s, transform 0.1s;
            flex: 1;
            min-width: 120px;
        }

        button:active {
            transform: scale(0.97);
        }
        
        .btn-blue { background-color: #1C2B48; } 
        .btn-blue:hover { background-color: #2c3e66; }

        .btn-new-char { background-color: #1C2B48; }
        .btn-new-char:hover { background-color: #2c3e66; }
        
        .box-resultado { 
            background-color: #E8ECEF; 
            padding: 18px; 
            border-radius: 6px; 
            border-left: 5px solid #1C2B48;
            margin-top: 20px;
        }

        .box-resultado h3 {
            color: #1C2B48;
            margin-top: 0;
            margin-bottom: 12px;
            font-size: 18px;
        }

        .linha-status {
            font-size: 15px;
            margin: 6px 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="header-principal">
    <h1>Sistema RPG</h1>
    <p class="sub-titulo">Crie um personagem e teste as ações do jogo</p>
</div>

<?php if (!$exibir_painel_jogo): ?>
    
    <div class="card card-criacao">
        <h2>Criar personagem</h2>
        <form action="index.php" method="POST">
            <div class="campo">
                <label>Nome do personagem</label>
                <input type="text" name="nome" required placeholder="Ex: Mauricio">
            </div>
            <div class="campo">
                <label>Classe</label>
                <select name="classe">
                    <option value="Guerreiro">Guerreiro</option>
                    <option value="Mago">Mago</option>
                    <option value="Arqueiro">Arqueiro</option>
                </select>
            </div>
            <div class="campo">
                <label>Vida Inicial</label>
                <input type="number" name="vida_inicial" value="100" min="0" max="100">
            </div>
            <div class="campo">
                <label>Nível Inicial</label>
                <input type="number" name="nivel_inicial" value="1" min="1">
            </div>
            <div class="grupo-botoes">
                <button type="submit" name="acao_criar" class="btn-blue">Criar personagem</button>
            </div>
        </form>
    </div>

<?php else: ?>

    <div class="painel-duas-colunas">
        
        <div class="card coluna">
            <h2>Ações do personagem</h2>
            <form action="index.php" method="POST">
                <div class="campo">
                    <label>Valor para dano ou recuperação</label>
                    <input type="number" name="valor_acao" value="10" min="1">
                </div>
                
                <div class="grupo-botoes">
                    <button type="submit" name="acao_atacar" class="btn-blue">Atacar</button>
                    <button type="submit" name="acao_dano" class="btn-blue">Receber dano</button>
                    <button type="submit" name="acao_recuperar" class="btn-blue">Recuperar vida</button>
                    <button type="submit" name="acao_nivel" class="btn-blue">Subir de nível</button>
                    <button type="submit" name="acao_novo_personagem" class="btn-new-char">Criar Novo Personagem</button>
                </div>
            </form>
        </div>

        <div class="card coluna">
            <h2>Dados do Personagem</h2>
            
            <div class="linha-status"><strong>Nome:</strong> <?php echo $personagem->getNome(); ?></div>
            <div class="linha-status"><strong>Classe:</strong> <?php echo $personagem->getClasse(); ?></div>
            <div class="linha-status"><strong>Vida:</strong> <?php echo $personagem->getVida(); ?></div>
            <div class="linha-status"><strong>Nível:</strong> <?php echo $personagem->getNivel(); ?></div>

            <?php if (!empty($resultado)): ?>
                <div class="box-resultado">
                    <h3>Resultado</h3>
                    <div class="linha-status"><?php echo $resultado; ?></div>
                </div>
            <?php endif; ?>
        </div>

    </div>

<?php endif; ?>

</body>
</html>