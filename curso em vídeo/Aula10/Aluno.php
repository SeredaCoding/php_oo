<?php
declare(strict_types=1);
include_once 'Pessoa.php';

class Aluno extends Pessoa {
    //Atributos
    private $matr,$curso;
    //Métodos
    public function cancelarMatr(){
        echo ("<br>A matrícula será cancelada...<br>");
        $this->setMatr(false);
    }
    //Métodos Especiais
    public function __construct($nome,$idade,$sexo,bool $matr, string $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->setMatr($matr);
        $this->setCurso($curso);
    }
    
    //getters
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    //setters
    public function setMatr($matr) {
        $this->matr = $matr;
        return $this;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }


}
