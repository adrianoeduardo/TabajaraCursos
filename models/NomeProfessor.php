<?php
$id=$_GET["id"];
require_once 'Banco.php';
$consulta = "SELECT professores.nome_professor
			FROM professores JOIN cursos ON professores.id_professor = cursos.professor 
			WHERE cursos.id_curso = ".$id;
$con = new Banco;
$dados = $con->criarJson($consulta);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($dados);

?>