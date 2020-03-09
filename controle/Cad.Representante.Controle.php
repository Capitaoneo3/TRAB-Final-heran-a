<?php
$charactere="mysql_set_charset('UTF-8')";
require_once '../classe/entidade/Cliente.class.php';
require_once '../classe/DAO/Conexao.Class.php';

$rg=$_POST['rg'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$idade = $_POST['idade'];
$id = "";
$nome = $_POST['nome'];
$endereco= $_POST['endereco'];
$email = $_POST['email'];

$cliente= new Cliente($rg,$cpf,$celular,$idade,$id,$nome,$endereco,$email);


$ConexaoOBJ= new Conexao;
$insere_cliente = "INSERT INTO cliente(nome,cpf,celular,email,rg,idade,endereco) VALUES ('$nome','$cpf','$celular','$email','$rg','$idade','$endereco')";

$resultado_cliente = mysqli_query($ConexaoOBJ->con, $insere_cliente);


if(mysqli_affected_rows($ConexaoOBJ->con)){/*erro essa condição deu verdadeira sem a tabela cliente estar criada. */
    echo "<script>";
    echo "alert('Dados do cliente $nome foi inserido com sucesso na tabela...')";
	echo "</script> ";
	echo "<script>";
    echo     "window.location.href='../../index.php'";
    echo "</script> ";
    } else {
    echo "<script> alert('Erro ao cadastrar os dados na tabela..')";
  
	echo "</script> ";
	echo "<script>";
    echo     "window.location.href='../index.php'";
    echo "</script> ";
    
}    

mysqli_close($ConexaoOBJ->con);


