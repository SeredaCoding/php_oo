<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
   private $volume;
   private $ligado;
   private $tocando;
   private $volumeAnterior;
   
   //Método especiais
   public function __construct() {
       $this->setVolume(50);
       $this->setLigado(false);
       $this->setTocando(false);
   }
   //getters
   private function getVolume() {
       return $this->volume;
   }
   private function getLigado() {
       return $this->ligado;
   }
   private function getTocando() {
       return $this->tocando;
   }
   private function getVolumeAnterior() {
       return $this->volumeAnterior;
   }
   //setters
   private function setVolume($volume) {
       $this->volume = $volume;
       return $this;
   }
   private function setLigado($ligado) {
       $this->ligado = $ligado;
       return $this;
   }
   private function setTocando($tocando) {
       $this->tocando = $tocando;
       return $this;
   }
   private function setVolumeAnterior($volumeAnterior) {
       $this->volumeAnterior = $volumeAnterior;
       return $this;
   }
      
   //Implementar interface Controlador
    public function ligar() {
        if($this->getLigado()== false){
            $this->setLigado(true);
            echo "<br>Ligando...<br>";
        }       
    }
    public function desligar() {
        if($this->getLigado()){
            $this->setLigado(false);
            echo "<br>Desligando...<br>";
        }
    }
    public function abrirMenu() {
        if($this->getLigado()){
            echo "<br>--------- Menu ----------<br>";
        echo 'Está ligado?: '. ($this->getLigado()?"Sim.<br>":"Não.<br>");
        echo 'Está tocando?: '. ($this->getTocando()?"Sim.<br>":"Não.<br>");
        echo "Volume: ". $this->getVolume()."% ";
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "<b>| </b>";
        }
        echo "<br>----------------------------<br>";
        } 
    }
    public function fecharMenu() {
        if($this->getLigado()){
            echo "<br>Fechando Menu...<br>";
        }       
    }
    public function maisVolume() {
        if($this->getLigado()){
            if($this->getVolume() < 100){
                $this->setVolume($this->getVolume() +5);
                echo "<br>Aumentando volume... Volume: {$this->getVolume()}%<br>";
                $this->setVolumeAnterior($this->getVolume());
            }else{
                echo "<br>Volume está no máximo. Volume: {$this->getVolume()}%<br>";
            }
            
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() -5);
            $this->setVolumeAnterior($this->getVolume());
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
            echo "<br>Mudo ligado...<br>";
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume($this->getVolumeAnterior());
            echo "<br>Mudo desligado...<br>";
        }
    }
    public function play() {
        if($this->getLigado() && !($this->getTocando()) ){
            $this->setTocando(true);
            echo "<br>Tocando...<br>";
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
            echo "<br>Pause ativado.<br>";
        }
    }
    

}
