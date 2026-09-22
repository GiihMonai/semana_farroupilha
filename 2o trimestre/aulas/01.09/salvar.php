<?php
include 'conexao.php'; // Usa a conexão existente[cite: 8]

$mensagem = '';
$tipo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $patrimonio = $_POST['patrimonio'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $disponivel = $_POST['disponivel'] ?? 1;

    $stmt = $conexao->prepare("INSERT INTO equipamentos (nome, categoria, patrimonio, estado, disponivel) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $nome, $categoria, $patrimonio, $estado, $disponivel);

    if ($stmt->execute()) {
        $mensagem = "Equipamento cadastrado com sucesso!";
        $tipo = "sucesso";
    } else {
        $mensagem = "Erro ao cadastrar equipamento: " . $stmt->error;
        $tipo = "erro";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container-feedback {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }

        .card-feedback {
            background-color: var(--vanilla-cream);
            border: 2px solid var(--misty-sky);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(45, 58, 71, 0.08);
        }

        .icone-feedback {
            font-size: 2.8rem;
            width: 70px;
            height: 70px;
            line-height: 70px;
            border-radius: 50%;
            margin: 0 auto 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icone-sucesso {
            background-color: var(--blush-petal);
            color: var(--rosewood);
            border: 2px solid var(--rosewood);
        }

        .icone-erro {
            background-color: var(--rosewood);
            color: var(--vanilla-cream);
        }

        .card-feedback h2 {
            font-size: 1.5rem;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .acoes-feedback {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-secundario {
            background-color: transparent;
            color: var(--midnight-lagoon);
            border: 2px solid var(--misty-sky);
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-secundario:hover {
            background-color: var(--blush-petal);
            border-color: var(--rosewood);
            color: var(--rosewood);
        }

        .btn-primario {
            background-color: var(--rosewood);
            color: var(--vanilla-cream);
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        .btn-primario:hover {
            background-color: var(--midnight-lagoon);
            color: var(--vanilla-cream);
        }
    </style>
</head>
<body>

    <div class="container-feedback">
        <div class="card-feedback">
            <?php if ($tipo === 'sucesso'): ?>
                <div class="icone-feedback icone-sucesso">✓</div>
                <h2><?= htmlspecialchars($mensagem) ?></h2>
            <?php else: ?>
                <div class="icone-feedback icone-erro">✕</div>
                <h2><?= htmlspecialchars($mensagem) ?></h2>
            <?php endif; ?>

            <div class="acoes-feedback">
                <a href="cadastrar.php" class="btn-secundario">Cadastrar outro</a>
                <a href="listar.php" class="btn-primario">Ver lista</a>
            </div>
        </div>
    </div>

</body>
</html>