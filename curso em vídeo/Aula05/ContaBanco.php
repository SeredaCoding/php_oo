<?php
class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Fim Atributos
    
    //Métodos especiais
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        $string = '';
        if($this->tipo == 'CC'){
            $string = "Conta Corrente";
        }else if($this->tipo == 'CP'){
            $string = "Conta Poupança";
        }
        return $string;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }
    
    public function getStringStatus() {
        $string = '';
        if($this->status == true){
            $string = "Ativa.";
        }else if($this->status == false){
            $string = "Inativa.";
        }
        return $string;
    }
    

    public function setNumConta($numConta) {
        if($this->status == true){
            $this->numConta = $numConta;
            return $this;
        }
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function setDono($dono) {
        $this->dono = $dono;
        return $this;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    //Fim Métodos especiais
    
    //Métodos específicos
    public function abrirConta($t){
        if($t == 'CP' || $t == 'CC'){
            $this->setTipo($t);
            if($this->status == false){
                $this->setStatus(true);
                echo("Conta aberta com sucesso!<br>");
                if($this->tipo == "CC"){
                    $this->setSaldo($this->getSaldo() + 50 );
                }else if($this->tipo == "CP"){
                    $this->setSaldo($this->getSaldo() + 150);
                }
            }else{
                echo("A conta já foi aberta/já existe!<br>");
            }
        }else{
            echo "Tipo de conta inválido! Digite CC para Conta Corrente e CP para conta poupança.<br>";
        }
    }
    
    public function fecharConta(){
        if($this->status == true){
            if($this->getSaldo() == 0){
                $this->setSaldo(false);
                echo("A conta foi fechada com sucesso!<br>");
            }else{
                echo("É necessário regularizar o saldo da conta para fechá-la<br>");
            }
        }else{
            echo("A conta já está fechada/inativa<br>");
        }
    }
    
    public function depositar($v){
        if($this->status == true){
            $this->setSaldo($this->getSaldo() + $v);
            echo("Déposito de R$ {$v} feito com sucesso!<br>");
        }else{
            echo("Erro! A conta precisa estar ativa para realizar um depósito!<br>");
        }   
    }
    
    public function sacar($v){
        if($this->status == true){
            if($v <= $this->getSaldo()){
                $this->setSaldo($this->getSaldo() - $v);
                echo("Saque de R$ {$v} feito com sucesso<br>");
            }else{
                echo("Erro! Saldo insuficiente. Deposite R$". ($v - $this->getSaldo()) . " para sacar esse valor!<br>");
            }
        }else{
            echo("Erro! A conta precisa estar ativa para realizar um saque!<br>");
        }
    }
    
    public function pagarMensal(){
        $v = 0;
        if($this->status == true){
            if($this->tipo == "CC"){
                $v = 12;
                echo("A mensalidade de R$ {$v} foi paga com sucesso!<br>");
            }else if($this->tipo == "CP"){
                $v = 20;
                echo("A mensalidade de R$ {$v} foi paga com sucesso!<br>");
            }
            
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo("Saldo insuficiente para pagar a mensalidade.<br>");
            }
        }else{
            echo("Erro! A conta precisa estar ativa para pagar a mensalidade!<br>");
        }
    }
    function stringTipo(){
        
    }
    //Fim Métodos específicos
                      
}
