<?php
class Conexao{
	
	private $caminho="localhost";
	private $login="root";
	private $senha="";
	private $dbnam="heranca";
	public $con;
	
	
	public function __construct()
	{

		$this->con = mysqli_connect($this->caminho, $this->login, $this->senha,$this->dbnam)
		or die("N�o foi possivel estabelecer conexão com o banco!".mysqli_error($this->con));
	}	
	
	

}
?>