<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade,$salario;
    
    public function receberAumento($aumento){
        echo "<p>O <b>Professor $this->nome</b> recebeu um aumento de R$$aumento. Seu salário era de R$$this->salario e foi para ";
        $this->setSalario($this->salario + $aumento);
        echo("R$$this->salario.</p>");
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
        return $this;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
        return $this;
    }


}
