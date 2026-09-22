<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Série</title>
</head>
<body>
    <h2>Cadastrar Nova Série</h2>
    <form action="salvar.php" method="POST">
        <p>
            <label>Título:</label><br>
            <input type="text" name="titulo" required>
        </p>
        <p>
            <label>Gênero:</label><br>
            <input type="text" name="genero" required>
        </p>
        <p>
            <label>Plataforma:</label><br>
            <input type="text" name="plataforma" required>
        </p>
        <p>
            <label>Ano:</label><br>
            <input type="number" name="ano" required>
        </p>
        <p>
            <label>Nota:</label><br>
            <input type="number" step="0.1" name="nota" min="0" max="10" required>
        </p>
        <p>
            <label>Assistida:</label><br>
            <select name="assistida" required>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </p>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>