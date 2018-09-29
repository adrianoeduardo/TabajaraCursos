<?php


	require_once 'Banco.php';
	$consulta = "SELECT id_curso, nome_curso FROM cursos WHERE status_curso = 'Matrículas Abertas'";
	$con = new Banco;
	$dados = $con->criarJson($consulta);
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($dados);

?>