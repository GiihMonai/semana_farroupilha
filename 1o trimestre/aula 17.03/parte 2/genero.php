<form method="POST">
    Gênero: 
    <input type="radio" name="genero" value="Masculino"> Masculino ♂️
    <input type="radio" name="genero" value="Feminino"> Feminino ♀️
    <input type="radio" name="genero" value="Outro"> Outro❔
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['genero'])) {
        echo "Gênero selecionado: " . $_POST['genero']; 
    } else {
        echo "Nenhuma opção foi selecionada.";
    }
}
?>