<form method="POST">
    <label>Informe seu nome: <input type="text" name="nome_cliente"></label>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_cliente'];
    echo "Nome recebido: $nome<br>";
    echo "Os dados foram enviados pelo cliente (navegador) e processados no servidor com PHP por meio de uma requisição HTTP.";
}
?>