<?php
declare(strict_types=1);
class Pessoa {
    //Atributos
    private $nome,$idade,$sexo;
    //Métodos
    public function fazerAniver(){
        $this->idade ++;
    }
    //Métodos especiais
    public function __construct(string $nome,int $idade,string $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
    
    //getters
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    //setters
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }
}
