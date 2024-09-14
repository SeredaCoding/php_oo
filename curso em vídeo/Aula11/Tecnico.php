<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    public function praticar(){
        echo "O aluno <b>$this->nome</b> está praticando seu curso de $this->curso.";
    }
    
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
        return $this;
    }

}
