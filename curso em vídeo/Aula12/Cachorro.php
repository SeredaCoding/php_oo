<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    public function emitirSom(){
        echo "<br><p>Latindo Au!Au!Au!</p></br>";
    }
    public function enterrarOsso(){
        echo "<br><p>Enterrando Osso</p></br>";
    }
    public function abanarRabo(){
        echo "<br><p>Abanando o rabo</p></br>";
    }
}
