<?php
require_once '../../classe/entidade/Cliente.class.php';
require_once 'Edit.Cliente.Controle.php';

Edit_Cliente($id=$_POST['id'],
$rg=$_POST['rg'],
$cpf=$_POST['cpf'],
$celular=$_POST['celular'],
$idade=$_POST['idade'],$nome=$_POST['nome'],
$endereco=$_POST['endereco'],
$email=$_POST['email']);

$cliente= new CLiente($rg,
$cpf,
$celular,
$idade,
$id,
$nome,
$endereco,
$email);
var_dump($cliente);
 ?>