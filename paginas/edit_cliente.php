<?php
require_once '../controle/ControleCLiente/Edit.Cliente.Controle.php';
$dadoCliente = Exibe_Cliente();

	?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/pgInicial.css" />
<head>
<body>	

	<br />
	<br />


<form method="POST" action="../controle/post.Edit.Cliente.Controle.php">
	<div class="m">
		<input type="hidden" name="id" value="<?php echo  $dadoCliente['id'] ?>"><!--id oculto-->
	</div>
	</div>
	<div class="m">Nome

		<div>
			<input type="text" title="digite seu nome" name="nome" value="<?php echo  $dadoCliente['nome'] ?>">
		</div>
	</div>
	<div class="m">cpf
		<div>
			<input type="text" title="digite seu nome" name="cpf"  value="<?php echo  $dadoCliente['cpf'] ?>">
		</div>
	</div>
	<div class="m">rg
		<div>
			<input type="text" name="rg" value="<?php echo  $dadoCliente['rg'] ?>">
		</div>
	</div>
	<div class="m">celular
		<div>
			<input type="text" name="celular" value="<?php echo  $dadoCliente['celular'] ?>">
		</div>
	</div>
	<div class="m">email
		<div>
			<input type="text" name="email" value="<?php echo  $dadoCliente['email'] ?>">
		</div>
	</div>
	<div class="m">endereço
		<div>
			<input type="text" name="endereco" value="<?php echo  $dadoCliente['endereco'] ?>">
		</div>
	</div>
	<div class="m">idade
		<div>
			<input type="number" name="idade" value="<?php echo  $dadoCliente['idade'] ?>">
		</div>
	</div>

	<input type="submit" value="atualizar">
</form>	
</body>

