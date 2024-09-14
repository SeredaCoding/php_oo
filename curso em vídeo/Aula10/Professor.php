<?php
declare(strict_types=1);
require_once 'Pessoa.php';

class Professor extends Pessoa {
    //Atributos
    private $salario,$especialidade;
    //Métodos
    public function receberAum($aumento){
        $this->salario += $aumento;
    }
    //Métodos especiais
    public function __construct($nome,$idade,$sexo,float $salario, string $especialidade) {
        parent::__construct($nome, $idade, $sexo);
        $this->setSalario($salario);
        $this->setEspecialidade($especialidade);
    }
    
    //getters
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    //setters
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
        return $this;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
        return $this;
    }


}
