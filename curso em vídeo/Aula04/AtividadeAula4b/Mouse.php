<?php
class Mouse {
    public $modelo;
    public $cor;
    private $ligado;
    private $botaoD;
    private $botaoE;
    private $movimento;
    private $scrollCima;
    private $scrollBaixo;
    
    public function __construct($modelo, $cor, $ligado, $botaoD, $botaoE, $movimento, $scrollCima, $scrollBaixo) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->setLigado($ligado);
        $this->setBotaoD($botaoD);
        $this->setBotaoE($botaoE);
        $this->setMovimento($movimento);
        $this->setScrollCima($scrollCima);
        $this->setScrollBaixo($scrollBaixo);
        
        /*if($this->ligado == true){
            if(isset($this->$botaoD) && $this->$botaoD){
                echo ("Botão direito pressionado...<br>");
            }
            if(isset($this->$botaoE) && $this->$botaoE){
                echo ("Botão esquerdo pressionado...<br>");
            }
            if(isset($this->$movimento) && $this->$movimento ){
                echo ("Movimentando ponteiro do mouse...<br>");
            }

            if(isset($this->$scrollBaixo) && $this->scrollBaixo){   
                echo ("<p>O Scroll do mouse está indo para cima...</p><br>");
            }else{
                echo("<p>Erro! O Scroll não pode ir para duas direções!</p><br>");
            }
            
            if(isset($this->$scrollCima) && $this->scrollCima){
                echo ("<p>O Scroll do mouse está indo para baixo...</p><br>");
            }else{
                echo("<p>Erro! O Scroll não pode ir para duas direções!</p><br>");
            }
        
        }else{
            echo("<p>Erro! O Mouse está desligado!</p><br>");
        }*/
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function setCor($cor) {
        $this->cor = $cor;
        return $this;
    }

    public function setLigado($ligado) {
        $this->ligado = $ligado;
        return $this;
    }

    public function setBotaoD($botaoD) {
        $this->botaoD = $botaoD;
        
        return $this;
    }

    public function setBotaoE($botaoE) {
        $this->botaoE = $botaoE;
        return $this;
    }

    public function setMovimento($movimento) {
        $this->movimento = $movimento;
        return $this;
    }

    public function setScrollCima($scrollCima) {
        $this->scrollCima = $scrollCima;
        
        return $this;
    }

    public function setScrollBaixo($scrollBaixo) {
        $this->scrollBaixo = $scrollBaixo;
        
        return $this;
    }

    
}
?>