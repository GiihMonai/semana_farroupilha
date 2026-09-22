<?php
$filmes = ["os fantasmas tambem se divertem", "o labirinto do fauno", "todo mundo em panico"];
$removido = array_shift($filmes);

echo "Filme removido: " . $removido . "<br><br>";

echo "<pre>";
print_r($filmes);
echo "</pre>";
?>