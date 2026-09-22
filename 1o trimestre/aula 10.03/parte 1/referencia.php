<?php
$numero = 10; 
function incrementar(&$numero) { 
    $numero = $numero + 1; 
    echo "Dentro da função: " . $numero . "<br>"; 
}
incrementar($numero);
echo "Fora da função: " . $numero; 
// R: Agora o valor original foi alterado porque usamos a passagem por referência (&). 
// A função passou a apontar para o mesmo endereço de memória da variável original.
?>