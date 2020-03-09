<?php
require_once '../../classe/DAO/Conexao.Class.php';

function Exclui_Cliente($id){
$ConexaoOBJ= new Conexao;


$delete="DELETE FROM cliente WHERE id ='$id'";
$actionDB=mysqli_query($ConexaoOBJ->con,$delete);

if(mysqli_affected_rows($ConexaoOBJ->con)){
    echo "<script>";
    echo "alert('Dados excluidos com sucesso na tabela...')";
    echo "</script> ";
    echo "<script>";
    echo     "window.location.href='../paginas/listar_cliente.php'";
    echo "</script> ";
    } else {
    echo "<script> alert('Erro ao excluir o registro na tabela...')";
    echo "</script> ";
    echo "<script>";
    echo     "window.location.href='../paginas/listar_cliente.php'";
    echo "</script> ";
    }
}    
?>
