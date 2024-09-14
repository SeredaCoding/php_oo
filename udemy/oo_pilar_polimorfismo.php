<?php

class Carro extends Veiculo{
	public $teto_solar = true;

	function abrirTetoSolar(){
		echo 'Abrir teto solar';
	}

	function aletarPosicaoVolante(){
		echo 'Alterar posição volante';
	}

	function __construct($placa, $cor){
		$this->placa = $placa;
		$this->cor = $cor;
	}

}

class Moto extends Veiculo{
	public $contraPesoGuidao = true;

	function empinar(){
		echo 'Empinar';
	}

	function trocarMarcha(){
		echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
	}

	function __construct($placa, $cor){
		$this->placa = $placa;
		$this->cor = $cor;
	}
}

class Veiculo {
	public $placa = null;
	public $cor = null;

	function acelerar(){
		echo 'Acelerar';
	}
	function freiar(){
		echo 'Freiar';
	}

	function trocarMarcha(){
		echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
	}

	
	
}

class Caminhao extends Veiculo{}


$carro = new Carro('ABC1234','Branco');
$moto = new Moto('DEF2211','Preto');
$caminhao = new Caminhao();

$carro->trocarMarcha();
echo '<br/>';
$moto->trocarMarcha();
echo '<br/>';
$caminhao->trocarMarcha();



?>