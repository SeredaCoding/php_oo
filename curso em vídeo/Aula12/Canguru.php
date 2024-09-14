<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero{
    public function usarBolsa(){
        echo "<br><p>Usando Bolsa</p></br>";
    }
    public function locomover(){
        echo "<br><p>Pulando</p></br>";
    }
}
