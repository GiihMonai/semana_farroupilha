<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Novo Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastrar Novo Jogo</h1>
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
            <label>Zerado:</label><br>
            <select name="zerado">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </p>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="index.php">Voltar ao menu</a>
</body>
</html>