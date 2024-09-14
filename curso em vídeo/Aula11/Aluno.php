<?php
require_once 'Pessoa.php';
//Herança para diferença
class Aluno extends Pessoa{
    protected $matricula,$curso;
    //Métodos específicos
    public function PagarMensalidade(){
        echo ("<p>Pagando mensalidade do aluno <b>{$this->nome}</b></p>");
    }
    //Métodos especiais
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }


}
