<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;
    
    //Polimorfismo de Sobreposição. Sobrepondo os métodos da classe abstrata Animal.
    public function alimentar() {
        echo "<br><p>Mamando</p></br>";
    }
    public function emitirSom() {
        echo "<br><p>Som de Mamífero</p></br>";
    }
    public function locomover() {
        echo "<br><p>Correndo</p></br>";
    }
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
        return $this;
    }


}
