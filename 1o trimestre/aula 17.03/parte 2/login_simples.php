<form method="POST">
    E-mail: <input type="email" name="email"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit">Entrar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "E-mail informado: " . $_POST['email'] . "<br>";
    echo "A senha possui " . strlen($_POST['senha']) . " caracteres.";
}
?>