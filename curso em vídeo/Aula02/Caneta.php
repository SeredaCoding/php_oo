<?php
class Caneta {
    var $modelo;
    var $cor;
    var $carga;
    var $ponta;
    var $tampada;
    
    function rabiscar(){
        if($this->tampada == true){/*  para verificar um atributo de um objeto instanciado
                                        dentro de um método da classe colocamos $this */   
            echo "<p>Erro! Não posso rabiscar! A caneta está tampada.";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }   
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}
