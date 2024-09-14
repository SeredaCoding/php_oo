<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function alimentar() {
        echo "<br><p>Comendo substâncias</p></br>";
    }

    public function emitirSom() {
        echo "<br><p>Peixe não faz som</p></br>";
    }

    public function locomover() {
        echo "<br><p>Nadando</p></br>";
    }
    public function soltarBolha(){
        echo "<br><p>Soltando Bolha</p></br>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
        return $this;
    }


}
