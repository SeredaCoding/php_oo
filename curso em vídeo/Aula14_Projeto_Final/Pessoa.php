<?php

abstract class Pessoa {
    protected $nome,$idade,$sexo,$experiencia;
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }
    protected function ganharExp($n){
     $this->experiencia += $n;
    }
    
}
