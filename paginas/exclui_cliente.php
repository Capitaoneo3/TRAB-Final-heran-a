<?php
require_once '../controle/ControleCLiente/Delete.Cliente.Controle.php';
$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
Exclui_Cliente($id);
?>