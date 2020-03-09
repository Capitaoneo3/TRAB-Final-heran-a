<?php
require_once '../classe/DAO/Conexao.Class.php';
require_once '../classe/entidade/Cliente.class.php';
$conexao = new Conexao;

$sql = "SELECT * FROM cliente ";
$resultado_cliente = mysqli_query($conexao->con, $sql);
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/pgInicial.css" />
	<style>
		.par {
			background-color:#FFC0CB;
		}.impar {
			background-color: #aaaaFaaa;
		}
	</style>
</head>

<body>
	<pre>listagem de clientes <a href="../index.php">Voltar</a> </pre><br />
	<div style="display: block">

		<?php
		$cont=0;
		while ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
		?>
				
				<div >
				

				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">

					<div class="m">ID
						<?php echo  $row_cliente['id'] ?>
					</div>
				</div>
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">

					<div class="m">Nome
						<?php echo  $row_cliente['nome'] ?>
					</div>
				</div>
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">

					<div class="m">cpf
						<?php echo  $row_cliente['cpf'] ?>
					</div>
				</div>
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">

					<div class="m">celular
						<?php echo  $row_cliente['celular'] ?>
					</div>
				</div>

				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">
					<div class="m">Email
						<?php echo  $row_cliente['email'] ?>
					</div>
				</div>
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">
					<div class="m">Rg
						<?php echo  $row_cliente['rg'] ?>
					</div>
				</div class="m">
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">
					<div>Endereço
						<?php echo  $row_cliente['endereco'] ?>
					</div>
				</div class="m">
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">
					<div class="m">Idade
						<?php echo  $row_cliente['idade'] ?>
					</div>
				</div>
				
				<div class="<?php if ($cont % 2 == 0) echo "par";
				else echo "impar"; ?>" style="width: 100%;">
							
							opções:
							<a href="edit_cliente.php?id=<?php echo $row_cliente['id'] ?>" style="margin-right:20px;">editar</a>
							
							
							<a href="exclui_cliente.php?id=<?php echo $row_cliente['id'] ?>">excluir</a>
						
				</div>
			</div>

			<?php
			$cont++;
			}?>

	</div>
	<br />
	<?php
	$m = mysqli_close($conexao->con);
	//var_dump($m);
	?>
</body>

</html>