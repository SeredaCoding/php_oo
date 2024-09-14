<?php
declare(strict_types=1);
include_once 'Pessoa.php';

class Funcionario extends Pessoa{
    //Atributos
    private $setor,$trabalhando;
    //Métodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    //Métodos especiais
    public function __construct($nome,$idade,$sexo,string $setor, bool $trabalhando) {
        parent::__construct($nome, $idade, $sexo);
        $this->setSetor($setor);
        $this->setTrabalhando($trabalhando);
    }
    
    //getters
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    //setters
    public function setSetor($setor) {
        $this->setor = $setor;
        return $this;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
        return $this;
    }


}
