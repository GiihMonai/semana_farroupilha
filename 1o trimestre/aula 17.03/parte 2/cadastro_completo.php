<form method="POST">
    <fieldset>
        <legend>Dados pessoais</legend>
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="email" name="email"><br>
        Idade: <input type="number" name="idade">
    </fieldset>
    <fieldset>
        <legend>Preferências</legend>
        Deseja receber notificações?
        <input type="radio" name="notifica" value="Sim"> Sim ✅
        <input type="radio" name="notifica" value="Não"> Não ❌
    </fieldset>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nome: " . $_POST['nome'] . "<br>"; 
    echo "E-mail: " . $_POST['email'] . "<br>"; 
    echo "Idade: " . $_POST['idade'] . "<br>";
    echo "Receber notificações: " . ($_POST['notifica'] ?? 'Não informado'); 
}
?>