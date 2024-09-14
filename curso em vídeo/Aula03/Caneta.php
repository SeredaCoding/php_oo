<?php
class Caneta {
    // var é a visibilidade genérica do php, ou seja, são públicos.    
    
    public $modelo;
    public $cor;
    private $carga;
    protected $ponta;
    protected $tampada;
    
    public function rabiscar(){
        if($this->tampada == true){/*  para verificar um atributo de um objeto instanciado
                                        dentro de um método da classe colocamos $this */   
            echo "<p>Erro! Não posso rabiscar! A caneta está tampada.";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }   
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
