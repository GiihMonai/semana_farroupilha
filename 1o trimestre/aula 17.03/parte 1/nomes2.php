<?php
$nomes = ["guilherme", "elyy", "vito"];
$removido = array_pop($nomes);

echo "Nome removido: " . $removido . "<br><br>";

echo "<pre>";
print_r($nomes);
echo "</pre>";
?>