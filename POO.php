<?php class Pessoa{
	//Atributos
	public $nome = "Pedro";
	public $idade = 26;
	public $endereco = "Rua Flor de Maio.";
	
	//Métodos
	function imprimePessoa(){
		return "Nome: {$this->nome} , Idade: {$this->idade} , Endereço: {$this->endereco}";
	}
}
	

		$p1 = new Pessoa();
		echo $p1->imprimePessoa();
	?>
