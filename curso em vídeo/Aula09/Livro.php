<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //Atributos
    private $titulo,$autor,$totPaginas,
            $pagAtual,$aberto,$leitor;
    
    //Métodos especiais
    public function __construct($titulo,$autor,$totPaginas,$leitor) 
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
        $this->pagAtual = 0;
        $this->aberto = false;
        
    }
    
    //Setters
    private function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    private function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }

    private function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
        return $this;
    }

    private function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
        return $this;
    }

    private function setAberto($aberto) {
        $this->aberto = $aberto;
        return $this;
    }

    private function setLeitor($leitor) {
        $this->leitor = $leitor;
        return $this;
    }

        
    //Getters
    private function getTitulo() {
        return $this->titulo;
    }

    private function getAutor() {
        return $this->autor;
    }

    private function getTotPaginas() {
        return $this->totPaginas;
    }

    private function getPagAtual() {
        return $this->pagAtual;   
    }

    private function getAberto() {
        if($this->aberto == true){
            return "aberto";
        }else{
            return "fechado";
        }
        
    }

    private function getLeitor() {
        return $this->leitor;
    }

        
    //Métodos específicos
    public function detalhesLivro(){
        echo "<br>------------- Detalhes do livro ----------------<br>";
        echo "<br>Nome do livro {$this->getTitulo()}.<br>";
        echo "<br>O autor é {$this->getAutor()}.<br>";
        echo "<br>O total de páginas é {$this->getTotPaginas()}.<br>";
        echo "<br>O nome do leitor atual é {$this->getLeitor()}.<br>";
        echo "<br>A página atual é {$this->getPagAtual()}.<br>";
        echo "<br>O livro está {$this->getAberto()}.<br>";
    }
    public function folhear($qtdPaginas){
        if($this->aberto == true){
            if($this->getTotPaginas() >= ($this->pagAtual + $qtdPaginas)){
                $this->setPagAtual($this->pagAtual + $qtdPaginas);
                
            }else if($this->getTotPaginas() <= ($this->pagAtual + $qtdPaginas)){
                $diferenca = ($this->getTotPaginas() - $this->pagAtual);
                echo ("Só existe mais {$diferenca} páginas no livro.");
            }         
        }else{
            echo "Erro! O livro não foi aberto para que se possa lê-lo.";
        } 
    }
    public function fecharLivro(){
        $this->setAberto(false);
    }
    public function abrirLivro(){
        $this->setAberto(true);
    }
    
    public function voltarPag() {
        if($this->aberto == true){
            if(0 <= ($this->pagAtual - 1)){
                $this->setPagAtual($this->pagAtual -1);
            }else{
                echo ("Não existem mais páginas para voltar!");
            }         
        }else{
            echo "Erro! O livro não foi aberto para que se possa avançar as páginas.";
        }
    }

    public function avancarPag() {
        if($this->aberto == true){
            if($this->getTotPaginas() <= ($this->pagAtual + 1)){
                $this->setPagAtual($this->pagAtual + 1);
            }else{             
                echo ("Não existem mais páginas para avançar!");
            }         
        }else{
            echo "Erro! O livro não foi aberto para que se possa avançar as páginas.";
        }
    }

    
}
