<?php
$numero = 10; 
function incrementar($numero) {
    $numero = $numero + 1; 
    echo "Dentro da função: " . $numero . "<br>"; 
}
incrementar($numero); 
echo "Fora da função: " . $numero; 

// R: Não, o valor original não foi alterado. Como a passagem é por valor, 
// a função cria uma nova variável no escopo local, mantendo a original intacta. 
?>