<?php
	class MinhaExceptionCustomizada extends Exception{
		private $erro = '';

		public function __construct($erro){
			$this->erro = $erro;
		}
		public function exibirMensagemErroCustomizada(){
			echo '<div style="border: solid 1px black; padding: 15px; background-color: red; color: white; text-align: center;">';
				echo $this->erro;
			echo '</div>';
		}
	}

	try{	
		throw new MinhaExceptionCustomizada('Esse é um erro de teste');

		//Error (php)
		//Exception (programadores)
		//Customizadas (programadores(erros personalizados))

	} catch (MinhaExceptionCustomizada $e){
		$e->exibirMensagemErroCustomizada();
	}	

?>