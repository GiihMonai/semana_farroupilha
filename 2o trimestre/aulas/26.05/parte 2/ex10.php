<?php
class MusicaTema {
    public $titulo;
    public $artista;

    public function __construct($titulo, $artista) {
        $this->titulo = $titulo;
        $this->artista = $artista;
    }

    public function reproduzirEstilo() {
        return "seila";
    }
}

class PopMelancolico extends MusicaTema {
    public function reproduzirEstilo() {
        return "Tocando '{$this->titulo}' de {$this->artista} — imma cry";
    }

    public function ativarGraveSussurrado() {
        return "shhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
    }
}

class PopClassico extends MusicaTema {
    public function reproduzirEstilo() {
        return "Tocando '{$this->titulo}' de {$this->artista} — pump up the jam pump it up pump it up oh pump it";
    }

    public function dancarEstiloDisco() {
        return "🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉";
    }
}

$musica1 = new PopMelancolico("Bittersuite", "Billie Eilish");
$musica2 = new PopClassico("Girls Just Want to Have Fun", "Cyndi Lauper");


echo $musica1->reproduzirEstilo() . "<br>"; 
echo $musica1->ativarGraveSussurrado() . "<br><br>";

echo $musica2->reproduzirEstilo() . "<br>";
echo $musica2->dancarEstiloDisco() . "<br>";
?>