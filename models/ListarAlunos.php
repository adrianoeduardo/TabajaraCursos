<?php
require_once 'Banco.php';
$consulta = "SELECT * FROM alunos";
$con = new Banco;
$dados = $con->criarJson($consulta);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($dados);

?>