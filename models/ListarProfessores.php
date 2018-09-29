<?php
require_once 'Banco.php';
$con = new Banco;
$consulta = "SELECT * FROM professores";
$dados = $con->criarJson($consulta);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($dados);

?>