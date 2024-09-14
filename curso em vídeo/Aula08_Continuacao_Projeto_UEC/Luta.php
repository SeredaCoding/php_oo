<?php
require_once 'Lutador.php';
class Luta {
    //Atributos
    private $desafiado, $desafiante, $rounds, $aprovada;      
    
    //Métodos especiais
    //setters
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }
    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
    //getters
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    
    //Métodos específicos
    public function marcarLuta($l1,$l2){
        if(($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2)){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function Lutar(){
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0: // Empate
                    echo ("<br>A luta entre {$this->desafiado->getNome()} e {$this->desafiante->getNome()} empatou!<br>");
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Desafiado ganhou
                    echo ("<br>{$this->desafiado->getNome()} venceu a luta contra seu desafiante {$this->desafiante->getNome()}!<br>");
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // Desafiante ganhou
                    echo ("<br>{$this->desafiante->getNome()} venceu a luta contra seu desafiado {$this->desafiado->getNome()}!<br>");
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }else{
            echo ("<br>Erro! Luta não pode acontecer!<br>");
        }
    }
}
