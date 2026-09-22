<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Mensagem:<br>
    <textarea name="mensagem"></textarea><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nome: " . $_POST['nome'] . "<br>"; 
    echo "Mensagem: " . $_POST['mensagem'] . "😊"; 
}
?>