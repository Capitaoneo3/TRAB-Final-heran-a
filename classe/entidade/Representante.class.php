<?php
require_once "Cliente.class.php";

class Representante extends Cliente{
	private $cnpj;
	private $celular;

    public function __construct($cnpj,$celular,$rg){

        parent::__construct($rg);

    }


}

?>