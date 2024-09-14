<?php
class Lutador {
    //Atributos
    private $nome, $nacionalidade, $idade, 
            $altura, $peso, $categoria, 
            $vitorias, $derrotas, $empates;
    
    //Métodos especiais
    public function __construct($nome, $nacionalidade, $idade, 
                                $altura, $peso, $vitorias,
                                $derrotas, $empates) 
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    //getters
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }
      
    //setters
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
        return $this;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }

    private function setCategoria() {
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido, pouco peso.";
        }else if($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }else if($this->getPeso()<=83.9){
            $this->categoria = "Médio";
        }else if($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido, peso em excesso.";
        }
        
        return $this;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
        return $this;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
        return $this;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
        return $this;
    }

        
    //Métodos específicos
    public function apresentar(){
        echo "<br>--------- Apresentação ----------<br>";
        echo "<br>CHEGOU A HORA! O lutador {$this->getNome()}.<br>";
        echo "<br>Veio diretamente do país {$this->getNacionalidade()}.<br>";
        echo "<br>Tem {$this->getIdade()} anos.<br>";
        echo "<br>Tem {$this->getAltura()}m de altura.<br>";
        echo "<br>Pesando {$this->getPeso()}Kg.<br>";
        echo "<br>Na categoria peso {$this->getCategoria()}.<br>";
        echo "<br>Ganhou {$this->getVitorias()} lutas.<br>";
        echo "<br>Perdeu {$this->getDerrotas()} lutas.<br>";
        echo "<br>Empatou {$this->getEmpates()} lutas.<br>";
        echo "<br>----------------------------<br>";
    }
    public function status(){
        echo "<br>--------- Status ----------<br>";
        echo "<br>Nome: {$this->getNome()}.<br>";
        echo "<br>É um peso: {$this->getCategoria()}.<br>";
        echo "<br>{$this->getVitorias()} Vitórias.<br>";
        echo "<br>{$this->getDerrotas()} Derrotas.<br>";
        echo "<br>{$this->getEmpates()} Empates.<br>";
        echo "<br>----------------------------<br>";
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        echo "A luta foi ganha! Vitória de: {$this->getNome()}";
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        echo "A luta foi perdida! Derrota de: {$this->getNome()}";
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
        echo "A luta empatou!";
    }
}
