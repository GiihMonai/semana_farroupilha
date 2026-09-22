<?php
class Pessoa {
    public $nome;
    public $idade;
    public function apresentar (){
        echo "ola meu nome é {$this->nome} e tenho {$this->idade} anos";
    }
}
$p1 = new Pessoa();
$p1->nome = 'elly';
$p1->idade = '16';
$p1->apresentar('aaaaa');

$p2 = new Pessoa();
$p2->nome = 'cachinhux';
$p2->idade = '17';
$p2->apresentar('iiiii');
?>