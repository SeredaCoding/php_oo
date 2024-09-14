<?php
class Estudar {
    var $curso;
    var $estudando;
    var $dificuldade;
    var $anotando;
    var $atencao;
    var $aprendendo;
    
    function estudar(){
        if($this->estudando == false){
            $this->estudando = true;
            echo "<p>Estudando...</p><br>";
        }else{
            echo "<p>Você já está estudando, portanto continue!</p><br>";
        }
    }
    function anotar(){
        if($this->estudando == true){
            if($this->anotando == false){
                $this->anotando = true;
                echo "<p>Anotando...</p><br>";
            }else{
                echo "<p>Erro! Você já está anotando!</p><br>";
            } 
        }else{
            echo "<p>Erro! Comece a estudar, para anotar o conteúdo!</p><br>";
        }
    }
    function prestarAtencao(){
        if($this->atencao == false){
            $this->atencao = true;
            echo "<p>Prestando atenção...</p><br>";
        }else{
            echo "<p>Você já está prestando atenção, portanto continue assim! :)</p><br>";
        }
    }
    function aprender(){
        if($this->estudando == true){
            if($this->atencao == false){
                $this->aprendendo = false;
                echo "<p>Preste atenção para aprender!</p><br>";    
            }else{
                $this->aprendendo = true;
                echo "<p>Aprendendo...</p><br>";    
            }    
        }else{
            echo "<p>Erro! Comece a estudar para aprender!</p><br>";
        }
    }
 
}
?>
