<?php
	class Pessoa{
		private $nome = "Pedro";
		private $idade = 18;
		private $sexo = "M";
		
		public function getNome(){
			return $this-> nome;
		}
		public function setNome($n){
			$this-> nome = $n;
		}
		public function getIdade(){
		return $this -> idade;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		public function getSexo(){
			return $this-> sexo;
		}
		public function setSexo($s){
			 $this->sexo = $s;
		}
	}
	$p1 = new Pessoa();
	$p1 ->setNome("Pedro");
	echo $p1->getNome();
	
	
	
	
	
	?>