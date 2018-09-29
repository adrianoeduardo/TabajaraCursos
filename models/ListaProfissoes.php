<?php 
	require_once 'Banco.php';
	$consulta = "SELECT DISTINCT profissao FROM alunos ORDER BY profissao";
	$con = new Banco;
	$dados = $con->criarJson($consulta);
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($dados);
?>