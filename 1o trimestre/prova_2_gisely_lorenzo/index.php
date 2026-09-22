<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz CTG - Início</title>
    <style>
        :root {
            --sunshine: #ffc926;
            --cream: #f3e8cc;
            --forest-green: #18542a;
            --tomato-burst: #d52518;
        }

        body {
            background-color: var(--cream);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-inicial {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 350px;
            border-top: 10px solid var(--forest-green);
            text-align: center;
        }

        h2 { color: var(--tomato-burst); margin-bottom: 20px; }

        .campo-nome { margin-bottom: 20px; text-align: left; }

        label { display: block; font-weight: bold; color: var(--forest-green); margin-bottom: 5px; }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--sunshine);
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        .btn-iniciar {
            background-color: var(--forest-green);
            color: var(--sunshine);
            border: none;
            width: 100%;
            padding: 15px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="card-inicial">
        <h2>Quiz Tradicionalista</h2>
        <p style="color: #555; font-size: 0.95rem; margin-bottom: 25px; line-height: 1.5;">
        Teste seus conhecimentos sobre a história, os costumes e a alma do Rio Grande do Sul.
        </p>

        <form action="quiz.php" method="POST">
            <div class="campo-nome">
                <label for="nome">Nome do Jogador:</label>
                <input type="text" id="nome" name="nome_jogador" placeholder="Ex: Guri ou Prenda" required>
            </div>
            <button type="submit" class="btn-iniciar">Iniciar Quiz</button>
        </form>
    </div>

</body>
</html>