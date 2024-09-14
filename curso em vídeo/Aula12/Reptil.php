<?php
require_once 'Animal.php';

class Reptil extends Animal{
    private $corEscama;
    
    public function alimentar() {
        echo "<br><p>Comendo vegetais</p></br>";
    }

    public function emitirSom() {
        echo "<br><p>Som de réptil</p></br>";
    }

    public function locomover() {
        echo "<br><p>Rastejando</p></br>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
        return $this;
    }
    
}
