<?php
$id=$_GET["id"];
require_once 'Banco.php';
$consulta = "SELECT alunos.id, alunos.nome, alunos.telefone, alunos.profissao, 
				matriculas.matricula, matriculas.status_matricula
                FROM alunos 
				JOIN matriculas ON alunos.id = matriculas.codaluno
				JOIN cursos ON matriculas.codcurso = cursos.id_curso
				where cursos.id_curso = ".$id;
$con = new Banco;
$dados = $con->criarJson($consulta);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($dados);

?>