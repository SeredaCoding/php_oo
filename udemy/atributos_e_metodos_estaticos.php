<?php
	
	class Exemplo{

		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu sou um atributo normal';

		public static function metodo1(){
			//echo $this->atributo2; // o método $this não funciona se não for instanciado.
			echo 'Eu sou um método estático';
		}

		public function metodo2(){
			echo 'Eu sou um método normal';
		}

	}

	//instanciando uma classe e associando essa instacia/objeto a uma variavel:
	//$x = new Exemplo();

	//em métodos estáticos não é necessário instanciar
	/*echo Exemplo::$atributo1;
	echo '<br/>';
	Exemplo::metodo1();*/

	//Atributos e métodos não estáticos sendo utilizados com o atributo de resolução de escopo
	//echo Exemplo::$atributo2;
	echo Exemplo::metodo1();

	//na instancia de um objeto que contenha atributos estáticos, esses atributos não podem ser acessados.
	//echo $x->atributo1;

?>