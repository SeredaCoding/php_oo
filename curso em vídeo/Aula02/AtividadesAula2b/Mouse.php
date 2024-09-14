<?php
class Mouse {
    var $modelo;
    var $cor;
    var $ligado;
    var $botaoD;
    var $botaoE;
    var $movimento;
    var $scrollCima;
    var $scrollBaixo;
    
    function movimentar(){
        if($this->ligado == true){
            $this->movimento = true;
            echo ("Movimentando ponteiro do mouse...<br>");
        }else{ 
            echo("<p>Erro! O Mouse está desligado!</p><br>");
        }      
    }
    function botaoDPress(){
        if($this->ligado == true){
            $this->botaoD = true;
            echo ("Botão direito pressionado...<br>");
        }else{
            echo("<p>Erro! O Mouse está desligado!</p><br>");
        }
    }
    function botaoEPress(){
        if($this->ligado == true){
            $this->botaoE = true;
            echo ("Botão esquerdo pressionado...<br>");
        }else{
            echo("<p>Erro! O Mouse está desligado!</p><br>");
        }
    }
    function scrollCima(){
        if($this->ligado == true){
            if($this->scrollBaixo == false){
                $this->scrollCima = true;
                echo ("<p>O Scroll do mouse está indo para cima...</p><br>");
            }else{
                echo("<p>Erro! O Scroll não pode ir para duas direções!</p><br>");
            }    
        }else{
            echo("<p>Erro! O Mouse está desligado!</p><br>");
        }
    }
    function scrollBaixo(){
        if($this->ligado == true){
            if($this->scrollCima == false){
                $this->scrollBaixo = true;
                echo ("<p>O Scroll do mouse está indo para baixo...</p><br>");
            }else{
                echo("<p>Erro! O Scroll não pode ir para duas direções!</p><br>");
            }    
        }else{
            echo("<p>Erro! O Mouse está desligado.</p><br>");
        }
    }
    
}
?>