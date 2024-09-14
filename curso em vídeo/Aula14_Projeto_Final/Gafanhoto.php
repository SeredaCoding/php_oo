<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login,$totAssistido;
    
    public function __construct($nome, $idade,$sexo, $login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
        return $this;
    }

      
    public function AssistirMaisUm(){
        $this->totAssistido ++;
    }
}
