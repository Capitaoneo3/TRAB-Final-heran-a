<?php
require_once '../classe/DAO/Conexao.Class.php';


 function Edit_Cliente($id,$rg,$cpf,$celular,$idade,$nome,$endereco,$email){//necessario entrar com $id mesmo que não vá dar update. 


   $conexaoOBJ=new Conexao;
   $update = "UPDATE cliente SET nome='$nome',email='$email',celular='$celular',endereco='$endereco',idade='$idade',rg='$rg',cpf='$cpf' where id='$id'";
   $returnCON = mysqli_query($conexaoOBJ->con, $update);

   If (mysqli_affected_rows($conexaoOBJ->con)) {
    echo "Cliente [$nome] atualizado com sucesso";
 
 
    echo "<script>";
    echo "alert('Cliente [$nome] atualizado com sucesso')";
    echo"</script>";
    echo "<script>";
    echo "window.location.href='../../paginas/listar_cliente.php'";
    echo "</script> ";
 
    } else {
     echo "<script>";
     echo "alert('Cliente [$nome]não atualizado')";
     echo"</script>";
     echo "<script>";
     echo "window.location.href='../../paginas/listar_cliente.php'";
     echo "</script> ";
    
    // fecha a conexão
    mysqli_close($conexaoOBJ->con);
    }
 
 }
 function Exibe_Cliente(){
    $conexaoOBJ=new Conexao;
    $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $select = "SELECT * FROM cliente where id = '$id'";
    $returnCON= mysqli_query($conexaoOBJ->con, $select);
    $row_cliente = mysqli_fetch_assoc(($returnCON));
    
    return $row_cliente;

    var_dump($row_cliente);
    mysqli_close($conexaoOBJ->con);
 }
 
?><!--
If (mysqli_affected_rows($conexaoOBJ->con)) {
   echo "Cliente [$nome] atualizado com sucesso";


   echo "<script>";
   echo "alert('Cliente [$nome] atualizado com sucesso')";
   echo"</script>";
   echo "<script>";
   echo "window.location.href='../index.php'";
   echo "</script> ";

   } else {
    echo "<script>";
    echo "alert('Cliente [$nome]não atualizado')";
    echo"</script>";
    echo "<script>";
    echo "window.location.href='../index.php'";
    echo "</script> ";
   
   // fecha a conexão
   mysqli_close($conexaoOBJ->con);

 } -->