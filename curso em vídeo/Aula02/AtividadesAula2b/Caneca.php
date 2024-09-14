<?php
class Caneca {
    var $cor;
    var $material;
    var $nivel;
    var $estado;
    var $cheia;
    var $vazia;
    
    function esvaziar(){
        if($this->vazia == true){
            $this->vazia = true;
            echo "<p>Erro! A caneca está vazia, portanto não pode ser esvaziada!</p><br>";
        }else{
            echo "<p>Esvaziando caneca...</p><br>";
        }
    }
    function encher(){
        if($this->cheia == false){
            $this->cheia = true;
            echo "<p>Enchendo a caneca...</p><br>";
        }else{
            echo "<p>Erro! A caneca já está cheia!</p><br>";
        }
    }
}
?>
