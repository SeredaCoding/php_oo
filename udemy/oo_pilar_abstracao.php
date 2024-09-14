<?php

	//modelo
	class Funcionario{

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;
		//public $exibir = null;

		//getters e setters (overloading/sobrecarga)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}
		/*function exibir($variavel, $valor){

			$this->$variavel = $valor;
			return 	'Nome: ' . $variavel->__get('nome') .'<br/>'.
					'Cargo: '. $variavel->__get('cargo').'<br/>'.
					'Salário: '. $variavel->__get('salario') .'<br/>'.
					'Possuí:' . $variavel->__get('numFilhos') . ' filhos(s) <br/>'.
					'Telefone: '. $variavel->__get('telefone').'<br/>';
		}*/



		/*//setters
		function setNome($nome){
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}
		function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		//getters

		function getNome(){
			return $this->nome;
		}
		function getNumFilhos(){
			return $this->numFilhos;
		}

		function getTelefone(){
			return $this->telefone;
		}*/



		//métodos

		function resumirCadFunc(){
			return
			'Nome: ' . $this->__get('nome') .'<br/>'.
			'Cargo: '. $this->__get('cargo').'<br/>'.
			'Salário: '. $this->__get('salario') .'<br/>'.
			'Possuí: ' . $this->__get('numFilhos') . ' filhos(s) <br/>'.
			'Telefone: '. $this->__get('telefone').'<br/>';

		}

		/*function modNumFilhos($numFilhos){
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}*/

	}

	$y = new Funcionario();
	//$y->setNome('José');
	//$y->setNumFilhos(2);
	
	$y->__set('nome','Mateus Sereda');
	$y->__set('numFilhos',5);
	$y->__set('telefone',4199998888);
	$y->__set('cargo','Progamador(a) Junior');
	$y->__set('salario',2500);


	echo $y->resumirCadFunc();
	//echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos(s)';
	/*echo 'Nome: ' . $y->__get('nome') .'<br/>'.
	'Cargo: '. $y->__get('cargo').'<br/>'.
	'Salário: '. $y->__get('salario') .'<br/>'.
	'Possuí: ' . $y->__get('numFilhos') . ' filhos(s) <br/>'.
	'Telefone: '. $y->__get('telefone').'<br/>';*/
	
	echo '<br/>';
	$x = new Funcionario();
	//$x->setNome('Maria');
	//$x->setNumFilhos(0);
	//echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos(s)';
	$x->__set('nome','Maria Aliciane');
	$x->__set('numFilhos',5);
	$x->__set('cargo','Programador(a) Senior');
	$x->__set('salario',30000);
	$x->__set('telefone',4199998888);

	echo $x->resumirCadFunc();
	//echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos(s)';
	/*echo 'Nome: ' . $x->__get('nome') .'<br/>'.
	'Cargo: '. $x->__get('cargo').'<br/>'.
	'Salário: '. $x->__get('salario') .'<br/>'.
	'Possuí: ' . $x->__get('numFilhos') . ' filhos(s) <br/>'.
	'Telefone: '. $x->__get('telefone').'<br/>';*/
	



?>