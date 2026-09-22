<form method="POST">
    Nome: <input type="text" name="nome"><br>
    E-mail: <input type="email" name="email"><br>
    Idade: <input type="number" name="idade"><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nome: " . $_POST['nome'] . "<br>"; 
    echo "E-mail: " . $_POST['email'] . "<br>"; 
    echo "Idade: " . $_POST['idade'] . " anos"; 
}
?>