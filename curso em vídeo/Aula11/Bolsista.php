<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
        private $bolsa;
        public function RenovarBolsa(){
            echo "<p>Bolsa renovada de <b>{$this->nome}</b></p>";
        }
        public function PagarMensalidade() {
            echo "<p><b>$this->nome</b> é bolsista! Então paga com <b>$this->bolsa</b> de desconto.";
        }
        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
            return $this;
        }
}
