<form method="post" action="">
    <label>Nome: <input type="text" name="nome"></label>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) {
    $nome = $_POST['nome'];
    echo "Olá, $nome!";
}
?>