<?php
class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    /*public function __construct() { // Método construtor simples
     * // É possível executar o método __construct alterando o nome dele para o mesmo nome da classe.
        $this->cor = "Azul";
        $this->tampar();
    }*/
    
    public function tampar(){
        $this->tampada = true;
    }
    
    /*public function __construct($modelo, $ponta, $cor) {// Método construtor avançado
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(true);
    }*/
    
    
    
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
        return $this;
    }

    public function setCor($cor) {
        $this->cor = $cor;
        return $this;
    }

    public function setTampada($tampada) {
        $this->tampada = $tampada;
        return $this;
    }


    
}
