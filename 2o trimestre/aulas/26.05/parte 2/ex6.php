<?php
class Midia { 
    public $titulo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    public function reproduzir() {
        return "olha a midia ai ó olha a midia";
    }
}

class Filme extends Midia { 
    public function reproduzir() {
        return "olhao filme ai ó olha o filme {$this->titulo}"; 
    }
}

class Musica extends Midia {
    public function reproduzir() {
        return "i used to float now i just fall down i used to know but im not sure now {$this->titulo}";
    }
}

$filme = new Filme("Barbie");
$musica = new Musica("What Was I Made For?");

echo $filme->reproduzir() . "<br>";
echo $musica->reproduzir() . "<br>";
?>