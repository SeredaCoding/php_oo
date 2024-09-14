<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function alimentar() {
        echo "<br><p>Comendo Frutas</p></br>";
    }

    public function emitirSom() {
        echo "<br><p>Som de ave</p></br>";
    }

    public function locomover() {
        echo "<br><p>Voando</p></br>";
    }
    public function fazerNinho(){
        echo "<br><p>Fazendo um ninho</p></br>";
    }
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
        return $this;
    }


}
