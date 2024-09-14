<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Vizualizacao {
    private $espectador,$filme;
    
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
        return $this;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
        return $this;
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porcentagem){
        $nova = 0;
        if ($porcentagem <= 20){
            $nova = 3;
        }else if($porcentagem <=50){
            $nova = 5;
        }else if($porcentagem <= 90){
            $nova = 8;
        }else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
}
