<?php
class Pessoa {
    //Atributos
    private $nome,$idade,$sexo;
    
    //Métodos Especiais
    public function __construct($nome,$idade,$sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
    
    
    //Setters
    private function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    private function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    private function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

    //Getters
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    //Métodos Específicos
    public function fazerAniver(){
        $novaIdade = ($this->getIdade() + 1);
        $this->setIdade($novaIdade);
        Echo ("<br>Seu aniversário de {$novaIdade} anos chegou! Feliz aniversário {$this->getNome()}!<br>");
    }
    public function apresentar(){
        Echo ("<br>{$this->getNome()} tem {$this->getIdade()} anos e seu sexo é {$this->getSexo()}.<br>");
    }
    
}
