<?php

class Pessoa{
	private $id;
	private $nome;
	private $endereco;
	private $email;
	
    public function __construct($id,$nome,$endereco,$email){
		$this->id=$id;
		$this->nome=$nome;
		$this->endereco=$endereco;
		$this->email=$email;

	}


	public function getId()
	{
		return $this->id;
	}


	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	
	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;

		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}


	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}
}
?>