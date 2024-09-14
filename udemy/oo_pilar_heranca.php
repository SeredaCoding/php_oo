<?php

	class Carro extends Veiculo{
		public $teto_solar = false;

		function abrirTetoSolar(){
			echo 'Abrir teto solar';
		}

		function aletarPosicaoVolante(){
			echo 'Alterar posição volante';
		}

	}

	class Moto extends Veiculo{
		public $contraPesoGuidao = true;

		function empinar(){
			echo 'Empinar';
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

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}
		
	}

	class Uno extends Carro{
		public $motor = '1.0';

		function motor(){
			echo $this->motor;
		}
	}

	$carro = new Carro('ABC1234','Branco');
	$moto = new Moto('DEF2211','Preto');
	$uno = new Uno('GHH3344','Prata');

	echo '<pre>';
	print_r($carro);
	echo '<br/>';
	print_r($moto);
	echo '<br/>';
	print_r($uno);
	echo '</pre>';
	echo '<hr/>';

	$carro->abrirTetoSolar();
	echo '<br/>';
	$carro->acelerar();
	echo '<br/>';
	$carro->freiar();

	echo '<hr/>';

	$moto->empinar();
	echo '<br/>';
	$moto->acelerar();
	echo '<br/>';
	$moto->freiar();

	echo '<hr/>';

	$uno->motor();
	echo '<br/>';
	$uno->acelerar();
	echo '<br/>';
	$uno->freiar();


?>