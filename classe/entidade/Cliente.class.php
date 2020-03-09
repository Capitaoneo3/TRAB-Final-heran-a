<?php
require_once "Pessoa.class.php";

class Cliente extends Pessoa{
	private $rg;
	private $cpf;
	private $celular;
	private $idade;

	public function __construct($rg,$cpf,$celular,$idade,$id,$nome,$endereco,$email){
		$this->rg=$rg;
		$this->cpf=$cpf;
		$this->celular=$celular;
		$this->idade=$idade;

		parent::__construct($id,$nome,$endereco,$email);


	}





	
	public function getRg()
	{
		return $this->rg;
	}

	
	public function setRg($rg)
	{
		$this->rg = $rg;

		return $this;
	}

	
	public function getCpf()
	{
		return $this->cpf;
	}

	
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;

		return $this;
	}

	
	public function getCelular()
	{
		return $this->celular;
	}

	public function setCelular($celular)
	{
		$this->celular = $celular;

		return $this;
	}

	
	public function getIdade()
	{
		return $this->idade;
	}

	
	public function setIdade($idade)
	{
		$this->idade = $idade;

		return $this;
	}
}

?>